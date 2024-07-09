<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chickenCount = $_POST['chickenCount'];
    $feedStock = $_POST['feedStock'];
    $medicationStock = $_POST['medicationStock'];

    $sql = "UPDATE inventory SET chickenCount='$chickenCount', feedStock='$feedStock', medicationStock='$medicationStock' WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        echo "Inventory updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>