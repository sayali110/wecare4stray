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
 

 $query = "insert into u_register (username, email, pass,confirm_pass)
 values ('$username','$email','$pass','$confirm_pass')";

 mysqli_query($con, $query);
 header('location:u_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> User Register</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
    margin:0;
    padding: 0;
    font-family: sans-serif;
    /* background: #34495e; */
    background-image: url(img/img60.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
    

}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%,-50%);
    background: #0009;
    text-align: center;
    border-radius: 30px;
    
}
.box h1{
    color: rgb(124, 211, 84);
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type="text"],.box input[type= "password"],.box input[type= "pass"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type= "password"]:focus,.box input[type= "pass"]:focus{
    width: 280px;
    border-color: #2ecc71 ;
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
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type ="submit"]:hover{
 background:#2ecc71;
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
/* navbar */

.logo img{
    float: left;
    width: 150px;
    height: 90px;
    width: 190px;
}

.main{
    max-width: 12000px;
    margin:auto;
    
}
.sub-menu{
    display: none;
    width: 50px;
    height: 60px;
}
.main ul li:hover .sub-menu{
    display: block;
    position: absolute;
    background: #0007;
    height: 100px;
    width: 100px;
    margin-top: 5px;
    margin-left: -5px;
    margin-right: 250px;
    border-radius: 8px;
    
}
.main ul li:hover .sub-menu ul {
    display: block;
    margin: 10px;
}
.main ul li:hover .sub-menu ul li a {
    width: 400px;
    padding: 1px;
    background:transparent;
    border-radius: 0px;
    text-align: center;
}
.sub-menu ul li a:hover{
    color:rgb(71, 39, 211)
}
</style>
<script>

function validateform() {
    var input_text = document.getElementById("username");
    var input_email = document.getElementById("email");
    var input_password = document.getElementById("pass");
    var input_password = document.getElementById("confirm_pass");

    if(input_text.value == ""){
        alert ("Please Enter your username");
        return false;
    }else if(input_email.value == ""){
        alert ("Email required");
        return false;
    }else if(input_password.value == ""){
        alert ("Password required");
        return false;
    }else if(input_pass.value == ""){
        alert ("Confirm password");
        return false;
    }alert("Saved Successfully");
    return true;
    }
          
</script>
</head>
<body>
<header>
        

                <div class="logo">
                    <img src="img/WECARE4STRAY.png">
                </div>
                
    </header>




    <form class="box" action="u_register.php" method="POST" onsubmit="return validateform()">
        <h1>SignUp</h1>
        <input type="text" id="username" name="username" placeholder="Your full name" >
        <input type="text" name="email" id="email" placeholder="email" >
        <input type="password" name="pass" id="password" placeholder="Password" >
        <input type="pass" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password" >
      
        <input type="submit" name="" value="SignUp">
        
        <div class="text">Already have an account?

            <a href="u_login.php">Log in</a>
            </div>

    </form>
</body>
</html>