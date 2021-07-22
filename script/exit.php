<?php
unset($_COOKIE['auth']);
setcookie('auth', '', -1, '/');
header('Location: ../../index.php');
