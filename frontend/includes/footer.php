<?php
//footer start

/*
dependency--- includes/external-links.php
dependency--- add dependency here
*/
?>

<footer>
  <div class="row spacy">
    <div class="large-6 column">
      <h4>About us</h4>
      <p>
	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
	  </p>
      <ul class="large-block-grid-5 popup">
        <li><a href="images/demo/person1.jpg"><img src="images/demo/person1_s.jpg" alt=""></a></li>
        <li><a href="images/demo/person2.jpg"><img src="images/demo/person2_s.jpg" alt=""></a></li>
        <li><a href="images/demo/person3.jpg"><img src="images/demo/person3_s.jpg" alt=""></a></li>
        <li><a href="images/demo/person4.jpg"><img src="images/demo/person4_s.jpg" alt=""></a></li>
        <li><a href="images/demo/person5.jpg"><img src="images/demo/person5_s.jpg" alt=""></a></li>
      </ul>
    </div>
    <div class="large-2 column">
      <h4>Useful Links</h4>
      <ul class="side-nav">
        <li><a href="terms.php">Terms & Conditions</a></li>
        <li><a href="<?php echo $forum;?>">Forum</a></li>
        <li><a href="<?php echo $blog;?>">Blog</a></li>
        <li><a href="status.php">System Status</a></li>
		<li><a href="<?php echo $support;?>">Support</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li><a href="<?php echo $login;?>">Login</a></li>
      </ul>
    </div>
    <div class="large-4 column">
      <h4>Contact</h4>
      <div class="row">
        <div class="small-3 column">
          <h6>Address:</h6>
        </div>
        <div class="small-9 column">
          <p>121 Lorem Ipsum, Ipsum Lorem 3000 India</p>
        </div>
      </div>
      <div class="row">
        <div class="small-3 column text">
          <h6>Phone:</h6>
        </div>
        <div class="small-9 column text">
          <p>+61 3 8376 6284<br>
            +61 3 8376 6287</p>
        </div>
      </div>
      <div class="row">
        <div class="small-3 column text">
          <h6>Email:</h6>
        </div>
        <div class="small-9 column text">
          <p><a href="mailto:<?php echo $email_footer_a;?>"><?php echo $email_footer_a;?></a><br>
            <a href="mailto:<?php echo $email_footer_b;?>"><?php echo $email_footer_b;?></a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 column">
      <hr>
    </div>
  </div>
  <div class="row">
    <p class="small-12 large-4 large-uncentered column copyright">Copyright &copy; site.</p>
	<p class="small-12 large-8 column social">
	<a href="<?php echo $facebook;?>" target="_blank"><i class="icon-facebook"></i></a> 
	<a href="<?php echo $twitter;?>" target="_blank"><i class="icon-twitter"></i></a> 
	<a href="<?php echo $googleplus;?>" target="_blank"><i class="icon-google-plus"></i></a> 
	<a href="<?php echo $youtube;?>" target="_blank"><i class="icon-youtube"></i></a> </p>
  </div>
</footer>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/jquery.magnific-popup.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.section.js"></script>
<script src="js/filoxenia.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<?php
//footer end
?>