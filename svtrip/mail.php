<?php

// Test if the form has been submitted
if(isset($_POST['send'])) {
  // Prepare the email
  $to = 'carmenliao.student@wegc.school.nz';
  $subject = 'Message sent from website';
  $message = $_POST['message'];
  // Send it
  $sent = mail($to, $subject, $message);
  if($sent) {
    echo '<h2 class = "message">Your message has been sent</h2>';
  } else {
    alert('Sorry, your message could not send. Please try again');
  }
}

?>
