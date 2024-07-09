<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eggCount = $_POST['eggCount'];
    $meatProduced = $_POST['meatProduced'];

    $sql = "INSERT INTO production (date, eggCount, meatProduced) VALUES (NOW(), '$eggCount', '$meatProduced')";

    if ($conn->query($sql) === TRUE) {
        echo "Production recorded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>