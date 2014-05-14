<?php
/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

class jboot
{
    public static function check_browser()
    {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        {
            if (Browserblocked("chrome"))
            {
                Error::Browserblocked();
            }
        }
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
        {
            if (Browserblocked("firefox"))
            {
                Error::Browserblocked();
            }
        }
    }
    public static function GetMasterFiles_css()
    {
        $scripts = null;
        $files = array(

        "css/bootstrap.css",
        "css/bootstrap.min.css"

        );

        foreach ($files as $file)
        {
            $scripts = $scripts . '<link rel="stylesheet" type="text/css" href="/'.$file.'" />';
        }
        return $scripts;
    }
    public static function GetMasterFiles_js()
    {
        $scripts = null;
        $files = array(

            "js/bootstrapjs",
            "js/bootstrap.min.js"

        );

        foreach ($files as $file)
        {
            $scripts = $scripts . '<script src="/'.$file.'" type="text/javascript"></script>';
        }
        return $scripts;
    }
    public static function WriteMasterFiles_css()
    {

    }
    public static function WriteMasterFiles_js()
    {

    }
    public static function check_ip()
    {
        get_ip_address();
    }
    public static function Browserblocked($browser)
    {
        if ($browser == "chrome")
        {
            if (browsers.block_chrome == true)
            {
                return true;
            }
            return false;
        }
        if ($browser == "firefox")
        {
            if (browsers.block_firefox == true)
            {
                return true;
            }
            return false;
        }
        return false;
    }
    public static function run()
    {
        //
    }
}
?>