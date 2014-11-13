<?php
//menu start
/*
dependency--- includes/external-links.php
dependency--- add dependency here
*/
require 'config.php';
require_once 'external-links.php';
?>

<body>
<header class="contain-to-grid">
  <div class="row">
    <div class="large-12 column">
      <nav id="menu" class="top-bar">
        <ul class="title-area">
          <li class="name"><a href="<?php echo $site_url; ?>/index.php"><img src="<?php echo $site_url; ?>/static/images/logo.png" alt="logo"></a></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <ul class="right">
            <li><a href="<?php echo $site_url; ?>">HOME</a></li>
            <li><a href="<?php echo $site_url; ?>/views/plans.php">PLANS</a></li>
			<li><a href="<?php echo $site_url; ?>/views/features.php">FEATURES</a></li>
            <li><a href="<?php echo $site_url; ?>/views/about.php">ABOUT</a></li>
            <li><a href="<?php echo $site_url; ?>/views/contact.php">CONTACT</a></li>
            <li><a href="<?php echo $loginurl;?>">LOG IN</a></li>
            <li id="signup"><a href="<?php echo $site_url; ?>/views/signup.php" class="button no-margin">SIGN UP</a></li>
          </ul>
        </section>
      </nav>
    </div>
  </div>
</header>

<?php
//menu end
?>