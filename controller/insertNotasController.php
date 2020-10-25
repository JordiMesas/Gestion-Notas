<?php
// insertamos alumnos
require_once '../model/note.php';
require_once '../model/noteDAO.php';
session_start();
echo $_SESSION['id_alumno'];

if (isset($_POST['mates']) && isset($_POST['fisica']) && isset($_POST['programacion'])) {
    
    $note = new note();
    $note->setNotaMates($_POST['mates']);
    $note->setNotaFisica($_POST['fisica']);
    $note->setNotaProgramacion($_POST['programacion']);
    $note->setIdAlumno($_SESSION['id_alumno']);
    $noteDAO = new NoteDAO();
    $noteDAO->insertNote($note);
     
}
header('Location: ../public/view/infoUsuario.php');



?>