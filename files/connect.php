<?php
 
 $host='localhost';
 $user='root';
 $pass='';
 $db='post-posts';

 $conn=mysqli_connect($host,$user,$pass,$db); 
if(isset($conn)){
    echo ('');
}
else{
    echo("not connected");
}
?>