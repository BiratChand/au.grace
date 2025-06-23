<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];


$conn = new mysqli('localhost', 'root', '', 'Grace');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into grace1(name, email, number,message)values(?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $number, $message);
    $stmt->execute();
    echo "Registration Sucessfully..";
    $stmt->close();
    $conn->close();
}
