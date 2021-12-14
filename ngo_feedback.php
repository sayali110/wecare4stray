<?php
if(isset($_POST['username'])){
$con = mysqli_connect('localhost:3307','root','');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con,'ngo');
 
 
  $username =$_POST['username'];
  $email =$_POST['email'];
  $feedback=$_POST['feedback'];
 
 
  $query = "insert into feedback (username,email,feedback)
  values ('$username','$email','$feedback')";
  mysqli_query($con, $query);
  mysqli_close($con);
  header('location:ngo.html');

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NGO Feedback</title>
    <style>
        body{
            background-image: url(img/img12.jpg);
            height: 100vh;
            width: 12%;
            background-size: cover;
            background-position: center;

    
        }

        .main{
            text-align: center;
            width: 300px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #0009;
            border-radius: 30px;
        }
        .main h1{
            color: rgb(233, 227, 230);
            text-transform: uppercase;
            font-weight: 500;
            font: 50px/20px bold;
        }
        .main input[type="text"]{
            border:0;
            background: none;
            display: block;
            margin: 15px auto;
            text-align: center;
            border: 2px solid #ee59b0;
            padding: 10px 5px;
            width: 200px;
            outline: none;
            color: rgb(243, 219, 219);
            border-radius: 24px;
            transition: 0.25s;
        }
        .main input[type="email"]{
            border:0;
            background: none;
            display: block;
            margin: 15px auto;
            text-align: center;
            border: 2px solid #ee59b0;
            padding: 10px 5px;
            width: 200px;
            outline: none;
            color: rgb(243, 237, 237);
            border-radius: 24px;
            transition: 0.25s;
        }
.main input[type = "text"]:focus,.box input[type= "password"]:focus ,.box input[type= "email"]:focus{
    width: 280px;
    border-color: #2490e9;
}
.main textarea[type = "text"]{
    border:0;
            background: none;
            display: block;
            margin: 15px auto;
            text-align: center;
            border: 2px solid #ee59b0;
            padding: 10px 5px;
            width: 200px;
            outline: none;
            color: rgb(233, 225, 225);
            border-radius: 29px;
            transition: 0.25s;
}
.main textarea[type = "text"]:focus{
    width: 280px;
    border-color: #2490e9;
}
.main input[type ="submit"]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid  #2ecc71;
    padding: 14px 10px;
    outline: none;
    color: rgb(8, 7, 7);
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.main input[type ="submit"]:hover{
 background:#2ecc71;
}


    </style>

<script>
    function validateform() {
        var input_text = document.getElementById("username");
        var input_email= document.getElementById("email");
        var textarea_text = document.getElementById("feedback");
        if(input_text.value == ""){
            alert ("Please Enter your username");
            return false;
        }else if(input_email.value == ""){
            alert (" Please Enter Email");
            return false;
        }else if(textarea_text.value == ""){
            alert (" Please Enter Feedback");
            return false;
        }
        alert("Saved Successfully");
        return true;
    }
    </script>
</head>
<body>
    <form class="main" action="ngo_feedback.php" method="POST"  onsubmit="return validateform()">
        <h1> Feedback</h1>
        <input type="text" id="username" name="username" placeholder="User Name" ><br>
        <input type="email" id="email" name="email" placeholder="Email"  ><br>
        <textarea  type="text" id="feedback" name="feedback" cols=30 rows=10 placeholder="Give your feedback" ></textarea>
     <input type="submit" name="submit" value="Submit" ><br>

    </form>
