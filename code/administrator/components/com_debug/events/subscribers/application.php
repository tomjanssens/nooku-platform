<?php
/**
 * @version     $Id: default.php 2776 2011-01-01 17:08:00Z johanjanssens $
 * @package     Nooku_Plugins
 * @subpackage  Koowa
 * @copyright  	Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Application Event Subscriber Class
.*
 * @author		Johan Janssens <johan@nooku.org>
 * @package     Nooku_Components
 * @subpackage  Debug
 */

class ComDebugEventSubscriberApplication extends KEventSubscriberAbstract
{
    public function __construct(KConfig $config)
	{
	    //Intercept the events for profiling
	    if(JFactory::getApplication()->getCfg('debug'))
	    {
	        //Replace the event dispatcher
	        KService::setAlias('koowa:event.dispatcher', 'com://admin/debug.event.profiler');
	          
	        //Add the database tracer
	        KService::get('koowa:database.adapter.mysqli')->addEventSubscriber('com://admin/debug.event.subscriber.database');
		}
		
		parent::__construct($config);
	}
}