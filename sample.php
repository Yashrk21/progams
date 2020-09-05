<!DOCTYPE html>
<html>
<head>
    <title>Background colour change </title>
</head>
<?php
$today  = date("1");
print("$today");
if ($today == "Sunday") {
    $bgcolor = "#FEFC05";
}
if ($today == "Monday") {
    $bgcolor = "#FFFFFF";
}
if ($today == "Tuesday") {
    $bgcolor = "#FBFFC4";
}
if ($today == "Wednesday") {
    $bgcolor = "#FFE0DD";
}
if ($today == "Thursday") {
    $bgcolor = "#E6EDFF";
}
if ($today == "friday") {
    $bgcolor = "#E9FFE6";
}
if ($today == "Saturday") {
    $bgcolor = "#FABC65";
}
print("
<body bgcolor =\ "$bgcolor\" \n ");
?>
<br>
This just changes the color of screen based on the day of the week

</body>
</html>