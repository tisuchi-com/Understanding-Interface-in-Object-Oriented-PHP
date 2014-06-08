<?php

require_once 'interface.Openable.php';


//this is the second class from where we will implement interface

class Jar implements Openable{


    private $contents;
    
    public function __constrtuct($contents){
        $this->contents = $contents;
    }
    
    
    public function open(){
        echo "The Jar is now Open <br>";
    }
    
    public function close(){
        echo "The jar is now Closed <be>";
    }
    
}