<?php

$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["surName"];
//echo "<h1 style = 'font-size:500px; color:white;'>$firstName</h1>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>successful </title>
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="contactUs.css">
    <script src="jquery.min.js"></script>
    <script src = "main.js" ></script>
</head>

<body id = "contactUsBackground" style = "background-image:url('Pictures/afterContactUs.jpg')">

<?php echo "<p id = 'contactUsHeading' style = 'left:350px;'>Thank you " . $firstName . " " . $lastName  . " for your message.<br/><br/>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  it has been sent.</p>"?>
<img src = "Pictures/happyFace.png" width = "300" height = "300" style = "position:absolute; top:360px; left:620px;">

afterContactUs

</body>

</html>