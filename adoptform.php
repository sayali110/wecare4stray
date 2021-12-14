<?php
// include 'connection.php';
if(isset($_POST['a_id'])){
	$con = mysqli_connect('localhost:3307','root');    
    if($con){
     echo "connected";
} else{
    echo "NO connection";
}

 mysqli_select_db($con, 'wecare4stray');

 $a_id=$_POST['a_id'];	
 $date=$_POST['date'];
 $a_name =$_POST['a_name'];
 $f_name =$_POST['f_name'];
 $l_name =$_POST['l_name'];
 $gender =$_POST['gender'];
 $address =$_POST['address'];
 $town =$_POST['town'];
 $pincode =$_POST['pincode'];
 $phone =$_POST['phone'];
 $email =$_POST['email'];
 $age_of_user =$_POST['age_of_user'];
 $reason_to_adopt =$_POST['reason_to_adopt'];
 $allergic_to_pet =$_POST['allergic_to_pet'];
 $pets =$_post['pets'];
 $prepration_to_adopt=$_POST['prepration_to_adopt'];
 
//  INSERT INTO `adoption` (`sr`, `a_id`, `date`, `a_name`, `f_name`, `l_name`, `gender`, `address`, `town`, `pincode`, `phone`, `email`, `age_of_user`, `reason_to_adopt`, `allergic_to_pet`, `pets`, `prepration_to_adopt`) VALUES ('5', 'cow_02', '2020-12-12', 'cow', 'akash', 'gupta', 'female', 'rj', 'pune', '243425', '1363403576', 'a@gmail.com', '22', 'gift', 'no', '1', 'sgfisjdg');

 $query = "insert into adoption(a_id,date, a_name, f_name, l_name, gender, address, town,pincode,phone,email,age_of_user,reason_to_adopt,allergic_to_pet,pets,prepration_to_adopt)
 values ('$a_id','$date','$a_name','$f_name','$l_name','$gender','$address','$town','$pincode','$phone','$email','$age_of_user','$reason_to_adopt','$allergic_to_pet','$pets','$prepration_to_adopt')";


//  INSERT INTO `adoption`(`sr`, `a_id`, `date`, `a_name`, `f_name`, `l_name`, `gender`, `address`, `town`, `pincode`, `phone`, `email`, `age_of_user`, `reason_to_adopt`, `allergic_to_pet`, `pets`, `prepration_to_adopt`) VALUES ('1','cat_01','12-jan-2020','cat','sayali','kotkar','female','samrat nagar','dhule','424002','9881100590','s@gmail.com','21','gift','no','1','sdfguj')
 mysqli_query($con, $query);
 header('location:ngo.html');
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Underdog&display=swap');
@import url('https://fonts.googleapis.com/css?family=Varela+Round&display=swap');

html, body {
	background-color: #0c0c0c;
	font-family: 'Varela Round', sans-serif;
}

/* header styling */

header {
	display: flex;
	flex-direction: column;
	justify-content: flex-end;
	align-items: flex-start;
}

#title {
	color: #1acea7;
	font-size: 4.42em;
	padding: 1px 55px;
	
}

#top-pic {
	display: block;
	margin-left: auto;
	justify-content: flex-end;
	min-width: 50%;
	max-width: 70%;

}

/* main styling */

#survey-form {
	display: flex;
	flex-direction: column;
	justify-content: stretch;
	opacity: 0.9;
	color: #120901;
	font-size: 1.2em;
	margin: 0px 50px;
	border: 2px solid #120901;
	border-radius: 5px;
	background-color: #94f5ed;
}

#form-description {
	font-size: 1.1em;
	text-align: center;
}

form, #todays-date > select, input, textarea, #dropdown {
	padding: 5px;
	margin-left: 5px;
	font-size: 18px;
}

.main-label {
	display: flex;
	justify-content: stretch;
	font-size: 1.1em;
	font-weight: bold;
	padding: 5px;
}

form > div {

	padding: 5px;
	margin: 1px 5% 15px 5%;
}

ul {
	padding-left: 0px;
}

