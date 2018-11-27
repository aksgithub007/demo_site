<?php

$EmailFrom = "akshayshejwal007@gmail.com";
$EmailTo = "akshayshejwal007@gmail.com";
$Subject = "Quote Request Form:-";
// $Name = Trim(stripslashes($_POST['compname'])); 
// $Customer = Trim(stripslashes($_POST['cname'])); 
// $Mobile = Trim(stripslashes($_POST['mobile'])); 
// $Country = Trim(stripslashes($_POST['country'])); 
// $State= Trim(stripslashes($_POST['state'])); 
// $City= Trim(stripslashes($_POST['city'])); 
// $Email= Trim(stripslashes($_POST['email'])); 
// $Product= Trim(stripslashes($_POST['pname']));
// $Quantity= Trim(stripslashes($_POST['qreq']));  
// $Period= Trim(stripslashes($_POST['period']));  
// $Message = Trim(stripslashes($_POST['message'])); 

$Type= Trim(stripslashes($_POST['optradio'])); 
$Size= Trim(stripslashes($_POST['size']));
$Order= Trim(stripslashes($_POST['order']));  
$Packaging= Trim(stripslashes($_POST['pack']));
$Requirement= Trim(stripslashes($_POST['requirement']));
$Price= Trim(stripslashes($_POST['Price']));  
$DestinationPort= Trim(stripslashes($_POST['port'])); 
$DeliveryTerms= Trim(stripslashes($_POST['terms'])); 
$Payment= Trim(stripslashes($_POST['payment']));
$OPayment= Trim(stripslashes($_POST['payments']));
$Req= Trim(stripslashes($_POST['des']));
$Comp= Trim(stripslashes($_POST['cname']));
$Website= Trim(stripslashes($_POST['website']));
$Fname= Trim(stripslashes($_POST['fname']));
$Lname= Trim(stripslashes($_POST['lname']));
$Email= Trim(stripslashes($_POST['mail'])); 
$Phone = Trim(stripslashes($_POST['phone'])); 
$Address = Trim(stripslashes($_POST['address'])); 
$Whatsapp = Trim(stripslashes($_POST['whatsapp']));
$City= Trim(stripslashes($_POST['city']));  
$Country = Trim(stripslashes($_POST['country'])); 
$Zipcode = Trim(stripslashes($_POST['zip'])); 
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Type: ";
$Body .= $Type;
$Body .= "\n";
$Body .= "Size: ";
$Body .= $Size;
$Body .= "\n";
$Body .= "Packaging: ";
$Body .= $Packaging;
$Body .= "\n";
$Body .= "Requirement: ";
$Body .= $Requirement;
$Body .= "\n";
$Body .= "Target Price: ";
$Body .= $Price;
$Body .= "\n";
$Body .= "Destination Port: ";
$Body .= $DestinationPort;
$Body .= "\n";
$Body .= "Delivery Terms: ";
$Body .= $DeliveryTerms;
$Body .= "\n";
$Body .= "Payment Terms: ";
$Body .= $Payment;
$Body .= "\n";
$Body .= "Other Payment Terms: ";
$Body .= $OPayment;
$Body .= "\n";
$Body .= "Describe your Requirement: ";
$Body .= $Req;
$Body .= "\n";
$Body .= "\n";
$Body .= "\n";
$Body .= "Customer Information";
$Body .= "\n";
$Body .= "\n";
$Body .= "Company Name: ";
$Body .= $Comp;
$Body .= "\n";
$Body .= "Website Name: ";
$Body .= $Website;
$Body .= "\n";
$Body .= "First Name: ";
$Body .= $Fname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $Lname;
$Body .= "\n";
$Body .= "Email Id: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone No: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Whatsapp No: ";
$Body .= $Whatsapp;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Country: ";
$Body .= $Country;
$Body .= "\n";
$Body .= "Zip Code: ";
$Body .= $Zipcode;
$Body .= "\n";
// $Body .= "Customer Name: ";
// $Body .= $Customer;
// $Body .= "\n";
// $Body .= "Mobile Number: ";
// $Body .= $Mobile;
// $Body .= "\n";
// $Body .= "Country: ";
// $Body .= $Country;
// $Body .= "\n";
// $Body .= "State: ";
// $Body .= $State;
// $Body .= "\n";
// $Body .= "City: ";
// $Body .= $City;
// $Body .= "\n";
// $Body .= "Email Id: ";
// $Body .= $Email;
// $Body .= "\n";
// $Body .= "Product Name: ";
// $Body .= $Product;
// $Body .= "\n";
// $Body .= "Quantity Required: ";
// $Body .= $Quantity;
// $Body .= "\n";
// $Body .= "Period: ";
// $Body .= $Period;
// $Body .= "\n";
// $Body .= "Message: ";
// $Body .= $Message;
// $Body .= "\n";



// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://krushiganga.com\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>