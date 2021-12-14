
<?php
if(isset($_POST['fname'])){
$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "";
} else{
    echo "NO connection";
}

 mysqli_select_db($con, 'ngo');

 $fname =$_POST['fname'];
 $lname =$_POST['lname'];
 $email =$_POST['email'];
 $amount =$_POST['amount'];
 $view =$_POST['view'];
 $receipt =$_POST['receipt'];
 $anon =$_POST['anon'];
 

 $query = "insert into donate (fname,lname,email,amount,view,receipt,anon)  values ('$fname','$lname','$email','$amount','$view','$receipt','$anon')";
 mysqli_query($con, $query);
 mysqli_close($con);
 header('location:ngo.html');
}
?>














<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
       <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
        <style>
            body{
                background-image: url(img/img51.jpg); 
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            Background-attachment:fixed;
            }
.donation-container {
	height: 1000px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	font-size: 12px;
	text-transform: uppercase;
	margin-top: 20px;
	position: fixed;
	left:35%;
	top:1%;
}

.donation-box {
	width: 390px;
	height: 386px;
	background-color: #F5F5F5;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	position: relative;
	margin-left: auto;
	margin-right: auto;
    overflow: hidden;
    transition: all 0.15s ease-out;
}

.donation-box .title {
	background-color: #640606;
	width: 100%;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 15px;
}

.donation-box .donate-button {
	background-color: #640606;
	width: 100%;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 18px;
	bottom: 0px;
	position: absolute;
	cursor: pointer;
	font-weight: 800;
}

.donation-box .fields {
	width: 59%;
	display: block;
	position: absolute;
	top: 60px;
	left: 15px;
}

.donation-box .fields input {
	width: 90%;
	font-size: 17px;
	padding: 10px;
	border-radius: 4px;
	border-width: 0px;
	color: #5C5C5C;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	margin-bottom: 10px;
	}

.input-placeholder {
   
   font-size: 15px;
}



.donation-box .amount {
	width: 30%;
	display: block;
	position: absolute;
	top: 60px;
	right: 15px;
}

.donation-box .amount .button {
	width: 100%;
	background-color: gray;
	margin-bottom: 10px;
	text-align: center;
	color: white;
	padding: 15px 0px 15px 0px;
	border-radius: 4px;
	font-size: 20px;
	cursor: pointer;
	transition: 200ms background-color;
}

.donation-box .amount .button:hover {
	background-color: #393939;
}

.donation-box .amount .button.selected {
	background-color: #393939;
}

.donation-box .amount .button input {
	min-width: 34px;
	font-size: 20px;
	font-weight: 500;
	border: none;
	background-color: transparent;
	color: white;
	font-family: Montserrat, sans-serif;
	font-size: 20px;
	font-stretch: normal;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	border-bottom: 2px dashed white;
	transition: all 0.15s ease-out;
}

.set-amount {
	max-width: 96px;
}

.switch {
  position: absolute;
  top: 190px;
  left: 15px;
  margin: 20px auto;
  height: 26px;
  width: 58.5%;
  background: white;
  border-radius: 3px;
}

.switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 49%;
  line-height: 26px;
  font-size: 11px;
  color: #5C5C5C;
  text-align: center;
  cursor: pointer;
  font-weight: bold;
}
.switch-label:active {
  font-weight: bold;
}

.switch-label-off {
  padding-left: 2px;
}

.switch-label-on {
  padding-right: 2px;
}

.switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.65);
  transition: 0.15s ease-out;
}
.switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 114px;
}

.switch-selection {
  display: block;
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  width: 49%;
  height: 22px;
  background: #65bd63;
  border-radius: 3px;
  background-color: grey;
  transition: left 0.15s ease-out;
}

.checkboxes {
	position: absolute;
	top: 242px;
	left: 13px;
}

.checkboxes label {
	position: relative;
	top: -8px;
	font-size: 13px;
	color: gray;
}

.checkbox {
	-webkit-appearance: none;
	background-color: #fafafa;
	border: 1px solid #C1D82F;
	padding: 9px;
	border-radius: 3px;
	display: inline-block;
	position: relative;
	transition: all 0.15s ease-out;
}



.checkbox:checked {
	background-color: #C1D82F;
	border: 1px solid #C1D82F;
	color: white;
}

.checkbox:checked:after {
	content: '\2714';
	font-size: 14px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: white;
}


body p{
	color: rgb(26, 7, 7);
	text-shadow: 2px 2px rgb(240, 226, 36);
	position: absolute;
	bottom: 5px;
	top: 60%;
	right: 200px;
	font-size: 60px;
	font-family: cursive;
	
    }
    #r1{
        margin: 10px;
        padding: 10px;
    }
    #r2{
        margin: 10px;
        padding: 10px;
    }
    #r3{
        margin: 10px;
        padding: 10px;
    }
    #r4{
        margin: 10px;
        padding: 10px;
    }
		</style>
		
      </head>
      <body>
		  <form action=""  onSubmit="return validateForm();" method="post">
		<p>To Give Street Animals<br>A Better Life..</p>
		
      <div class="donation-container">
                  
                  <div class="donation-box">
                      <div class="title">Donation Information</div>
                      
                      <div class="fields">
                          <input type="text" name="fname" id="firstName" placeholder="First Name"> </input>
                          <input type="text" name="lname" id="lastName" placeholder="Last Name"> </input>
                          <input type="text" name="email" id="email" placeholder="Email"> </input>
                      </div>
                      
                     

                      <div class="amount"> Amount :<span style="color: red;"> *</span><br>
                      <input type="radio"  id="r1" name="amount" value="₹50"> ₹50 <br>
                      <input type="radio"  id="r2" name="amount" value="₹100">₹100<br>
                      <input type="radio"  id="r3" name="amount" value="₹250"> ₹250<br>
                      <input type="radio"  id="r4" name="amount" value="₹500">₹500<br>
                      </div>

                      <div class="switch">
                          <input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
                          <label for="one-time" class="switch-label switch-label-off">One-Time</label>
                          <input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
                          <label for="monthly" class="switch-label switch-label-on">Monthly</label>
                          <span class="switch-selection"></span>
                      </div>
                      
                      <div class="checkboxes">
                          <input type="checkbox" name="receipt" id="receipt" class="checkbox" />
                          <label for="receipt">Email Me A Receipt</label>
                          <br />
                          <input type="checkbox" name="anon" id="anon" class="checkbox" />
                          <label for="anon">Give Anonymously</label>
                          
                         
                      </div>              
                      
                     
                
                      
                      <input type="submit" class="donate-button" value="Donate"> 

                      <script type="text/javascript">
                          function validateForm() {
                          if (!validateEmail(document.getElementById('email').value.trim())) {
                          alert('Email must be a valid email address!');
                          return false;
                          }
                          if (!document.getElementById('r1').checked && !document.getElementById('r2').checked && !document.getElementById('r3').checked && !document.getElementById('r4').checked ) {
                          alert('Donation Amount is required!');
                          return false;}
                          return true;
                          }
                          function isEmpty(str) { return (str.length === 0 || !str.trim()); }
                          function validateEmail(email) {
                          var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
                          return isEmpty(email) || re.test(email);
                          }
                          </script>
                  


					 
					  
                  
              </div>
            </form>
            







</body>
</html>