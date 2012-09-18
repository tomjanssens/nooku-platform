<?php
/**
 * @version     $Id$
 * @package     Nooku_Server
 * @subpackage  Users
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Password database row class.
 *
 * @author     Arunas Mazeika <http://nooku.assembla.com/profile/arunasmazeika>
 * @package    Nooku_Server
 * @subpackage Users
 */
class ComUsersDatabaseRowPassword extends KDatabaseRowDefault
{
    public function save() {
        $user = $this->getService('com://admin/users.model.users')
            ->set('email', $this->email)
            ->getItem();

        // Check if referenced user actually exists.
        if ($user->isNew()) {
            $this->setStatus(KDatabase::STATUS_FAILED);
            $this->setStatusMessage(JText::sprintf('USER NOT FOUND', $this->email));
            return false;
        }

        if ($password = $this->password) {
            // Check the password length.
            $params = $this->getService('application.components')->users->params;
            $length = $params->get('password_length');
            if (strlen($password) < $length) {
                $this->setStatus(KDatabase::STATUS_FAILED);
                $this->setStatusMessage(JText::sprintf('PASSWORD TOO SHORT', $length));
                return false;
            }

            if (!$this->isNew()) {
                // Check if new and current hashes are the same.
                if ($this->verify($password)) {
                    $this->setStatus(KDatabase::STATUS_FAILED);
                    $this->setStatusMessage(JText::_('New and old passwords are the same'));
                    return false;
                }
            }

            // Reset expiration date.
            $this->resetExpiration(false);

            // Create hash.
            $this->hash = $this->getHash($password);

            // Unset plain text password for allowing subsequent save calls.
            unset($this->password);
        }

        return parent::save();
    }

    /**
     * Returns the encrypted password.
     *
     * @param  string  The plain text password.
     * @param  string  The salt to use to encrypt the password.
     *
     * @return string  The encrypted password.
     */
    public function getCrypted($password, $salt = '') {
        return md5($password . $salt);
    }

    /**
     * Generates a random password.
     *
     * @param int The length of the password.
     *
     * @return string The generated password.
     */
    public function getRandom($length = 8) {
        $bytes  = '';
        $return = '';

        if (function_exists('openssl_random_pseudo_bytes') && (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN')) {
            $bytes = openssl_random_pseudo_bytes($length + 1);
        }

        if ($bytes === '' && @is_readable('/dev/urandom') && ($handle = @fopen('/dev/urandom', 'rb')) !== false) {
            $bytes = fread($handle, $length + 1);
            fclose($handle);
        }

        if (strlen($bytes) < $length + 1) {
            $bytes        = '';
            $random_state = microtime();

            if (function_exists('getmypid')) {
                $random_state .= getmypid();
            }

            for ($i = 0; $i < $length + 1; $i += 16) {
                $random_state = md5(microtime() . $random_state);
                $bytes .= md5($random_state, true);
            }

            $bytes = substr($bytes, 0, $length + 1);
        }

        $salt  = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shift = ord($bytes[0]);

        for ($i = 1; $i <= $length; ++$i) {
            $return .= $salt[($shift + ord($bytes[$i])) % strlen($salt)];
            $shift += ord($bytes[$i]);
        }

        return $return;
    }

    /**
     * Salt getter.
     *
     * @param string An optional hash containing the salt.
     *
     * @return string The password salt, null if no hash is found.
     */
    public function getSalt($hash = null) {
        $result = null;

        if (is_null($hash)) {
            $hash = $this->hash;
        }

        if ($hash) {
            $result = substr(strrchr($hash, ':'), 1);
        }

        return $result;
    }

    /**
     * Hash getter.
     *
     * @param string The password.
     * @param string The salt.
     *
     * @return string The hash.
     */
    public function getHash($password, $salt = null) {
        if (is_null($salt)) {
            $salt = $this->getRandom(32);
        }
        return $this->getCrypted($password, $salt) . ':' . $salt;
    }

    /**
     * Tests the current hash against a provided password.
     *
     * @param string $password The password to test.
     *
     * @return bool True if password matches the current hash, false otherwise.
     */
    public function verify($password) {
        $result = false;

        if ($salt = $this->getSalt()) {
            if ($this->getHash($password, $salt) == $this->hash) {
                $result = true;
            }
        }
        return $result;
    }

    public function toArray() {

        $password = parent::toArray();

        unset($password['hash']);

        return $password;
    }
}