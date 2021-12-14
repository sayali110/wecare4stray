<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <title>Animal Info</title>
    <style>
        *{
            margin:0;
            padding:0;
           
         }
        body{
    
    background-image:url(img/img2.jpg);
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
        .main-div h1{
            display: flex;
            color:black;
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
        .main-div h1{
            font-size:18px;
            color:#000;
            text-align:center;
            margin-top:-20px;
            margin-bottom:20px;

        }
      table{
            
            border-collapse: collapse;
            background-color: #fff;
            box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
            border-radius: 10px;
            margin: 63%;
            padding: 200px;
            Background-attachment:fixed;
           
             }
        th,td{
                        
            border: 1px solid black;
            padding: 15px 40px;
            margin-left: 50%;
            text-align:center;
            color:black;
                        
             }
        th{
            
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
        
        
        .a1 a{
    padding: 10px;
    margin-top: 8px;
    margin-right: 10px;
    float: right;
    
   
}


.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
  border: 1px solid rgb(10, 10, 10);
}

@media screen and (max-width: 600px) {
   .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid rgb(10, 10, 10);  
  }
}   
    </style>
</head>
<body>


    <div class="main-div">
        <h1>List of animal infromation</h1>

    <div class="center-div">
        <div class="t1">
            <table>
                <thead>
                 <tr>
                 <!-- <th>Animal ID</th>  -->
				<th>Type of Animal</th> 
				<th>Color</th> 
                 <th>Gender</th> 
                <th>Disease</th>
                <th>Location</th>
                <th>Status</th>
                <th colspan="2">operation</th>
                <!-- <th>Status</th> -->
                
                </tr>
                </thead>

        
                    <tbody>
    <?php
    include 'connection.php';



$selectquery ="select * from inform_us";
$query = mysqli_query($con, $selectquery);
$nums=mysqli_num_rows($query);
 
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
                        
                        
    <!-- <td><?php echo $res['animal_id']; ?></td> -->
    <td><?php echo $res['types_of_animals']; ?></td>
    <td><?php echo $res['color']; ?></td>
    <td><?php echo $res['gender']; ?></td>
    <td><?php echo $res['disease']; ?></td>
    <td><?php echo $res['location']; ?></td>
    <td><?php echo $res['status']; ?></td>
    <td><a href="edit.php?$id=<?php echo $res['animal_id']; ?>" >Edit</a>
    <!-- class="card-icon fas fa-edit" aria-hidden="true"> -->
    </td>
    <td><a href="delete.php?$delete=<?php echo $res['animal_id']; ?>" >Delete</a>
    </td>
    <!-- <td><?php echo $res['status']; ?></td> -->

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