<?php
    session_start();

    include 'dbConnect.php';

    if (isset($_POST['logout'])) {
        session_destroy();
        session_unset();
        setcookie("email", "", time() - 3600, "/"); // Clear the email cookie
        header("Location: signIn.php"); 
        exit();
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title></title>

        <!-- FOR EXTERNAL CSS -->
         <link rel="stylesheet" href="projectStyles.css"> 
        
    </head>
    <body>
        <div class="header">
            <div class="upperNav">
                <img src="images/logo.jpg" alt="Logo" />
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
                    <li><a href="signIn.php">Classes & Sessions</a></li>
                    <li><a href="contactUs.php">Enrolled Classes</a></li>
                </ul>
            </nav>
        </div>

        <!-- WRAPPER -->
        <div class="wrapper"> </div>

        <div class="headerImg">
            <h1>HustleCore: Where Strength Meets Hustle</h1>     
            <p>
                Welcome to HustleCore—more than just a gym, it’s a mindset.
                A space built for those who grind, push limits, and embrace the challenge.
                Whether you're chasing peak performance, building resilience, or sculpting your best self, 
                our state-of-the-art facility and expert coaches are here to fuel your journey.
            </p>
        </div>
        <div class="mainCont">
            <h1 class="title">CLASSES & SESSIONS</h1>
            
            <div class="cardClassCont">
                <!-- CARD 1 -->
                <div class="cardClass">
                    <img class="cardClassImg" src="images/homeYoga.png" alt="People doing yoga.">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Yoga</h2>
                        <ul class="cardClassDetails">
                            <li>📘 Instructor</li>
                            <li>🕒 Date & Time</li>
                            <li>📍 No. slots available</li>
                        </ul>
                        <button class="enrollBtn">Enroll Now →</button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="cardClass">
                    <img  class="cardClassImg" src="images/homeHIIT.png" alt="People doing HIIT.">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Intense BodyBuilding/HIIT</h2>
                        <ul class="cardClassDetails">
                            <li>📘 Instructor</li>
                            <li>🕒 Date & Time</li>
                            <li>📍 No. slots available</li>
                        </ul>
                        <button class="enrollBtn">Enroll Now →</button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="cardClass">
                    <img class="cardClassImg" src="images/homeCrossfit.png" alt="Guy doing handstand for crossfit.">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Crossfit</h2>
                        <ul class="cardClassDetails">
                            <li>📘 Instructor</li>
                            <li>🕒 Date & Time</li>
                            <li>📍 No. slots available</li>
                        </ul>
                        <button class="enrollBtn">Enroll Now →</button>
                    </div>
                </div>
            </div>

            <a class="moreLink" href="#">Check out more classes & sessions here!</a>

            <div class="quote">
                <p class="quoteText">"The only way to do great work is to love what you do." - Steve Jobs</p>
            </div>

            <div class="cardManageCont">
                <!-- MANAGE/SEE ENROLLED CLASSES -->
                <div class="cardManage">
                    <img class="cardManageImg square" src="images/chart.png" alt="A picture of a chart.">
                    <div class="cardManageInfo">
                        <p>Check the classes you're enrolled in!</p>
                        <button class="infoBtn">→</button>
                    </div>
                </div>
                <!-- MANAGE PRFILE -->
                <div class="cardManage">
                    <img class="cardManageImg circle" src="images/profile.png" alt="Default profile picture.">
                    <div class="cardManageInfo">
                        <p>Manage your account here!</p>
                        <a href="Profile.php"><button class="infoBtn">→</button></a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>