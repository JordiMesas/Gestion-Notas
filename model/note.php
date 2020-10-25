<?php

class Note{
    private $id;
    private $notaMates;
    private $notaFisica;
    private $notaProgramacion;
    private $idAlumno;

    function __construct(){
       
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
     * Get the value of idAlumno
     */ 
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set the value of idAlumno
     *
     * @return  self
     */ 
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

   

    /**
     * Get the value of notaMates
     */ 
    public function getNotaMates()
    {
        return $this->notaMates;
    }

    /**
     * Set the value of notaMates
     *
     * @return  self
     */ 
    public function setNotaMates($notaMates)
    {
        $this->notaMates = $notaMates;

        return $this;
    }

    /**
     * Get the value of notaFisica
     */ 
    public function getNotaFisica()
    {
        return $this->notaFisica;
    }

    /**
     * Set the value of notaFisica
     *
     * @return  self
     */ 
    public function setNotaFisica($notaFisica)
    {
        $this->notaFisica = $notaFisica;

        return $this;
    }

    /**
     * Get the value of notaProgramacion
     */ 
    public function getNotaProgramacion()
    {
        return $this->notaProgramacion;
    }

    /**
     * Set the value of notaProgramacion
     *
     * @return  self
     */ 
    public function setNotaProgramacion($notaProgramacion)
    {
        $this->notaProgramacion = $notaProgramacion;

        return $this;
    }
}


?>