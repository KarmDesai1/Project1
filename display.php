<?php
// get the data from the form
$email_address = filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,"password");

// validate form data
if (empty($email_address)) {
    echo ("Please type a email in");
    $i = strpos($email_address,'@');
    if ($i === false) {
        echo ('There is no @ in the email');
    }
}
if (empty($password)) {
    echo("Please type a password in");
}
if ($password != strlen($password)<=8) {
    echo ("The Password needs to greater than 8 characters");
}

?>