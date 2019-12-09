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

$sql = "SELECT * FROM MyGuests";
$a = array();
if ($res=mysqli_query($conn,$sql)){
    if (mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_array($res)){
            $gegevens = array();
            $gegevens['id']=$row['id'];
            $gegevens['firstname']=$row['firstname'];
            $gegevens['lastname']=$row['lastname'];
            array_push($a,$gegevens);
        }
    }
}

$results = json_encode($a);
echo $results;

$conn->close();
?>