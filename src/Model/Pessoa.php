<?php
namespace App\Model;

class Pessoa{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
};
?>