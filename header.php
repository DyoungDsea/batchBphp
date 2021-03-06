<div class="container mt-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">DyseaTech</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <?php if(@$_SESSION['loggedin']!=true){?>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php }else{?>

        <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="change-password.php">Change Password</a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
</div>