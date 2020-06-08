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
	<center>Insert
	<br><br><br>
	<div class="content-body">
		<form method="post" action="save.php" enctype="multipart/form-data">
			<input type="hidden">
			<label>ID:</label>
				<input type="text" name="id">
			<br>
			<div>
				<br>
				 <label>Select image to upload:</label>
				<input type="file" name="image" id="image">
			</div>
			<br>
			<div>
				<input type="submit" name="insert" value="Insert Image">
			</div>
		</form>
	</div>
	</center>
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