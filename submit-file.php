<?php
include "functions.php";
global $sys;
$sys->handleUpload();
debug($_FILES);
diebug($_POST);
