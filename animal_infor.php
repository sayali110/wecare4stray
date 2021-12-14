<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>animal info</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
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
    .container button {
        /* display:right; */
        position:absolute; 
        top:0;
         right:0; 
         padding: 10px 13px;
         text-align: center;
         margin: 15px 22px;
  /* border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;

  text-decoration: none;
  display: right;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer; */
}
#btnExport{
        position:absolute; 
        top:0;
         right:0; 
         padding: 10px 13px;
         text-align: center;
         margin: 15px 22px;
    }
    .button1{
         position:absolute; 
         top:0;
         right:150px; 
         padding: 5px 5px;
         text-align: center;
         margin: 1px 4px; 
    }
 th{
     color:green;
 }
 tr,td{
     color:white;
 }
 h2{
     color:blue;
     text-shadow: 2px 3px red;
 }
 </style>
 
 
 </head>
 <body>
  <div class="container">
   <br/>
   
   <h2 text-align="center">List of animal infromation</h2><br/>
   <form method="get" action="report.php">
    <button type="submit">Generate Report</button>
</form>
<form method="get" class="button1" action="inform1.php">
    <button type="submit">Insert</button>
</form>

   <!-- <button class="button">Export</button> -->
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Animal Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>