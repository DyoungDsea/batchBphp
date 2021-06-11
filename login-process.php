<?php
session_start();
require_once 'config.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name = cleanInput(postMethod("user"));
    $pass = md5(cleanInput(postMethod("pass")));

    //runquery here...
    $sql = formQuery("SELECT * FROM dlogin WHERE demail='$name' AND dpass='$pass' OR dusername='$name' AND dpass='$pass' ");

    if($sql->num_rows>0){
        $row = $sql->fetch_assoc();

        if($row['dstatus']=='pending'){
            echo "Please activate you account";
        }else{
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$row['demail'];
            $_SESSION['userid']=$row['userid'];
            header("Location:profile.php");

        }
        

    }else{
        //error message here
        $_SESSION['error'] = "<p class='text-danger'>Invalid details provided</p>";
        header("Location: login.php");
    }


}