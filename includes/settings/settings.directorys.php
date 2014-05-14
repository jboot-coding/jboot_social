<?php
/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

if (defined("JBOOT_DIR_LIB"))
{
    return;
}

// Directory
define('JBOOT_DIR_INCLUDES', JBOOT_DIR . 'includes' . JBOOT_DS);

define('JBOOT_DIR_SETTINGS', JBOOT_DIR_INCLUDES . 'settings' . JBOOT_DS);

define('JBOOT_DIR_ASSETS', JBOOT_DIR_INCLUDES . 'assets' . JBOOT_DS);

define('JBOOT_DIR_CLASSES', JBOOT_DIR_INCLUDES . 'classes' . JBOOT_DS);

define('JBOOT_DIR_LIB', JBOOT_DIR_INCLUDES . 'library' . JBOOT_DS);

define('JBOOT_DIR_LIB_CORE', JBOOT_DIR_LIB . 'jboot' . JBOOT_DS);

define('JBOOT_DIR_LIB_CORE_JBOOT', JBOOT_DIR_LIB_CORE. 'jboot' . JBOOT_DS);

?>