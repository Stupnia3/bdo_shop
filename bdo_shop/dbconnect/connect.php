<?php

try {
    $dbconfig = require 'config.php';
    $dbh = new PDO('mysql:host=' . $dbconfig['host'] . ';dbname=' . $dbconfig['dbname'], $dbconfig['username'], $dbconfig['password']);
}
catch (PDOException $e)
{
    print "Error connect to database" . $e->getMessage() . "<br/>";
    die();
}