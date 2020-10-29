<?php
 require_once '../model/personDao.php';
    
 $id = $_GET['id_persona']; 
 
 $alumno = new PersonDAO();
 $alumno->deleteUser($id);

 header('Location: ../public/view/home.php');

?>