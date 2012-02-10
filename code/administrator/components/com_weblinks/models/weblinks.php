<?php
/**
 * @version		$Id$
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Weblinks
 * @copyright	Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.nooku.org
 */

/**
 * Weblink Model Class
 *
 * @author    	Jeremy Wilken <http://nooku.assembla.com/profile/gnomeontherun>
 * @category 	Nooku
 * @package     Nooku_Server
 * @subpackage  Weblinks
 */
class ComWeblinksModelWeblinks extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
		    ->insert('category' , 'int')
		    ->insert('published', 'boolean');
	}
	
	protected function _buildQueryColumns(KDatabaseQuery $query)
	{
		parent::_buildQueryColumns($query);

		$query->select('categories.title AS category')
			  ->select('users.name AS editor');
	}

	protected function _buildQueryJoins(KDatabaseQuery $query)
	{
		parent::_buildQueryJoins($query);

		$query->join('LEFT', 'categories AS categories', 'categories.id = tbl.catid')
			  ->join('LEFT', 'users AS users', 'users.id = tbl.checked_out');
	}
	
    protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if($state->search) {
			$query->where('tbl.title', 'LIKE',  '%'.$state->search.'%');
		}

		if($state->scope) {
			$query->where('tbl.scope', 'LIKE',  $state->scope);
		}
		
		if(is_bool($state->published)) {
			$query->where('tbl.published', '=', (int) $state->published);
		}
		
	    if($state->category) {
			$query->where('tbl.catid', '=', $this->_state->category);
		}
	      
		parent::_buildQueryWhere($query);
	}
}