<?php
//container start 
?>

<section id="main" role="main">
  <div class="breadcrumb-container">
    <div class="row">
      <div class="large-12 column">
        <nav class="breadcrumbs animated bounceInDown"><a href="<?php echo $homeurl;?>">Home</a> <a class="current" href="#">Sign Up</a></nav>
      </div>
    </div>
  </div>
  <section class="part">
    <form class="text-center" action="<?php echo $site_url ;?>/views/signup-process.php" method="post">
      <div class="row title">
        <div class="large-12 column">
          <h6>New Account</h6>
        </div>
      </div>
      <div class="row">
        <div class="large-4 large-centered columns">
          <input type="text" placeholder="Name">
        </div>
      </div>
      <div class="row">
        <div class="large-4 large-centered columns">
          <input type="text" placeholder="Email">
        </div>
      </div>
      <div class="row">
        <div class="large-4 large-centered columns">
          <input type="text" placeholder="Password">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <button type="submit">Sign Up</button>
        </div>
      </div>
    </form>
  </section>
</section>
<a id="back-top" href="#"><i class="icon-caret-up"></i></a>

<?php
//container end
?>