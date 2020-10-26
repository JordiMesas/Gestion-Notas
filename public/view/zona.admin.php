<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zona Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
        .row,form,a{
            margin: 5%;
        }
    </style>
</head>
<body>

    <?php
        
    require_once '../../controller/sessions/sessionControllerAdmin.php';
    
    ?>

    <div class="row">
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
                </tr>
            </thead>

            <tbody>                
                    <?php                                             
                        require_once '../../controller/showAlumnoController.php';                 
                        
                    ?>     
            
            </tbody>

        </table>
       
       

    </div> 
    <a href="infoMediaAlumno.php">Información de las notas medias del alumnado</a>
    </div>
    <a href="../../controller/logOutController.php">Cerrar Sesión</a>
</body>

</html>