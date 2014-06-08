<?php

require_once 'interface.Openable.php';



//declaring class window that is implementing interface 
class Window implements Openable{
 
    private $_locked = false;
    
    
    public function open(){
        if($this->_locked){
            echo "Cannot open the Window. It's locked";
        } else{
            echo "Wow. Look the beautiful sky. <br>";
        }   
    }
    
    
    public function close(){
        print "Opps! It's Closed! <br>";   
    }
    
    
    public function lockWindow(){
        $this->_locked = true;
    }
    
    public function unlockWindow(){
        $this->_locked = false;    
    }
    
    
}