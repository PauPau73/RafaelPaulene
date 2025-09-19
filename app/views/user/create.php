<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Create</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fdf6f0; /* Soft canvas color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff8f4;
            padding: 35px 45px;
            border-radius: 20px;
            border: 4px dashed #ffb6c1; /* Stitched border */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            width: 360px;
            animation: fadeIn 0.6s ease-in-out;
            position: relative;
        }

        /* Faux fabric texture effect */
        .form-container::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 20px;
            background: repeating-linear-gradient(
                45deg,
                rgba(255, 182, 193, 0.05),
                rgba(255, 182, 193, 0.05) 8px,
                transparent 8px,
                transparent 16px
            );
            z-index: 0;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            color: #c94f7c;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            color: #b94d75;
            font-size: 14px;
            position: relative;
            z-index: 1;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px dashed #f5a6c6;
            border-radius: 12px;
            outline: none;
            transition: 0.3s;
            font-size: 15px;
            background: #fff0f5;
            position: relative;
            z-index: 1;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #ff80bf;
            background: #fff7fb;
            box-shadow: inset 0px 0px 8px rgba(255, 192, 203, 0.5);
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: #ffb6c1;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: 2px dashed #fff;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(255, 182, 193, 0.3);
            transition: all 0.3s ease-in-out;
            position: relative;
            z-index: 1;
        }

        input[type="submit"]:hover {
            background: #ff91af;
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(255, 105, 180, 0.4);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>🧵 Create New User 🧵</h1>
        <form method="post" action="">
            <label for="username">👩 Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">📧 Email:</label>
            <input type="email" name="email" id="email" required>

            <input type="submit" value="✨ Create User ✨">
        </form>
    </div>
</body>
</html>
