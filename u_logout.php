<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Logout</title>
   
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Century Gothic;
        
        }
        header{
            background-image:url(img/img45.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }



#main {
  transition: margin-left .5s;
  padding: 20px;
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
                   
                    </li>
                    <li><a href="ngo.html">NGO</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                    <li><a href="u_login.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        
    </header>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Logout</title>
<style>
body {
  font-family: "Lato", sans-serif;
  transition:.5s;
  background-image:url(img/img45.jpg);
  height: 100vh;
            background-size: cover;
            background-position: center;
}


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(12, 12, 12);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  color: white;
 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">Home</a>
  <a href="ngo.html">NGO</a>
  <!-- <a href="feedback.html">Feedback</a> -->
  <a href="u_login.php">Logout</a>
</div>

<div id="main">
   
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 
