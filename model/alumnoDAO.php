<?php
// conexion a base de datos 

class AlumnoDAO {
    private $pdo;

    public function __construct(){
        require_once '../../services/connection.php';
        $this->pdo=$pdo;
    }   
    //Funcion para seleccionar base datos alumnos
    public function showAlumno(){
        
        $query = "SELECT * FROM alumnos";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        
        // coge las filas en forma de array
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);     
        
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
