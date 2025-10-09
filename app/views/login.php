<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Profile System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* 🌿 Background */
    body {
      background: linear-gradient(135deg, #C8E6C9, #E8F5E9);
      background-attachment: fixed;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
    }

    /* 💎 Glass-style Login Card */
    .login-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(46, 125, 50, 0.15);
      padding: 2.5rem;
      width: 100%;
      max-width: 420px;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* 🌱 Title */
    .login-title {
      color: #1B5E20;
      font-weight: 700;
      font-size: 2rem;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    /* 🔤 Input Groups */
    .form-floating {
      margin-bottom: 1.25rem;
    }

    .form-control, .form-select {
      border: 2px solid #C8E6C9;
      border-radius: 12px;
      background-color: #F9FFF9;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: #2E7D32;
      box-shadow: 0 0 0 0.25rem rgba(46, 125, 50, 0.25);
      background-color: #fff;
    }

    /* 🌟 Login Button */
    .btn-login {
      background-color: #2E7D32;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 12px;
      padding: 12px;
      width: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 6px 18px rgba(46, 125, 50, 0.3);
    }

    .btn-login:hover {
      background-color: #1B5E20;
      box-shadow: 0 10px 25px rgba(46, 125, 50, 0.4);
      transform: translateY(-2px);
    }

    /* 💬 Links */
    .extra-links {
      text-align: center;
      margin-top: 1rem;
      color: #555;
      font-size: 0.95rem;
    }

    .extra-links a {
      color: #2E7D32;
      font-weight: 600;
      text-decoration: none;
      transition: 0.2s;
    }

    .extra-links a:hover {
      color: #1B5E20;
      text-decoration: underline;
    }

    /* ⚠️ Alert */
    .alert {
      border-radius: 12px;
      border: 1px solid #C8E6C9;
      font-size: 0.95rem;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h2 class="login-title">Welcome Back</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/login'); ?>" method="post">
      <div class="form-floating">
        <select class="form-select" name="role" id="role" required>
          <option value="" selected disabled>Select Role</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
        <label for="role">Role</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        <label for="username">Username</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <button type="submit" class="btn btn-login mt-2">Login</button>
    </form>

    <div class="extra-links mt-3">
      <div><a href="<?= site_url('auth/forgot-password'); ?>">Forgot password?</a></div>
      <div class="mt-2">Don’t have an account? <a href="<?= site_url('auth/register'); ?>">Register</a></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
