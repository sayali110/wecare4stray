<?php 



  // ob_start();
  // include("connection.php");
  // if(isset($_GET['id'])!="")
  // {
  // $delete=$_GET['id'];
  // $delete=mysql_query("DELETE FROM inform_us WHERE id='$delete'");
  // if($delete)
  // {
  //     header("Location:animal_infor.php");
  // }
  // else
  // {
  //     echo mysql_error();
  // }
  // }
  // ob_end_flush();


include 'connection.php';
$id =$_GET['y'];
if(isset($_GET['y'])){
  // DELETE FROM `inform_us` WHERE 0
   $sql2="DELETE from inform_us where id=$id";
   $result = mysqli_query($con,$sql2) or die (mysql_error());
    header('location:animal_infor.php');
}
?>
