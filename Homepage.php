    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title></title>

        <!-- FOR EXTERNAL CSS
         <link rel="stylesheet" href=""> 
         -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Arial', sans-serif;
                background-color:  #11162C;
                color: #000;
                line-height: 1.6;
            }

            .main-header {
                background-color: #11162c; /* Navigation bar background */
                color: white;
                display: flex;
                align-items: center;
                padding: 1em 1.5em;
                justify-content: space-between;
                flex-wrap: wrap;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            }

            .logo {
                font-size: 1.75em;
                font-weight: bold;
            }

            .nav-links {
                display: flex;
                gap: 1.5em;
                flex: 1;
                justify-content: center;
                margin-left: 1em; /* Add some spacing from the logo */
            }

            .nav-links a {
                color: white;
                text-decoration: none;
                font-weight: 500;
                padding: 0.6em 1em;
                border-radius: 0.25rem;
                transition: background-color 0.3s ease;
            }

            .nav-links a:hover {
                background-color: rgba(255, 255, 255, 0.15);
            }

            .nav-links a.active {
                background-color: #FFC045; /* Current page color */
            }

            .navigation{
                height: 70px;
                width: 100%;
                background-color: #333;
            }

            .headerImg {
                width: 100%;
                height: 475px;
                background-color: #ccc; 
            }

            .mainCont {
                max-width:1200px;
                margin: auto;
                padding: 2rem;
                text-align: center;
                background-color: #11162C;
                color: #fff;
            }

            .title {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 2rem;
                padding-top: 2rem;
            }

            .cardClassCont {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 1rem;
                flex-wrap: wrap;
                height: 450px;
                background-color: #11162C;
            }

            .cardClass {
                background-color: #f5f5f5;
                color: #000;
                border-radius: 12px;
                padding: 1rem;
                height: 380px;
                width: 280px;
                text-align: left;
                box-shadow: 0 4px 8px rgba(217, 217, 217, 0.1);
            }

            .cardClassImg {
                width: 100%;
                border-radius: 8px;
                margin-bottom: 1rem;
            }

            .cardClassTitle {
                font-size: 1.2rem;
                font-weight: bold;
                margin-bottom: 0.5rem;
            }

            .cardClassDetails {
                list-style: none;
                margin-bottom: 1rem;
            }

            .enrollBtn {
                background-color: #007BFF;
                color: #fff;
                padding: 0.5rem 1rem;
                border: none;
                border-radius: 6px;
                cursor: pointer;
            }

            .enrollBtn:hover {
                background-color: #DC6C06;
            }

            .moreLink {
                margin-top: 2rem;
                font-weight: bold;
                color: #fff;
                text-decoration: none;
            }

            .moreLink:hover {
                text-decoration: underline;
                color: #DC6C06;
            }

            .quote {
                margin: 2rem 0;
                font-style: italic;
                font-size: 1.2rem;
                color: #fff;
                background-color: #000;
                height:200px;
            }

            .quoteText {
                padding: 5rem;
                justify-content: center;
            }
            
            .cardManageCont {
                display: flex;
                justify-content: center;
                gap: 2rem;
                padding: 3rem;
                flex-wrap: wrap;
            }

            .cardManage {
                background-color: #d3d3d3;
                padding: 1rem;
                border-radius: 10px;
                display: flex;
                align-items: center;
                width: 300px;
                gap: 1rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .cardManageImg{
                background-color: #fff;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.8rem;
                text-align: center;
                padding: 0.5rem;
            }

            .square {
                width: 100px;
                height: 100px;
                border-radius: 10px;
            }

            .circle {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #11162C;
            }

            .cardManageInfo {
                flex-grow: 1;
            }

            .cardManageInfo p {
                font-weight: bold;
                margin-bottom: 0.5rem;
                
            }

            .infoBtn {
                background-color: #007BFF;
                color: white;
                border: none;
                padding: 0.4rem 0.8rem;
                border-radius: 6px;
                cursor: pointer;
                font-size: 1.2rem;
            }

            .infoBtn:hover {
                background-color: #DC6C06;
            }

            .manageText{
                color: #11162C;
            }

            @media screen and (max-width: 938px) {
                .headerImg {
                    min-height: 200px;
                }
                
                .cardClassCont {
                    padding: 0.5rem 0;
                    height:1000px;
                    gap: 0.5;
                }

                .moreLink{
                    /* margin-top: 1rem;
                    margin-bottom: 4rem; */
                    display: block;
                    width:100%;
                    padding-bottom: 20px;
                }
                
                .square, .circle {
                    width: 60px;
                    height: 60px;
                }
                
                .infoBtn {
                    font-size: 1rem;
                }
            }

            @media screen and (max-width: 640px) {
                .title {
                    padding-top: 1.5rem;
                    margin-bottom: 1.5rem;
                }
                
                .cardManage {
                    flex-direction: column;
                    text-align: center;
                    padding: 1.5rem 1rem;
                }
                
                .cardManageImg {
                    margin-bottom: 1rem;
                }
                
                .cardClassCont{
                    height:1550px;
                }
                .cardManageInfo {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                
                .quote {
                    padding: 1.5rem 1rem;
                }
            }

        </style>
    </head>
    <body>
        <div class="logo">LOGO</div>


        <nav class="nav-links">
            <a href="#" onclick="showPage('home')" id="nav-home">Home</a>
            <a href="#" onclick="showPage('classes')" id="nav-classes" class="active">Classes & Sessions</a>
            <a href="#" onclick="showPage('enrolled')" id="nav-enrolled">Enrolled Classes</a>
        </nav>

        <header class="headerImg">
                <!-- insert photo -->
        </header>
        <main class="mainCont">
            <h1 class="title">CLASSES & SESSIONS</h1>
            
            <section class="cardClassCont">
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
            <!-- </section> -->

            <a class="moreLink" href="#">Check out more classes & sessions here!</a>
            </section>
            <section class="quote">
                <p class="quoteText">"The only way to do great work is to love what you do." - Steve Jobs</p>
            </section>

            <section class="cardManageCont">
                <!-- MANAGE/SEE ENROLLED CLASSES -->
                <div class="cardManage">
                    <img class="cardManageImg square" src="images/chart.png" alt="A picture of a chart.">
                    <div class="cardManageInfo">
                        <p class="manageText">Check the classes you're enrolled in!</p>
                        <button class="infoBtn">→</button>
                    </div>
                </div>
                <!-- MANAGE PRFILE -->
                <div class="cardManage">
                    <img class="cardManageImg circle" src="images/profile.png" alt="Default profile picture.">
                    <div class="cardManageInfo">
                        <p class="manageText">Manage your account here!</p>
                        <a href="Profile.php"><button class="infoBtn">→</button></a>
                    </div>
                </div>
        </section>
        </main>
    </body>
</html>