<?php
/**
 * @package     Koowa_Http
 * @subpackage  Exception
 * @copyright   Copyright (C) 2007 - 2012 Johan Janssens. All rights reserved.
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

namespace Nooku\Library;

/**
 * Http Exception Forbidden Class
 *
 * The requested resource could not be found.
 *
 * @author      Johan Janssens <johan@nooku.org>
 * @package     Koowa_Http
 * @subpackage  Exception
 */
class HttpExceptionNotFound extends HttpExceptionAbstract
{
    protected $code = HttpResponse::NOT_FOUND;
}