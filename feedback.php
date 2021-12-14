
<?php
if(isset($_POST['username'])){
$con = mysqli_connect('localhost:3307','root','');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con,'wecare4stray');
 
 
  $username =$_POST['username'];
  $email =$_POST['email'];
  $feedback=$_POST['feedback'];
 
 
  $query = "insert into feedback (username,email,feedback)
  values ('$username','$email','$feedback')";
  mysqli_query($con, $query);
  mysqli_close($con);
  header('location:a_logout.php');

}
 
?>


