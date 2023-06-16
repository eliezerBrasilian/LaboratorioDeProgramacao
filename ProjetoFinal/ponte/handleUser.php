<?php 
require('../models/User.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['nome'])?$_POST['nome'] :  null ;
    $email = isset($_POST['email'])?$_POST['email'] :  null ;
    $password = isset($_POST['password'])?$_POST['password'] :  null ;

    $user = new User($name, $email, $password);
    $n = $user->cadastraUser();
}
?>