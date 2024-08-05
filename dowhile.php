<?php   
$a=0;  
$test = array("leran about php", "hello mahirhusen", "wellcome to php",);
do   {  
   echo "<ul>";
 echo $a.")".  $test[$a]."-".$a;   
 echo"<br>";
//  echo $a.")<li>hello mahirhusen</li>";  
//  echo"<br>"; 
//  echo $a.")<li>wellcome to php</li>"; 
 echo"</ul>";
 echo"<br>"; 
 $a++;
}while($a <= 2) 
?>  

<?php   
echo"<br>";  
$a=2;  
$test = array("leran about php", "hello mahirhusen", "wellcome to php",);
do   {  
   echo "<ul>";
 echo $a.")".  $test[$a]."-".$a;   
 echo"<br>";
//  echo $a.")<li>hello mahirhusen</li>";  
//  echo"<br>"; 
//  echo $a.")<li>wellcome to php</li>"; 
 echo"</ul>";
 echo"<br>"; 
 $a--;
}while($a >= 0) 
?>