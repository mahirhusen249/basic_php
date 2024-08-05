<?php  
        //comparison  
    $a=20;  
    $b=20; 
      echo $a==$b;  
    echo "<br>";    

    $a=20;  
    $b=50; 
     echo $a==$b; //empty 
    echo "<br>";    
    
     
    $a=20;  
    $b=20; 
    echo $a===$b;  //same the data type 
    echo "<br>";  
    
    
    $a=20;  
    $b=0; 
     echo $a!=$b;   //not!=
    echo "<br>";     

    $a=20;  
    $b= "20"; 
     echo $a!==$b; //not!== 
    echo "<br>";  
      
   $a=20;  
   $b=10;  
   echo $a>$b; // this is true 
   echo "<br>";
  
    $a=20;  
    $b= 40; 
     echo $a<$b; //<true
    echo "<br>"; 

    $a=20;  
    $b= 20; 
     echo $a>=$b; //<true
    echo "<br>"; 
  
    $a=20;  
    $b= 20; 
     echo $a<=$b; //<true
    echo "<br>";     

    $a=20;  
    $b= 20; 
     echo $a<=>$b; //<true
    echo "<br>";   

    $a=20;  
    $b= 30; 
     echo $a<=>$b; //<true
    echo "<br>";  

    $a=40;  
    $b= 30; 
     echo $a<=>$b; //<true
    echo "<br>"; 
?>    
   
<?php    

$a=20;  
$b=10;                
if($a>$b){             // if stetment
echo "a is gretar"; 
}   
echo"<br>";

$a=2;  
$b=10;  
if($a<$b){   
echo "a is smaller"; 
}    
echo"<br>"; 

$a=10;  
$b=10;  
if($a==$b){   
echo "a is smaller"; 
}  
?>    
<?php  
           //logical opreators  
$age=20;  
if($age >=19 &&  $age<=21){   
    echo"<br>";
    echo "you are  the eligible";
} 
$age=25;  
if($age >= 19 and  $age<=30){   
    echo"<br>";
    echo "you are  the eligible"; 
} 
$age=25; 
if($age >= 19 ||  $age<=30){   
    echo"<br>";
    echo "you are  the eligible"; 
}  
$age=25; 
if($age >= 19 or $age<=30){   // use the or 
    echo"<br>";
    echo "you are  the eligible";  
}
$age=25; 
if(!($age >= 19 )){   // this is not print valu is false
    echo"<br>";
    echo "you are  the eligible"; 
} $age=25; 
if(!($age >= 80)){   // this is print valu is right, apposite the valu
    echo"<br>";
    echo "you are  the eligible"; 
}
$age=25; 
if($age >=19 xor $age<=22){   // use the or 
    echo"<br>";
    echo "you are  the eligible";  
}   
echo"<br>";
?>  
<?php   
  // use the if else stetment   
  $mahir=40;  
  if($mahir > 30)  {  
    echo "mahir is eligible";
  }else{  
    echo"mahir is smaller";
  }  
  echo "<br>";
  $name="mahirhusen";   
  $gender="male";
  if($name="male")  {  
    echo "hello mr.".$name;
  }else{  
    echo"hello miss.".$name;
  }        
?> 
<?php    
echo"<br>";
$per=55;   
if($per >=80 && $per<=100){   
    echo" you are in merit"; 
}elseif($per >=60 && $per < 80) {  
    echo "you are 1 division"; 
}elseif($per >=45 && $per < 60){  
    echo"you are 2 divison";
}elseif($per >=33 && $per < 45){  
    echo"you are 3 division";
}elseif ($per < 33){ 
   echo"you are the fail"; 
}
?>
    