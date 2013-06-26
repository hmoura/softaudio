<?php
$user = $dao->Retrieve('User', $params[0]);
$dao->Delete($user);
header('location:'.WWWROOT.'/users');
?>
