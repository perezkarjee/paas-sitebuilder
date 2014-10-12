<?php
//start
?>
<head>

<link rel="stylesheet" href="css/slide.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
	<link rel="stylesheet" href="css/slider.css" />


	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/webfont.js"></script>
	<script type="text/javascript" src="js/jquery.sequence-min.js"></script>

</head>
<script type="text/javascript"> 
	    $(document).ready(function(){
		    var options = {
		        nextButton: true,
		        prevButton: true,
		        pagination: true,
		        animateStartingFrameIn: true,
		        autoPlay: true,
		        autoPlayDelay: 3000,
		    };
		    
		    var mySequence = $("#sequence").sequence(options).data("sequence");
		});
	</script>
		<div class="slider-wrapper">
			<div id="sequence">

				<div class="sequence-prev"><i class="icon-chevron-left"></i></div>
				<div class="sequence-next"><i class="icon-chevron-right"></i></div>

				<ul class="sequence-canvas">
					<li class="animate-in">
						<img class="model" src="images/slide/1.jpg" alt="slide 1" />
					</li>
					<li>
						<img class="model" src="images/slide/2.jpg" alt="slide 2" />
					</li>
					<li>
						<img class="model" src="images/slide/3.jpg" alt="slide 3" />
					</li>
				</ul>

			</div>
		</div>
<?php
//end
?>