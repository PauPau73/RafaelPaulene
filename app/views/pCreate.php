<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PCreate</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: radial-gradient(circle at top left, #0f0c29, #302b63, #24243e);
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .container {
      background: rgba(10, 10, 20, 0.8);
      border-radius: 20px;
      padding: 40px 35px;
      width: 380px;
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      text-align: center;
      font-size: 26px;
      margin-bottom: 25px;
      color: #00ffe7;
      letter-spacing: 1px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #e0e0e0;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      background: #1a1a2e;
      border: 2px solid #444;
      border-radius: 10px;
      font-size: 14px;
      color: #fff;
      transition: all 0.3s ease;
    }

    input[type="text"]::placeholder,
    input[type="number"]::placeholder {
      color: #888;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #00ffe7;
      box-shadow: 0 0 8px #00ffe7;
      outline: none;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: linear-gradient(90deg, #00ffe7, #7efff5);
      border: none;
      border-radius: 12px;
      color: #111;
      font-weight: bold;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px #00ffe7, 0 0 40px rgba(0, 255, 255, 0.2);
    }

    input[type="submit"]:hover {
      background: #00e6cc;
      box-shadow: 0 0 20px #00ffe7, 0 0 60px rgba(0, 255, 255, 0.4);
      transform: scale(1.03);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 18px;
      color: #00ffe7;
      font-size: 14px;
      text-decoration: none;
      opacity: 0.8;
      transition: opacity 0.3s;
    }

    .back-link:hover {
      opacity: 1;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create New Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name</label>
      <input type="text" id="user_name" name="user_name" placeholder="e.g. NeoShadow" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" placeholder="e.g. 28" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="e.g. Megacity Lane 42" required>

      <input type="submit" value="Create Profile">
    </form>
    <a href="#" class="back-link">← Go Back</a>
  </div>
</body>
</html>
