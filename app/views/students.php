<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile View</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #d4f0d4 0%, #e8f5e9 100%);
      background-attachment: fixed;
      background-image: url('assets/images/minsu_logo-removebg-preview.png');
      background-repeat: no-repeat;
      background-position: center;
      background-size: 280px;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      max-width: 1100px;
    }

    .page-title {
      color: #1B5E20;
      font-weight: 700;
      text-align: center;
      margin: 1.5rem 0;
      font-size: 2.6rem;
      letter-spacing: 1px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }

    /* 🔍 Search & Buttons Section */
    .search-container {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(8px);
      border-radius: 16px;
      padding: 1.2rem 1.5rem;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      margin-bottom: 25px;
    }

    .search-container input {
      border: 2px solid #C8E6C9;
      border-radius: 10px;
      padding: 10px 15px;
      transition: 0.3s ease;
    }

    .search-container input:focus {
      border-color: #2E7D32;
      box-shadow: 0 0 0 0.15rem rgba(46, 125, 50, 0.25);
    }

    .search-btn,
    .create-btn,
    .logout-btn {
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .search-btn {
      background-color: #2E7D32;
      color: white;
    }
    .search-btn:hover {
      background-color: #1B5E20;
    }

    .create-btn {
      background-color: #43A047;
      color: white;
      box-shadow: 0 3px 8px rgba(67, 160, 71, 0.3);
    }
    .create-btn:hover {
      background-color: #2E7D32;
      transform: translateY(-2px);
    }

    .logout-btn {
      background-color: #C62828;
      color: white;
      box-shadow: 0 3px 8px rgba(198, 40, 40, 0.3);
    }
    .logout-btn:hover {
      background-color: #B71C1C;
      transform: translateY(-2px);
    }

    /* 🧾 Profile Table */
    .profile-table {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(6px);
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      overflow: hidden;
    }

    .table-header {
      background: #1B5E20;
      color: white;
      text-transform: uppercase;
      font-weight: 600;
    }

    .table-header th {
      padding: 15px;
      font-size: 0.95rem;
      letter-spacing: 0.5px;
    }

    .table-body tr {
      transition: background 0.2s, transform 0.2s;
    }

    .table-body tr:nth-child(odd) {
      background-color: #f1f8f1;
    }

    .table-body tr:hover {
      background-color: #dcedc8;
      transform: scale(1.01);
    }

    .table-body td {
      padding: 14px;
      color: #333;
      font-size: 0.95rem;
      vertical-align: middle;
    }

    /* ✏️ Action Buttons */
    .edit-btn, .delete-btn {
      border: none;
      border-radius: 30px;
      padding: 6px 14px;
      font-weight: 600;
      font-size: 0.9rem;
      transition: 0.3s;
    }

    .edit-btn {
      background-color: #2E7D32;
      color: white;
    }
    .edit-btn:hover {
      background-color: #1B5E20;
    }

    .delete-btn {
      background-color: #E53935;
      color: white;
    }
    .delete-btn:hover {
      background-color: #B71C1C;
    }

    /* 📱 Responsive tweaks */
    @media (max-width: 768px) {
      .page-title {
        font-size: 2rem;
      }
      .table-header, .table-body td {
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>

<div class="container py-4">
  <h1 class="page-title">Profile Management</h1>

  <div class="search-container">
    <div class="row align-items-center g-2">
      <div class="col-md-6">
        <form action="<?= site_url('author'); ?>" method="get" class="d-flex">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input class="form-control me-2" name="q" type="text" placeholder="🔍 Search profiles..." value="<?= html_escape($q); ?>">
          <button type="submit" class="btn search-btn">Search</button>
        </form>
      </div>
      <div class="col-md-3 text-center">
        <?php if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['user', 'admin'])): ?>
          <a href="<?= site_url('student/create'); ?>" class="btn create-btn">+ Add New User</a>
        <?php endif; ?>
      </div>
      <div class="col-md-3 text-end">
        <a href="<?= site_url('auth/logout'); ?>" class="btn logout-btn">Logout</a>
      </div>
    </div>
  </div>

  <div class="profile-table mt-3">
    <table class="table mb-0">
      <thead class="table-header">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-body">
        <?php foreach (html_escape($all) as $index => $author): ?>
          <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $author['first_name'] . ' ' . $author['last_name']; ?></td>
            <td><?= $author['email']; ?></td>
            <td>
              <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="<?= site_url('student/edit/'.$author['id']); ?>" class="btn edit-btn">Edit</a>
                <a href="<?= site_url('student/delete/'.$author['id']); ?>" class="btn delete-btn" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              <?php else: ?>
                <span class="text-muted fst-italic">No actions</span>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-3">
    <?= $page; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
