<?php
session_start(); // if using sessions for member login
$memberID = 1; // replace with session value, e.g. $_SESSION['memberID']

$activityID = isset($_POST['activityID']) ? intval($_POST['activityID']) : 0;

$conn = new mysqli("localhost", "root", "", "gym_db");

if ($activityID > 0) {
    $stmt = $conn->prepare("INSERT INTO ActivityBookings (memberID, activityID) VALUES (?, ?)");
    $stmt->bind_param("ii", $memberID, $activityID);
    if ($stmt->execute()) {
        echo "Successfully enrolled!";
    } else {
        echo "Enrollment failed. You may have already enrolled.";
    }
    $stmt->close();
}
$conn->close();
?>
