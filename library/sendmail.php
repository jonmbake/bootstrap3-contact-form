<?php
  //start a session -- needed for Securimage Captcha check
  session_start();

  //add you e-mail address here
  define("MY_EMAIL", "jmb@jonbake.com");

  /**
   * Sets error header and json error message response.
   *
   * @param  String $messsage error message of response
   * @return void
   */
  function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
  }

  /**
   * Return a formatted message body of the form:
   * Name: <name of submitter>
   * Comment: <message/comment submitted by user>
   *
   * @param String $name     name of submitter
   * @param String $messsage message/comment submitted
   */
  function setMessageBody ($name, $message) {
    $message_body = "Name: " . $name."\n\n";
    $message_body .= "Comment:\n" . nl2br($message);
    return $message_body;
  }

  $email = $_POST['email']; 
  $message = $_POST['message'];

  header('Content-type: application/json');
  //do some simple validation. this should have been validated on the client-side also
  if (empty($email) || empty($message)) {
  	errorResponse('Email or message is empty.');
  }

  //do Captcha check, make sure the submitter is not a robot:)...
  include_once './vender/securimage/securimage.php';
  $securimage = new Securimage();
  if (!$securimage->check($_POST['captcha_code'])) {
    errorResponse('Invalid Security Code');
  }

  //try to send the message
  if(mail(MY_EMAIL, "Feedback Form Results", setMessageBody($_POST["name"], $message), "From: $email")) {
  	echo json_encode(array('message' => 'Your message was successfully submitted.'));
  } else {
  	header('HTTP/1.1 500 Internal Server Error');
  	echo json_encode(array('message' => 'Unexpected error while attempting to send e-mail.'));
  }
?>
