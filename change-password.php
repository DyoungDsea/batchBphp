<?php 

session_start();
if(@$_SESSION['loggedin']!=true){
    header("Location:login.php");
}

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

<?php include 'header.php'; ?>


<div class="container mb-5" style="width: 600px;">

    
    <form action="change-password-process.php" method="POST" class="mt-5">
        
    <?php echo isset($_SESSION['error']) ?  $_SESSION['error']: ''; ?>

        <div class="form-group">
            <input type="password" name="old" required placeholder="Current Password" class="form-control">
        </div>

        
        <div class="form-group">
            <input type="password" required name="pass" placeholder="Password" class="form-control">
        </div>

        <div class="form-group">
            <input type="password" required name="cpass" placeholder="Confirm Password" class="form-control">
        </div>

        
        <button type="submit" name="change" class="btn btn-primary btn-block">Change Password</button>
    </form>



</div>
    
<?php include 'footer.php'; unset($_SESSION['error']) ?>

</body>
</html>