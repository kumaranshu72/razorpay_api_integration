<!DOCTYPE html>
<html lang="en">
<head>
  <title>Utkarsh'16 REGISTRATION FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="back.jpg" >
	<div class="row">
	<div class="col-md-2">

	</div>
	<div class="col-md-8">
  <div class="panel ">
	<div class="panel-heading panel-color" style="background-color: black;color: white;font-weight: bold;margin-top: 40px;">
		REGISTRATION FORM-Utkarsh'16
	</div>
	<div class="panel-body">
		<form method="POST" action="next.php" role="form">
			<div class="form-group">
				<label for="contactname"> TEAM NAME</label>
				<input type="text" class="form-control" id="contactname" placeholder="Enter name" name='contactname' required='required'>

			</div>
			<div class="form-group">
				<label for="contactemail">EMAIL</label>
				<input type="email" class="form-control" id="contactemail" placeholder="Enter Email" name='email' required='required'>

			</div>
			<div class="form-group">
				<label for="contactnumber">CONTACT NO.</label>
				<input type="number" class="form-control" id="contactnumber" placeholder="Enter Number" name='phnumber' required='required'>

      </div>
			<div class="form-group">
				<label for="Event ">Events</label>
        <input type="radio" id='event' value='nukkad' name='event' required="required">Nukkad
        <input type="radio" id='event' value='monoacting' name='event' required='required'>Mono Acting
        <input type="radio" id='event' value='skit' name='event' required='required'>Skit

			</div>
      <div class="form-group">
				<label for="contactnumber">No of Players in Team</label>
				<input type="number" class="form-control" id="player_detail" placeholder="Enter Number" name='Player_Details' required='required'>
      </div>
			<div class="form-group">
				<label for="contactmessage">ACCOMMODATION DETAILS</label>
				<textarea class="form-control" id="contactmessage" name='message' required='required'></textarea>

			</div>
			<input type="submit" class=" contact btn btn-default">

		</form>
		</div>
		</div>
	</div>
	</div>
	</div>
</body>
