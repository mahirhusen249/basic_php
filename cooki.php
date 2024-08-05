<?php    
$_COOKIE_name="user";  
$_COOKIE_value="mahirhusen";  
setcookie($_COOKIE_name,$_COOKIE_value, time()+(86400),"/");                       
?>   
<heml>   
    <head>  
        <body>  
            <?php  
            if(!isset($_COOKIE[$_COOKIE_name])){     
                echo "cookie is not set";
            }else{  
                echo $_COOKIE[$_COOKIE_name];  
                
            }
            ?>     
           

</body>     
</html>