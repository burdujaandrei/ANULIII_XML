<?php

if(isset($_POST['upload'])){
	$id=$_POST['id'];
	$data=simplexml_load_file('work.xml');
	foreach ($data->date as $date) 
	{
		if($date->id == $id){
			unlink($date->image);

			$target="";
			if(isset($_FILES['image']))
			{
				$target .="images/".md5(uniqid(time())).basename($_FILES['image']['name']);
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
				{
					header('Location:index.php');
				}
				else{
					$msg="Please try again!";
				}
			}
			$date->image->src=$target;
			$date->image->alt="portfolio";
		}
	}
	$handle=fopen("work.xml", "wb");
	fwrite($handle, $data->asXML());
	fclose($handle);

}
?>

<?php

$id=$_GET['id'];
$data=simplexml_load_file('work.xml');
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
	<br><br><br>

	<center>Update
	<br><br><br>
	<div class="content-body">
		<form method="post" action="edit.php?id=<?php echo $id;?>" enctype="multipart/form-data">
		<?php
	foreach($data->date as $date) 
	{
		if($date->id == $id){
		?>
			<input type="text" name="id" value="<?php echo $date->id; ?>">

			<br>
			<div>
				<br>
				 <label>Select image to upload:</label>
				<input type="file" name="image" id="image">
				<br>
				<img src="<?php echo $date->image->src; ?>" alt="<?php echo $date->image->alt; ?>">
			</div>
			<br>
			
			<?php
	}
}
?>
			<div>
				<input type="submit" name="upload" value="Upload Image">
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
