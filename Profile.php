<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
      * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
        }

        body {
          padding: 20px;
          background-color: #f5f5f5;
        }

        .mainContc {
          max-width: 800px;
          margin: auto;
          background: white;
          padding: 20px;
          border-radius: 10px;
        }

        h2, h3 {
          margin-bottom: 15px;
        }

        .upperCont {
          display: flex;
          gap: 20px;
          margin-bottom: 30px;
        }

        .profileImg {
          width: 150px;
          height: 150px;
          background: #ccc;
          display: flex;
          align-items: center;
          justify-content: center;
          font-weight: bold;
        }

        .profileDetails {
          flex-grow: 1;
        }

        .profileDetails button {
          margin-top: 10px;
        }

        .membershipBox {
          display: flex;
          gap: 20px;
          margin-bottom: 20px;
        }

        .currentPlan, .renewal {
          background: #ddd;
          padding: 15px;
          flex: 1;
          border-radius: 8px;
        }

        .planType, .price {
          margin-top: 10px;
          font-weight: bold;
        }

        .memberSince {
          font-size: 0.85em;
          margin-top: 10px;
          color: #555;
        }

        .actions {
          display: flex;
          gap: 20px;
          flex-wrap: wrap;
        }

        .managePlan, .payment {
          background: #ddd;
          padding: 15px;
          flex: 1;
          border-radius: 8px;
          display: flex;
          flex-direction: column;
          gap: 10px;
        }

        button {
          padding: 8px 12px;
          border: none;
          background-color: #333;
          color: white;
          border-radius: 5px;
          cursor: pointer;
        }

        button:hover {
          background-color: #555;
        }

    </style>
  </head>
  <di>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Classes & Sessions</a></li>
          <li><a href="#">Enrolled Classes</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
    </header>
    <main class="mainCont">
      <h2>Profile</h2>
      <h3>Account Details</h3>

      <div class="upperCont">
        <div class="profileImg">IMAGE</div>
          <div class="profileDetails">
            <p><strong>Jolly Bee</strong></p>
            <p>Email: jollybee@gmail.com</p>
            <p>Password: ******</p>
            <button>Edit Details</button>
          </div>
      </div>
    

      <section class="membership">
        <h3>Manage Membership</h3>
        <div class="membershipBox">
          <div class="currentPlan">
            <p><strong>Current Plan</strong></p>
            <div class="planType">Monthly Plan</div>
            <div class="price">1000 php</div>
            <p class="memberSince">Member since Month Year</p>
          </div>
          <div class="renewal">
            <p><strong>Renew At</strong></p>
            <p>Month Day Year</p>
          </div>
        </div>

        <div class="actions">
          <div class="managePlan">
            <button>Cancel Membership</button>
            <button>Downgrade/Upgrade</button>
          </div>
          <div class="payment">
            <button>View Past Payments</button>
            <button>Change Payment Plan</button>
          </div>
        </div>
      </section>
      </main>
  </body>
</body>
</html>
