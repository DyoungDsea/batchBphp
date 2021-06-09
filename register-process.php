<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){


    //validate firstname
    if(empty($_POST['fname'])){
        $errFname = "Firstname is required!";
    }else{
        $fname = cleanInput($_POST['fname']);
    }

    if(empty($_POST['lname'])){
        $errLname = "Lastname is required!";
    }else{
        $lname = cleanInput($_POST['lname']);
    }

    if(empty($_POST['username'])){
        $errusername = "Username is required!";
    }elseif (strlen($_POST['username']) < 3) {
        $errusername = "Username is too short!";
    }elseif (strlen($_POST['username']) > 12) {
        $errusername = "Username is too long!";
    }else{

        $username = $_POST['username']; 
        $exp = explode(" ", $username);
        $username = $exp[0].$exp[1];
    }

    if(empty($_POST['phone'])){
        $errphone = "Phone is required!";
    }elseif (!is_numeric($_POST['phone']) ) {
        $errphone = "Please enter only number";
    }else{
        $phone = cleanInput($_POST['phone']);
    }

    if(empty($_POST['email'])){
        $erremail = "Email is required!";
    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        $erremail = "Enter valid email!";
    }else{
        $email = cleanInput($_POST['email']);
    }

    $dob = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];

    $gender = $_POST['gender'];


    if(empty($_POST['address'])){
        $erraddress = "Address is required!";
    }else{
        $address = cleanInput($_POST['address']);
    }


    if(empty($_POST['pass'])){
        $errpass = "Password is required!";
    }elseif (strlen($_POST['pass']) < 3) {
        $errpass = "Password is too short!";
    }else{
        $pass = cleanInput($_POST['pass']);
    }


    if(empty($_POST['cpass'])){
        $errcpass = "Confirm Password is required!";
    }else{
        $cpass = $_POST['cpass'];
        if(empty($errpass) && ($pass != $cpass)){
            $errcpass = "Password doesn't match!";            
        }
    }


    if( empty($errFname) && empty($errLname) && 
        empty($errusername) && empty($errphone) &&
        empty($erremail) && empty($erraddress) &&
        empty($errpass) && empty($errcpass)
        ){
            $pass = md5($pass);
            // $pass = password_hash($pass, PASSWORD_BCRYPT);
            // password_verify()
            //run your query here
        }



}


function cleanInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    // $date = $conn->real_escape_string($data);
    return $data;
}