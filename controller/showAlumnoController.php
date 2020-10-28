<?php
// mostramos tabla de inf alumnos
require_once '../../model/alumno.php';
require_once '../../model/alumnoDAO.php';

    $alumno = new Alumno();
    $alumnoDao = new AlumnoDAO();
    if(isset($_POST['primerApellido']) || isset($_POST['primerApellido'])){        
            
        $alumno->setNombre($_POST['nombre']);
        $alumno->setPrimerApellido($_POST['primerApellido']);
        $filter = $alumnoDao->filtrarAlumno($alumno);        
        
    }else{      
        
        $filter = $alumnoDao->showAlumno();
        
    }
    foreach($filter  as $alumno){
        echo "<tr>";
        $id = $alumno['id'];
           
        echo "<td>{$alumno['nombre']}</td>";
        echo "<td>{$alumno['apellido paterno']}</td>";   
        echo "<td>{$alumno['apellido materno']}</td> "; 
                                    
        echo "<td><a href='../../controller/infoUsuarioController.php?id_persona=$id'>Modificar</a></td> ";
        echo "<td><a href='../../controller/deleteUserController.php?id_persona=$id'>Eliminar</a></td>";
        echo "</tr>";
    }

?>