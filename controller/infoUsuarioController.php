<?php
     
    require_once '../model/personDao.php';
    
    $id = $_GET['id_persona'];
    //echo $id;
    
    $alumno = new PersonDAO();
    $alumno->showFormAlumno($id);

    header('Location: ../public/view/infoUsuario.php');
?>