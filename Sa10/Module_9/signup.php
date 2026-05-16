<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <link href="style.css" rel="stylesheet" />

</head>
<body>
  <header>
    <div>Journal</div>
    <nav>
      <ul>
        <li>
          <a href="login.php">Login</a>
        </li>
        <li>
          <a href="signup.php">Sign Up</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="cover">
      <img src="./images/cover.jpg"/>
      <!-- <h1>Welcome to Journal</h1>
      <p>Sign up to create your own journal and share your thoughts with the world.</p> -->
    </div>

    <div class="signup">
      <form action="add_user.php" method="POST">
        <label for="firstname">Firstname</label>
        <input placeholder="firstname" name="firstname" id="firstname" required>

        <label for="lastname">Lastname</label>
        <input placeholder="lastname" name="lastname" id="lastname" required>

        <label for="email">Email</label>
        <input placeholder="email" type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input placeholder="password" type="password" name="password" id="password" required>

        <button type="submit">Sign Up</button>

      </form>
    </div>
  </main>
</body>
</html>
