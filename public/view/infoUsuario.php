<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .bold {
        font-weight: bold;
    }

    .row {
        text-align: left;
        margin: 5%;
    }

    label,
    input {
        display: block;
        padding: 5px;
    }

    input[type="submit"] {
        margin-top: 5px;
    }
    </style>
    <title>Update</title>
</head>

<body>

    <?php 
require_once '../../controller/sessions/sessionInfoAlumno.php';   
//print_r($_SESSION['infoAlumno']); 
$alumno = $_SESSION['infoAlumno'];
// esta variable me sirve como identificacion de a que alumno tengo que poner las notas
$_SESSION['id_alumno'] = $alumno['id'];
?>

    <div class="row">
        <div>
            <h2>Datos del alumno</h2>

            <ul>
                <li class="bold">Nombre:</li>
                <ul>
                    <li><?php echo $alumno['nombre']; ?></li>
                </ul>
                <li class="bold">primer apellido</li>
                <ul>
                    <li><?php echo $alumno['apellido paterno']; ?></li>
                </ul>
                <li class="bold">segundo apellido</li>
                <ul>
                    <li><?php echo $alumno['apellido materno']; ?></li>
                </ul>
                <li class="bold">grupo</li>
                <ul>
                    <li><?php echo $alumno['grupo']; ?></li>
                </ul>
                <li class="bold">email</li>
                <ul>
                    <li><?php echo $alumno['email']; ?></li>
                </ul>
            </ul>

        </div>

        <h3>Notas</h3>
        <form action="../../controller/insertNotasController.php" method="POST">
            <label for="mates">Mates</label>
            <input type="number" id="mates" name="mates" min="0" max="10">

            <label for="fisica">Física</label>
            <input type="number" id="fisica" name="fisica"min="0" max="10">

            <label for="programacion">Programación</label>
            <input type="number" id="programacion" name="programacion" min="0" max="10">

            
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>