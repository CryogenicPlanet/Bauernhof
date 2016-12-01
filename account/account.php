<?php
$update =1;
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
$form = $_POST['form']; 
if($form="getdata"){
   // $uid = $_POST['uid'];
    if($uid == null){
        $update = 0;
        $uid = generateRandomString();
    }else{
    $sql = "SELECT first_name, last_name,Email FROM Users WHERE UID ='".$uid."'";
   // $sql_farm ="SELECT "
$result = $db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo json_encode(array("first_name"=>$row['first_name'],"last_name"=>$row['last_name'],"email"=>$row['Email']));
    }
}else {
    echo null;
}
}
}

if($form = "personal_details"){
    if($_POST['fname']!=""){
       if ($update != 0){
           $sql = "UPDATE Users SET first_name='" . $_POST['fname'] ."',last_name='" . $_POST['lname'] . "',Email ='" . $_POST['email'] ."' WHERE UID='".$uid."'";
          
       }else {
           $sql = "INSERT INTO Users (first_name, last_name, Email) VALUES ('".$_POST['fname']."','". $_POST['lname']."','". $_POST['email']."')";
         
       }
        if ($conn->query($sql) === TRUE) {
    echo 200;
} else {
    echo "Error updating record: " . $conn->error;
}
    }
}else{
   
}
function generateRandomString($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$db->close();
?>