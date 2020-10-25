<?php
// class administrador extends person
require_once 'person.php';
class Administrator extends Person{

    private $id;    
    function __construct($email,$passwd){        
        parent:: __construct($email,$passwd);
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
}



?>