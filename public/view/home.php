<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zona Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>

    <?php
        
    require_once '../../controller/sessions/sessionControllerAdmin.php';
    
    ?>

    <div class="rowHome">
        <div class="column left">
            <h2>Zona admin</h2>
            <a href="insert_alumno.php">Crear Alumno</a>
            <div class="form">
                <form action="" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">

                    <label for="primerApellido">Primer apellido</label>
                    <input type="text" id="primerApellido" name="primerApellido">

                    <input type="submit" value="Filtrar">
                </form>
            </div>
        </div>

        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th><i class="fas fa-user-edit"></i></th>
                    <th><i class='fas fa-trash-alt'></i></th>
                </tr>
            </thead>

            <tbody>
                <?php                                             
                    require_once '../../controller/showAlumnoController.php';                 
                        
                ?>

            </tbody>

        </table>

        <a href="infoMediaAlumno.php">Información de las notas medias del alumnado</a>

        <a href="../../controller/logOutController.php">Cerrar Sesión</a>
    </div>

</body>

</html>