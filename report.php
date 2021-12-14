  
<?php
  $con = mysqli_connect("localhost:3307","root","","wecare4stray");
  if($con){
    echo "";
  }
?>
<html>
  <head>
  <style>
      /* *{
        margin:0;
            padding:0;
      } */
        body{
        
    /* background-image:url(img/img2.jpg); */
    background-image: radial-gradient(circle farthest-corner at 10% 20%, white 14.2%,gray 89.5%);
    height: 100%;
    background-size: cover;
    background-position: center;
    Background-attachment:fixed;
  
    }
    #btnExport{
        position:absolute; 
        top:0;
         right:70%; 
         padding: 10px 13px;
         text-align: center;
         margin: 15px 22px;
    }
    h2{
      margin:10px;
            /* left:20%; */
            font-size:30px;
            text-align:center;
            margin-top:20px;
            /* color:black; */
            color:blue;
            text-shadow: 2px 3px red;
    }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['types_of_animals', 'location'],
         <?php
         $sql = "SELECT * FROM infrom_us";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['types_of_animals']."',".$result['location']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Students and their contribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div id="piechart" ></div>

    <h2 text-align="center">List of animal infromation</h2><br/>
    
    <input type="button" id="btnExport" value="Export" />
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("animal-details.pdf");
                }
            });
        });
    </script>
  



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
   echo "<table class='table table bordered' style=border-collapse:collapse;
   background-color: #fff;
   box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
   border-radius: 10px;
   margin: 0%;
   padding: 0px;
   Background-attachment:fixed;>";
   echo " <tr style=''>";
    echo "<th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;'> id</th>";
    echo" <th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;'>types_of_animals</th>";
     echo "<th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;'>Color</th>";
    echo " <th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;'>Gender</th>";
     echo "<th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;'>Disease</th>";
     echo "<th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;' >Location</th>";
     echo "<th style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:green;' >Status</th>";
    
    
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
   echo "<td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$id</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$t</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$c</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$g</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$d</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$l</td>";
   echo" <td style='border: 1px solid black;
    padding: 15px 40px;
    margin-left: 50%;
    text-align:center;
    color:black;'>$s</td>";
  
  //  echo" <td style='border: 1px solid black;
  //   padding: 15px 40px;
  //   margin-left: 50%;
  //   text-align:center;
  //   color:black;'><a href='edit.php?x=$id'>UPDATE</a></td>";
  //  echo" <td style='border: 1px solid black;
  //   padding: 15px 40px;
  //   margin-left: 50%;
  //   text-align:center;
  //   color:black;'><a href='delete.php?y=$id'>DELETE</a></td>";    
   
   echo" </tr>";
 }
//  echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
</body>
</html>