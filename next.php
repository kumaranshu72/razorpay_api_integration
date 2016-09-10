<?php
    require_once 'include/connect.php';
    $teamname=htmlentities($_POST['contactname']);
    $email=htmlentities($_POST['email']);
    $phone=htmlentities($_POST['phnumber']);
    $event=htmlentities($_POST['event']);
    $message=htmlentities($_POST['message']);
    $player=htmlentities($_POST['Player_Details']);
    $price=100*$player;
    $price_se=$price*100;
    $query="INSERT INTO participants VALUES ('','$teamname','$email','$phone','$event','$message','0','NONE')";
    $query_run=mysqli_query($conn,$query);
    $data=array("email"=>"$email","phone"=>"$phone","price"=>"$price_se","tname"=>"$teamname","event1"=>"$event");
    json_encode($data);
    if(isset($_POST['paymentId']))
      echo $_POST['paymentId'];

?>
<html>
<head>
  <Title>Payment details</title>
  <style>
div.main {width:550px;
  height:200px;
  margin-top:100px;
  border-style:groove;
  padding:0px;}

#h {  margin-top:-10px;
 margin-left:5px;
 padding:0px;
}

#input { padding:0px;
  margin-top:20px;

  }
</style>
</head>
<body>
  <center>
<div class="main" >
<div id="h"><h3><i>The Total Amount Is:-</i></h3><h3 id="rs"><?php echo $price; ?></h3></div>
<div><img src="processing.gif" width="100px"></div>
<div id="input"><input type='button' name='submit' value='Pay' id="rzp-button1">
</div>
</div></center>
</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var ar = <?php echo json_encode($data) ?>;
var options = {
    "key": "rzp_test_QYGna84rQ7x034",
    "amount": ar.price, // 2000 paise = INR 20
    "name": "Utkarsh 16",
    "description": "Utkarsh is the largest Hindi-Cultural Fest of North India",
    "image": "logo.jpg",
    "handler": function (response){
        //alert(response.razorpay_payment_id);
        fetch("http://127.0.0.1/form/process.php", {
          method: 'POST',
          body: JSON.stringify({
            paymentId: response.razorpay_payment_id,
            email: ar.email,
            event1:ar.event1
          })
        }).then(function(response) {
          response.text().then(function(data) {
            data = JSON.parse(data);
            if(data.responseCode == 200) {
              window.location.pathname = "/form/success.php"
            }
            else {
              alert("Payment unsuccessful");
            }
          })
        })
    },
    "prefill": {
        "name": ar.tname,
        "email": ar.email,
        "contact":ar.phone
    },
    "notes": {
        "address": "Hello World"
    },
    "theme": {
        "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

</html>
