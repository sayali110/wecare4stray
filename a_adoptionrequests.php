<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <title>Adoption Requests</title>
    <style>
        *{
            margin:0;
            padding:0;
           
         }
        body{
    
    /* background-image:url(img/img2.jpg); */
background-color: black;
    /* background-image: radial-gradient(circle farthest-corner at 10% 20%, white 14.2%,gray 89.5%); */
    height: 100vh;
    background-size: cover;
    background-position: center;
    Background-attachment:fixed;

    }
        .main-div{
           width:100%;
           display: center;
           flex-direction: column;
           justify-content: center;
           align-items: center;
            
        }
        h1{
            margin:10px;
            /* left:20%; */
            font-size:30px;
            text-align:center;
            margin-top:20px;
            /* margin-bottom:20px; */
            color:blue;
            text-shadow: 2px 3px red;
        }
        .center-div{
            width: 90px;
            height: 80vh;
            background: linear-gradient(left, #5DADE2 , #00c6ff);
            padding: 20px 0 0 0;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            border-radius:10px;
        }
        .t1{
            margin-left: 1px;
            margin-top: 10px;
        }
        /* .main-div h1{
            font-size:18px;
            color:#000;
            text-align:center;
            margin-top:-20px;
            margin-bottom:20px;

        } */
      table{
            
            border-collapse: collapse;
            background-color: #fff;
            /* box-shadow:0 10px 20px 0 rgba(0,0,0,.03); */
            border-radius: 10px;
            margin: 10%;
            /* padding: -14px; */
            /* Background-attachment:fixed; */
           
             }
        th,td{
                        
            border: 1px solid black;
            padding: 15px 40px;
            margin-left: 50%;
            text-align:center;
            color:black;
                        
             }
        th{
            color:green;
            text-transform: uppercase;
            font-weight:500;
          }
        td{
            font-size: 13px;

        }
        .fa{
            font-size:18px;
              
        }
        .fa-edit{
            color: #63c76a;
        }
        .fa-trash{
            color: #ff0000;
        }
        .main-div button{
         position:absolute; 
         top:10;
         right:150px; 
         padding: 5px 5px;
         text-align: center;
         margin: 10px 20px; 
    }
    .topnav {
  overflow: hidden;

}






.topnav input[type=text] {
    left:20%;
  padding: 6px;
  margin-top: 7px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
 
  padding: 6px 10px;
  margin-top: 7px;
  margin-right: 1090px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
 .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
     
    </style>
</head>
<body>
<h1>List of Adoption Requests</h1>
    <div class="main-div">

    <div class="topnav">
 
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
        
        <form method="get" action="report2.php">
    <button type="submit">Generate REPORT</button>
</form>


    <div class="center-div">
        <div class="t1">
            <table>
                <thead>
                 <tr>
                 <th>Sr.</th> 
				<th>Animal Id</th> 
				<th>Date</th> 
                 <th>Animal Name</th> 
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Town</th>
                <th>Pincode</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Age of user</th>
                <th>Reason to adopt</th>
                <th>Allergic to pet</th>
                <th>Pets</th>
                <th>Prepration to adopt</th>
                <th colspan="2" >operation</th>

                
                </tr>
                </thead>
        
                    <tbody>
    <?php
    include 'connection.php';



$selectquery ="select * from adoption";
$query = mysqli_query($con, $selectquery);
$nums=mysqli_num_rows($query);
 
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
                        
                        
    <td><?php echo $res['sr']; ?></td>
    <td><?php echo $res['a_id']; ?></td>
    <td><?php echo $res['date']; ?></td>
    <td><?php echo $res['a_name']; ?></td>
    <td><?php echo $res['f_name']; ?></td>
    <td><?php echo $res['l_name']; ?></td>
    <td><?php echo $res['gender']; ?></td>
    <td><?php echo $res['address']; ?></td>
    <td><?php echo $res['town']; ?></td>
    <td><?php echo $res['pincode']; ?></td>
    <td><?php echo $res['phone']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['age_of_user']; ?></td>
    <td><?php echo $res['reason_to_adopt']; ?></td>
    <td><?php echo $res['allergic_to_pet']; ?></td>
    <td><?php echo $res['pets']; ?></td>
    <td><?php echo $res['prepration_to_adopt']; ?></td>
    echo" <td><a href='edit2.php?x=$id'>UPDATE</a></td>";
   echo" <td><a href='delete1.php?y=$id'>DELETE</a></td>"; 

    </tr>



<?php
}

?>


                    
                  
</tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>
