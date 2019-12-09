<h1>Docenten test</h1>

<?php
$db = new mysqli('db.sinners.be', 'sandercierpial', 'miVJbF2K8adR', 'sandercierpial_linuxproject');

if($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = 'SELECT * FROM docenten';

if($result = $db->query($sql)){
    while($row = $result->fetch_assoc()){
        echo $row['name'] . ' ' . $row['surname'] . '<br />';
    }
}

$result->free();
$db->close();

?>