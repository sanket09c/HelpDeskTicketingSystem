<?php

require_once("config.php");
$_SESSION['login_username'] = null;
$_SESSION['login_pwd'] = null;
//Log the user out
//if (isUserLoggedIn()) {
//    destroySession("ThisUser");;
//}
header("Location:index.php");
die();