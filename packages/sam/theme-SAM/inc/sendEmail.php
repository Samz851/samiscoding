<?php
// require '../../../vendor/autoload.php';
require '../vendor/autoload.php';
use Mailgun\Mailgun;


$mg = Mailgun::create('key-be742a5d437c8958e763f1a361003941');


// Replace this with your own email address
$siteOwnersEmail = 'sam@samiscoding.com';
$_POST = json_decode(file_get_contents("php://input"), true);
$error = false;
parse_str($_POST['formData'], $_POST['formData']);
if($_POST) {

    if($_POST['form'] == 'benchmark'){
        $email = "sam@samiscoding.com";
        $name = "SAM DevOps";
        $subject = "Request for Benchmark Report";
        $contact_message = '<html><head></head><body><style> .header {text-align: center;} .header * {display: inline;}</style><div class="header"><img src="data:image/png;base64,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"><h3>Request for Benchmark Report</h3></div><div class="content"><table>';
        foreach ($_POST['formData'] as $label => $value) {
            $contact_message .= "<tr><td>" . trim(stripslashes($label)) . ":</td><td>" . trim(stripslashes($value)) . "</td></tr>";
        };
        $contact_message .= "</table></div></body></html>";
        // Validate url
            //URL
        if (!preg_match("/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/", $_POST['formData']['url'])){
            $error['message'] = "Please enter a valid URL of your website/application.";
        }
    } else {
        $name = trim(stripslashes($_POST['formData']['contactName']));
        $email = trim(stripslashes($_POST['formData']['contactEmail']));
        $subject = trim(stripslashes($_POST['formData']['contactSubject']));
        $detail = trim(stripslashes($_POST['formData']['contactMessage']));
        // Set Message
        $contact_message = "Email from: " . $name . "<br />";
        $contact_message .= "Email address: " . $email . "<br />";
        $contact_message .= "Email subject: " . $subject . "<br />";
        $contact_message .= "Message: <br />";
        $contact_message .= $detail;
        $contact_message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";
    }
    

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

    if (!$error) {
        try{
            $mail = $mg->messages()->send('mg.samiscoding.com', [
                'from'    => 'lead@samiscoding.com',
                'to'      => 'sam@samiscoding.com',
                'subject' => $subject,
                'html'    => $contact_message
              ]);
    
            echo "OK";
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