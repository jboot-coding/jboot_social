<?php

ini_set('memory_limit', '-1');

/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

/**
 * Directory Seperator
 *
 */
define('JBOOT_DS', DIRECTORY_SEPARATOR);

/**
 * Folder directory
 *
 */
define('JBOOT_DIR', dirname(__FILE__) . JBOOT_DS);

/**
 * Start time [Micro]
 *
 */
define('JBOOT_START_TIME', array_sum(explode(' ', microtime())));

// PHP5 Or above?
if (version_compare(phpversion(), '5', '<') === true)
{
    exit('jBoot 1 or higher requires php5 or above.');
}

ob_start();

require(JBOOT_DIR . 'includes' . JBOOT_DS . 'assets' .JBOOT_DS . 'init.inc.php');
jboot::run();

ob_end_flush();
?>
