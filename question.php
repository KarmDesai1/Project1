<?php

//get information from form
$Name = filter_input(INPUT_POST,"Name");
$Body = filter_input(INPUT_POST,"Body");
$Skill1 = filter_input(INPUT_POST,"Skill1");
$Skill2 = filter_input(INPUT_POST,"Skill2");
$Skill3 = filter_input(INPUT_POST,"Skill3");

//Check validation of Name
if (empty($Name)) {
    $message = "Please type a password in";
}
else {
    echo $Name;
    echo "<br>";
}
if ($Name != strlen($Name)<=3) {
    $message = "The Password needs to greater than 8 characters";
}

//Check validation of Body
if (empty($Body)) {
    $message = "Please type a password in";
}
else {
    echo $Body;
    echo "<br>";
    echo $Skill1;
    echo "<br>";
    echo $Skill2;
    echo "<br>";
    echo $Skill3;
    echo "<br>";
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
    echo '<pre>'; print_r($Array); echo '</pre>';
    echo array_keys($Array);
    print_r($Array);
}

?>
<html>

<button type="button"><a href="index3.html">Back</a></button>
</html>
