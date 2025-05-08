<?php
// --- DB Connection (adjust to your credentials) ---
$host = "localhost";
$user = "root";
$password = "";
$database = "gym_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Get activity name from query string ---
$activityName = isset($_GET['activity']) ? $_GET['activity'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enroll in <?php echo htmlspecialchars($activityName); ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef0f3;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .schedule-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 30px;
    }

    .schedule-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
      width: 300px;
    }

    .schedule-card h3 {
      margin-top: 0;
    }

    .schedule-card p {
      margin: 8px 0;
      color: #444;
    }

    .enroll-btn {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      cursor: pointer;
      font-size: 16px;
      border-radius: 6px;
      margin-top: 10px;
    }

    .enroll-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

<h1>Available Schedules for <?php echo htmlspecialchars($activityName); ?></h1>

<div class="schedule-container">
<?php
if ($activityName) {
    $stmt = $conn->prepare("SELECT * FROM Activities 
                            WHERE activityType = 'class' 
                              AND activityName = ? 
                              AND schedule >= NOW() 
                            ORDER BY schedule ASC");
    $stmt->bind_param("s", $activityName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $formattedDate = date("M d, Y - h:i A", strtotime($row['schedule']));
            echo "<div class='schedule-card'>";
            echo "<h3>" . htmlspecialchars($activityName) . "</h3>";
            echo "<p><strong>Date & Time:</strong> $formattedDate</p>";
            echo "<p><strong>Instructor:</strong> " . htmlspecialchars($row['instructor']) . "</p>";
            echo "<p><strong>Duration:</strong> " . $row['duration'] . " mins</p>";
            echo "<p><strong>Capacity:</strong> " . $row['capacity'] . "</p>";
            echo "<form method='POST' action='3.php'>";
            echo "<input type='hidden' name='activityID' value='" . $row['activityID'] . "'>";
            echo "<input type='submit' class='enroll-btn' value='Enroll'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "<p>No upcoming schedules found for this activity.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Invalid activity selection.</p>";
}
$conn->close();
?>
</div>

</body>
</html>
