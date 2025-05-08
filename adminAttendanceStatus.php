<?php
include 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingID = intval($_POST['bookingID']);
    $status = $_POST['status'];

    // get memberID and activityID from booking
    $query = $conn->prepare("SELECT memberID, activityID FROM ActivityBookings WHERE bookingID = ?");
    $query->bind_param("i", $bookingID);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $memberID = $row['memberID'];
        $activityID = $row['activityID'];

        //insert into attendance
        $insertAttendance = $conn->prepare("INSERT INTO Attendance (activityID, memberID, status) VALUES (?, ?, ?)");
        $insertAttendance->bind_param("iis", $activityID, $memberID, $status);
        $insertAttendance->execute();

        // If cancelled, also update booking status and decrement enrolled count
        if ($status === 'cancelled') {
            $conn->query("UPDATE ActivityBookings SET bookingStatus = 'cancelled' WHERE bookingID = $bookingID");
            $conn->query("UPDATE Activities SET enrolledCount = enrolledCount - 1 WHERE activityID = $activityID");
        }
    }
}

header("Location: adminAttendance.php?activityID=" . $activityID);
exit();
?>
