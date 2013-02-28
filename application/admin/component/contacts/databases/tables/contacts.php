<?php
/**
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Contacts
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Contacts Database Table Class
 *
 * @author      Isreal Canasa <http://nooku.assembla.com/profile/israelcanasa>
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Contacts   
 */

class ComContactsDatabaseTableContacts extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
        $config->append(array(
            'name' => 'contacts',
            'behaviors' => array(
            	'creatable', 'modifiable', 'orderable', 'lockable', 
                'sluggable' => array('columns' => array('name'))
            ),
             'filters' => array(
                'params'    => 'ini'
            )
        ));
        
		parent::_initialize($config);
	}
}