<?php 
 class person {    
    public $name ;
    public $age ; 
    public $employ;
       
 function __construct($name,$age,$employ) {   
   $this->name=$name;  
   $this->age=$age;   
   $this->employ=$employ;   
 }
    function show(){   
       echo $this->name."".$this->age."".$this->employ; 
    }
   
} 
$p1=new person("mahirhusen<br>",21,"<br>employ");
//$p1->name="mahirhusen"; 
$p1->show();
?>