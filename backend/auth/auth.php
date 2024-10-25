<?php
require_once '../../../config.php';
include '../../classes/SQL.php';
// Start the session


// Instantiate the SQL class
$sql = new SQL();
// Establish the database connection
$conn = $sql->connect($servername, $username, $password, $dbname);
// Example of using the connection
if ($conn) {
    echo "Connected successfully";
// Don't forget to close the connection when done
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    authUser($conn);
}

function authUser($conn){
    // Check if email and password are set
    if (!isset($_POST['email'], $_POST['password'])) {
        exit('Please fill both the email and password fields!');
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the statement to fetch the user by email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password using password_verify
        if (password_verify($password, $user['password'])) {
            echo "User found. Authentication successful!";
            // Here you can start a session or do other actions
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }

    // Close the statement
    $stmt->close();
}

