<?php
require_once 'include/connect.php';
$inputJSON = file_get_contents('php://input');
$input= json_decode( $inputJSON, TRUE ); //convert JSON into array
  if($input['paymentId']) {
    // Do some database stuff
    $pay=$input['paymentId'];
    $email=$input['email'];
    $event=$input['event1'];
    $q="update participants SET status='1',transcation_id='$pay' where email='$email' && events='$event'";
    $qr=mysqli_query($conn,$q);
    if($qr)
      $arr = array("responseCode" => "200", "message"=>"Payment successful");
    else
      $arr = array("responseCode" => "500", "message"=>"Internal Server Error");
    echo json_encode($arr);
  }
  else {
    $arr = array("responseCode" => "403", "message"=>"Access Denied");
    echo json_encode($arr);
  }


?>
