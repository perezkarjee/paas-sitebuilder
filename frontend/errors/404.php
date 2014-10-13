<?php

/*
this is required so that the static content(css,image) doesn't break
because if you point them(css,image) directly- when a users vists $link/$errorlink it will not break
but the second time when user visits- $link/$errorlink/$errorlink or $link/$errorlink/$errorlink/$errorlink/...
the static content will break because it will assume that its inside the directory when it's not there
*/
$host = gethostname();
$imagedir = '/cache/frontend/css/error.jpg';
$cssdir = '/cache/frontend/css/image.jpg';
$http = 'http://';

$errorimage = $http.$host.$imagedir ;
$errorcss = $http.$host.$cssdir ;

/*
you could just point the css & image to an external link, but since we do not want any external dependencies here
so we just get the server's hostname and point it to the static content properly
*/

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<title>Error</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $errorcss;?>">
</head>
<body>
<section id="main" role="main">
  <section class="part">
    <div class="row">
      <div class="large-12 column text-center">
	  
<br>
<br>
<br>
<br>
<br>
        <h1 class="no-bottom-margin">Oops...</h1>
        <h4>The page you're looking for doesn't exist.</h4>
		<img src="<?php echo $errorimage;?>" width="70%">
<br>
<br>
<br>
<br>
<br>
<br>
<br>	 
	  </div>
    </div>
  </section>
</section>
</body>
</html>

<?php
//end
?>