<?php
/**
 * Nooku Platform - http://www.nooku.org/platform
 *
 * @copyright   Copyright (C) 2007 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-platform for the canonical source repository
 */

namespace Nooku\Library;

 /**
  * Template Engine Interface
  *
  * @author  Johan Janssens <http://github.com/johanjanssens>
  * @package Nooku\Library\Template\Compiler\Interface
  */
interface TemplateEngineInterface extends TemplateInterface
{
    /**
     * Get the engine supported file types
     *
     * @return array
     */
    public static function getFileTypes();
}
