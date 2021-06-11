<?php
session_start();
if(@$_SESSION['loggedin']!=true){
    header("Location:login.php");
}
require_once 'config.php';

$email = $_SESSION['email'];
$userid =$_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>

<?php include 'header.php';

    $sql = formQuery("SELECT * FROM dlogin WHERE demail='$email' AND userid='$userid'");
    if($sql->num_rows>0){
        $row=$sql->fetch_assoc();
    }
?>


<div class="container my-5" style="width: 600px;">
    
    <div class="card">
    <div class="card-header">Welcome <?php echo $row['dusername']; ?></div>
        <div class="card-body">
            Firstname: <?php echo $row['fname']; ?><br>
            Lastname: <?php echo $row['lname']; ?><br>
            Email: <?php echo $row['demail']; ?><br>
            DOB: <?php echo $row['ddob']; ?><br>
            Date: <?php echo $row['ddate']; ?><br>
            Status: <?php echo $row['dstatus']; ?><br>
        </div>
    </div>


</div>
    
<?php include 'footer.php'; ?>

</body>
</html>