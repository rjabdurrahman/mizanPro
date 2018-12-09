<?php include('head.php'); ?>
<body>
  <div class="w3-container w3-teal flex" style="justify-content: space-between;">
    <h3>Result Management</h3>
    <div class="w3-bar w3-teal" style="width: 300px;">
      <a href="index.html" class="w3-bar-item w3-button">Home</a>
      <a href="index.html" class="w3-bar-item w3-button">Login</a>
      <a href="register.html" class="w3-bar-item w3-button">Register</a>
    </div>
  </div>
  <div class="w3-container div-box auto" style="margin-top: 70px;">
    <div class="w3-card-4">
      <div class="w3-container w3-teal">
        <h2>Login</h2>
      </div>

      <form method="POST" action="login.php" class="w3-container">
        <p>
          <label>Username</label>
          <input class="w3-input" name="user" type="text">
        </p>
        <p>
          <label>Password</label>
          <input class="w3-input" name="pass" type="password">
        </p>
        <button class="w3-button w3-teal" style="float: right;">Login</button>
        <div style="height: 18px; clear: both;"></div>
      </form>
    </div>
  </div>
</body>

</html>