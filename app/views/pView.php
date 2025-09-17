<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PView</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:radial-gradient(circle at top left,rgb(22, 109, 101));
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        a.create-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background:, #302b63;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        a.create-btn:hover {
            background: #24243e9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px;rgb(11, 73, 67)(142, 197, 255, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background: #302b63;
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #f1f1f1;
        }
        td a {
            text-decoration: none;
            margin: 0 5px;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.3s;
        }
        td a:first-child {
            background: #302b63;
            color: white;
        }
        td a:first-child:hover {
            background: #0b7dda;
        }
        td a:last-child {
            background: #f44336;
            color: white;
        }
        td a:last-child:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>
    <h1>Welcome to PCreate View</h1>
    <a href="/create" class="create-btn">+ Create New Profile</a>
    <table>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($data as $item): ?>
        <tr>
            <td><?=($item['id']); ?></td>
            <td><?=($item['user_name']); ?></td>
            <td><?=($item['age']); ?></td>
            <td><?=($item['address']); ?></td>
            <td>
                <a href="<?=site_url('/edit/' .($item['id'])); ?>">Edit</a> 
                <a href="<?=site_url('/delete/' .($item['id'])); ?>" onclick="return confirm('Are you sure you want to delete this profile?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
