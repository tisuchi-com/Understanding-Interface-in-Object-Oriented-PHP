<?php

//required files
require 'class.Window.php';
require 'class.Jar.php';



//creating function for accessing open() methods
function openSomething(Openable $obj){
    $obj->open();
}


//creating function for accessing close() method
function closeSomething(Openable $obj1){
    $obj1->close();
}


//declaring object
$objWindow = new Window();
$objJar = new Jar();


//calling funtions for open()
openSomething($objWindow);
openSomething($objJar);

echo "<hr/>";


//calling function for close()
closeSomething($objWindow);
closeSomething($objJar);