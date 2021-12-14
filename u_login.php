<?php
if(isset($_POST['username'])){
$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "connection successful";
} else{
    echo "NO connection";
}

 mysqli_select_db($con,'wecare4stray');

 $username =$_POST['username'];
 $email =$_POST['email'];
 $password =$_POST['password'];
 

 $query = "insert into u_login (username,email,password) 
  values ('$username','$email','$password')";

 mysqli_query($con, $query);

 mysqli_close($con);
 header('location:u_logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>User Login</title>
    <style>
        *{
          margin: 0px;
          padding: 0px;
        }
        body{
    margin:0;
    padding: 0;
    font-family: sans-serif;
    background: #34495e;
    background-image: url(img/img63.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
    
   
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 80%;
    transform: translate(-50%,-50%);
    background: #0009;
    text-align: center;
    border-radius: 30px;
}
.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type="text"],.box input[type= "password"],.box input[type = "email"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: rgb(252, 244, 244);
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type= "password"]:focus,.box input[type = "email"]:focus{
    width: 280px;
    border-color: #2ecc71;
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
    color: rgb(236, 226, 226);
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.box input[type ="submit"]:hover{
 background:#2ecc71;
}
.forgot-pass a{
    color:rgb(151, 167, 151);
    text-decoration: none;
}
.forgot-pass a:hover{
    color:#770c0c;
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
    top:220%;
    width: 150px;
    height: 90px;
    width: 190px;
}

    </style>
    <script>

function validateform() {
    var input_text = document.getElementById("username");
    var input_email = document.getElementById("email");
    var input_password = document.getElementById("password");
    if(input_text.value == ""){
        alert ("Please Enter your username");
        return false;
    }else if(input_email.value == ""){
        alert (" Email required");
        return false;
    }else if(input_password.value == ""){
        alert (" Password required");
        return false;
    }
    alert("Saved Successfully");
    return true;
    }
          
</script>
    
</head>

<body>
<div class="logo">
                    <img src="img/WECARE4STRAY.png">
                </div>

    <form class="box" action="u_login.php" method="POST" onsubmit="return validateform()">
        <h1> User Login</h1>
        <input type="text" name="username" id="username" placeholder="User Name" >
        <input type="email" name="email" id="email" placeholder="Email" >
        <input type="password" name="password" id="password" placeholder="Password" >
        <div class="forgot-pass">
            <a href="u_forget.html">Forgot password?</a>
        </div>
        <input type="submit" name="" value="Login">
        
        <div class="text">Don't have an account?

            <a href="u_register.php">Sign up</a>
            </div>

       
           
    </form>
</body>
</html>
