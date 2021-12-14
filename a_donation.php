<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <title>Donation</title>
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
        /* .main-div h1{
            display: flex;
            color:black;
        } */
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
        h1{
            margin:10px;
            /* left:20%; */
            font-size:30px;
            text-align:center;
            margin-top:20px;
            color:black;

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
            font-size:15px;
              
        }
        .fa-edit{
            color: #63c76a;
        }
        .fa-trash{
            color: #ff0000;
        }
     





.topnav {
  /* overflow: hidden; */
  background-color: #e9e9e9;
}




.topnav .search-container {
  
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 25px;
  border: none;
}

.topnav .search-container button {
 
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 10px;
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
<h1>Doners List</h1>
    <div class="main-div">
       
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
    <div class="center-div">
        <div class="t1">
            <table>
                <thead>
                 <tr>
                     <th>sr.no</th>
                 <th>First Name</th> 
				<th>Last Name</th> 
				<th>Email</th> 
                 <th>Amount</th> 
                <th>View</th>
                <th>Receipt</th>
                <th>Anonymously</th>
                
                
                </tr>
                </thead>
        
                    <tbody>
    <?php
  

   $con = mysqli_connect('localhost:3307','root');    
       if($con){
        echo "";
   } else{
       echo "NO connection";
   }
   
    mysqli_select_db($con, 'ngo');
   


$selectquery ="select * from donate";
$query = mysqli_query($con, $selectquery);
$nums=mysqli_num_rows($query);
 
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
                        
                        
    <td><?php echo $res['sr.no']; ?></td>
    <td><?php echo $res['fname']; ?></td>
    <td><?php echo $res['lname']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['amount']; ?></td>
    <td><?php echo $res['view']; ?></td>
    <td><?php echo $res['receipt']; ?></td>
    <td><?php echo $res['anon']; ?></td>
   
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
