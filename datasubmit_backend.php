<?php
include "dbcon.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$num = $_POST['num'];
$name = $_POST['name'];
$price = $_POST['price'];


$sql = "INSERT INTO test (num, name, price)
VALUES ($num, '$name', $price)";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
