<?php
// conexion a base de datos 

class NoteDAO {
    private $pdo;

    public function __construct(){
        require_once '../services/connection.php';
        $this->pdo=$pdo;
    }    
    
    //Funcion para insertar alumnos
    public function insertNote($note){
        // clave primaria
        $id_alumno = $note->getIdAlumno();
        $notaMates = $note->getNotaMates();
        $notaFisica = $note->getNotaFisica();
        $notaProgramacion = $note->getNotaProgramacion();
        // miro si se repite el id de alumnos en la id_alumnos foranea
        $sentencia1 = $this->pdo->prepare("SELECT id_alumno FROM notas WHERE id_alumno = $id_alumno;");
        $sentencia1->execute();
        //clave foranea
        $idforanea = $sentencia1->fetch(PDO::FETCH_ASSOC);
        if($idforanea['id_alumno']!=$id_alumno){
            $sentencia2=$this->pdo->prepare("INSERT INTO `notas` (`id`,`nombre_de_asignatura`, `id_alumno`, `nota`) VALUES (NULL,'mates',{$id_alumno},{$notaMates}),(NULL,'fisica',{$id_alumno},{$notaFisica}),(NULL,'programacion',{$id_alumno},{$notaProgramacion});");
            $sentencia2->execute();
            return true;
        }           
         return false;           
            
    }
              
       
}    
   
    





?>
