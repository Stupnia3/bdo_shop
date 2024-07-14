<?php

require_once '../dbconnect/connect.php';

$sth = $dbh->prepare("SELECT * FROM `users`");
$sth->execute();
$users = $sth->fetch(PDO::FETCH_ASSOC);

foreach ($users as $user)
{
    if ($user[1] === $_POST['login']){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        $sth = null;
        $dbh = null;
        die();
    }
}

var_dump($users);

$_POST['login'];