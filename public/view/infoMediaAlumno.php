<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Media de notas Alumno</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
 require_once '../../model/alumno.php';
 require_once '../../model/alumnoDAO.php';
 $alumnodao = new AlumnoDAO();

?>
    <div class="rowMedia">

        <a href="home.php">home</a>
        <h3>Nota media asignaturas</h3>

        <ul>
            <li>
                Media de Mates
            </li>
            <ul>
                <li><?php echo $alumnodao->notaMediaMates();  ?></li>

            </ul>
            <li>
                Media de Fisica
            </li>
            <ul>
                <li><?php  echo $alumnodao->notaMediaFisica();  ?></li>

            </ul>
            <li>
                Media de Programacion
            </li>
            <ul>
                <li><?php  echo $alumnodao->notaMediaProgramacion();  ?></li>

            </ul>

        </ul>

        <h3>Materia que tiene la mayor media</h3>
        <p>
            <?php 
            echo $alumnodao->notaMayorMateria($alumnodao->notaMediaMates(),$alumnodao->notaMediaFisica(),$alumnodao->notaMediaProgramacion());
            ?>
        </p>
        <h3>Alumno/a que ha sacado la mejor nota especificando la materia</h3>


        <p>Mates: <?php echo $alumnodao-> nombreAlumnoMejorNotaMates()?></p>
        <p>Fisica: <?php echo $alumnodao-> nombreAlumnoMejorNotaFisica()?></p>
        <p>Programación: <?php echo $alumnodao-> nombreAlumnoMejorNotaProgramacion()?></p>
        <a href="../../controller/logOutController.php">Cerrar Sesión</a>

    </div>

</body>

</html>