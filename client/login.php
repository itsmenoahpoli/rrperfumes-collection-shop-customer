<?php 
session_start();

require_once './components/header.layout.php'; 
require './../server/app/services/authentication.service.php';

$authenticationService = new AuthenticationService();

if (isset($_POST['btn-login'])) {

  $credentials = (object) array(
    'email' => $_POST['email'],
    'password' => $_POST['password']
  );

  $authenticationService->userAuthenticate($credentials);
}
?>

<div class="container">
  <div class="auth-container">
    <div class="login-card">
      <h2>Log In</h2>

      <small>Please provide your account credentials below &mdash;</small>

      <br /><br />

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="email" name="email" placeholder="ex. johndoe@domain.com" required>
        <input type="password" name="password" placeholder="********" required>

        <a href="#">Forgot your password?</a>

        <button type="submit" name="btn-login">
          Log In
        </button>
      </form>

      <br />

      <small>
        Don't have an account? click <a href="#">here</a>
      </small>
    </div>
  </div>
  
</div>

<script>
  function successLogin() {
    alert('login success');
  }
</script>

<?php require './components/footer.layout.php'; ?>