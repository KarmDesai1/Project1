<?php
// get the data from the form
$email= filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,"password");
$first = filter_input(INPUT_POST,"First_Name");
$last = filter_input(INPUT_POST,"Last_Name");
$birthday = filter_input(INPUT_POST,"Birthday");

// validate form data
$i = strpos($email,'@');
if (empty($email)) {
    echo("Please type a email in");
}
elseif ($i === false) {
    echo('There is no @ in the email');
}
if (empty($password)) {
    echo ("Please type a password in");
}
elseif (strlen($password)<=8) {
    echo ("The Password needs to greater than 8 characters");
}
if (empty($first)) {
     echo ("Please Type a Name in");
}
if (empty($last)) {
    echo ("Please Type Last Name in");
}
if (empty($birthday)) {
    echo ("Please Type Birthday");
}
?>
<html>
<button type="button"><a href="index2.html">Back</a></button>
</html>
