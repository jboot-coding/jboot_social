<?php
/**
 * [jBoot 2014]
 *
 * @copyright		jBoot : social networking script
 * @author			Ashley Smith
 * @package 		jBoot::Social
 * @version 		$index.php 1.0.0
 */

# This class was coded by the jBoot creator for a shortcut way of sending emails [Functions]

class jboot_mail
{
    public static function SendEmail($type, $to, $subject, $content)
    {
        switch ($type)
        {
            case "normal":
            break;
            case "welcome_email":
            break;
            case "welcome_email_confirmation":
            break;
            case "password_reminder";
            break;
        }
    }
}
?>