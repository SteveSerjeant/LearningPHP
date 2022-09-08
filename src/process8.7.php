<?php
$message = '';
foreach( $_POST as $name => $value ) {
    if ( 'submit' != $name ) {
        if ( is_array( $value ) ) {
            $value = implode( ', ', $value );
        }
        $message .= ucfirst( $name ) ." is $value.\n\n";
    }
}

//$to = "Joe Casabona<joe@casabona.org>";
//$subject = "Reason for Contact: " . $_POST['reason'];
//$from = $_POST['name'] . '<' . $_POST['email'] . '>';
//echo $_POST['email'];
//echo '<br>';
//echo $subject;
//echo $name;
//echo '<br>';
//echo $from;
////$headers = 'From: ' . $from . "\r\n" .
////    'Reply-To: ' . $from . "\r\n" .
////    'X-Mailer: PHP/' . phpversion();
//
//if ( mail( $to, $subject, $message ) ) {
//    echo "<h3>Your message has been sent.</h3>";
//}

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

$to = "steven.serjeant@students.plymouth.ac.uk";
$subject = "Reason for Contact: " . $_POST['reason'];
mail( $to, $subject, $message);
