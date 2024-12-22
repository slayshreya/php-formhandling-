<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$n = $_POST['name'];
$c = $_POST['contact'];
$ct = $_POST['city'];

echo "Appointment details:";
echo "<br><br>";
echo $n;
echo "<br><br>";
echo $c;
echo "<br><br>";
echo $ct;
echo "<br><br>";

} 
?>

<a href="index.php">Go to Main Page</a>