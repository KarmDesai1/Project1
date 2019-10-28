<?php
// get the data from the form
$Email= filter_input(INPUT_POST,'email_address');
$password = filter_input(INPUT_POST,"password");
$First_Name = filter_input(INPUT_POST,"First_Name");
$Last_Name = filter_input(INPUT_POST,"Last_Name");
$Birthday = filter_input(INPUT_POST,"Birthday");

// validate form data
if (empty($Email)) {
    $message = "Please type a email in";
}
    $i = strpos($Email,'@');
if ($i === false) {
    $message = 'There is no @ in the email';
    }
if (empty($password)) {
    $message = "Please type a password in";
}
if ($password != strlen($password)<=8) {
    $message = "The Password needs to greater than 8 characters";
}
if (empty($First_Name)) {
    $message = "Please Type a Name in";
}
if (empty($Last_Name)) {
    $message = "Please Type Last Name in";
}
if (empty(Birthday)) {
    $message="Please Type Birthday";
}
?>