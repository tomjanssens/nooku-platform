<?php
/**
 * @version     $Id$
 * @category    Nooku
 * @package     Nooku_Server
 * @subpackage  Newsfeeds
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Newsfeeds Database Table Class
 *
 * @author      Babs G�sgens <http://nooku.assembla.com/profile/babsgosgens>
 * @category    Nooku
 * @package     Nooku_Server
 * @subpackage  Newsfeeds
 */

class ComNewsfeedsDatabaseTableNewsfeeds extends KDatabaseTableDefault
{
    public function _initialize(KConfig $config)
    {
         $config->append(array(
            'identity_column'    => 'id',
            'base'               => 'newsfeeds',
            'name'               => 'newsfeeds',
            'behaviors'          => array(
            	'lockable',
                'sluggable'  => array('columns' => array('name')),
        		'com://admin/categories.database.behavior.orderable' => array('parent_column' => 'catid'),),
            'column_map'         => array(
                'title'	    => 'name',
                'enabled'   => 'published',
                'locked_on' => 'checked_out_time',
                'locked_by' => 'checked_out',
                'slug'      => 'alias'
            ),
            'filters'            => array(
                'slug' => 'slug',
                'link' => 'url'
            )
        ));

        parent::_initialize($config);
    }
}