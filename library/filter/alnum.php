<?php
/**
 * Nooku Platform - http://www.nooku.org/platform
 *
 * @copyright	Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/nooku/nooku-platform for the canonical source repository
 */

namespace Nooku\Library;

/**
 * Alphanumeric Filter
 *
 * @author  Johan Janssens <http://github.com/johanjanssens>
 * @package Nooku\Library\Filter
 */
class FilterAlnum extends FilterAbstract implements FilterTraversable
{
	/**
	 * Validate a variable
	 *
	 * @param	scalar	$value Value to be validated
	 * @return	bool	True when the variable is valid
	 */
	public function validate($value)
	{
		$value = trim($value);
		return ctype_alnum($value);
	}

	/**
	 * Sanitize a variable
	 *
     * @param   scalar  $value Value to be sanitized
	 * @return	string
	 */
	public function sanitize($value)
	{
		$value = trim($value);

	    $pattern 	= '/[^\w]*/';
    	return preg_replace($pattern, '', $value);
	}
}