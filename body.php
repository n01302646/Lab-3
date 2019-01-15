<?php
if(isset($_POST['NoOfMembers'])){
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$email = $_POST['email'];
	$numberofmembers = $_POST['NoOfMembers'];
	if($fname == '' OR $lname == ''){
		echo "Name Field Can't be left empty";
	}
	
	$phone = $_POST['phoneNo'];
	$phoneregex = "/[0-9]{10}/";
	if($phone == ""){
		echo "please enter phone number";
	}
	
	elseif(!prag_match($phone,$phoneregex))
	{
		echo "please enter valid phone number";
	}
	else{}
	
	$emailPattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
	if($email == ""){
		echo "please enter email";
	}
	
	elseif(!prag_match($email,$emailPattern))
	{
		echo "please enter valid email";
	}
	else{}
	if($numberofmembers == ''){
		echo "Number of members field Can't be left empty";
	}
}
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>BOOKING</title>
	<link rel="stylesheet" type="text/css" href="body.css"></link>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	</head>
<body>
<div form id="formDiv" >
<h1 style="background-color:#9EB847;width:100%;Text-align:center;margin:0px;">Contact Us</h1>
<form id="BookingForm" method="post">
<div class="form_description">
			<h2 style="margin-bottom:3px;">Booking Info</h2>
			<p style="font-size=25px;margin-top:0px;">Type in your info and we will get back to you asap.</p>
		</div>
<ul>
<li>
<label class="form-labels">Name </label>
<input class="form-inputs" type="text" value="<?php if(isset($_POST['f_name'])){ echo $_POST['f_name'];}?>" name="f_name" >
<input class="form-inputs" type="text" value="<?php if(isset($_POST['l_name'])){ echo $_POST['l_name'];}?>" name="l_name" ><br/>
<label class="tiny-labels">First Name </label>
<label id="lname" class="tiny-labels">Last Name </label>

</li>
<li>
<label class="form-labels">Phone </label>
<input type="text" class="form-inputs" name="phoneNo"  value="<?php if(isset($_POST['phoneNo'])){ echo $_POST['phoneNo'];}?>" placeholder="10 Digit" ">
</li>
<li>
<label class="form-labels" >Email </label>
<input type="email" class="form-inputs" name="email" placeholder="example@mail.com" >
</li>
<li>
<label class="form-labels">Booking Location </label>
<input type="radio" name="location" value="1" checked ><label style="font-weight:normal"> Andreis Indian Flavours At Bloor Street</label><br/>
<input type="radio" name="location" value="2"><label style="font-weight:normal"> Andreis Indian Flavours At Stephanie St</label>
</li>
<li>
<label class="form-labels">Booking Date </label>
<input class="form-inputs" type="date" name="date" name="Event Date" >
</li>
<li>
<label class="form-labels">Approx No. of Members</label>
<input type="text" class="form-inputs" name="NoOfMembers" >
</li>

<input type="submit" id="submit" value="Submit" >
  
</ul>	
</form>
</div>
</body>
</html>



	