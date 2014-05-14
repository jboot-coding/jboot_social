<?php
/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

class api
{
    /**
     * Error message.
     *
     * @var string
     */
    private $_sError = '';

    public static function GetMessage()
    {
        $message = file_get_contents("api.jboot.com?asset=getmessage");
        if (empty($message) || !RegisteredMessage($message)) { return; }
    }
    public static function GetInfo($info)
    {
        switch ($info)
        {
            case "phpinfo":
            break;
            case "version":
            $v = "1.0.0"; //Self VERSION
            break;
        }
    }
}
?>