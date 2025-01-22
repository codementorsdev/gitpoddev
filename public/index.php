<?php
// Set the response content type to JSON
header('Content-Type: application/json');

// Sample data to return
$response = array(
    "status" => "success",
    "message" => "Hello from PHP API server!",
    "data" => array(
        "timestamp" => time()
    )
);

// Return the JSON-encoded response
echo json_encode($response);
?>
