<?php
session_start();

include 'dbConnect.php';

// Check user is log in through session or cookie, will be redirected to sign inif not
if (!isset($_SESSION['adminLoggedIn']) || $_SESSION['adminLoggedIn'] !== true) {
    header("Location: signIn.php"); 
    exit();
}

// Get the admin's name from the session
$adminName = isset($_SESSION['adminName']) ? htmlspecialchars($_SESSION['adminName']) : 'Admin';

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    session_unset();
    setcookie("email", "", time() - 3600, "/"); // Clear the email cookie
    header("Location: signIn.php"); 
    exit();
}


if (!isset($_GET['activityID'])) {
    die("Activity ID not provided.");
}

$activityID = intval($_GET['activityID']);

// get activity name
$activityQuery = $conn->prepare("SELECT activityName FROM Activities WHERE activityID = ?");
$activityQuery->bind_param("i", $activityID);
$activityQuery->execute();
$activityResult = $activityQuery->get_result();
$activityName = $activityResult->fetch_assoc()['activityName'] ?? 'Unknown';

// Get members
$sqlEnrolledMembers = "
    SELECT ab.bookingID, ab.bookingStatus, m.firstName, m.lastName
    FROM ActivityBookings ab
    JOIN Members m ON ab.memberID = m.memberID
    WHERE ab.activityID = ?
";
$stmt = $conn->prepare($sqlEnrolledMembers);
$stmt->bind_param("i", $activityID);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance - Hustle Core</title>
    <link rel="stylesheet" href="adminStyles.css">
</head>
<body>
    <header>
        <a href="adminDashboard.php"> <image class="logo" src="images/logo.jpg" alt="gym logo" > </image> </a>
        
        <div class="user">
        <span><?php echo htmlspecialchars($adminName); ?></span>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <button type="submit" name="logout">Log out</button>
        </form>
        </div>
        
    </header>
    
    <main>
        <!-- Sidebar -->
        <div class="sideBar">
        <h4>Admin Panel</h4>
        <a href="adminDashboard.php">Dashboard</a>
        <p class="currentPage"> <a href="adminManageActivities.php">Manage Classes & Sessions</a></p>
        <a href="adminMembers.php">Members</a>
        <a href="adminManageBookings.php">Bookings</a>
        <a href="#">Reports</a>
        </div>     

        <!-- Content Area -->
        <div class="content">
            <div class="breadcrumb">&gt; Manage Classes & Sessions &gt; Attendance</div>
            <h2>Attendance for: <?= htmlspecialchars($activityName) ?></h2>
        
            <table border="1" class="attendanceActTable">
                <thead>
                    <tr>
                        <th>Member Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['firstName'] . ' ' . $row['lastName']) ?></td>
                            <td><?= htmlspecialchars($row['bookingStatus']) ?></td>
                            <td>
                                <form method="post" action="adminAttendanceStatus.php" class="attendanceFrm">
                                    <input type="hidden" name="bookingID" value="<?= $row['bookingID'] ?>">
                                    <button name="status" value="attendaceLoggedIn" class="attendanceBtn">Log In</button>
                                </form>
                                <form method="post" action="adminAttendanceStatus.php" class="attendanceFrm">
                                    <input type="hidden" name="bookingID" value="<?= $row['bookingID'] ?>">
                                    <button name="status" value="attendaceLoggedOut" class="attendanceBtn">Log Out</button>
                                </form>
                                <form method="post" action="adminAttendanceStatus.php" class="attendanceFrm">
                                    <input type="hidden" name="bookingID" value="<?= $row['bookingID'] ?>">
                                    <button name="status" value="cancelled" class="attendanceBtn">Cancel</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </main>
</body>
</html>
