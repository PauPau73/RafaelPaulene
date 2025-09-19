<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fdf6f0;
            margin: 0;
            padding: 20px;
            color: #444;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #c94f7c;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(255, 105, 180, 0.3);
        }

        .table-container {
            width: 85%;
            margin: 0 auto;
            background: #fff8f4;
            border: 4px dashed #ffb6c1;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Fabric texture overlay */
        .table-container::before {
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

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            position: relative;
            z-index: 1;
        }

        th, td {
            padding: 15px 20px;
            text-align: center;
            font-size: 15px;
        }

        th {
            background: #ffb6c1;
            color: white;
            font-size: 16px;
            border-bottom: 3px dashed #fff;
        }

        tr:nth-child(even) {
            background: #fff0f5;
        }

        tr:nth-child(odd) {
            background: #ffe6f2;
        }

        tr:hover {
            background: #ffd6e8;
            transform: scale(1.01);
            box-shadow: inset 0 0 10px rgba(255, 182, 193, 0.4);
        }

        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            transition: 0.3s;
            font-size: 14px;
        }

        a[href*="update"] {
            background: #ff80bf;
            color: white;
            border: 2px dashed #fff;
            box-shadow: 0 3px 6px rgba(255, 105, 180, 0.3);
        }

        a[href*="update"]:hover {
            background: #e75480;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(255, 105, 180, 0.5);
        }

        a[href*="delete"] {
            background: #ff4d6d;
            color: white;
            border: 2px dashed #fff;
            box-shadow: 0 3px 6px rgba(255, 0, 102, 0.3);
        }

        a[href*="delete"]:hover {
            background: #d6336c;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(255, 0, 102, 0.5);
        }

        .create-btn {
            display: inline-block;
            background: #ffb6c1;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
            border: 2px dashed #fff;
            box-shadow: 0 4px 6px rgba(255, 105, 180, 0.3);
            transition: 0.3s;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .create-btn:hover {
            background: #ff91af;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(255, 105, 180, 0.5);
        }
    </style>
</head>
<body>
    <h1>🧵 User List 🧵</h1>

    <div class="table-container">
        <div style="text-align: right; margin-bottom: 15px;">
            <a href="<?= site_url('user/create'); ?>" class="create-btn">✨ + Create New User ✨</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a> |
                        <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
