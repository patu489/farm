<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST['customerName'];
    $quantity = $_POST['quantity'];
    $totalPrice = $_POST['totalPrice'];

    $sql = "INSERT INTO sales (customerName, quantity, totalPrice, date) VALUES ('$customerName', '$quantity', '$totalPrice', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Sale recorded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>