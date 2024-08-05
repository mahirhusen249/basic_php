<?php 
$colors=array("red",60,"blue",30.5);  

/*echo $colors[0]; 
echo"<br>"; 
echo $colors[1]; 
echo"<br>"; 
echo $colors[2]; 
echo"<br>"; 
echo $colors[3];*/  
echo "<pre>";  
print_r($colors); 
echo"</pre>";      

?>   
<?php    // string valu and int,float  
         // this is a index array

$colors=["red",60,"blue",30.5];    
echo"<ul>";

 for($i=0;$i<4;$i++){  
    echo "<li> $colors[$i]</li>";  
 }
 echo"</ul>"; 
 echo"<br>";   
 ?>    
       
 <?php      // associative  array
 $age=array(  
  "mahir"=>21,   // <---- this is a valu of associtative array
  "tahir"=>18,  
  "tamir"=>8, 
 );   
 echo"<ul>";
 echo $age["mahir"]."<br>";  
 echo $age["tahir"]."<br>"; 
 echo $age["tamir"]."<br>"; 
  echo"</ul>" 

 ?>
<?php   
   //foreach loop use the array,it is use the multiple valu

 $colors=[  
   "red", 
   "green",  
   "blue"
 ];  
 foreach($colors as $valu) {    
   echo"<br>";
   echo $valu;    
 }  
    echo"<br>"; 
 ?>  
 
 <?php   
 $age=[ 
   "mahir"=>21,   // <---- this is a valu of associtative array
   "tahir"=>18,  
   "tamir"=>8  
 ];  
 echo"<ul>"; 
 foreach($age as $key => $value){ 
  echo "<li>$key = $value</li>";  
  echo"<br>";  
 } 
 echo"</ul>";  
 echo"<br>";
  ?> 
  <?php 
   $emp=[  
      [1,"tahir","manager",50000],
      [2,"tamir","salesmen",20000],
      [3,"mahir","computer opertor",30000],
      [4,"aamir","driver",5000],
   ];  
   /*for($row=0; $row <4; $row++){
   for($col=0; $col <4; $col++) {
echo $emp[$row][$col]." ";
   } 
   echo "<br>"; */
// }  
foreach($emp as $v1){ 
foreach($v1 as $v2){ 
   echo $v2." ";
} echo"<br>";
} 

      echo"<pre>";
   print_r($emp);  
   echo"<pre>";
   ?>