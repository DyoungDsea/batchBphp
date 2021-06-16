<?php
session_start();

require_once 'config.php';

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

    
?>


<div class="container my-5" style="width: 600px;">
    <?php
    $sql = formQuery("SELECT * FROM dlogin ORDER BY id DESC");
    if($sql->num_rows>0){ $num = 1;
        while($row=$sql->fetch_assoc()){
            
    ?>
    <div class="card mb-3">
    <div class="card-header">Welcome <?php echo $row['dusername']; ?></div>
        <div class="card-body">
            Number: <?php echo $num++; ?><br>
            Firstname: <?php echo $row['fname']; ?><br>
            Lastname: <?php echo $row['lname']; ?><br>
            Email: <?php echo $row['demail']; ?><br>
            DOB: <?php echo $row['ddob']; ?><br>
            Date: <?php echo $row['ddate']; ?><br>
            Status: <?php echo $row['dstatus']; ?><br>
            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['userid'] ?>">Delete</a>
        </div>
    </div>

    <?php } } ?>


</div>
    
<?php include 'footer.php'; ?>

</body>
</html>

