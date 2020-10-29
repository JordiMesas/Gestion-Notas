<?php
// conexion a base de datos 
require_once 'alumno.php';
class AlumnoDAO {
    private $pdo;

    public function __construct(){
        require_once '../../services/connection.php';
        $this->pdo=$pdo;
    }   
    //Funcion para seleccionar base datos alumnos y mostrar en home informacion del alumnado
    public function showAlumno(){       
        
        $query = "SELECT * FROM alumnos ";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        
        // coge las filas en forma de array
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);     
        
    } 
    //funcion para filtrar alumno
    public function filtrarAlumno($alumno){       

            $nombre = $alumno->getNombre();
            $primerApellido = $alumno->getPrimerApellido();
            $query = "SELECT * FROM alumnos WHERE nombre LIKE '%{$nombre}%' AND `apellido paterno` LIKE '%{$primerApellido}%'";
            $sentencia=$this->pdo->prepare($query);
            $sentencia->execute();
             // coge las filas en forma de array
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);    
            
    }

    /*******Funciones para calcular nota media de alumnos de cada asignatura, mates, fisica, programacion *******/
    public function notaMediaMates(){       
       
        $data = $this->pdo->query("SELECT AVG(nota)  FROM notas WHERE nombre_de_asignatura = 'mates'")->fetch();        
        Alumno::$nota_media = $data[0];
        
        return Alumno::$nota_media;
    }

    public function notaMediaFisica(){       
       
        $data = $this->pdo->query("SELECT AVG(nota)  FROM notas WHERE nombre_de_asignatura = 'fisica'")->fetch();        
        Alumno::$nota_media = $data[0];
        
        return Alumno::$nota_media;
    }

    public function notaMediaProgramacion(){       
       
        $data = $this->pdo->query("SELECT AVG(nota)  FROM notas WHERE nombre_de_asignatura = 'programacion'")->fetch();        
        Alumno::$nota_media= $data[0];
        
        return Alumno::$nota_media;
    }

    /********Te devuelve la asignatura que tiene la mayor media *********/

    public function notaMayorMateria($notaMates, $notaFisica, $notaProgramacion){
        $result = max($notaMates,$notaFisica,$notaProgramacion);
        switch ($result) {
            case $notaMates:
                return 'Mates';
                break;
            case $notaFisica:
                return 'Física';
                break;
            case $notaProgramacion:
                return 'Programación';
                break;     
            default:
                return "";
                break;
        }
    }

      /********devuelve el alumno que ha sacado mejor nota de cada asignatura*********/

    public function nombreAlumnoMejorNotaMates(){
        
        $data = $this->pdo->query("SELECT nombre FROM alumnos INNER JOIN notas ON alumnos.id =notas.id_alumno WHERE nota = (SELECT MAX(nota) FROM notas WHERE nombre_de_asignatura = 'mates');")->fetch();
             
        return $data[0];
    }
    
    public function nombreAlumnoMejorNotaFisica(){
        
        $data = $this->pdo->query("SELECT nombre FROM alumnos INNER JOIN notas ON alumnos.id =notas.id_alumno WHERE nota = (SELECT MAX(nota) FROM notas WHERE nombre_de_asignatura = 'fisica');")->fetch();
             
        return $data[0];
    }
    
    public function nombreAlumnoMejorNotaProgramacion(){
        
        $data = $this->pdo->query("SELECT nombre FROM alumnos INNER JOIN notas ON alumnos.id =notas.id_alumno WHERE nota = (SELECT MAX(nota) FROM notas WHERE nombre_de_asignatura = 'programacion');")->fetch();
             
        return $data[0];
    }  

    

    // funcion para hacer tablas

    // function showResults(array $results) {
    //     print "<br><table>";
    //     $row = $results[0];
    //     $title = " <tr> ";
    //     foreach ($row as $field => $value) {
    //         $title .= "<td>  $field  </td> ";
    //     }
    //     print $title . "</tr>";
    
    //    foreach ($results as $row) {
    //         $line = "<tr>";
    //         foreach ($row as $field) {
    //             $line .= "<td>$field</td>";
    //         }
    //         print $line . "</tr>";
    //     }
    //     print "</table><br>";
    // }
}




?>
