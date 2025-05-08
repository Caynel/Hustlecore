<?php
session_start();
include 'dbConnect.php';

// Check user is log in through session or cookie, will be redirected if not
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - HusleCore</title>
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

  <!-- Main section -->
    <main>
    <!-- Sidebar -->
        <div class="sideBar">
            <h4>Admin Panel</h4>
            <p class="currentPage"><a href="adminDashboard.php">Dashboard</a></p>
            <a href="adminManageActivities.php">Manage Classes & Sessions</a>
            <a href="adminMembers.php">Members</a>
            <a href="adminManageBookings.php">Bookings</a>
            <a href="#">Reports</a>
        </div>

        <!-- Dashboard Content Area -->
        <div class="dashboardContent">
            <div class="breadcrumb">&gt; Dashboard</div>
            <div class="stats">
                <div class="card">
                <h5>Total Members</h5>
                <p>245</p> <!--php here-->
                </div>
                <div class="card">
                <h5>Today's Bookings</h5>
                <p>32</p> <!--php here-->
                </div>
                <div class="card">
                <h5>Sessions Scheduled</h5>
                <p>12</p> <!--php here-->
                </div>
                <div class="card">
                <h5>Cancellations</h5>
                <p>3</p> <!--php here-->
                </div>
            </div>

        <div class="schedule">
            <h3>Today’s Schedule / Activities</h3>
            <div class="todayActivityBox"></div>
            <div class="todayActivityBox"></div>
        </div>  
    </main>

</body>
</html>
