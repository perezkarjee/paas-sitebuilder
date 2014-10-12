<?php
//container start 

/*
dependency--- includes/external-links.php
dependency--- includes/contact-form-process.php
dependency--- add dependency here
*/
?>


<section id="main" role="main">
  <div class="breadcrumb-container">
    <div class="row">
      <div class="large-12 column">
        <nav class="breadcrumbs animated bounceInDown"><a href="index.php">Home</a> <a class="current" href="#">Contact Us</a></nav>
      </div>
    </div>
  </div>
  <section class="part">
    <div class="row title">
      <div class="large-12 column">
        <h6>Contact Us</h6>
      </div>
    </div>
    <div class="row">
      <div class="large-7 column">
        <p>If you're having trouble, the first place to look for help is on our <a href="<?php echo $support;?>">support</a> page. If you still need our help, please fill the form below:</p>
        <form action="includes/contact-form-process.php" method="post">
          <div class="row">
            <div class="large-8 column">
              <label>Full Name:</label>
              <input type="text" name="fullname">
            </div>
          </div>
          <div class="row">
            <div class="large-8 column">
              <label>Email:</label>
              <input type="text" name="email">
            </div>
          </div>
          <div class="row">
            <div class="large-12 column">
              <label>Subject:</label>
              <input type="text" name="subject">
            </div>
          </div>
          <div class="row">
            <div class="large-12 column">
              <label>Message:</label>
              <textarea name="message"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="large-12 column">
              <button>Send Message</button>
            </div>
          </div>
          <div class="row">
            <div class="large-12 column"><small><em>All fields are required.</em></small></div>
          </div>
        </form>
		
		<script type="text/javascript">
		$('form').on('submit',function(e){
    e.preventDefault();
    console.log('Sending request to '+$(this).attr('action')+' with data: '+$(this).serialize());
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        data     : $(this).serialize(),
        success  : function(data) {
            $(".printArea").empty().append(data).css('visibility','visible');
        }
});

});
		</script>
		
		
      </div>
      <div class="large-4 column">
        <div id="map-canvas"></div>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script>var latitude = 26.521973;
                        var longitude = 90.4937134;
                        function initialize(){var e=new google.maps.LatLng(latitude,longitude);var t={zoom:16,center:e,mapTypeId:google.maps.MapTypeId.ROADMAP};var n=new google.maps.Map(document.getElementById("map-canvas"),t);var r=new google.maps.Marker({position:e,map:n,title:"Hello World!"})}google.maps.event.addDomListener(window,"load",initialize)</script>
        <div class="row">
          <div class="small-3 column">
            <h6>Address:</h6>
          </div>
          <div class="small-9 column">
            <p>121 Lorem Ipsum, Ipsum Lorem 783380 India</p>
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
  </section>
</section>
<a id="back-top" href="#"><i class="icon-caret-up"></i></a>


<?php
//container end
?>