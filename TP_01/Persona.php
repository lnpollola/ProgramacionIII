<?php

abstract class Persona extends Fabrica
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;
    
    function __construct($nombre,$apellido,$dni,$sexo)
    {
        $this->_apellido=$apellido;
        $this->_nombre=$nombre;
        $this->_dni=$dni;
        $this->_sexo=$sexo;
        
    }

   
    public function getApellido()
    {return $this->_apellido;}
    public function getDNI()
    {return $this->_dni;}
    public function getNombre()
    {return $this->_nombre;}
    public function getSexo()
    {return $this->_sexo;}


    abstract function Hablar($idioma);
    public function ToString()
    {
        return "Apellido: ".$this->getApellido()."-".
        "Nombre: ".$this->getNombre()."-".
        "DNI: ".$this->getDNI()."-".
        "Sexo: ".$this->getSexo()."-";
    }


}







?>