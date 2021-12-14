<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <title>User Feedback</title>
    <style>
        *{
            margin:0;
            padding:0;
            /* box-sizing:border-box; */
            
        
        }
        body{
    
    background-image:url(img/img2.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;

    }
        .main-div{
            width:100%;
            height:100vh:
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
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
            margin-left: 50px;
            margin-top: 60px;
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
            margin: 150%;
            padding: 200px;
           
                    }
                    th,td{
                       
                        border: 1px solid black;
            padding: 15px 55px;
            margin-left: 50%;
            text-align:center;
            color:black;
                        
                    }
        th{ 
            background-color:#2ecc71;
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
        /* a{
            text-decoration: none;
            display:flex;
            justify-content: center;
        } */
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
    <h1>List of User feedback</h1>
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
                 <th>f_id</th> 
				<th>username</th> 
				<th>email</th> 
                 <th>feedback</th> 
                
                
                </tr>
                </thead>
        
                    <tbody>
                    <?php
                    include 'connection.php';

// $con = mysqli_connect('localhost:3307','root');    
//     if($con){
//      echo "connection successful";
// } else{
//     echo "NO connection";
// }

//  mysqli_select_db($con, 'wecare4stray');

$selectquery ="select * from feedback";
$query = mysqli_query($con, $selectquery);
$nums=mysqli_num_rows($query);
 
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
                        
                        
    <td><?php echo $res['f_id']; ?></td>
    <td><?php echo $res['username']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['feedback']; ?></td>
    
    

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
