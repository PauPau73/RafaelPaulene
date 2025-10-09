<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #9be7ff 0%, #b4f8c8 100%);
      font-family: "Poppins", sans-serif;
      padding: 2rem;
    }

    .register-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
      padding: 2.5rem 2rem;
      width: 100%;
      max-width: 480px;
      animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .register-title {
      text-align: center;
      font-weight: 800;
      font-size: 2rem;
      margin-bottom: 1.8rem;
      color: #184e77;
    }

    .form-control,
    .form-select {
      border-radius: 12px;
      border: 2px solid #e9f5ee;
      background-color: #f9fdfb;
      padding: 0.8rem 1rem;
      transition: 0.3s;
      font-size: 1rem;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #2d6a4f;
      box-shadow: 0 0 0 0.2rem rgba(45, 106, 79, 0.15);
      background-color: #ffffff;
    }

    .btn-register {
      background: linear-gradient(135deg, #2d6a4f, #40916c);
      border: none;
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: 600;
      color: white;
      width: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 6px 16px rgba(64, 145, 108, 0.3);
    }

    .btn-register:hover {
      background: linear-gradient(135deg, #1b4332, #2d6a4f);
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(45, 106, 79, 0.4);
    }

    .alert {
      border-radius: 12px;
      font-size: 0.95rem;
    }

    .login-link {
      text-align: center;
      margin-top: 1.5rem;
      color: #555;
    }

    .login-link a {
      color: #1b4332;
      text-decoration: none;
      font-weight: 600;
      transition: 0.2s;
    }

    .login-link a:hover {
      text-decoration: underline;
      color: #2d6a4f;
    }
  </style>
</head>
<body>
  <div class="register-card">
    <h2 class="register-title">Create an Account</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="alert alert-success" role="alert">
        <?= html_escape($_SESSION['success']); ?>
        <?php unset($_SESSION['success']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/register'); ?>" method="post">
      <div class="mb-3">
        <label class="form-label fw-semibold">Role</label>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
          <select class="form-select" name="role" required>
            <option value="" disabled selected>Select</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        <?php else: ?>
          <select class="form-select" name="role" required>
            <option value="" disabled selected>Select</option>
            <option value="user">User</option>
          </select>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required />
      </div>

      <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email Address" required />
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required />
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required />
      </div>

      <button type="submit" class="btn-register">Register</button>
    </form>

    <div class="login-link mt-3">
      Already have an account? <a href="<?= site_url('auth/login'); ?>">Login here</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
