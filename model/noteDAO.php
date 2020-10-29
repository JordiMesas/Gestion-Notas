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
        $sentencia1 = $this->pdo->prepare("SELECT id_alumno FROM notas WHERE id_alumno = {$id_alumno};");
        $sentencia1->execute();
        //clave foranea
        $idforanea = $sentencia1->fetch(PDO::FETCH_ASSOC);
        if($idforanea['id_alumno']!=$id_alumno){
            $sentencia2=$this->pdo->prepare("INSERT INTO `notas` (`id`,`nombre_de_asignatura`, `id_alumno`, `nota`) VALUES (NULL,'mates',{$id_alumno},{$notaMates}),(NULL,'fisica',{$id_alumno},{$notaFisica}),(NULL,'programacion',{$id_alumno},{$notaProgramacion});");
            $sentencia2->execute();            
        }else{
            
            $sentencia3 = $this->pdo->prepare("UPDATE notas SET nota={$notaMates} where id_alumno= {$id_alumno} AND `nombre_de_asignatura`='mates';");
            $sentencia4 =  $this->pdo->prepare("UPDATE notas SET nota={$notaFisica} where id_alumno={$id_alumno} AND `nombre_de_asignatura`='fisica';");
            $sentencia5 = $this->pdo->prepare("UPDATE notas SET nota={$notaProgramacion} where id_alumno={$id_alumno} AND `nombre_de_asignatura`='programacion';");
            
            $sentencia3->execute();
            $sentencia4->execute();
            $sentencia5->execute();             
           

        }
        return false;                   
            
    }
              
       
}    
   
    





?>
