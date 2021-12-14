<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logout</title>
    
    <style>
*{
    margin: 0px;
    padding: 0px;
    font-family: Century Gothic;

}
header{
    background-image:url(img/img59.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
nav{
    width: 100%;
    height: 80px;
    background-color: #0007;
}
nav ul{
    float:right;
    list-style-type: none;
    margin-top: 25px;
}
nav ul li{
    display: inline-block;
    margin: 15px;
    

    
}
nav ul li a{
    text-decoration: none;
    color: white;
    padding: 5px 20px;
    
    transition: o.6s ease;
    border-radius: 8px;
}
nav ul li a:hover{
    background-color: rgb(55, 38, 156);
    color: rgb(238, 229, 229);
}
ul li.active a{
    background-color: rgb(230, 218, 218);
    color:green;
}
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

    </style>
</head>
<body>



    
    <header>
  
        <div class="main">
            <nav>

                <div class="logo">
                    <img src="img/WECARE4STRAY.png">
                </div>
                <ul>
                    <li class=""><a href="index.html">Home</a></li>
                    <li><a href="animal_infor.php">Animal info</a>
                       
                    </li>
                    <li><a href="a_ngo.html">NGO</a></li>
                    <li><a href="us_register.php">User Info</a></li>
                    <li><a href="user_feedback.php">User Feedback</a></li>
                    <li><a href="a_login.php">Logout</a></li>
                </ul>
            </nav>
        </div>
       
   
    </header>
</body>
</html>