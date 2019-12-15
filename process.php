<?php
    $toEmail = "info@fadecreative.com";
    

    $Subject = "Website Form Inquiry";
    $Name = Trim(stripslashes($_POST['userName']));  
    $Email = Trim(stripslashes($_POST['userEmail'])); 
    $Message = Trim(stripslashes($_POST['userPhone'])); 
    $Message = Trim(stripslashes($_POST['content'])); 
    $mailHeaders = "From: " . $Name . "<". $Email .">\r\n";
    // validation
    $validationOK=true;
    if (!$validationOK) {
      print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
      exit;
    }
    
    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $Name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= $Phone;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";


    
    if(mail($toEmail, $Subject, $Body, $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>