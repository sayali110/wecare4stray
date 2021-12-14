<?php

$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con, 'wecare4stray');
?>