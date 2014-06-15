<title>MTSU ACM :: Generate New Link</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.css.map">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.css.map">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<?php

$newString = md5(mt_rand(0, 99999999));
$newLink = 'localhost/ACM/register.php?' . $newString;

echo
"
<form method='POST' action='activated.php'>
<input type='text' style='width:500; visibility:collapse' name='token' id='token' value='1'><br>
<input type='text' style='width:500; visibility:collapse' name='hiddenHash' id='hiddenHash' value='$newString'><br>
<input type='text' class='form-control' style='width:500' id='linkbox' value='$newLink'>
<button type='submit' class='btn btn-default'>Activate</button>
</form>
";

?>
<link rel="icon" type="image/ico" href="images/mt.ico">
<button class='btn btn-default' onclick="location.href = 'generate_reg_link.php';">Create New Link</button>
