<?php
require('cms/feindura.include.php');

$feindura = new Feindura();
?><!DOCTYPE>
<html>
<head>
<?php
echo $feindura->createMetaTags('surmodernite');
?>
<title>surmodernite - Web-/Grafikdesign</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="elastislide.css">
<link rel="stylesheet" type="text/css" href="custom.css">
        <meta charset= "UTF-8">
        <script type="text/javascript" src="js/jquery-1.9.1.js">
    </script>

         
          
          <script type="text/javascript" src="js/jquerypp.custom.js"></script>
          <script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
          <script type="text/javascript" src="js/jquery.elastislide.js"></script>
          <script type="text/javascript" src="script.js"></script>

</head>

<body>
<div id ="test">
	<a href= "index.html"><img src= "sum_logo.png"></a>
	<div id = "icon">
		<img src= "images/fb_icon.png">
	</div>


   </div>


	<div id = "all">
<!--<img src ="surmodernite_logo_test2.png">-->

	<div id="header">
		<div id = "logo">
			<!-- <a href= "index.html"><img src ="sum_3.png"></a> -->
			<div id = "menu">
            <?php 
			$menu=$feindura->createMenu('category',0,'span');
			foreach($menu as $item) {
				echo $item['menuItem'];
				}
				?>
				<span><a href="#">Product</a></span><span><a href="#">Philosophy</a></span><span><a href="#">References</a></span><span><a href="#">Contact</a></span>
			</div>
		</div>	
	</div>
	<div id = "container">

	<div id = "main">

	<div id="preview">




	</div>

	<div id = "panel">
		<ul id="carousel" class="elastislide-list">
    		<li><a href="#"><img src="images/komponist_cmb.png" alt="komponist-cmb.de" /></a></li>
    		<li><a href="#"><img src="images/freiluftopenair.png" alt="freiluftfestival.eu" /></a></li>
    		<li><a href="#"><img src="images/komponist_cmb.png" alt="komponist-cmb.de" /></a></li>
    		<li><a href="#"><img src="images/freiluftopenair.png" alt="freiluftfestival.eu" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
    		<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
		</ul>
	</div>

<div id="pakete">


		<div class ="paket"><a href = ""><img class = "icon" src ="surmodernite_kl_button.png">
			<h3>Webdesign</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p></a>

		</div>
		<div class ="paket"><a href = ""><img class = "icon" src ="surmodernite_kl_button.png">
			<h3>Webdesign</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p></a></div>
		<div class ="paket"><a href = ""><img class = "icon" src ="fon_icon.png">
			<h3>Contact</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et <a>mehr...</a></p></a></div>


</div>
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.   

Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.   

At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.   

Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.   

		

	</div>











</div>













</div>

<div id ="footer">
	<img src= "images/sum_logo_klein.png"

</div>
</body>











</html>