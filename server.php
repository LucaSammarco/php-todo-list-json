<?php

// // prepariamo il chiamate a ricevere un json
header('Content-Type: application/json');


$rawdata = file_get_contents('db\todo.json'); //recupero il contenuto del file

$data = json_decode($rawdata, true);

// if (!empty($taglia)) {
//     $data = array_filter($data, function($animal) use ($taglia) {
//         return $animal['taglia'] === $taglia;
//     });
// }

echo json_encode(array_values($data));



?>