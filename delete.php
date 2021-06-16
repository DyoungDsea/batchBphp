<?php
session_start();

require 'config.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $id =  cleanInput($_GET['id']);

    formQuery("DELETE FROM dlogin WHERE userid='$id'");

    header('Location:admin.php');

}