li{
	padding: 2px 2px 2px 5px;
	display: inline-block;
	list-style: none;
}

input {
	margin: 5px;
}

#email-phone > input, #Name > input, #first-last-name > input, #address > input {
	width: 90%;
}
#gender {
	display: flex;
	justify-content: stretch;
}

#housing {
	display: flex;
	flex-direction: column;
}

#housing > select {
	margin: 15px;
	width: 90%;
}

textarea {
	resize: none;
	width: 100%;
}

#button {
	display: flex;
	justify-content: center;
}

#submit {
	color: #120901;
	background: #ffa366;
	border: 2.5px solid #120901;
	border-radius: 15px;
	cursor: pointer;
	margin: 10px;
	font-size: 2.02em;
	font-weight: bold;
	padding: 22px;
}

#submit:hover {
	background: #FFFFFF;
    transition-duration: 0.4s;
}
/* above footer styling */

#above-footer {
	display: flex;
	flex-direction: column;
	justify-content: center;
	padding: 50px;
}

#bottom-pic {
	display: block;
	margin-left: auto;
	max-width: 70%;
}

/* footer */

#coded-by {
	flex: 1;
	font-size: 1.3em;
	font-weight: bold;
	margin: 1em;
	padding: 5px;
	text-align: center;
}

a {
	color: #fd6907;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
	color: #ffa366;
	animation-duration: 0.5s;
}

/* footer */

footer {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-around;
	text-align: center;
	width: 100%;
	padding: 15px;
}

#copyright {
	color: #120901;
	font-size: 15px;
}

.fab {
	opacity: 0.9;
	font-size: 15px;
	color: #120901;
}

.footer-social .fab:hover {
	color: #13dee6;
    transition-duration: 0.6s;
}

.list-inline {
	flex-direction: row;
	/* justify-coflexntent: center; */

}

.list-inline-item {
	padding: 0 10px;
}

@media (min-width: 760px) and (min-device-width: 760px) {
	header {
		flex-direction: row;
		align-items: flex-end;
	}

	#title {
		font-size: 6.42em;
	}

	#email-phone > input, #dogName > input, #first-last-name > input, #address > input {
		width: auto;
	}

	.main-label {
		display: inline-block;
	}

	#copyright {
		font-size: 20px;
	}

	.fab {
		font-size: 25px;
	}
  
  #housing > select {
	width: 300px;
}
}

	</style>
	
</head>
<body>
    
   
        
<header>
	<h1 id="title"> Adoption Form</h1>
<img id="top-pic" src="img/WECARE4STRAY.png">
	
</header>

<!-- form -->

