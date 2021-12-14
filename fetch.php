






<?php

$connect = mysqli_connect("localhost:3307", "root", "", "wecare4stray");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM inform_us
  WHERE types_of_animals LIKE '%".$search."%'
  OR color LIKE '%".$search."%' 
  OR gender LIKE '%".$search."%' 
  OR disease LIKE '%".$search."%' 
  OR location LIKE '%".$search."%' 
  OR status_1 LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "SELECT * FROM inform_us ORDER BY id";
}
$result = mysqli_query($connect, $query);
$id=0;
if(mysqli_num_rows($result) > 0)
{
 
  echo "<div class='table-responsive'>";
   echo "<table class='table table bordered'>";
   echo " <tr>";
    echo "<th> id</th>";
    echo" <th>types_of_animals</th>";
     echo "<th>Color</th>";
    echo " <th>Gender</th>";
     echo "<th>Disease</th>";
     echo "<th>Location</th>";
     echo "<th>Status</th>";
    echo " <th colspan='2'>oprations</th>";
    
    echo"</tr>";

 while($row = mysqli_fetch_array($result))
 {
   $id=$row['id'];
   $t=$row["types_of_animals"];
   $c=$row["color"];
   $g=$row["gender"];
   $d=$row["disease"];
   $l=$row["location"];
   $s=$row["status_1"];
 echo "<tr>";
   echo "<td>$id</td>";
   echo" <td>$t</td>";
   echo" <td>$c</td>";
   echo" <td>$g</td>";
   echo" <td>$d</td>";
   echo" <td>$l</td>";
   echo" <td>$s</td>";
  
   echo" <td><a href='edit.php?x=$id'>UPDATE</a></td>";
   echo" <td><a href='delete.php?y=$id'>DELETE</a></td>";    
   
   echo" </tr>";
 }
//  echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
