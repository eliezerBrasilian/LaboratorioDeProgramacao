<?php 
require('../models/User.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['opcao'] == 'cadastro') {
    $name = isset($_POST['nome'])?$_POST['nome'] :  null ;
    $email = isset($_POST['email'])?$_POST['email'] :  null ;
    $password = isset($_POST['password'])?$_POST['password'] :  null ;

    $user = new User($name, $email, $password);
    $user->cadastraUser($name, $email, $password);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['opcao'] == 'login') {
    $email = isset($_POST['email'])?$_POST['email'] :  null ;
    $password = isset($_POST['password'])?$_POST['password'] :  null ;

     $user = new User('', $email, $password);
     $user->fazLogin($email, $password);
}
?>