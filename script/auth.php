<?php
$email = $_POST['email'];
$confirm_email = $_POST['confirm-email'];
$password = $_POST['password'];

include('db.php');

$query = "SELECT * FROM user WHERE email = '$email'";
$data = mysqli_query($dbc, $query);
$num = mysqli_num_rows($data);
$array = mysqli_fetch_array($data);
$identify = $array['unique_user'];
$array_email = $array['email'];
$array_password = $array['password'];
$array_role = $array['role'];
if ($email != $confirm_email) {
    header('Location:../index.php?email=non-confirm');
} else {
    if ($num < 0 || $password != $array_password) {
        $query = "SELECT * FROM user WHERE mail = '$email'";
        header('Location:../index.php?user=user-isset');
    } else {
        if($array_role == 'user')  {
            setcookie('auth_user', $identify, time() + (60 * 60 * 24 * 30), '/');
            header('Location:../index.php?user=user-auth-success');
        }else{
            if($array_role == 'admin')  {
                setcookie('auth_admin', $identify, time() + (60 * 60 * 24 * 30), '/');
                header('Location:../index.php?user=user-auth-success');
            }else{
                if($array_role == 'manager')  {
                    setcookie('auth_manager', $identify, time() + (60 * 60 * 24 * 30), '/');
                    header('Location:../index.php?user=user-auth-success');
                }
            }
        }

    }
}

