<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* 🌿 Background & Base */
    body {
      background: linear-gradient(135deg, #a8e6cf, #dcedc1);
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    /* 🌸 Card Container */
    .form-container {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: 0 12px 40px rgba(46, 125, 50, 0.15);
      width: 100%;
      max-width: 600px;
      animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* 🌱 Header Section */
    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .page-title {
      font-weight: 800;
      font-size: 2rem;
      color: #1b4332;
      margin: 0;
    }

    .logout-btn {
      background-color: #c62828;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 8px 18px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(198, 40, 40, 0.3);
    }

    .logout-btn:hover {
      background-color: #b71c1c;
      transform: translateY(-2px);
      color: #fff;
    }

    /* 🪴 Form Elements */
    .form-label {
      color: #1b4332;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .form-control {
      border-radius: 12px;
      border: 2px solid #c8e6c9;
      background-color: #f1f8f1;
      padding: 0.8rem 1rem;
      font-size: 1rem;
      transition: 0.3s;
    }

    .form-control:focus {
      border-color: #2d6a4f;
      box-shadow: 0 0 0 0.2rem rgba(45, 106, 79, 0.25);
      background-color: #fff;
    }

    /* 🌼 Buttons */
    .btn-update {
      background: linear-gradient(135deg, #2d6a4f, #40916c);
      color: white;
      border: none;
      border-radius: 12px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 6px 16px rgba(64, 145, 108, 0.3);
    }

    .btn-update:hover {
      background: linear-gradient(135deg, #1b4332, #2d6a4f);
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(45, 106, 79, 0.4);
    }

    .btn-cancel {
      background-color: transparent;
      color: #1b4332;
      border: 2px solid #1b4332;
      border-radius: 12px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-cancel:hover {
      background-color: #1b4332;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(27, 67, 50, 0.3);
    }

    /* ✨ Subtle Animation for Inputs */
    .form-control, .btn-update, .btn-cancel {
      animation: slideUp 0.5s ease both;
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="header-section">
      <h1 class="page-title">Edit User</h1>
      <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
    </div>

    <form method="post" action="">
      <div class="mb-4">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?= html_escape($student['first_name']); ?>" required />
      </div>

      <div class="mb-4">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?= html_escape($student['last_name']); ?>" required />
      </div>

      <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= html_escape($student['email']); ?>" required />
      </div>

      <div class="d-flex gap-3">
        <button type="submit" class="btn-update">Update User</button>
        <a href="<?= site_url('author'); ?>" class="btn-cancel">Cancel</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
