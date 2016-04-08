<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

// ----- FILE-SYSTEM DIRECTORIES -----

define('BASE_DIR',   '');
define('MOJAVI_DIR', '');

// ----- WEB DIRECTORIES -----

define('WEB_MODULE_DIR', '/modpub/');

// ----- MODULES AND ACTIONS -----

define('DEFAULT_MODULE', 'Default');
define('DEFAULT_ACTION', 'DefaultIndex');

define('ERROR_404_MODULE', 'Default');
define('ERROR_404_ACTION', 'PageNotFound');

define('AUTH_MODULE', 'Default');
define('AUTH_ACTION', 'Login');

define('SECURE_MODULE', 'Default');
define('SECURE_ACTION', 'GlobalSecure');

// ----- MISC. SETTINGS -----

define('URL_FORMAT',   1);    // 1 == GET_FORMAT, 2 == PATH_FORMAT
define('USE_SESSIONS', TRUE);

// ----- DO NOT MODIFY ANYTHING BELOW THIS LINE -----

require_once(MOJAVI_DIR . 'Action.class.php');
require_once(MOJAVI_DIR . 'ExecutionChain.class.php');
require_once(MOJAVI_DIR . 'Filter.class.php');
require_once(MOJAVI_DIR . 'FilterChain.class.php');
require_once(MOJAVI_DIR . 'FilterList.class.php');
require_once(MOJAVI_DIR . 'Request.class.php');
require_once(MOJAVI_DIR . 'Renderer.class.php');
require_once(MOJAVI_DIR . 'User.class.php');
require_once(MOJAVI_DIR . 'ValidatorManager.class.php');
require_once(MOJAVI_DIR . 'Validator.class.php');
require_once(MOJAVI_DIR . 'View.class.php');
require_once(MOJAVI_DIR . 'Controller.class.php');
require_once(MOJAVI_DIR . 'standard_filters/ExecutionFilter.class.php');

?>
