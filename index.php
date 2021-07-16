<?php


# load some functions, register the autoloader.
include "functions.php";

global $sys;


?>
<html>
<head>
</head>
<body>
    <div id="nav" style="background-color:grey;color:white">
    <?php if($sys->currentUser()):?>
    Logged in:  <?php echo $sys->currentUser()->name();?>
    <?php else: ?>
    No One Logged In.
    <?php endif;?>
    </div>
    <div id="body">
    <form action = "submit-file.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="redirect" value="/">
    <input type="file" name = "file" />
    <button type="submit">submit</button>
    </form>
    </div>
</body>
</html>
<?

die;

