<?php

include_once 'config.php';

if (!isset($_SESSION['email'])) {
  header('Location: login.php');
}

include_once 'head.php';
?>


<body class="container">

  <?php include_once 'header.php'; ?>


  <?php echo 'Willkommen auf dem Dashboard, ' . $_SESSION['email'] . '!'; ?>

</body>

</html>