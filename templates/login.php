<?php

?><html>
<head>
</head>
<body>
    <div id="nav" style="background-color:grey;color:white">
    <?php if($usys->currentUser()):?>
    Logged in:  <?php echo $usys->currentUser()->name();?>
    <?php else: ?>
    No One Logged In.
    <?php endif;?>
    </div>
    <div id="body">
    <form action = "actions/login-user.php" method="POST">
    <input type="hidden" name="redirect" value="/">
    <input type="text" name = "username" />
    </form>
    </div>
</body>
</html>