<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<!-- meta
		=================================== -->
	<meta charset="UTF-8">
	<!-- CSS
		=================================== -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- embed font from google
		=================================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<!-- CSS INTERN
		=================================== -->
	<style>
		.parallax-content{
			background-image:url('../assets/images/content.jpg');
			background-attachment:fixed;
			background-size: 1260px;
			width:auto;
			height: 600px;
			margin-top:-50px;
			font-family:"Lucida Grande","Verdana","Sans-serif";	
		}
	</style>
</head>
<body>
	<!-- include file slick.php -->
	<?php include 'slick.php'?>
	<!-- section biodata -->
	<section class="parallax-content">
		<!-- biodata title -->
		<div class="sub">
			<h3>BIODATA SINGKAT</h3>
		</div>
		<!-- short story -->
		<div class="col-md-3 col-xs-3 content">
			2011 : Mulai mengenal komputer</h1><br><br><hr class="hr-content">
			<p>Pada tahun 2011 saya mulai mengenal komputer ketika saya hendak bermain
				game online di Warung Internet(Warnet)</p>
		</div>
		<div class="col-md-3 col-xs-3 content content2">
			2016 : Mulai tertarik dengan programming<hr class="hr-content">
			<p>Ketika saya masuk SMK dengan jurusan Komputer , saya mulai mengenali
			   apa itu bahasa pemrograman , sehingga saya tertarik dengan bahasa pemrograman
			Website yaitu HTML,CSS,dan PHP</p>
		</div>
		<div class="col-md-3 col-xs-3 content content3">
			2018 : Mulai memahami dengan bahasa pemrograman<hr class="hr-content">
			<p>Tahun 2018 saya baru dapat mengerti bagaimana konsep pemrograman dalam pembuatan
			   sebuah aplikasi khususnya website.</p> 
		</div>
	<!-- end section -->
	</section>
	<!-- include file footer.php -->
	<?php include 'footer.php'?>
	
</body>
</html>