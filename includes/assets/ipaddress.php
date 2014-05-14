<?php
/**
 * jBoot [Social Networking Script]
 *
 * @copyright		[JBOOT_COPYRIGHT]
 * @author			Ashley Smith
 * @package 		jBoot
 * @version 		$Id: index.php  Ashley_Smith $
 */

# This will return the real ip of a user
# Even if they are visiting from a proxy
# But beware non-web proxys may not be detected!

function get_ip_address()
{
    $asset_ip = null; //Optional
    if (!empty($_SERVER["HTTP_CLIENT_IP"]))
    {
        //check for ip from share internet
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        // Check for the Proxy User
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    else
    {
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    return $ip;
}
?>