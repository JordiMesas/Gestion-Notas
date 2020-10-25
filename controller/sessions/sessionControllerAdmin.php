<?php
// si no existe un admin en la db
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:../../index.php');
}

?>