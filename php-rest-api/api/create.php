<?php
echo "data";
include "db.php";

header('Content-Type: application/json'); // Set response content type to JSON

$name = "pranav";
$email = "pranav@gmail.com";

if (!empty($name) && !empty($email)) {
    // Use a prepared statement for security
    $stmt = $connection->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo json_encode(["message" => "User added successfully"]);
    } else {
        echo json_encode(["error" => "Error adding user: " . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Name and Email are required"]);
}

$connection->close(); // Close the database connection
?>
