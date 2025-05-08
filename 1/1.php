<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gym Classes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f4f4;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
    }

    .card-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 300px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
      flex-grow: 1;
    }

    .card h2 {
      margin-top: 0;
      font-size: 1.5em;
    }

    .card p {
      margin: 10px 0;
      color: #555;
    }

    .enroll-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px;
      text-align: center;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .enroll-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h1>Explore Our Classes</h1>

  <div class="card-container">

    <!-- Yoga Card -->
    <div class="card">
      <img src="https://via.placeholder.com/300x180.png?text=Yoga+Class" alt="Yoga">
      <div class="card-content">
        <h2>Yoga</h2>
        <p>Enhance your flexibility, build strength, and find inner peace with our flowing yoga sequences.</p>
      </div>
      <a href="2.php?activity=Yoga"><button class="enroll-btn">Enroll in Class</button></a>
    </div>

    <!-- CrossFit Card -->
    <div class="card">
      <img src="https://via.placeholder.com/300x180.png?text=CrossFit+Class" alt="Crossfit">
      <div class="card-content">
        <h2>CrossFit</h2>
        <p>Push your limits with our high-intensity CrossFit training led by certified coaches.</p>
      </div>
      <a href="2.php?activity=Crossfit"><button class="enroll-btn">Enroll in Class</button></a>
    </div>

  </div>

</body>
</html>
