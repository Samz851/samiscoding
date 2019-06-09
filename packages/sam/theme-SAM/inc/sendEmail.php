<?php
// require '../../../vendor/autoload.php';
require '../vendor/autoload.php';
use Mailgun\Mailgun;


$mg = Mailgun::create('key-be742a5d437c8958e763f1a361003941');


// Replace this with your own email address
$siteOwnersEmail = 'sam@samiscoding.com';


if($_POST) {

    $name = trim(stripslashes($_POST['contactName']));
    $email = trim(stripslashes($_POST['contactEmail']));
    $subject = trim(stripslashes($_POST['contactSubject']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Please enter your name.";
    }
    // Check Email
    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Please enter a valid email address.";
    }
    // Check Message
    if (strlen($contact_message) < 15) {
        $error['message'] = "Please enter your message. It should have at least 15 characters.";
    }
    // Subject
    if ($subject == '') { $subject = "Contact Form Submission"; }


    // Set Message
    $message = "Email from: " . $name . "<br />";
    $message .= "Email address: " . $email . "<br />";
    $message .= "Email subject: " . $subject . "<br />";
    $message .= "Message: <br />";
    $message .= $contact_message;
    $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";




    if (!$error) {
        try{
            $mail = $mg->messages()->send('mg.samiscoding.com', [
                'from'    => 'lead@samiscoding.com',
                'to'      => 'sam@samiscoding.com',
                'subject' => 'Home - Contact Form',
                'html'    => $message
              ]);
    
            if ($mail) { echo "OK"; } else { echo "Something went wrong. Please try again."; }
        }catch(\Excption $e){
            echo $e;
        }

        
        
    } # end if - no validation error

    else {

        $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
        
        echo $response;

    } # end if - there was a validation error

}

?>