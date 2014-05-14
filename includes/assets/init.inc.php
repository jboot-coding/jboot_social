<?php
/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

require(JBOOT_DIR . 'includes' . JBOOT_DS . 'settings' . JBOOT_DS . 'settings.directorys.php');

// Assets
require(JBOOT_DIR_ASSETS . 'core.php');
require(JBOOT_DIR_ASSETS . 'global.php');

// Classes
require(JBOOT_DIR_CLASSES . 'class.mysql.php');
require(JBOOT_DIR_CLASSES . 'class.users.php');

// Settings
require(JBOOT_DIR_SETTINGS . 'settings.directorys.php');
require(JBOOT_DIR_SETTINGS . 'settings.browsers.php');
require(JBOOT_DIR_SETTINGS . 'settings.visitors.php');
require(JBOOT_DIR_SETTINGS . 'settings.facebook.php');
require(JBOOT_DIR_SETTINGS . 'settings.mysql.php');
require(JBOOT_DIR_SETTINGS . 'settings.twitter.php');
require(JBOOT_DIR_SETTINGS . 'settings.users.php');
require(JBOOT_DIR_SETTINGS . 'settings.website.php');
$config['browsers']['block_chrome'];
// Library
require(JBOOT_DIR_LIB_CORE_JBOOT . 'jboot.class.php');


?>
