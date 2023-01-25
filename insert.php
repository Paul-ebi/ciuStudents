<?php

 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`age`,`submittedby`) values ('$trn_date','$name','$age','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #990000;
  color: white;
}
            * {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
}

.login {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.login form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #990000;
  	color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #990000;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
	background-color: #ff0000;
  	transition: background-color 0.2s;
}
        </style>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon.ico">
</head>
<body>
<div class="topnav">
   
   <a href="index.php">Home</a>
   <a class="active" href="insert.php">+New Record</a>
   <a href="view.php">View Records</a>
   <a href="logout.php">Logout</a>
 </div>
 
 <div style="padding-left:16px">
 <a><img src="images/ciu_Logo.png"></a>
 <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
   <p>This is secure area.</p>
 </div>
<div class="form">

<div class="register">
<h2>Add New Record</h2>
<form enctype="multipart/form-data" action="add_recordz.php" method="post">
		   <p><input type="file"  accept="image/*" name="file_array[]" id="file"  onchange="loadFile(event)" style="display: none;" required></p>
		   <p><label for="file" style="cursor: pointer;">
	<p><img id="output" width="150" height="180" /></p>
	<p><label for="file" style="cursor: pointer;"><b><u> Upload Profile Photo</u></b></label></p>
	<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
	</script><br><br>
		  <label>First Name</label>
		  <div class="input-group input-group-icon">
			<input type="text" name="fname" placeholder="First Name" required/>
		  </div><br>
		  <label>Middle Name</label>
		  <div class="input-group input-group-icon">
			<input type="text" name="mname" placeholder="Middle Name" required/>
		  </div><br>
		  <label>Last Name</label>
		  <div class="input-group input-group-icon">
			<input type="text" name="lname" placeholder="Last Name" required/>
		  </div><br>
		  <label>Mobile Phone number</label>
		  <div class="input-group input-group-icon">
			<input type="tel" name="phone" placeholder="Phone Number" required/>
		  </div><br>
		  <label>Email Address</label>
		  <div class="input-group input-group-icon">
			<input type="email" name="email" placeholder="Email Adress" required/>
		  </div><br>
		  <label>Date of Birth</label>
		  <div class="input-group input-group-icon">
			<input type="date" name="dob" placeholder="Date of Birth" required/>
		  </div><br>
		  <label>Permanent Address</label>
		  <div class="input-group input-group-icon">
			<textarea name="c_address" rows="4" cols="50" placeholder="Current Address"  required></textarea>
		  </div><br>
		  <label>Marital Status</label>
		  <div class="input-group input-group-icon">
			<select name="marital_status" id="marital_status">
			  <option value="single">Single</option>
			  <option value="married">Married</option>
			  <option value="widowed">Widowed</option>
			  <option value="no_answer">Prefer NOT to say</option>
			</select>
		  </div><br>
		  <label>Nationality</label>
		  <div class="input-group input-group-icon">
			<select name="nationality">
			  <option value="">-- select one --</option>
			  <option value="afghan">Afghan</option>
			  <option value="albanian">Albanian</option>
			  <option value="algerian">Algerian</option>
			  <option value="american">American</option>
			  <option value="andorran">Andorran</option>
			  <option value="angolan">Angolan</option>
			  <option value="antiguans">Antiguans</option>
			  <option value="argentinean">Argentinean</option>
			  <option value="armenian">Armenian</option>
			  <option value="australian">Australian</option>
			  <option value="austrian">Austrian</option>
			  <option value="azerbaijani">Azerbaijani</option>
			  <option value="bahamian">Bahamian</option>
			  <option value="bahraini">Bahraini</option>
			  <option value="bangladeshi">Bangladeshi</option>
			  <option value="barbadian">Barbadian</option>
			  <option value="barbudans">Barbudans</option>
			  <option value="batswana">Batswana</option>
			  <option value="belarusian">Belarusian</option>
			  <option value="belgian">Belgian</option>
			  <option value="belizean">Belizean</option>
			  <option value="beninese">Beninese</option>
			  <option value="bhutanese">Bhutanese</option>
			  <option value="bolivian">Bolivian</option>
			  <option value="bosnian">Bosnian</option>
			  <option value="brazilian">Brazilian</option>
			  <option value="british">British</option>
			  <option value="bruneian">Bruneian</option>
			  <option value="bulgarian">Bulgarian</option>
			  <option value="burkinabe">Burkinabe</option>
			  <option value="burmese">Burmese</option>
			  <option value="burundian">Burundian</option>
			  <option value="cambodian">Cambodian</option>
			  <option value="cameroonian">Cameroonian</option>
			  <option value="canadian">Canadian</option>
			  <option value="cape verdean">Cape Verdean</option>
			  <option value="central african">Central African</option>
			  <option value="chadian">Chadian</option>
			  <option value="chilean">Chilean</option>
			  <option value="chinese">Chinese</option>
			  <option value="colombian">Colombian</option>
			  <option value="comoran">Comoran</option>
			  <option value="congolese">Congolese</option>
			  <option value="costa rican">Costa Rican</option>
			  <option value="croatian">Croatian</option>
			  <option value="cuban">Cuban</option>
			  <option value="cypriot">Cypriot</option>
			  <option value="czech">Czech</option>
			  <option value="danish">Danish</option>
			  <option value="djibouti">Djibouti</option>
			  <option value="dominican">Dominican</option>
			  <option value="dutch">Dutch</option>
			  <option value="east timorese">East Timorese</option>
			  <option value="ecuadorean">Ecuadorean</option>
			  <option value="egyptian">Egyptian</option>
			  <option value="emirian">Emirian</option>
			  <option value="equatorial guinean">Equatorial Guinean</option>
			  <option value="eritrean">Eritrean</option>
			  <option value="estonian">Estonian</option>
			  <option value="ethiopian">Ethiopian</option>
			  <option value="fijian">Fijian</option>
			  <option value="filipino">Filipino</option>
			  <option value="finnish">Finnish</option>
			  <option value="french">French</option>
			  <option value="gabonese">Gabonese</option>
			  <option value="gambian">Gambian</option>
			  <option value="georgian">Georgian</option>
			  <option value="german">German</option>
			  <option value="ghanaian">Ghanaian</option>
			  <option value="greek">Greek</option>
			  <option value="grenadian">Grenadian</option>
			  <option value="guatemalan">Guatemalan</option>
			  <option value="guinea-bissauan">Guinea-Bissauan</option>
			  <option value="guinean">Guinean</option>
			  <option value="guyanese">Guyanese</option>
			  <option value="haitian">Haitian</option>
			  <option value="herzegovinian">Herzegovinian</option>
			  <option value="honduran">Honduran</option>
			  <option value="hungarian">Hungarian</option>
			  <option value="icelander">Icelander</option>
			  <option value="indian">Indian</option>
			  <option value="indonesian">Indonesian</option>
			  <option value="iranian">Iranian</option>
			  <option value="iraqi">Iraqi</option>
			  <option value="irish">Irish</option>
			  <option value="israeli">Israeli</option>
			  <option value="italian">Italian</option>
			  <option value="ivorian">Ivorian</option>
			  <option value="jamaican">Jamaican</option>
			  <option value="japanese">Japanese</option>
			  <option value="jordanian">Jordanian</option>
			  <option value="kazakhstani">Kazakhstani</option>
			  <option value="kenyan">Kenyan</option>
			  <option value="kittian and nevisian">Kittian and Nevisian</option>
			  <option value="kuwaiti">Kuwaiti</option>
			  <option value="kyrgyz">Kyrgyz</option>
			  <option value="laotian">Laotian</option>
			  <option value="latvian">Latvian</option>
			  <option value="lebanese">Lebanese</option>
			  <option value="liberian">Liberian</option>
			  <option value="libyan">Libyan</option>
			  <option value="liechtensteiner">Liechtensteiner</option>
			  <option value="lithuanian">Lithuanian</option>
			  <option value="luxembourger">Luxembourger</option>
			  <option value="macedonian">Macedonian</option>
			  <option value="malagasy">Malagasy</option>
			  <option value="malawian">Malawian</option>
			  <option value="malaysian">Malaysian</option>
			  <option value="maldivan">Maldivan</option>
			  <option value="malian">Malian</option>
			  <option value="maltese">Maltese</option>
			  <option value="marshallese">Marshallese</option>
			  <option value="mauritanian">Mauritanian</option>
			  <option value="mauritian">Mauritian</option>
			  <option value="mexican">Mexican</option>
			  <option value="micronesian">Micronesian</option>
			  <option value="moldovan">Moldovan</option>
			  <option value="monacan">Monacan</option>
			  <option value="mongolian">Mongolian</option>
			  <option value="moroccan">Moroccan</option>
			  <option value="mosotho">Mosotho</option>
			  <option value="motswana">Motswana</option>
			  <option value="mozambican">Mozambican</option>
			  <option value="namibian">Namibian</option>
			  <option value="nauruan">Nauruan</option>
			  <option value="nepalese">Nepalese</option>
			  <option value="new zealander">New Zealander</option>
			  <option value="ni-vanuatu">Ni-Vanuatu</option>
			  <option value="nicaraguan">Nicaraguan</option>
			  <option value="nigerien">Nigerien</option>
			  <option value="north korean">North Korean</option>
			  <option value="northern irish">Northern Irish</option>
			  <option value="norwegian">Norwegian</option>
			  <option value="omani">Omani</option>
			  <option value="pakistani">Pakistani</option>
			  <option value="palauan">Palauan</option>
			  <option value="panamanian">Panamanian</option>
			  <option value="papua new guinean">Papua New Guinean</option>
			  <option value="paraguayan">Paraguayan</option>
			  <option value="peruvian">Peruvian</option>
			  <option value="polish">Polish</option>
			  <option value="portuguese">Portuguese</option>
			  <option value="qatari">Qatari</option>
			  <option value="romanian">Romanian</option>
			  <option value="russian">Russian</option>
			  <option value="rwandan">Rwandan</option>
			  <option value="saint lucian">Saint Lucian</option>
			  <option value="salvadoran">Salvadoran</option>
			  <option value="samoan">Samoan</option>
			  <option value="san marinese">San Marinese</option>
			  <option value="sao tomean">Sao Tomean</option>
			  <option value="saudi">Saudi</option>
			  <option value="scottish">Scottish</option>
			  <option value="senegalese">Senegalese</option>
			  <option value="serbian">Serbian</option>
			  <option value="seychellois">Seychellois</option>
			  <option value="sierra leonean">Sierra Leonean</option>
			  <option value="singaporean">Singaporean</option>
			  <option value="slovakian">Slovakian</option>
			  <option value="slovenian">Slovenian</option>
			  <option value="solomon islander">Solomon Islander</option>
			  <option value="somali">Somali</option>
			  <option value="south african">South African</option>
			  <option value="south korean">South Korean</option>
			  <option value="spanish">Spanish</option>
			  <option value="sri lankan">Sri Lankan</option>
			  <option value="sudanese">Sudanese</option>
			  <option value="surinamer">Surinamer</option>
			  <option value="swazi">Swazi</option>
			  <option value="swedish">Swedish</option>
			  <option value="swiss">Swiss</option>
			  <option value="syrian">Syrian</option>
			  <option value="taiwanese">Taiwanese</option>
			  <option value="tajik">Tajik</option>
			  <option value="tanzanian">Tanzanian</option>
			  <option value="thai">Thai</option>
			  <option value="togolese">Togolese</option>
			  <option value="tongan">Tongan</option>
			  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
			  <option value="tunisian">Tunisian</option>
			  <option value="turkish">Turkish</option>
			  <option value="tuvaluan">Tuvaluan</option>
			  <option value="ugandan">Ugandan</option>
			  <option value="ukrainian">Ukrainian</option>
			  <option value="uruguayan">Uruguayan</option>
			  <option value="uzbekistani">Uzbekistani</option>
			  <option value="venezuelan">Venezuelan</option>
			  <option value="vietnamese">Vietnamese</option>
			  <option value="welsh">Welsh</option>
			  <option value="yemenite">Yemenite</option>
			  <option value="zambian">Zambian</option>
			  <option value="zimbabwean">Zimbabwean</option>
			</select>
		  </div><br>
		  <label>Department</label>
		  <div class="input-group input-group-icon">
			<select name="department" id="department">
			  <option value="">-- select one --</option>
			  <option value="dentistry">Dentistry</option>
			  <option value="plant_productionT">Plant Production and Technologies</option>
			  <option value="accounting_finance">Accounting and Finance</option>
			  <option value="architecture">Architecture</option>
			  <option value="artificial_intelligence_engineering">Artificial Intelligence and Engineering</option>
			  <option value="bioengineering">Bioengineering</option>
			  <option value="business_administration">Business Administration</option>
			  <option value="child_development">Child Development</option>
			</select>
		  </div><br>
		<label>Upload Passport Datapage/ ID FrontPage</label>
		<div class="input-group input-group-icon">
		<input type="file" name="file_array[]" required>
		</div><br>
		<div class="row">
		  <h4>Terms and Conditions</h4>
		  <div class="input-group">
			<input id="terms" name="terms" type="checkbox" required/>
			<label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
		  </div><br>
		</div>
		  <input type="submit" name="submit" class="button" value="Submit">
		  <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>-->
	  </form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
