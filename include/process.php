<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  $conn = new mysqli('localhost', 'root', '','SmartCity');    // Check connection
    if ($conn->connect_error) {
        $response['done'] = false;
        $response['data'] = 'Database connection failed: ' . $conn->connect_error;

             }
$response = array('done' => false, 'data' => '');


try {   
   
 if (isset($_POST['Comments']))  {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);  
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $Comments = filter_var($_POST['Comments'], FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO comments (Name, Email, contentcomments) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name,  $email, $Comments);

    $response = [];  // Initialize response array

    if ($stmt->execute()) {
        $response['done'] = true;
        $response['data'] = 'Data has been saved successfully';
    } else {
        $response['done'] = false;
        $response['data'] = 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Return the JSON response
    echo json_encode($response);
    exit();
}


} catch (Exception $e) {
    $response['done'] = false;
    $response['data'] = 'Exception caught: ' . $e->getMessage();
}

echo json_encode($response);
?>
