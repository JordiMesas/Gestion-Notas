<?php

require_once '../model/administrador.php';
require_once '../model/personDAO.php';

if (isset($_POST['email'])) {
    //OJO!! poner md5 en password
    //$admin = new Administrator($_POST['email'], md5($_POST['psswd']));
    $admin = new Administrator($_POST['email'], md5($_POST['psswd']));
    $adminDAO = new PersonDAO();
    echo 'entrado';
    if($adminDAO->login($admin)){
        echo 'perfect';
        // establecer sesiones
        // redirección a ebook.admin.php
        header('Location: ../public/view/zona.admin.php');
    }else {
        header('Location: ../public/view/login.php');
    }
}else {
    header('Location: ../public/view/login.php');
}




?>
