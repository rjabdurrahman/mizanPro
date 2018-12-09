<?php include('head.php'); ?>
  <div class="w3-container div-box auto" style="margin-top: 70px;">
    <div class="w3-card-4">
      <div class="w3-container w3-teal">
        <h2>Login</h2>
      </div>

      <form method="POST" action="login.php" class="w3-container">
        <p>
          <label>Username</label>
          <input class="w3-input" name="user" type="text" required>
        </p>
        <p>
          <label>Password</label>
          <input class="w3-input" name="pass" type="password" required>
        </p>
        <button class="w3-button w3-teal" style="float: right;">Login</button>
        <div style="height: 18px; clear: both;"></div>
      </form>
    </div>
  </div>
</body>

</html>