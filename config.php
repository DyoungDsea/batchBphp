<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "2021batchb";

    $conn = new mysqli($host, $user, $pass, $dbname);



    function cleanInput($data){
        GLOBAL $conn;
        $data = trim($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = $conn->real_escape_string($data);
        return $data;
    }
    

    
    function postMethod($data){
        return $_POST[$data];
    }
    
    function formQuery($data){
        GLOBAL $conn;
        return $conn->query($data);
    }