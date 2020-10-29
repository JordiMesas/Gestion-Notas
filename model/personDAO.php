<?php
// conexion a base de datos 

class PersonDAO {
    private $pdo;

    public function __construct(){
        require_once '../services/connection.php';
        $this->pdo=$pdo;
    }
    // funcion para que el administrador haga login
    public function login($admin){
    $query = "SELECT * FROM administrador WHERE email=? AND passwd=?";        
        $sentencia=$this->pdo->prepare($query);
        $email=$admin->getEmail();
        $psswd=$admin->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1){           
            $admin->setId($result['id']);
            //Creamos la sesión
            session_start();
            $_SESSION['admin'] = $admin;           
            return true;
        }else {           
            return false;
        }
    }
    
    //Funcion para Crear los alumnos
    public function insertAlumno($alumn){
        $sentencia1=$this->pdo->prepare("INSERT INTO `alumnos` (`id`,`nombre`, `apellido paterno`, `apellido materno`, `grupo`,`email`,`passwd`) VALUES (NULL,?,?,?,?,?,?);");
        $nombre= $alumn->getNombre(); 
        $primerApellido= $alumn->getPrimerApellido();
        $segundoApellido= $alumn->getSegundoApellido();
        $grupo = $alumn->getGrupo();
        $email = $alumn->getEmail();
        $pas = $alumn->getPasswd();
        $sentencia1->bindParam(1,$nombre);
        $sentencia1->bindParam(2,$primerApellido);
        $sentencia1->bindParam(3,$segundoApellido);
        $sentencia1->bindParam(4,$grupo);
        $sentencia1->bindParam(5,$email);
        $sentencia1->bindParam(6,md5($pas));

        $sentencia1->execute();
    }
    // funcion para identificar y mostrar la informacion en la vista infoUsuario
    public function showFormAlumno($id){
        
        $query = "SELECT * FROM alumnos WHERE id=$id";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();
        
        // coge las filas en forma de array
         $idAlumno = $sentencia->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['infoAlumno'] = $idAlumno;     
        
    } 
    //Funcions que sirve para eliminar la informacion del alumno y sus notas 
    public function deleteUser($id){
        try{
            $this->pdo->beginTransaction(); 

            $id=$_GET['id_persona'];

            $query1 = "DELETE FROM alumnos  where id=?";
            $sentencia1 = $this->pdo->prepare($query1);            
            $sentencia1->bindParam(1,$id);    
            $sentencia1->execute();           
           
            $this->pdo->commit();           
        
        }
        catch (Exception $ex) {
            /* Reconocer un error y revertir los cambios */
            $this->pdo->rollback();
            echo $ex->getMessage();   
        }
        
    }
    
}




?>
