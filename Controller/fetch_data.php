<?php
$conectionm = mysqli_connect("localhost", "root","","portafolioirl");

$result = mysqli_query($conectionm,"SELECT * FROM portafolio");
//to array
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;}

echo json_encode($data);
?>