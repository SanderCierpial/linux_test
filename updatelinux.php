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

if(isset($_POST))
{
    $get = $_POST['getpost'];
    //Do something with your POST
}

$sql = "UPDATE MyGuests SET lastname='$get->lastname', SET firstname ='$get->firstname'  WHERE id='$get->id'";

$conn->close();
?>