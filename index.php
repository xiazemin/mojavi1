<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

// include configuration
require_once('');

$controller =& new Controller;

// create error handler
// use your own custom error handler here
$errorHandler = array(&$controller, 'handleError');

// ----- DO NOT MODIFY ANYTHING BELOW THIS LINE -----

// turn error reporting on
error_reporting(E_ALL);

// set error handler
set_error_handler($errorHandler);

// dispatch request
$controller->dispatch();

?>
