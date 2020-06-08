<?php
$cookie_name = "user";
$cookie_value = "Burduja Andrei";
setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 60 = 60 seconds = 1 minute
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<title>Portfolio website</title>
	<meta name="author" content="Amit Bajracharya">
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>

	

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.css">
	

	<link rel="stylesheet" href="assets/gridloading/css/component.css">
	<link rel="stylesheet" href="assets/animate.css" >
	<link rel="stylesheet" href="style.css">


	
</head>
<body>


<!-- header -->
<div id="top" class="header-bg fullpage">
<div class="header fullpage">
	<div class="container">
		<div class="absolute-center">
		<div class="row">
			<div class="col-sm-7">
				<h1 class="info animated fadeInDown"><a href="" class="logo">Hi<br>I am <u>Bootstrap</u></a><br><b>I do Website <span>Design</span><br>Frontend <span>Development</span><br>& Wordpress.</b></h1>
				<a href="#works" class="btn scroll animated bounceInUp">View My Works</a>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div class="connect-icon">
						<div class="prof-links clearfix animated bounceInUp">
						<a href="#"><img alt="portfolio" src="images/linked.png" height="48"></a>
						<a href="#"><img alt="portfolio" src="images/dribbble.png" height="48"></a>
						<a href="#" class="behance"><img alt="portfolio" src="images/behance.png"></a>						
						</div>

						
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
</div>
<!-- header -->


<div class="content-body">
	
    
<!-- Cookie -->
<br><br>COOKIE<br><br>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Proiect realizat de: " . $_COOKIE[$cookie_name];
}

?>

<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>
<!-- Cookie -->


<!-- works -->

<?php
		$xsl= new DOMDocument();
	  	$xsl->load('work.xsl');

  		$xmlDoc = new DOMDocument();
		$xmlDoc->load("work.xml");

		$procesare= new XSLTProcessor();
		$procesare->importStylesheet($xsl);
		echo $procesare->transformToXML($xmlDoc);
		?>

<!-- testimoniale -->


	  <?php

	  	$xsl= new DOMDocument();
	  	$xsl->load('testimoniale.xsl');

  		$xmlDoc = new DOMDocument();
		$xmlDoc->load("testimoniale.xml");

		$procesare= new XSLTProcessor();
		$procesare->importStylesheet($xsl);
		echo $procesare->transformToXML($xmlDoc);
        ?>

	







</div>


<!-- SCHEMA XML -->
<center>
     <br><br>XSD SCHEMA<br><br>
  
<?php



$xsl= new DOMDocument();
$xsl->load('schema.xsl');

  		$xmlDoc = new DOMDocument();
		$xmlDoc->load("schema.xml");

		$procesare= new XSLTProcessor();
		$procesare->importStylesheet($xsl);
		echo $procesare->transformToXML($xmlDoc);
                

$xmlDoc->load("schema.xml",LIBXML_NOBLANKS);
if(!$xmlDoc->schemaValidate("schema.xsd"))
{
	echo "ERROR!!!!";
}
else{
	echo "GOOD JOB!!!";
}

?>
</center>
<!-- SCHEMA XML -->


<a href="#top" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

		
		<!-- gridloading script -->
		<script src="assets/gridloading/js/modernizr.custom.js"></script>
		<script src="assets/gridloading/js/masonry.pkgd.min.js"></script>
		<script src="assets/gridloading/js/imagesloaded.js"></script>
		<script src="assets/gridloading/js/classie.js"></script>
		<script src="assets/gridloading/js/AnimOnScroll.js"></script>
		<!-- gridloading script -->


		<script src="assets/scripts.js"></script>


</body>

</html>