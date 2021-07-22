<?php
$email = $_POST['email'];
$confirm_email = $_POST['confirm-email'];
$password = $_POST['password'];

include('db.php');

$query = "SELECT * FROM user WHERE email = '$email'";
$data = mysqli_query($dbc, $query);
$num = mysqli_num_rows($data);
$array = mysqli_fetch_array($data);
$array_email = $array['email'];
$array_password = $array['password'];
if ($email != $confirm_email) {
    header('Location:../index.php?email=non-confirm');
} else {
    if ($num < 0 || $password != $array_password) {
        header('Location:../index.php?user=user-isset');
    } else {
        setcookie('auth', time() + 3600 * 24 * 7, time() + (60 * 60 * 24 * 30), '/');
        header('Location:../index.php?user=user-auth-success');
    }
}
