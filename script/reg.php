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
    echo "Пароли не совпадают";
}else{
    if ($num > 0){
        echo "Пользователь с таким адресом зарегистрирован";
    }else{
        $query = "INSERT INTO user(email, password) VALUES ('$email','$confirm_password')";
        mysqli_query($dbc, $query);
//        $query = "SELECT * FROM user WHERE email = '$email'";
//        $data = mysqli_query($dbc, $query);
//        $array = mysqli_fetch_array($data);
//        $id_user = $array['id'];
        setcookie('auth',time() + 3600*24*7, time() + (60*60*24*30),'/');
        header('Location:../index.php');
    }
}
