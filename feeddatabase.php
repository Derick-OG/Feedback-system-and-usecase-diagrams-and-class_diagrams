<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedbacks = [];
$message="Feedback submitted successfully!";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $department = $_POST["department"];
    $gender = $_POST["gender"];
    $feedbackMessage = $_POST["feedbackMessage"];

    $sql = "INSERT INTO feedback (full_name, department, gender, feedback_message)
            VALUES ('$fullName', '$department', '$gender', '$feedbackMessage')";

    if ($conn->query($sql) === TRUE) {
        if (!empty($_POST["fullName"]) && !empty($_POST["department"]) && !empty($_POST["feedbackmessage"])) {
        echo $message;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
    $feedbacks = [];
    $result = $conn->query("SELECT * FROM feedback");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $feedbacks[] = $row;
        }
    }
}

$conn->close();
?>
