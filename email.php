<?php
function spamcheck($field)
  {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

  // Check if the "from" input field is filled out
  if (isset($_POST["email"]))
    {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE)
      {
      echo "Invalid input";
      }
    else
      {
	 
      $from = $_POST["email"]; // sender
      $name = $_POST["name"];
      $comments = $_POST["comments"];
	  $message = 'Name: '.$name.'  Message: '.$comments;
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("info@Imbuent.com",$subject,$message,"From: $from\n");
      echo "Thank you for sending us feedback";
      }
    }
	
?>