<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Timble CVBA and Contributors. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git
 */

namespace Nooku\Component\Categories;

use Nooku\Framework;

/**
 * Categories Database Rowset
 *
 * @author      Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @package Nooku\Component\Categories
 */
class DatabaseRowsetCategories extends DatabaseRowsetNodes
{
    protected function _initialize(Framework\Config $config)
    {
        $config->append(array(
            'new'               => false,
            'identity_column'   => 'id'
        ));

        parent::_initialize($config);
    }
}