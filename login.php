<?php 

session_start();

$_SESSION['userid'] = "123456";
$_SESSION['name'] = "Young Elefiku";
$_SESSION['phone'] = "12345678909";
$_SESSION['email'] = "youngelefiku23@gmail.com";

// echo $_SESSION['name']."<br>";

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
    <form action="form.php" method="GET" class="mt-5">
        

        <div class="form-group">
            <input type="text" name="user" placeholder="Username OR Email" class="form-control">
        </div>

        
        <div class="form-group">
            <input type="password" name="pass" placeholder="Password" class="form-control">
        </div>

        
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>



</div>
    
<?php include 'footer.ph'; ?>

</body>
</html>