<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6f0ff;
            background-image: repeating-linear-gradient(
                45deg, #e3f2fd 0px, #e3f2fd 10px, #bbdefb 10px, #bbdefb 20px
            );
            background-size: 40px 40px;
            margin: 50px; /* ✅ Fixed: may unit na px */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 10px;
        }

        .form-container {
            background: #ffffff;
            color: #333;
            padding: 30px 35px;
            border-radius: 20px;
            border: 4px dashed #64b5f6;
            box-shadow: 0px 10px 25px rgba(100, 181, 246, 0.4);
            max-width: 380px;
            width: 100%;
            animation: popIn 0.6s ease-out;
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0.8) rotate(-2deg);
            }
            60% {
                opacity: 1;
                transform: scale(1.05) rotate(1deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.6rem;
            color: #1565c0;
            background: #e3f2fd;
            padding: 8px 15px;
            border-radius: 15px;
            border: 2px dashed #90caf9;
            display: inline-block;
            width: 100%;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            color: #1976d2;
            font-size: 0.95rem;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px dashed #bbdefb;
            border-radius: 12px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 15px;
            background: #f0f8ff;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #64b5f6;
            box-shadow: 0px 0px 10px rgba(100, 181, 246, 0.5);
            background: #e3f2fd;
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #64b5f6, #1565c0);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: 2px dashed white;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 6px 12px rgba(33, 150, 243, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #42a5f5, #0d47a1);
            transform: translateY(-2px) rotate(-1deg);
            box-shadow: 0 8px 16px rgba(33, 150, 243, 0.6);
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
                border-width: 3px;
            }

            .form-container h1 {
                font-size: 1.3rem;
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>🧵 Create New User 🧵</h1>
        <form method="post" action="">
            <label for="username">👤 Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter username" required>

            <label for="email">📧 Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required>

            <input type="submit" value="✨ Create User ✨">
        </form>
    </div>
</body>
</html>
