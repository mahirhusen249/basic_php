<?php 
function hello(){   // function with example
    echo "hellos mahirhusen";
}  
hello();  
echo"<br>";
hello();  
echo"<br>";
hello(); 
echo"<br>";
hello();   
echo"<br>";  

function name($name){     //function with parametar
    echo "hellos $name"; 
} 
name("mahir");   
echo"<br>"; 
?>  
<?php 
function sum($math,$eng,$sc){ 
    $s=$math+$eng+$sc; 
   return $s;    
}
 $totle=sum(45,60,70); 
  echo $totle;  
function percentage($st) { 
 $per=$st/3; 
 echo $per; 
}
 percentage ($totle);
?>