
<?php 
session_start(); 
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo $_SESSION['name']."<br>";
$_SESSION['name']="Stephen Adedeji E";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body id="<?php echo "dera"; ?>">

    <?php

            echo $_SESSION['name'];
    ?>
    
</body>
</html>
