
<?php
$servername = "localhost";
$username = "id11886418_sandercierpial";
$password = "linux6461";
$dbname = "id11886418_linuxproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);


$conn->close();
?>