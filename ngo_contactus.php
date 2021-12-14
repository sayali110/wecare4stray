<?php
if(isset($_POST['f_name'])){
$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con, 'ngo');

 $f_name =$_POST['f_name'];
 $l_name =$_POST['l_name'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 

 $query = "insert into contact_us (f_name, l_name,email,phone)  values ('$f_name','$l_name','$email','$phone')";
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
    <title>NGO contact Us</title>
    <style>
        body{
            background-image: url(img/img57.jpg);
            height: 100vh;
            width: 12%;
            background-size: cover;
            background-position: center;
            

    
        }

        .main{
            text-align: center;
            width: 400px;
            padding: 5px;
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%,-50%);
            background: #0009;
            border-radius: 5px;
        }
        
        .main h2{
            color: rgb(230, 219, 224);
            text-transform: uppercase;
            font-weight: 500;
            font:  30px/10px bold;
        }
        .main h3{
            color: rgb(230, 219, 224);
        }
        .main input[type="text"],.main input[type="name"],.main input[type="email"],.main input[type="phone"]{
            border:0;
            background: none;
            display: block;
            margin: 15px auto;
            text-align: center;
            border: 2px solid #ee59b0;
            padding: 10px 5px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
.main input[type = "text"]:focus,.main input[type= "name"]:focus,.main input[type = "email"]:focus,.main input[type= "phone"]:focus{
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
    color: rgb(214, 193, 193);
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
.main input[type ="submit"]:hover{
 background:#2ecc71;
}


    </style>
    <script>
        function validate(){
    var input_text = document.getElementById("fname");
    var input_name = document.getElementById("lname");
    var input_email = document.getElementById("email");
    var input_phone = document.getElementById("phone");

    if(input_text.value == ""){
        alert ("Please Enter your first name");
        return false;
    }else if(input_name.value == "") {
        alert (" Please Enter your last name");
        return false;
    }else if(input_email.value == "") {
        alert (" Email required");
        return false;
    }else if(input_phone.value == ""){
        alert ("Enter your mobile number");
        return false;
    }alert("Saved Successfully");
    return true;
    }
        </script>
</head>
<body>
    <form class="main" action="" method="POST" onsubmit="return validate()">
        <h2>Contact Us</h2>
     <h3>We Will get Back to you ASAP.</h3>
        <input type="text" id="fname" name="f_name" placeholder="First Name" ><br>
        <input type="name" id="lname" name="l_name" placeholder="Last Name" ><br>
        <input type="email" id="email" name="email" placeholder="Email" ><br>
        <input type="phone" id="phone" name="phone" placeholder="Phone No." ><br>
        <input type="submit"  name="" value="Submit"><br>
        <p style="color: white;">You may also call us at 9549709178</p>
        
      
    </form>
</body>
</html>