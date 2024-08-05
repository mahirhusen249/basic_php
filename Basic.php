<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head> 
<style> 
.container{ 
       max-width= 80%;
       background-color: grey; 
       margin: auto; 
       padding: 23px;
} 
</style>
<body>
    <div class="container"> 
        <h1> lets learn about php </h1>
     <p>Your party status is  here</p>
    <?php 
    $age=8; 
    if($age>18){ 
        echo"You can go to the party"; 
    } 
    else if($age==8){ 
        echo "You are 8 year old";
 } 
    else{
        echo"you can  go to the party";
} 
echo"<br>"; 
        //array in php
    $languages = array("python","c++","php","nodeJs");
    echo $languages[2]; echo"<br>";
    $languages = array("python","c++","php","nodeJs");
    echo count($languages); 
          // loops in PHP 
          $a=0;
          while ($a <= 5) {
            echo "<br>";"The valu of a is:"; 
            echo $a;
            $a++;  
          }  
          $a=5;
          while ($a >= 0) {
            echo "<br>";"The valu of a is:"; 
            echo $a;
            $a--;  
          }
            // Iterating array in php using while loop 
            $a=0;
          while ($a < count($languages)) {
            echo "<br>The valu of languages  is:"; 
            echo $languages[$a]; 
            $a++; 
          }   
          // Do while loop
          $a=0;
         do {
            echo "<br>The valu of a is:"; 
            echo $a; 
             $a++;
             }    while ($a < 10); 
             //for loop 
             $a=200; 
             for ($a=0; $a < 10; $a++){ 
              echo "<br>Te valu of the a is"; 
              echo  $a;
             } 
         
       ?>  
       <?php 
class car {  
    // properties
    public $name="car name"; 
    //method//(function) 
     function getcarname(){ 
        return"car name from  function"; 
    }  
} 
echo"<br>";
$bmw=new car;
echo $bmw->getcarname();
?>  
<?php 
// This is a class
class calculation{  
    // This is a properties
  public $a,$b,$c; 
 //this is a function 
 function sum(){ 
 $this->c=$this->a+$this->b; 
 return $this->c;
 }  
 function sub(){ 
    $this->c=$this->a-$this->b; 
    return $this->c;
    }
   
  }      
  //This is a object 
  echo"<br>";
$c1=new calculation();
$c1->a=10; 
$c1->b=50;   
  echo $c1->sum(); 
  echo"<br>";
      
  $c1=new calculation();
$c1->a=10; 
$c1->b=50;   
  echo $c1->sub();
     
     ?>
<?php  
class fruits {  
    public $name="fruits name";
   function name(){ 
    return"name from function"; 
   } 
} 
echo"<br>";
$mengo=new fruits; 
echo$mengo->name();   
echo"<br>";
echo"apple";
?> 
 <?php 
 class baike {  
  public $name="baike"; 
  function baike(){  
    return"bike from function"; 

  }
 } 
 $shine=new baike;echo"<br>"; 
 echo$shine->baike();
 ?>  
    </div>
</body>
</html>