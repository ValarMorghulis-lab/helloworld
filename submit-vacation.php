<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $studentId = $_POST['student-id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $startDate = $_POST['start-date'];
    $endDate = $_POST['end-date'];
    $purpose = $_POST['purpose'];
    $activities = $_POST['activities'];
    $emergencyContact = $_POST['emergency-contact'];
    $emergencyPhone = $_POST['emergency-phone'];

    // Perform desired operations with the data
    // For example, you can save it to a database or send an email

    // Output the received data (for demonstration purposes)
    echo "<h1>Form Data Received</h1>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Student ID: " . htmlspecialchars($studentId) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Destination: " . htmlspecialchars($destination) . "<br>";
    echo "Start Date: " . htmlspecialchars($startDate) . "<br>";
    echo "End Date: " . htmlspecialchars($endDate) . "<br>";
    echo "Purpose: " . htmlspecialchars($purpose) . "<br>";
    echo "Planned Activities: " . htmlspecialchars($activities) . "<br>";
    echo "Emergency Contact: " . htmlspecialchars($emergencyContact) . "<br>";
    echo "Emergency Phone: " . htmlspecialchars($emergencyPhone) . "<br>";
}
?>