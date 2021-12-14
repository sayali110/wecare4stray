
<?php
include "connection.php";
$id = $_GET['x'];
    //    echo $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    
    
    <style>
        body{
            background-image: url(img/img34.jpg); 
            background-color:white;
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
        .main input[type="text"],.main input[type="number"],.main input[type="colo"],.main input[type="gender"],.main input[type="disease"],.main input[type="location"],.main input[type="status_1"]{
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
        

        .main input[type="text"]:focus,.main input[type="number"]:focus,.main input[type="colo"]:focus,.main input[type="gender"]:focus,.main input[type="disease"]:focus,.main input[type="location"]:focus,.main input[type="status_1"]:focus{
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

</head>

<body>
   <p>INNER PEACE ?<BR>
    Rescue an Animal.....</p>
    <form class="main" action="" method="POST"  >
        <h1>Inform Us</h1>


    




<?php
        
        
         $sql = "SELECT * FROM inform_us WHERE id=$id";
        // $sql = "SELECT * FROM inform_us WHERE id=1";
		$result = mysqli_query($con,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
               
            // $id=$row["id"];
    $types_of_animals=$row["types_of_animals"];
    $color=$row["color"];
    $gender=$row["gender"];
    $disease=$row["disease"];
    $location=$row["location"];
    $status=$row["status_1"];

}
        
?>





        <input type="number" name="id" id="id" value="<?php echo $id; ?>" placeholder="id"><br> <br>
        <input type="text" name="types_of_animals" id="animal" value="<?php echo $types_of_animals; ?>" placeholder="Type of animal"><br><br>
        <input type="colo" name="color" placeholder="Color" id="colo" value="<?php echo $color; ?>"><br><br>
        <input type="gender" name="gender" placeholder="Gender" id="gender" value="<?php echo $gender; ?>"><br><br>
        <input type="disease" name="disease" placeholder="Disease" id="disease" value="<?php echo $disease; ?>"><br><br>
        <input type="location" name="location" placeholder="Location" id="location" value="<?php echo $location; ?>"><br><br>
        <input type="status_1" name="status_1" placeholder="status_1" id="status_1" value="<?php echo $status; ?>"><br><br>
        <input type="submit" name="submit">
       
     </form>
    




<?php
if(isset($_POST['submit']))
		{
            $types_of_animals=''; 
            $color='';
            $gender='';
            $disease='';
            $location='';
            $status='';
$types_of_animals=$_POST['types_of_animals'];
    $color=$_POST['color'];
    $gender=$_POST['gender'];
    $disease=$_POST['disease'];
    $location=$_POST['location'];
    $status=$_POST['status_1'];
    echo $id;
    echo $types_of_animals;
    echo $color;

  

mysqli_query($con,"UPDATE inform_us SET 
types_of_animals='$types_of_animals',color='$color',gender='$gender',disease='$disease' ,status_1='$status' WHERE  id='$id'");

header('location:animal_infor.php');
}
 	?>







</body>

</html>


