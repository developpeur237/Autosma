<?php
$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
$db=new PDO('mysql:host=localhost; dbname=autosma', 'root','', $pdo_options);
$db->exec("SET NAMES 'utf8'");
?>
