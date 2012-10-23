<?php
/**
 * @version     $Id$
 * @package     Nooku_Server
 * @subpackage  Settings
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Editable Controller Behavior
 *
 * @author      Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @package     Nooku_Server
 * @subpackage  Settings
 */
class ComExtensionsControllerBehaviorEditable extends KControllerBehaviorEditable
{  
    public function __construct(KConfig $config)
    { 
        parent::__construct($config);
        
        $this->registerCallback('before.browse' , array($this, 'setReferrer'));
    }
    
	protected function _actionSave(KCommandContext $context)
	{
		$data = $context->getSubject()->execute('edit', $context);
	    
		$context->response->setRedirect($this->getReferrer($context));
		return $data;
	}
    
	protected function _actionCancel(KCommandContext $context)
	{
        $context->response->setRedirect($this->getReferrer($context));
		return;
	}

	protected function _actionApply(KCommandContext $context)
	{
		$data = $context->getSubject()->execute('edit', $context);

        $context->response->setRedirect(clone KRequest::url());
		return $data;
	}
}