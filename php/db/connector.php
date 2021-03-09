


<?php
function dbconn($host,$username,$password,$dbname){
$servername = $host;
$username = $username;
$password = $password;
$dbname = $dbname;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
}
?>
