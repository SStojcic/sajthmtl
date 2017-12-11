
<?php

include 'php/konekcija.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : BlackPolish 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121026

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Sajt o interesantnoj seriji."/>
		<meta name="keywords" content="Arrow, Serija, Gledanje, Preporuka, Harvey Spectr " />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ARROW</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="kodovi/jquery-2.2.1.js"></script>

		<script type="text/javascript" src="kodovi/jQuery.js"></script>
		<script type="text/javascript" src="kodovi/javascripte.js"</script>
<link rel="shortcut icon" href="images/ikonica.png">
</script>

<script type="text/javascript">
	
	function dohvatiSerije(value){
		$.post("dohvatiserije.php",{partialSerije:value},function(data){
		$("#results").html(data);
	  });
	  }
	
	</script>

	

</script>

</head>

<body>
<div id="wrapper">
	<div id="header-wrapperr">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">ARROW</a></h1>
			</div>
			<div id="menu">
			<ul>
				
					<li class="current_page_item"><a href="index.php">POCETNA</a></li>
				
	
 
					
					
							
								
					<li><a href="#">LIKOVI</a>
								<ul id="meni">
									<li class="manja"><a href="oliver.php">Oliver Kvin</a></li>
									<li class="manja"><a href="felisiti.php">Felisiti Smouk</a></li>
									<li class="manja"><a href="laurel.php">Laurel Lans</a></li>
								</ul></li>
					<li><a href="#">GALERIJA</a></li>
					<li><a href="serije.php">SERIJA</a></li>
				 <div id="pretraga">
						<form name="formular">
			                    
							
							<div id="prikaz"></div>
						    
						
						
					<input type="text" name='user' id="tbPretraga" onkeyup="dohvatiSerije(this.value)" />
						<input class="dugme" type="button"  value="search" onClick="pronadjiPodatke();">
							  <div id="results"></div>
							  
							</form>
				    </div> 
				</ul>
	
		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div class="galerija">
	
    
      <a class="example-image-link" href="images/p2.jpg" data-lightbox="example-set" data-title="slika1">
	  <img class="example-image" src="images/p2.jpg" alt=""/></a>
      <a class="example-image-link" href="images/p1.jpg" data-lightbox="example-set" data-title="slika2"><img class="example-image" src="images/p1.jpg" alt="" /></a>
      <a class="exaomple-image-link" href="images/p3.jpg" data-lightbox="example-set" data-title="slika3"><img class="example-image" src="images/p3.jpg" alt="" /></a>
      <a class="example-image-link" href="images/p4.png" data-lightbox="example-set" data-title="slika4"><img class="example-image" src="images/p4.png" alt="" /></a>
	   <a class="example-image-link" href="images/p5.jpg" data-lightbox="example-set" data-title="slika5">
	  <img class="example-image" src="images/p5.jpg" alt=""/></a>
      <a class="example-image-link" href="images/p6.jpg" data-lightbox="example-set" data-title="slika6"><img class="example-image" src="images/p6.jpg" alt="" /></a>
      <a class="example-image-link" href="images/p7.jpg" data-lightbox="example-set" data-title="slika7"><img class="example-image" src="images/p7.jpg" alt="" /></a>
      <a class="example-image-link" href="images/p8.jpg" data-lightbox="example-set" data-title="slika8"><img class="example-image" src="images/p8.jpg" alt="" /></a>
	   <a class="example-image-link" href="images/p9.jpg" data-lightbox="example-set" data-title="slika9">
	  <img class="example-image" src="images/p9.jpg" alt=""/></a>
      <a class="example-image-link" href="images/p10.jpg" data-lightbox="example-set" data-title="slika10"><img class="example-image" src="images/p10.jpg" alt="" /></a>
	  <a class="example-image-link" href="images/p11.jpg" data-lightbox="example-set" data-title="slika11"><img class="example-image" src="images/p11.jpg" alt="" /></a>
      
      <a class="example-image-link" href="images/p12.jpg" data-lightbox="example-set" data-title="slika12"><img class="example-image" src="images/p12.jpg" alt="" /></a>
     <a class="example-image-link" href="images/p13.jpg" data-lightbox="example-set" data-title="slika13">
	  <img class="example-image" src="images/p13.jpg" alt=""/></a>
      <a class="example-image-link" href="images/p14.jpg" data-lightbox="example-set" data-title="slika14"><img class="example-image" src="images/p14.jpg" alt="" /></a>
      <a class="example-image-link" href="images/p15.jpg" data-lightbox="example-set" data-title="slika15"><img class="example-image" src="images/p15.jpg" alt="" /></a>
      <a class="example-image-link" href="images/p16.jpg" data-lightbox="example-set" data-title="slika16"><img class="example-image" src="images/p16.jpg" alt="" /></a>

 

  <script src="kodovi/lightbox-plus-jquery.min.js"></script>

		</div>
	</div>
	<!-- end #page --> 
	
</div>

	</div>
</div>
<div id="footer">
	<div id="menu2">
				<ul>
					
					<li><a href="dokumentacija.pdf"target="_blank" >Dokumentacija</a></li>
					<li><a href="sajtmap.xml">Sitemap</a></li>
					<li><a href="rss.xml">RSS</a></li>
					<li><a href="registracija.php">Registracija</a></li>
				</ul>
</div>
</div>
<!-- end #footer -->
</body>
</html>
