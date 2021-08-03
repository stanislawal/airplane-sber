<?php
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

include('db.php');

//поиск похожих пользователей по $email
$query = "SELECT * FROM user WHERE email = '$email'";
$data = mysqli_query($dbc, $query);
$num=mysqli_num_rows($data);
$array = mysqli_fetch_array($data);
$array_email = $array['email'];


if($password != $confirm_password){
    header('Location:../index.php?password=non-confirm');
}else{
    if ($num > 0){
        header('Location:../index.php?user=user-register');
    }else{
//        $query = "SELECT * FROM user WHERE email = '$email'";
//        $data = mysqli_query($dbc, $query);
//        $array = mysqli_fetch_array($data);
//        $id_user = $array['id'];
        $indentify = time() + 3600*24*7;
        setcookie('auth_user',$indentify, time() + (60*60*24*30),'/');
        $query = "INSERT INTO user(unique_user,email, password, role) VALUES ('$indentify','$email','$confirm_password', 'user')";
        mysqli_query($dbc, $query);
        header('Location:../index.php?user=user-register-success');
    }
}
