<?php?><html>
<head>
<style>
    .inputwrap{
        padding-bottom:10px;
    }
</style>
</head>
<body>
    <div id="nav" style="background-color:grey;color:white">
    CONGRATULATIONS.  YOU ARE THE FIRST USER.    
    </div>
    <div id="body">
    <div style="text-align:  center">
    <h3>YOU ARE THE FIRST USER</h3>
    <h3>ENTER YOUR EMAIL ADDRESS AND BECOME THE SYSOP.</h3>
    <form action = "actions/create-sysop.php" method="POST">
    <input type="hidden" name="redirect" value="/">
    <div class='inputwrap'>Email Address: <input type="text" name = "email" /></div>
    <div class='inputwrap'>Password: <input type="text" name = "password" /></div>
    <div class="inputwrap"><button type="submit">submit</button>
    </div>

    </form>
    </div>
</body>
</html>