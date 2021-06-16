<?php
    session_start();
    require 'config.php';

    $userid = $_SESSION['userid'];
    $email = $_SESSION['email'];

    if(isset($_POST['change'])){


        $old = md5(cleanInput(postMethod("old")));
        $pass = md5(cleanInput(postMethod("pass")));
        $cpass = md5(cleanInput(postMethod("cpass")));


        $sql = formQuery("SELECT * FROM dlogin WHERE dpass='$old' ");

        if($sql->num_rows>0){
            //
            formQuery("UPDATE dlogin SET dpass='$pass' WHERE userid='$userid' AND demail='$email'");
            $_SESSION['error'] = "<p class='text-success'>Password changed successfully!</p>";
        }else{
             //error message here
        $_SESSION['error'] = "<p class='text-danger'>Current password is not correct</p>";
    }
}
header("Location: change-password.php");