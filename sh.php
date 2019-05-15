<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
</head>
<body>
<?php

	$can=mysqli_connect('localhost','root','','shopping');
	if(!$can){
		echo "error";
	}
	$query="Select * From category";
	$reslt=mysqli_query($can,$query);
	if(!$reslt){
		echo "error";
	}
echo "<table style='margin: auto;'>";
echo "<tr>";
	$x = 1;
	while($row=mysqli_fetch_row($reslt)){
		$id=$row[0];
		$name=$row[1];
		
		echo "<th><div id='myCarousel' class='myCarousel carousel slide'>
						<div class='carousel-inner'>
							<div class='active item'>
								<ul class='thumbnails'>												
									<li class='span3'>
										<div class='product-box'>
											<span class='sale_tag'></span>
											<p><a href='view.php'><img src='themes/images/im$x.jpg' style='height: 300px !important; width: 100% !important;' alt='' /></a></p>
											<a href='view.php' class='title'>name : $name</a><br/>
											<a href='view.php' class='category'>id : $id</a>
														
										</div> 
									</li>
												
								</ul>
							</div>
										
						</div>							
				</div></th>";

		
		$x++;
		
}
echo "</tr>";
echo "</table>";

?> 
</body>
</html>