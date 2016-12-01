<?php
$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;
$uid = 2147483647;
    $db = new mysqli($servername, $username, $password, $database, $dbport);
// Check connection
 if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
     $sql = "SELECT first_name, last_name,Email FROM Users WHERE UID ='".$uid."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo json_encode(array("first_name"=>$row['first_name'],"last_name"=>$row['last_name'],"email"=>$row['Email']));
    }
}else {
    echo null;
}

$db->close();
    ?>