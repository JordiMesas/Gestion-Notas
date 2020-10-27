<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php 
require_once '../../controller/sessions/sessionInfoAlumno.php';   
//print_r($_SESSION['infoAlumno']); 

?>

    <div class="rowInfoUser">
        <a href="home.php">home</a>
        <div>
            <h2>Datos del alumno</h2>

            <ul>
                <li class="bold">Nombre:</li>
                <ul>
                    <li><?php echo $alumno['nombre']; ?></li>
                </ul>
                <li class="bold">primer apellido:</li>
                <ul>
                    <li><?php echo $alumno['apellido paterno']; ?></li>
                </ul>
                <li class="bold">segundo apellido:</li>
                <ul>
                    <li><?php echo $alumno['apellido materno']; ?></li>
                </ul>
                <li class="bold">grupo:</li>
                <ul>
                    <li><?php echo $alumno['grupo']; ?></li>
                </ul>
                <li class="bold">email:</li>
                <ul>
                    <li><?php echo $alumno['email']; ?></li>
                </ul>
            </ul>

        </div>

        <h3>Notas</h3>
        <form action="../../controller/insertNotasController.php" method="POST">
            <label for="mates">Mates</label>
            <input type="number" id="mates" name="mates" min="0" max="10" required>

            <label for="fisica">Física</label>
            <input type="number" id="fisica" name="fisica"min="0" max="10" required>

            <label for="programacion">Programación</label>
            <input type="number" id="programacion" name="programacion" min="0" max="10" required>

            
            <input type="submit" value="Enviar">
        </form>        
        <a href="../../controller/logOutController.php">Cerrar Sesión</a>
    </div>
    
</body>

</html>