<main>
	<form id="survey-form" method="post">

		<p id="form-description"><em>Thank you for wishing to offer a rescue dog a home! Please could you complete the form below and submit it to us. </em></p>
		</div>
		 <!-- Animal id -->
		 <div class="id">
		 <label class="main-label"  for="todays-date">Animal Id: </label>
		 <input type="text" name="a_id" id="dogNameLabel" placeholder="Animal Id" required> 
		<!-- todays date -->

		<div id="todays-date">
			<label class="main-label" name="date" for="todays-date">Today's Date: </label>
			<select name="year">
				<option value="" e="year">Year</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
				
			</select>
			
			<select name="month">
				<option value="month">Month</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			
			<select name="day">
				<option value="day">Day</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
		</div>

		<!-- Animal name -->

		<div id="Name">
			<label class="main-label" for="dogNameLabel">Name of the Animal you wish to adopt: </label>
			<input type="text" name="a_name" id="dogNameLabel" placeholder="Animal Name" required>
		</div>


		<!--User name -->

		<div id="first-last-name">
			<label class="main-label" id="name-label">First Name: </label>
			<input type="text" name="f_name" id="name" placeholder="John" required>

			<label class="main-label">Last Name: </label>
			<input type="text" name="l_name" id="lastName" placeholder="Smith" required>
		</div>

		<!-- gender -->
		<div id="gender">
			<input type="radio" id="male" name="gender" value="Male" required>
			<label class="main-label" name="gender" for="male">Male</label>

			<input type="radio" id="female" name="gender" value="Female" required>
			<label class="main-label" name="gender" for="female">Female</label>
		</div>

		<!-- address  -->

		<div id="address">
			<label class="main-label" for="address1">Address: </label>
			<input type="text" id="address1" name="address" size="30" placeholder="Enter your address here">


			<label class="main-label" for="town">Town: </label>
			<input type="text" id="town" 
			name="town" 
			size="15" placeholder="Your town">

			<label class="main-label" for="postcode">Postcode: </label>
			<input type="text" id="postcode" name="pincode" size="10" placeholder="Postcode">

		</div>

		<!-- email / phone / age -->

		<div id="email-phone">
			<label class="main-label" id="phone-label" for="phone">Phone: </label>
			<input type="tel" id="phone" name="phone" placeholder="e.g. +44 7675 403 665">

			<label class="main-label" id="email-label" for="email">Email: </label>
			<input type="email" id="email" name="email" placeholder="e.g. youremail@example.co.uk" required size="35">

		</div>

		<!-- age -->

		<div id="age">
			<ul><label class="main-label" for="age">Age of applicant:</label></ul>

			<li><input type="radio" id="u18" name="age_of_user" value="Under 18" required>
				<label for="u18">Under 18</label></li>

			<li><input type="radio" id="18" name="age_of_user" value="18 - 24" required>
				<label for="18">18 - 24</label></li>

			<li><input type="radio" id="25" name="age_of_user" value="25 - 34" required>
				<label for="25">25 - 34</label></li>

			<li><input type="radio" id="35" name="age_of_user" value="35 - 44" required>
				<label for="35">35 - 44</label></li>

			<li><input type="radio" id="45" name="age_of_user" value="45 and older" required>
				<label for="45">45 and older</label></li>

		</div>

		<!-- why dog? -->

		<div id="why">
			<ul><label class="main-label" for="why">Why do you want to adopt a dog? Please check all that apply:</label></ul>
			<li><input type="checkbox" name="reason_to_adopt" id="companion" value="companion">
				<label for="companion">Pet & Companion</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="gift" value="gift">
				<label for="gift">Gift</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="hunting" value="hunting">
				<label for="hunting">Hunting Dog</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="breeding" value="breeding">
				<label for="breeding">Breeding Dog</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="guard" value="guard">
				<label for="guard">Guard Dog</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="senior" value="senior">
				<label for="senior">For a Senior</label></li>

			<li><input type="checkbox" name="reason_to_adopt" id="child" value="child">
				<label for="child">For a Child</label></li>

		</div>

		<!-- allergies -->

		<div id="allergies">
			<ul><label class="main-label" for="allergies">Is anyone in your household allergic to pets?</label></ul>

			<li><input type="radio" id="yes" name="allergic_to_pet" value="Yes" required>
				<label for="yes">Yes</label></li>

			<li><input type="radio" id="no" name="allergic_to_pet" value="No" required>
				<label for="no">No</label></li>

			<li><input type="radio" id="sometimes" name="allergic_to_pet" value="Sometimes" required>
				<label for="sometimes">Sometimes</label></li>
		</div>

		<!-- pets in household -->

		<div id="pets-household">
			<ul><label class="main-label" id="number-label">How many pets are already in your household?
			</label></ul>
			<li><input type="number" name="pets" id="number" min="1" max="10" placeholder="0"></li>
		</div>

		

		<!-- comments -->

		<div id="prepare">
			<label class="main-label">How did you prepare yourself?</label>
		</div>
		<div id="textarea">
    	<textarea id="comments"
			  rows="10" cols="70" name="prepration_to_adopt" placeholder=" Write here how did you prepare yourself for adoption."></textarea>
		</div>

		<!-- submit button -->
		<div id="button">
			<button type="submit" id="submit"  onclick="return btnClick()">Submit</button>
		</div>


	</form>

    
		</main>
		<script>
        document.getElementById("submit").addEventListener('submit', btnClick);
        
        function btnClick() {
            alert ("Thank you for saving a life by adopting!");
        }
        </script>
    
</body>
</html>