<?php
/**
 * @version     $Id$
 * @package     Nooku_Server
 * @subpackage  Pages
 * @copyright   Copyright (C) 2011 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * URL Page Database Row Class
 *
 * @author      Gergo Erdosi <http://nooku.assembla.com/profile/gergoerdosi>
 * @package     Nooku_Server
 * @subpackage  Pages
 */
class ComPagesDatabaseRowPageUrl extends ComPagesDatabaseRowPageAbstract
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'properties' => array('type_description', 'type_title')
        ));

        parent::_initialize($config);
    }

    public function __get($name)
    {
        if($this->hasProperty($name))
        {
            switch($name)
            {
                case 'type_description':
                {
                    $description = JText::_('External Link');

                    $this->type_description = $description;
                    $result = $description;
                } break;

                case 'type_title':
                {
                    $title = JText::_('External Link');

                    $this->type_title = $title;
                    $result = $title;
                } break;
            }
        }
        else $result = parent::__get($name);

        return $result;
    }
}