<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Login</h2>
      <form>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <div class="form-group">
          <label>
            User Role:
            <select>
              <option value="admin">Admin</option>
              <option value="hr-manager">HR Manager</option>
            </select>
          </label>
        </div>
        <label>
          <input type="checkbox"> Remember me
        </label>
        <button type="submit">Sign In</button>
        <a href="forgot_password.html">Forgot Password?</a>
      </form>
    </div>
  </div>
</body>
</html>
