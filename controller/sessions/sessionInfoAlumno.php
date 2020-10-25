<?php

session_start();
if (!isset($_SESSION['infoAlumno']) && !isset($_SESSION['id_alumnos'])) {
    header('Location:../../index.php');
}






?>