<?php
include $_SERVER['DOCUMENT_ROOT']."functions.php";

$sys = new \thesystem\Users\UserSystem(SYSTEM_ROOT);
$user = $sys->createSysop($_REQUEST['email'],$_REQUEST['password']);

$sys->addUser($user->name());

header('Location: /');
