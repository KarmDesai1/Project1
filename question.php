<?php

//get information from form
$Name = filter_input(INPUT_POST,"Name");
$Body = filter_input(INPUT_POST,"Body");
$Skill = filter_input(INPUT_POST,"Skill");

//Check validation of Name
if (empty($Name)) {
    $message = "Please type a password in";
}
if ($Name != strlen($Name)<=3) {
    $message = "The Password needs to greater than 8 characters";
}

//Check validation of Body
if (empty($Body)) {
    $message = "Please type a password in";
}
if ($Body != strlen($Body)>=500) {
    $message = "The Password needs to be less than 500 characters";
}
if (empty($Skill)) {
    $message = "Please type a skills in";
}
elseif (strpos($Skill,',') === true)
{
    $Array = explode(',', $Skill);
    print_r($Array);
}


else {

}

?>
<html>
<button type="button"><a href="index3.html">Back</a></button>
</html>
