<?php
// get the data from the form
$email_address = filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,"password");

// validate form data
$i = strpos($email_address,'@');
if (empty($email_address)) {
    echo("Please type a email in");
}
else if ($i === false) {
    echo ('There is no @ in the email');
}

if (empty($password)) {
    echo("Please type a password in");
}
if (strlen($password)<=8) {
    echo ("The Password needs to greater than 8 characters");
}
?>
<html>
<button type="button"><a href="index.html">Back</a></button>
</html>

