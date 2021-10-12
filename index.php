<?php

# load some functions, register the autoloader.
include "functions.php";
$usys = new \thesystem\Users\UserSystem();
$usys->routeRequest();
die;


die;
if(empty($usys->usersList())):
    include "templates/adminsetup.php";

else:
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

    <div class="container-fluid">
        <!-- Links -->
        <ul class="navbar-nav">
            <?php if($usys->currentUser()):?>
            <li class="nav-item">
                Logged in:  <?php echo $usys->currentUser()->name();?>
            </li>
            <?php else:?>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup.php">Sign Up</a>
                </li>
            <?php endif;?>
            
        </ul>
  </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!--</html>

    <div id="body">
    <form action = "submit-file.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="redirect" value="/">
    <input type="file" name = "file" />
    <button type="submit">submit</button>
    </form>
    </div>
</body>
</html>-->
<?php 
endif;
