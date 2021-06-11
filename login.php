<?php 

session_start();
if(isset($_SESSION['loggedin'])){
    header("location:profile.php");
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
    <form action="login-process.php" method="POST" class="mt-5">
        

        <div class="form-group">
            <input type="text" name="user" required placeholder="Username OR Email" class="form-control">
        </div>

        
        <div class="form-group">
            <input type="password" required name="pass" placeholder="Password" class="form-control">
        </div>

        
        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
    </form>



</div>
    
<?php include 'footer.php'; ?>

</body>
</html>