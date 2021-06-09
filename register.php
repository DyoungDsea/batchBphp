<?php 

session_start();

// echo md5("admin");
require 'config.php';

if(isset($_POST['register'])){
    require 'register-process.php';
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
    <!-- &#8358; -->
    <form action="register.php" method="post" class="mt-5">
        <div class="form-group">
            <input type="text" name="fname" placeholder="Firstname" class="form-control">
            <span class="text-danger"> <?php if(isset($errFname)) echo $errFname; ?> </span>
        </div>

        <div class="form-group">
            <input type="text" name="lname" placeholder="Lastname" class="form-control">
            <span class="text-danger"> <?php if(isset($errLname)) echo $errLname; ?> </span>
        </div>

        <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control">
            <span class="text-danger"> <?php if(isset($errusername)) echo $errusername; ?> </span>
        </div>

        <div class="form-group">
            <input type="text" name="phone" placeholder="Phone No" class="form-control">
            <span class="text-danger"> <?php if(isset($errphone)) echo $errphone; ?> </span>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control">
            <span class="text-danger"> <?php if(isset($erremail)) echo $erremail; ?> </span>
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                <select name="day" id="" class="form-control">
                <option value="">Day</option> 
                <?php for($i=1; $i<=31; $i++){
                    if(strlen($i)==1){  $i= '0'.$i; }
                    ?>
                <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
                <?php } ?>

                </select>
            </div>

            <div class="col-md-4">
                <select name="month" id="" class="form-control">
                <option value="">Month</option>  
                <option value="Jan">Jan</option>          
                <option value="Feb">Feb</option>          
                <option value="Mar">Mar</option>          
                <option value="Apr">Apr</option>          
                <option value="May">May</option>          
                <option value="Jun">Jun</option>          
                <option value="Jul">Jul</option>          
                <option value="Aug">Aug</option>          
                <option value="Sep">Sep</option>          
                <option value="Oct">Oct</option>          
                <option value="Nov">Nov</option>          
                <option value="Dec">Dec</option>          
                </select>
            </div>

            <div class="col-md-4">
                <select name="year" id="" class="form-control">
                <option value="">Year</option>  
                <?php for($i=2021; $i>=1970; $i--){ ?>
                <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
                <?php } ?>          
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" checked type="radio" name="gender" id="inlineRadio1" value="Male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
        </div>

        <div class="form-group">
            <textarea name="address" id="" cols="30" placeholder="Address" class="form-control"></textarea>
            <span class="text-danger"> <?php if(isset($erraddress)) echo $erraddress; ?> </span>
        </div>

        <div class="form-group">
            <input type="password" name="pass" placeholder="Password" class="form-control">
            <span class="text-danger"> <?php if(isset($errpass)) echo $errpass; ?> </span>
        </div>

        <div class="form-group">
            <input type="password" name="cpass" placeholder="Confirm Password" class="form-control">
            <span class="text-danger"> <?php if(isset($errcpass)) echo $errcpass; ?> </span>
        </div>

        <button type="submit" name="register" class="btn btn-primary btn-block">Save Form</button>
    </form>

    
</div>

<?php include 'footer.php'; ?>

    
</body>
</html>