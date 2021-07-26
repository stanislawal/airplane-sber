<?php
unset($_COOKIE['auth_user']);
setcookie('auth_user', '', -1, '/');
header('Location: ../../index.php');

unset($_COOKIE['auth_manager']);
setcookie('auth_manager', '', -1, '/');
header('Location: ../../index.php');

unset($_COOKIE['auth_admin']);
setcookie('auth_admin', '', -1, '/');
header('Location: ../../index.php');
