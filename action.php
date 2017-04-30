<?php

if(isset($_POST['email'])) {



// EDIT THE 2 LINES BELOW AS REQUIRED

$email_to = "bhooshan.gore@gmail.com";

$email_subject = "Booking for Propl-Restaurant";





function died($error) {

    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

    echo "These errors appear below.<br /><br />";

    echo $error."<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();

}



$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$email_from = $_POST['email'];

$telephone = $_POST['telephone'];

$Date = $_POST['Date'];

$groupSize = $_POST['groupSize'];

$mealType = $_POST['mealType'];

$discount = $_POST['discount'];

$total = $_POST['total'];


$email_message = "Form details below.\n\n";


function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}



$email_message .= "First Name: ".clean_string($firstName)."\n";

$email_message .= "Last Name: ".clean_string($lastName)."\n";

$email_message .= "Email: ".clean_string($email_from)."\n";

$email_message .= "Telephone: ".clean_string($telephone)."\n";

$email_message .= "Date: ".clean_string($Date)."\n";

$email_message .= "Group Size: ".clean_string($groupSize)."\n";

$email_message .= "Meal Type: ".clean_string($mealType)."\n";

$email_message .= "Discount: ".clean_string($discount)."\n";

$email_message .= "Total: ".clean_string($total)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  

?>


Thank you for contacting us. We will be in touch with you very soon.

<?php

}

?>