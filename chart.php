<?php
include './database/connection.php';

$query = "SELECT date, COUNT(*) AS total FROM booking_form GROUP BY date ORDER BY date ASC";
$result = $con->query($query);

$data = [];
while($row = $result->fetch_assoc()){
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
