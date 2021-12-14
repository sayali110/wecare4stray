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
        top:0;
         right:70%; 
         padding: 10px 13px;
         text-align: center;
         margin: 15px 22px;
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
   </div> -->
   <!-- <br />
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



</body>
</html>

<?php

$connect = mysqli_connect("localhost:3307", "root", "", "wecare4stray");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM adoption
  WHERE sr LIKE '%".$search."%'
  OR a_id LIKE '%".$search."%' 
  OR a_id LIKE '%".$search."%' 
  OR a_name LIKE '%".$search."%' 
  OR f_name LIKE '%".$search."%' 
  OR l_name LIKE '%".$search."%' 

 
 ";
}
else
{
 $query = "SELECT * FROM adoption ORDER BY id";
}
$result= mysqli_query($connect, $query);
$a_id=0;
if(mysqli_num_rows($result) > 0)
{
 
echo "  <div class='table-responsive'>";
 echo "  <table id='tblCustomers' class='table table bordered'>";
echo"<tr>";
echo " <th>Sr.</th> ";
echo"<th>Animal Id</th>"; 
echo" <th>Date</th> ";
echo"     <th>Animal Name</th>"; 
echo"   <th>First Name</th>";
echo"   <th>Last Name</th>";
echo"    <th>Gender</th>";
echo"    <th>Address</th>";
echo"    <th>Town</th>";
echo"    <th>Pincode</th>";
echo"    <th>Phone</th>";
echo"    <th>Email</th>";
echo"    <th>Age of user</th>";
echo"     <th>Reason to adopt</th>";
echo"     <th>Allergic to pet</th>";
echo"     <th>Pets</th>";
echo"     <th>Prepration to adopt</th>";
   
    
echo"    </tr>";
 
 while($row = mysqli_fetch_array($result))
 {
    echo" <tr>";

    echo" <td>'.$row["a_id"].'</td>";
    echo" <td>'.$row["date"].'</td>";
    echo" <td>'.$row["a_name"].'</td>";
    echo" <td>'.$row["f_name"].'</td>";
    echo" <td>'.$row["l_name"].'</td>";
    echo" <td>'.$row["gender"].'</td>";
    echo" <td>'.$row["address"].'</td>";
    echo" <td>'.$row["town"].'</td>";
    echo" <td>'.$row["pincode"].'</td>";
    echo" <td>'.$row["phone"].'</td>";
    echo" <td>'.$row["email"].'</td>";
    echo" <td>'.$row["age_of_user"].'</td>";
    echo" <td>'.$row["reason_to_adopt"].'</td>";
    echo" <td>'.$row["allergic_to_pet"].'</td>";
    echo" <td>'.$row["pets"].'</td>";
    echo" <td>'.$row["prepration_to_adopt"].'</td>";
   
    echo"  </tr>";
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}


?>