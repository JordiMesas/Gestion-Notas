<?php
// mostramos tabla de inf alumnos

require_once '../../model/alumnoDAO.php';

    $alumnos = new AlumnoDAO();  
    foreach($alumnos->showAlumno()  as $alumno){
        echo "<tr>";
        $id = $alumno['id'];
           
        echo "<td>{$alumno['nombre']}</td>";
        echo "<td>{$alumno['apellido paterno']}</td>";   
        echo "<td>{$alumno['apellido materno']}</td> "; 
                                    
        echo "<td><a href='../../controller/infoUsuarioController.php?id_persona=$id'>Modificar</a></td> ";
        echo "<td><a href='eliminarUsuario.php?id_persona=$id'>Eliminar</a></td>\n";
        echo "</tr>";
                            
    }
   


?>