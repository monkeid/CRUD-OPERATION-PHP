<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $suggetion = $_POST['suggetion'];


    $sql = "INSERT INTO sug (name, email, subject, suggetion) VALUES ('$name', '$email', '$subject', '$suggetion')";

    if ($conn->query($sql) === TRUE) {
        header('location:form.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
