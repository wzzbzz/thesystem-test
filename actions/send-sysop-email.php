<?php
require_once $_SERVER['DOCUMENT_ROOT']."functions.php";

$email = $_REQUEST['email'];
//validate email;  redirect if invalid;

// generate key
include $_SERVER['DOCUMENT_ROOT']."lib/nativex/nativex.php";

$nativex = new \lib\nativex\NativeX();
$nativex->setKey($email);
$key = $nativex->classic_encode("Bring me the head of john the baptist");

// email key;
// TODO - make test environment send emails.
mail($email,"Your System Key", $key);

?>
Email sent to <?= $email;?> 