<?php
require './database.php';
$con = new mysqli($host, $user, $password,$db_name);
$query = $con->query("SELECT * FROM produtos_tb");
?>