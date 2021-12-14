<?php
if(isset($_POST['username'])){
$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "connection successful";
} else{
    echo "NO connection";
}
// mysqli_close($conn);
 mysqli_select_db($con, 'wecare4stray');

 $username =$_POST['username'];
 $email =$_POST['email'];
 $pass =$_POST['pass'];
 $confirm_pass =$_POST['confirm_pass'];
 

 $query = "insert into a_register (username, email, pass,confirm_pass)
 values ('$username','$email','$pass','$confirm_pass')";

 mysqli_query($con, $query);
 header('location:a_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> Admin Register</title>
    <style>
        *{
            margin: 0px;
            padding: 0%;
           
        }
        body{
    margin-left: 10px;
    background-image: url(img/img55.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
    /* background-attachment: fixed; */
   

}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 45%;
    left: 35%;
    transform: translate(-50%,-50%);
    background: black ;
    text-align: center;
    border-radius: 30px;
    
  
}
.box h1{
    color: rgb(212, 212, 228);
    text-transform: uppercase;
    font-weight: 500;
    font: 50px/50px bold; 
}
.box input[type="text"],.box input[type= "password"],.box input[type="pass"],.box input[type="email"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #e6f563;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: rgb(214, 196, 196);
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type= "password"]:focus,.box input[type="pass"]:focus,.box input[type="email"]:focus{
    width: 280px;
    border-color: #5558e2 ;
}

.box input[type ="submit"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid  #2ecc71;
    padding: 14px 10px;
    outline: none;
    color: rgb(233, 234, 241);
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type ="submit"]:hover{
 background:#3de64b;
}
.text{
    color:rgb(151, 167, 151);
}

.text a{
    text-decoration: none;
    color: #2ecc71;
    left: 4500%;
}
.text a:hover{
    color:#7a1dd1;
}



.logo img{
    float: left;
    width: 150px;
    height: 90px;
    width: 190px;
}


</style>
<script>

function validateform() {
    var input_text = document.getElementById("username");
    var input_email = document.getElementById("email");
    var input_password = document.getElementById("pass");
    var input_pass = document.getElementById("confirm_pass");

    if(input_text.value == ""){
        alert ("Please Enter your username");
        return false;
    }else if(input_email.value == "") {
        alert (" Email required");
        return false;
    }else if(input_password.value == "") {
        alert (" Password required");
        return false;
    }else if(input_pass.value == ""){
        alert (" Confirm password ");
        return false;
    }alert("Saved Successfully");
    return true;
    }
          
</script>
</head>
<body>

     <form class="box" action="a_register.php" method="POST" onsubmit="return validateform()">
        <h1>SignUp</h1>
        <input type="text" name="username" id="username" placeholder="Your full name"  >
        <input type="email" name="email" id="email" placeholder="email" >
        <input type="password" name="pass" id="pass" placeholder="Password">
        <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password" >
       
        <input type="submit" name="" value="SignUp">
        
        <div class="text">Already have an account?

            <a href="a_login.php">Log in</a>
            </div>

    </form>
</body>
</html>