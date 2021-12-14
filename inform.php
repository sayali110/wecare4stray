<?php
if(isset($_POST['types_of_animals'])){
 $con = mysqli_connect('localhost:3307','root');    
 if($con){
  echo "";
} else{
 echo "NO connection";
}

mysqli_select_db($con, 'wecare4stray');


   
 $types_of_animals =$_POST['types_of_animals'];
 $color =$_POST['color'];
 $gender =$_POST['gender'];
 $disease =$_POST['disease'];
 $location =$_POST['location'];
 $status =$_POST['status_1'];

 $query = "insert into inform_us (types_of_animals, color, gender,disease,location,status_1)
 values ('$types_of_animals','$color','$gender','$disease','$location','$status')";


 
 mysqli_query($con, $query);
 mysqli_close($con);

header('location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inform</title>
    
    
    <style>
        body{
            background-image: url(img/img34.jpg); 
            /* background-color:white; */
            height: 110vh;
            background-size: cover;
            background-position: center;
            Background-attachment:fixed;
            
            
         }
       body p{
            color: white;
	text-shadow: 4px 4px purple;
	/* position: absolute; */
	bottom: 5px;
	top: 70%;
	right: 15px;
	font-size: 40px;
	font-family: cursive;
    position:fixed;
         }
        .main{
            border-radius: 20px;
            width: 350px;
            /* position: absolute; */
            padding: 40px;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #0009;
            text-align: center;
            position: fixed;
        }
        .main h1{
            color: white;
            text-transform: uppercase;
            font-weight: 1500;

        }
        .main input[type="text"],.main input[type="colo"],.main input[type="gender"],.main input[type="disease"],.main input[type="location"],.main input[type="status_1"]{
            border:0;
            background: none;

           /* display: block; */
            margin: auto;
            text-align: center;
            border: 2px solid #3498db;
            /* padding: 10px 5px; ..........*/
            width: 200px;
            height: 28px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        

        .main input[type="text"]:focus,.main input[type="colo"]:focus,.main input[type="gender"]:focus,.main input[type="disease"]:focus,.main input[type="location"]:focus,.main input[type="status_1"]:focus{
            width: 280px;
            border-color: #16b458 ;
            
        }
        .main input[type="submit"]{
            border:0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid  #2ecc71;
                padding: 10px 15px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer; 
        }
        .main input[type="submit"]:focus{
            background:#2ecc71;
        }
        
    </style>
<script>

function validateform() {
    var input_text = document.getElementById("animal");
    var input_colo = document.getElementById("colo");
    var input_gender = document.getElementById("gender");
    var input_disease = document.getElementById("disease");
    var input_location = document.getElementById("location");
    var input_status_1 = document.getElementById("status_1");


    if(input_text.value == ""){
        alert ("Please Enter Animal Name");
        return false;
    }else if(input_colo.value == ""){
        alert ("Enter Animal color");
        return false;
    }else if(input_gender.value == ""){
        alert ("Enter Animal Gender");
        return false;
    }else if(input_disease.value == ""){
        alert ("Enter Disease");
        return false;
    }else if(input_location.value == ""){
        alert ("Location required");
        return false;
    }else if(input_status_1.value == ""){
        alert ("status required");
        return false;
    }
    alert("Saved Successfully");
    return true;
    }
          
</script>   
</head>

<body>
   <p>INNER PEACE ?<BR>
    Rescue an Animal.....</p>
    <form class="main" action="" method="POST" onsubmit="return validateform()">
        <h1>Inform Us</h1>
      
        <input type="text" name="types_of_animals" id="animal" placeholder="Type of animal"><br><br>
        <input type="colo" name="color" placeholder="Color" id="colo" ><br><br>
        <input type="gender" name="gender" placeholder="Gender" id="gender" ><br><br>
        <input type="disease" name="disease" placeholder="Disease" id="disease" ><br><br>
        <input type="location" name="location" placeholder="Location" id="location" ><br><br>
        <input type="status_1" name="status_1" placeholder="status" id="status_1" ><br><br>
        <input type="submit" name="">
       
     </form>
    
</body>
</html>