<?php

include "dbcon.php";

$select = "*";
$table = "test";

$sql = "SELECT $select FROM $table ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table class='table table-dark'>";
    echo "  <thead>";
    echo "    <tr>";
    echo "      <th scope='col'>#</th>";
    echo "      <th scope='col'>Number</th>";
    echo "      <th scope='col'>Name</th>";
    echo "      <th scope='col'>Price</th>";
    echo "    </tr>";
    echo "  </thead";
    echo "  <tbody>";
    while ($row = $result->fetch_assoc()) {

        echo "    <tr>";
        echo "      <th scope='row'>".$row['id']."</th>";
        echo "      <td>".$row['num']."</td>";
        echo "      <td>".$row['name']."</td>";
        echo "      <td>".$row['price']."</td>";
        echo "    </tr>";
    }

    echo "  </tbody>";
    echo "</table>";
}
