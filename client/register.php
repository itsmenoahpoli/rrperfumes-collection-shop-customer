<?php 
require_once './components/header.layout.php'; 
require './../server/app/services/authentication.service.php';

$authenticationService = new AuthenticationService();

if (isset($_POST['btn-register'])) {

  // $credentials = (object) array(
  //   'email' => $_POST['email'],
  //   'password' => $_POST['password']
  // );

  // $authenticationService->userAuthenticate($credentials);
}
?>

<div class="container">
  <div class="auth-container" style="height: 100vh;">
    <div class="login-card">
      <h2>Register as customer</h2>

      <small>Please provide your basic information below &mdash;</small>

      <br /><br />

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="middle_name" placeholder="Middle Name">
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="text" name="mobile_number" placeholder="Mobile Number" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>

        <button type="submit" name="btn-register">
          Create Account
        </button>
      </form>

      <br />

      <small>
        Already have an account? click <a href="#">here</a>
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