<?php
// class alumno extends to person
require_once 'person.php';
class Alumno extends Person{
    private $id;
    private $nombre;  
    private $primerApellido;
    private $segundoApellido;
    private $grupo;

    function __construct(){      
        // $this->nombre=$nombre;
        // $this->primerApellido=$primerApellido;
        // $this->segundoApellido=$segundoApellido;
        // $this->grupo=$grupo;      

        // parent:: __construct($email,$passwd);
    }  

    /**
     * Get the value of primerApellido
     */ 
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set the value of primerApellido
     *
     * @return  self
     */ 
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get the value of segundoApellido
     */ 
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set the value of segundoApellido
     *
     * @return  self
     */ 
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get the value of grupo
     */ 
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set the value of grupo
     *
     * @return  self
     */ 
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}


?>