<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PUpdate</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right,rgb(106, 240, 255), #4a00e0);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 70px auto;
      background:rgb(120, 208, 245);
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      position: relative;
      transition: all 0.3s ease;
    }

    .container:hover {
      transform: scale(1.01);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    .container h1 {
      text-align: center;
      color:rgb(12, 47, 49);
      font-size: 28px;
      margin-bottom: 25px;
    }

    .profile-icon {
      text-align: center;
      font-size: 60px;
      color: #6c63ff;
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 15px;
      transition: all 0.3s ease;
      background-color: #f9f9f9;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #a29bfe;
      box-shadow: 0 0 6px rgba(162, 155, 254, 0.7);
      outline: none;
      background-color: #ffffff;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: #6c63ff;
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #5f5cd0;
    }

    @media (max-width: 600px) {
      .container {
        margin: 30px 20px;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-icon"></div>
    <h1>Update Your Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name</label>
      <input type="text" id="user_name" name="user_name" value="<?=($data['user_name']); ?>" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" value="<?=($data['age']); ?>" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" value="<?=($data['address']); ?>" required>

      <input type="submit" value="Update Profile">
    </form>
  </div>
</body>
</html>
