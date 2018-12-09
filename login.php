<?php
include 'config.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM user WHERE username = '$user' and password = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("location: student.html");
    // output data of each row
    // while ($row = $result->fetch_array()) {
    //     echo "id: " . $row[0] . " - Name: " . $row[1] . " " . $row[2] . "<br>";
    // }
} else {
    echo "Your Login Name or Password is invalid";
}
$conn->close();
