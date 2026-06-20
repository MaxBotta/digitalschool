<?php include_once 'head.php'; ?>

<body class="container">

  <?php include_once 'header.php'; ?>

  <div class="row">
    <div class="">
      <!-- <img src="./images/login.jpg" alt="login image" class="w-full"> -->
    </div>
    <div class="signup">
      <form action="register-user.php" method="POST">
        <label for="firstname">Firstname</label>
        <input placeholder="firstname" name="firstname" id="firstname" required>

        <label for="lastname">Lastname</label>
        <input placeholder="lastname" name="lastname" id="lastname" required>

        <label for="email">Email</label>
        <input placeholder="email" type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input placeholder="password" type="password" name="password" id="password" required>

        <button type="submit" name="submit">Sign Up</button>

      </form>
    </div>
  </div>

</body>

</html>