<?php
  $con = mysqli_connect("localhost:3307","root","","wecare4stray");
  if($con){
    echo "";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        *{
            margin:0;
            padding:0;
           
         }
        body{
        
    /* background-image:url(img/img2.jpg); */
    background-image: radial-gradient(circle farthest-corner at 10% 20%, white 14.2%,gray 89.5%);
    height: 100vh;
    background-size: cover;
    background-position: center;
    Background-attachment:fixed;

    }
    #btnExport{
        position:absolute; 
        top:10%;
         right:40%; 
         padding: 10px 13px;
         /* text-align: center; */
         margin: 15px 22px;
    }
    table{ 
        display: center;
        left:10%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
            border-radius: 10px;
            /* margin-left: auto;
            margin-right: auto; */
            /* margin:5%; */
            /* padding:12px; */
            Background-attachment:fixed;
    }
    th,td{
        border: 1px solid black;
            padding: 15px 40px;
            margin-left: 50%;
            text-align:center;
            color:black;
    }
    h2{
        margin: 5px;
        text-align:center;
            /* margin:10px;
            
            font-size:30px;
            
            margin-top:30px; */
            /* color:black; */
            color:blue;
            text-shadow: 2px 3px red;
    }
    
 </style>
</head>
<body>


<div class="container">
   <br/>
   <h2 text-align="center">List of animal infromation</h2><br/>
   <!-- <form method="get" action="report1.php">
    <button type="submit">Generate REPORT</button>
</form> -->


   <!-- <button class="button">Export</button> -->
   <!-- <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Animal Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div> -->



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
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table id="tblCustomers" class="table table bordered">
    <tr>
     <th>Type of Animal</th>
     <th>Color</th> 
     <th>Gender</th>
     <th>Disease</th>
     <th>Location</th>
     <th>Status</th>
   
    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '<tr>
    <td>'.$row["types_of_animals"].'</td>
    <td>'.$row["color"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["disease"].'</td>
    <td>'.$row["location"].'</td>
    <td>'.$row["status_1"].'</td>
   
   </tr>';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}


?>
</body>
</html>