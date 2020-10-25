<?php

session_start();
if (!isset($_SESSION['infoAlumno']) && !isset($_SESSION['id_alumnos'])) {
    header('Location:../../index.php');
}
$alumno = $_SESSION['infoAlumno'];
// esta variable me sirve como identificacion de a que alumno tengo que poner las notas
$_SESSION['id_alumno'] = $alumno['id'];

?>