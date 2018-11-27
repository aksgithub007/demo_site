<?php

$EmailFrom = "akshayshejwal007@gmail.com";
$EmailTo = "akshayshejwal007@gmail.com";
$Subject = "Enquiry Details:-";
$Name = Trim(stripslashes($_POST['compname'])); 
$Customer = Trim(stripslashes($_POST['cname'])); 
$Mobile = Trim(stripslashes($_POST['mobile'])); 
$Country = Trim(stripslashes($_POST['country'])); 
$State= Trim(stripslashes($_POST['state'])); 
$City= Trim(stripslashes($_POST['city'])); 
$Email= Trim(stripslashes($_POST['email'])); 
$Product= Trim(stripslashes($_POST['pname']));
$Quantity= Trim(stripslashes($_POST['qreq']));  
$Period= Trim(stripslashes($_POST['period']));  
$Message = Trim(stripslashes($_POST['message'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Company Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Customer Name: ";
$Body .= $Customer;
$Body .= "\n";
$Body .= "Mobile Number: ";
$Body .= $Mobile;
$Body .= "\n";
$Body .= "Country: ";
$Body .= $Country;
$Body .= "\n";
$Body .= "State: ";
$Body .= $State;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Email Id: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Product Name: ";
$Body .= $Product;
$Body .= "\n";
$Body .= "Quantity Required: ";
$Body .= $Quantity;
$Body .= "\n";
$Body .= "Period: ";
$Body .= $Period;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";



// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://karandave.in\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>