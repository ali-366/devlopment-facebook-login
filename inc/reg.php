<?php



$conn = mysqli_connect('localhost','root','','devlopment');

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
                $rePass = md5($_POST["rePass"]);


                $_POST["day"];
                $_POST["month"];
                $_POST["year"];

$birthday = $_POST["day"].'/'.$_POST["month"].'/'.$_POST["year"];

$pname = $_FILES["ppp"]["name"];
                $ptmp_name = $_FILES["ppp"]["tmp_name"];



    move_uploaded_file($ptmp_name,'../profile/'.$pname);



    
 

  $gender =  $_POST["same"];


  $email_check = mysqli_query($conn ,"SELECT * FROM u_info WHERE Email  = '$email'");


 $emaill_num = mysqli_num_rows($email_check );



if($fname && $lname && $email && $password && $birthday &&$pname && $gender ){

   if($password == $rePass){

        if($emaill_num >= 1){
    
            header('location:../index.php?ruselt=email_is_alreay_used');
        }else{
            mysqli_query($conn ,"INSERT INTO u_info(First_Name,Last_Name,email,Pass_word , 	Birth_day,Pro_picture,Gender) VALUES('$fname','$lname','$email','$password','$birthday','$pname','$gender')");

            header('location:../index.php?ruselt=ok');
        }

   }else{
    
       header('location:../index.php?ruselt=Password_not_mach');
   }

}else{
    
    header('location:../index.php?ruselt=input_blank');
}



//   mysqli_query($conn ,"INSERT INTO u_info(First_Name,Last_Name,email,Pass_word, 	Birth_day,Pro_picture,Gender) VALUES('$fname','$lname','$email','$password','$birthday','$pname','$gender')");

?>