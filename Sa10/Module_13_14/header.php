<?php
$links = [
  ['name' => 'Home', 'url' => 'index.php'],
  ['name' => 'About', 'url' => 'about.php'],
  ['name' => 'Contact', 'url' => 'contact.php'],
  ['name' => 'Signup', 'url' => 'signup.php'],
  ['name' => 'Login', 'url' => 'login.php']
];
?>

<header>
  <a>Logo</a>
  <nav>
    <ul>
      <?php foreach ($links as $link) : ?>
      <li>
        <a href="<?php echo $link['url'] ?>"><?php echo $link['name'] ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>