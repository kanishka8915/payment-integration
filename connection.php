<?php
//Database credentials
$dbHost = 'localhost';
$dbUsername = 'id9357790_abc';
$dbPassword = '123456';
$dbName = 'id9357790_paypal';
//Connect with the database
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName)
or die("error in connecting");
// $query="select * from payments";
// $dbc=mysqli_query($db,$query);

// while($row=mysqli_fetch_array($dbc)){
//     $a=$row['payment_id'];
// }
// echo $a;
?>
