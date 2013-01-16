<?php
/**
 * @version     $Id$
 * @package     Nooku_Server
 * @subpackage  Pages
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Module Controller Class
 *
 * @author      Stian Didriksen <http://nooku.assembla.com/profile/stiandidriksen>
 * @package     Nooku_Server
 * @subpackage  Pages
 */

class ComPagesControllerModule extends ComDefaultControllerModel
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->registerCallback('after.edit', array($this, 'purgeCache'));
	}
	
	public function purgeCache(KCommandContext $context)
	{
		$cache = JFactory::getCache();
		
		$result = $context->result instanceof KDatabaseRowInterface ? array($context->result) : $context->result;
		foreach($result as $row)
		{
			// Clean cache for all 3 front-end user groups (guest, reg, special)
			$cache->remove($row->id . '0', $row->module);
			$cache->remove($row->id . '1', $row->module);
			$cache->remove($row->id . '2', $row->module);
		}
	}
}