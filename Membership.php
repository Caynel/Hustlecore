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
        
        <!-- MAIN CONTENT -->
        <main class="mainCont">
            <h1 class="title">SELECT MEMBERSHIP PLAN</h1>
        
            <section class="cardClassCont">
                <!-- CARD 1 -->
                <div class="cardClass cardMembers">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Monthly Membership</h2>
                        <h1>₱1000.00</h1>
                        <hr>
                        <ul class="cardClassDetails cardMembersDetails">
                            <li>✅ Best for: 
                                <p class="cardText">
                                    Casual gym-goers, travelers, or those testing the waters.
                                </p>
                            </li>
                            <li>
                                ✨ Perks: 
                                <ul class="cardPerks">
                                    <li>Basic access to equipment, group classes, and locker rooms.</li>
                                </ul>
                            </li>
                        </ul>       
                        <button class="enrollBtn">Apply Now →</button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="cardClass cardMembers">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Quarterly Membership</h2>
                        <h1>₱2500.00</h1>
                        <hr>
                        <ul class="cardClassDetails cardMembersDetails">
                            <li>✅ Best for: 
                                <p class="cardText">
                                    Those who want to commit for a few months without a long-term contract.
                                </p>
                            </li>
                            <li>
                                ✨ Perks:
                                <ul class="cardPerks">
                                    <li>Includes perks from the monthly plan.</li>
                                    <li>Free personal training session and nutrition consultation.</li>
                                </ul>
                            </li>
                        </ul>
                        <button class="enrollBtn">Apply Now →</button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="cardClass cardMembers">
                    <div class="cardClassInfo" >
                        <h2 class="cardClassTitle">Annual Membership</h2>
                        <h1>₱8000.00</h1>
                        <hr>
                        <ul class="cardClassDetails cardMembersDetails">
                            <li>✅ Best for: Dedicated fitness enthusiasts or those serious about their health journey.</li>
                            <li>✨ Perks: 
                                <ul class="cardPerks">
                                    <li>Includes perks from the monthly and quarterly plans.</li>
                                    <li> Free exclusive gym merchandise and VIP access to special events.</li>
                                </ul>
                            </li>
                        </ul>
                        <button class="enrollBtn">Apply Now →</button>
                    </div>
                </div>
            </section>
        </main>
        <div class="planSkip">
            <a class="moreLink" href="Homepage.php">Skip for now ➡️</a>
        </div>
       
    </body>
</html>