<?php
if(isset($_POST['email'])){
$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con, 'wecare4stray');

 $email =$_POST['email'];
 $pass =$_POST['pass'];
 

 $query = "insert into a_login (email, pass)  values ('$email','$pass')";
 mysqli_query($con, $query);
 mysqli_close($con);
 header('location:a_logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
   
    
   
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
    
    background-image:url(img/img25.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;

    }

.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
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
.box input[type="text"],.box input[type= "password"]{
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
.box input[type = "text"]:focus,.box input[type= "password"]:focus{
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
.forget-pass a{
    color:rgb(151, 167, 151);
    text-decoration: none;
}
.forget-pass a:hover{
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
    width: 150px;
    height: 90px;
    width: 190px;
}


</style>

<script>

function validateform() {
    var input_text = document.getElementById("email");
    var input_password = document.getElementById("password");
    if(input_text.value == ""){
        alert ("Please Enter your email");
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

<form class="box" action="a_login.php"  method="POST" onsubmit="return validateform()">
        <h1>Admin Login</h1>
       
        <input type="text" id="email" name="email" placeholder="Email" > 
        <input type="password" id="password" name="pass" placeholder="Password" >
        <div class="forget-pass">
            <a href="a_forget.html">Forgot password?</a>
        </div>
        <input type="submit"  name="" value="Login">
        
        <div class="text">Don't have an account?

            <a href="a_register.php">Sign up</a>
           
      
	
	</div>

    </form>
    </body>
</html>