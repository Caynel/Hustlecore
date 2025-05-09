<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title>
        <link rel="stylesheet" href="projectStyles.css"> 
    </head>
    <body class="light">
        <header>
            <div class="upperNav">
                <a class="logo" href="Homepage.php"><img src="images/logo.jpg" alt="Logo" /></a>
                <div>
                    <!-- PROFILE/ACC -->
                    <a class="profileUpperNav" href="Profile.php">
                        <img src="images/profile.png" alt="Default Icon">Profile
                    </a>

                    <!-- LOGOUT -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <button type="submit" name="logout">Log out</button>
                    </form>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="Classes&essions.php">Classes & Sessions</a></li>
                    <li><a href="EnrolledClasses.php">Enrolled Classes</a></li>
                </ul>
            </nav>
        </header>

         <!-- WRAPPER -->
         <div class="wrapper"> </div>

         <!-- BREADCRUMBS -->
         <div class="breadcrumbs">
            <a href="Profile.php">Profile</a> &gt;
            <span>Manage Profile</span>
        </div>

        <!-- MAIN CONTENT -->
         <main class="profileCont">
            <h2>Edit Profile</h2>
            
         </main>
    </body>
</html>