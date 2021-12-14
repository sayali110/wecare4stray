<?php 
ob_start();
include('connection.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {

 $types_of_animals=$_POST['types_of_animals'];
    $color=$_POST["color"];
    $gender=$_POST["gender"];
    $disease=$_POST["disease"];
    $location=$_POST["location"];
    $status=$_POST["status"];

  $updated=mysql_query("UPDATE inform_us SET 
        types_of_animals='$types_of_animals', color='$color', gender='$gender' WHERE id='$id'")
or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:index.php');
  }
}
}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>

<style>
        body{
            background-image: url(img/img34.jpg); 
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
        .main input[type="text"],.main input[type="colo"],.main input[type="gender"],.main input[type="disease"],.main input[type="location"],.main input[type="status"]{
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
        

        .main input[type="text"]:focus,.main input[type="colo"]:focus,.main input[type="gender"]:focus,.main input[type="disease"]:focus,.main input[type="location"]:focus,.main input[type="status"]:focus{
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
    <form class="main" action="animal_infor.php" method="POST"  onsubmit="return validateform()">
        <h1>Inform Us</h1>
        <input type="text" name="types_of_animals" id="animal" value="<?php echo $row["types_of_animals"]; ?>" placeholder="Type of animal"><br><br>
        <input type="colo" name="color" placeholder="Color" id="colo" value="<?php echo $color; ?>"><br><br>
        <input type="gender" name="gender" placeholder="Gender" id="gender" value="<?php echo $gender; ?>"><br><br>
        <input type="disease" name="disease" placeholder="Disease" id="disease" value="<?php echo $disease; ?>"><br><br>
        <input type="location" name="location" placeholder="Location" id="location" value="<?php echo $location; ?>"><br><br>
        <input type="status" name="status" placeholder="status" id="status" value="<?php echo $status; ?>"><br><br>
        
<input type="submit" name="update" value="Update" id="inputid1" />
       
     </form>

<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM inform_us WHERE id='$id'");
  while($row=mysql_fetch_array($getselect))
  {
     $types_of_animals=$row["types_of_animals"];
    $color=$row["color"];
    $gender=$row["gender"];
    $disease=$row["disease"];
    $location=$row["location"];
    $status=$row["status"];
?>
 
 


      
<?php } } ?>
</body>
</html>