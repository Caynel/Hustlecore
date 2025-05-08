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
                background-color: #fff;
                color: #000;
                line-height: 1.6;
            }

            .mainCont {
                max-width: 1200px;
                margin: auto;
                padding: 2rem;
                text-align: center;
            }

            .title {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 2rem;
            }

            .cardClassCont {
                display: flex;
                justify-content: center;
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            .cardClass {
                background-color: #D9D9D9;
                border-radius: 12px;
                padding: 1rem;
                width: 280px;
                text-align: left;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
                color: #696969;
            }

            .cardPrice {
                font-weight: bold;
                color: #11162C;
            }

            .cardClassDetails {
                list-style: none;
                margin-bottom: 1rem;
            }

            .cardText {
                margin-left: 1.7rem;
            }

            .enrollBtn {
                background-color:  #007BFF;
                color: #fff;
                padding: 0.5rem 1rem;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                margin:10px;
                margin-left: 0;
            }

            .enrollBtn:hover {
                background-color: #DC6C06;
            }

            .moreLink {
                margin-top: 2rem;
                margin-bottom: 4rem;
                font-weight: bold;
                color: #000;
                text-decoration: none;
                display: block;
                text-align: center;
            }

            .moreLink:hover {
                text-decoration: underline;
                color: #DC6C06;
            }

            hr {
                color: #696969;
                margin: 1rem 0;
            }

         </style>
    </head>
    <body>
        <div class="navigation">

        </div>
        <div class="mainCont">
            <h1 class="title">SELECT MEMBERSHIP PLAN</h1>
        
            <div class="cardClassCont">
                <!-- CARD 1 -->
                <div class="cardClass">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Monthly Membership</h2>
                        <h1 class="cardPrice">₱1000.00</h1>
                        <button class="enrollBtn">Apply Now →</button>
                        <hr>
                        <ul class="cardClassDetails">
                            <li>✅ Best for: 
                                <p class="cardText">
                                    Casual gym-goers, travelers, or those testing the waters.
                                </p>
                            </li>
                            <li>
                                ✨ Perks: 
                                <p class="cardText">
                                    Basic access to equipment, group classes, and locker rooms.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="cardClass">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Quarterly Membership</h2>
                        <h1 class="cardPrice">₱2500.00</h1>
                        <button class="enrollBtn">Apply Now →</button>
                        <hr>
                        <ul class="cardClassDetails">
                            <li>✅ Best for: 
                                <p class="cardText">
                                    Those who want to commit for a few months without a long-term contract.
                                </p>
                            </li>
                            <li>
                                ✨ Perks: 
                                <p class="cardText">
                                    Basic access to equipment, group classes, and locker rooms.
                                    Plus free personal training session and nutrition consultation.
                                </p> 
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="cardClass">
                    <div class="cardClassInfo">
                        <h2 class="cardClassTitle">Annual Membership</h2>
                        <h1 class="cardPrice">₱8000.00</h1>
                        <button class="enrollBtn">Apply Now →</button>
                        <hr>
                        <ul class="cardClassDetails">
                            <li>✅ Best for:
                                <p class="cardText">
                                    Dedicated fitness enthusiasts or those serious about their health journey.
                                </p>
                            </li>
                            <li>
                                ✨ Perks: 
                                <p class="cardText">
                                    Basic access to equipment, group classes, and locker rooms.
                                    Plus free personal training session and nutrition consultation.
                                    Free exclusive gym merchandise and VIP access to special events.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="moreLink" href="Homepage.php">Skip for now ➡️</a>
    </body>
</html>