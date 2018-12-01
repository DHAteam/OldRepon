<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WEB</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/slider.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="main">
			
	<div id="header"><?php include_once("header.php"); ?></div>
  

    <div id="content">
		<div class="w3-content w3-section" style="max-width:100%">
		  <img class="mySlides" src="img/1.jpg" >
		  <img class="mySlides" src="img/2.jpg" ">
		  <img class="mySlides" src="img/3.jpg" ">
		</div>
    
    </div>

    
    
    <div id="footer"><?php include_once("footer.php"); ?></div>
    <div class="clear"></div>
</div>




<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";   
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 2000); // Change image every 2 seconds
		}
</script>

</body>
</html>
