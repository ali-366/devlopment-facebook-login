<?php

$conn = mysqli_connect('localhost','root','','devlopment');


    $uemail = $_POST['u_email'];
    $upass = md5($_POST['u_password']);

     $user_login = mysqli_query($conn ,"SELECT * FROM u_info WHERE Email  = '$uemail' AND Pass_word = '$upass'");

    $user_num = mysqli_num_rows($user_login);
    if($user_num == 1){
        header('location:../home/admin.php');
    }else{
        header('location:../index.php');
    }


?>