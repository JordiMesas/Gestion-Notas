<?php
// insertamos alumnos
require_once '../model/alumno.php';
require_once '../model/personDAO.php';

if (isset($_POST['nombre'])) {
    
    $alumn = new Alumno();
    $alumn->setNombre($_POST['nombre']);
    $alumn->setPrimerApellido($_POST['primerApellido']);
    $alumn->setSegundoApellido($_POST['segundoApellido']);
    $alumn->setGrupo($_POST['grupo']);
    $alumn->setEmail($_POST['email']);    
    $alumn->setPasswd($_POST['psswd']);

    $alumnDAO = new PersonDAO();
    $alumnDAO->insertAlumno($alumn);
}

header('Location: ../public/view/home.php');

?>