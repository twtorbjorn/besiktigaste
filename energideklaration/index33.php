<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Örebro EnergiFokus AB är företag som erbjuder konsulttjänster kring energi för fastigheter. Företaget har kontor i Örebro och utför bl a energideklarationer, energiberäkningar och analyser.">
	<meta name="keywords" content="energideklaration, energiberäkning, ovk, fastighetsskötare, fastighetsägare, offert">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<!-- disable iPhone inital scale -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 

    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	    
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
      
    <title>Energideklaration - bra pris via offert med besiktigaste.se</title>
   
    <link rel="stylesheet" href="/assets/style/main-screen4.css">  
    <link rel="stylesheet" href="/assets/style/ajax-contact-form.css">        
    <link href="/assets/style/media-queries.css" rel="stylesheet" type="text/css">    
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
	<!-- required -->	
	<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/stellarnav.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/style/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/style/bootstrap-theme.css">
    


</head>
<body>
<div id="wrapper">
	 <header id="page-header">
        <div class="inner">
                <div class="logo"><a href="https://besiktigaste.se/" >
    			<img src="/assets/images/logo.png"></a>	
				</div>	 
        </div>
        <div class="inner">
		
        	<div class=" twkontakt">
    		<a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss2.png"></a>
        	</div>
		</div>
    </header>
	 <header id="page-headerp2">
        <div class="inner">
				<?php include $root . '/assets/scripts/topMenu.php';?>
    	<!-- .stellar-nav ska in here -->
        </div>
    </header>
    
	
	<div id="page-content">
	
    	<div class="inner">
			 <div class="row">
			 	  <div class="col-md-4">
                      <?php include $root . '/assets/scripts/ajax-contact-form.php';?>
				  </div>
			 	  <div class="col-md-8">
			 	  <div class="row">
					   <h1 class="title1new">Regional energideklaration - Sverige</h1>	
				  </div>
				  
			 	  <div class="row">	
            			 <div class="col-md-3">
            				<a href="https://besiktigaste.se/energideklaration/norrbotten/"> Norrbotten</a><br>
            				<a href="https://besiktigaste.se/energideklaration/västerbotten/"> Västerbotten </a><br>
            				<a href="https://besiktigaste.se/energideklaration/västernorrland/"> Västernorrlands län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/värmland/"> Värmland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/dalarna/"> Dalarna</a><br>
            				<a href="https://besiktigaste.se/energideklaration/gävleborg/"> Gävleborgs län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/uppsala-län/"> Uppsala län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/stockholm/"> Stockholm</a><br>
            				<a href="https://besiktigaste.se/energideklaration/södermanland/"> Södermanland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/västmanland/"> Västmanland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/örebro-län/"> Örebro län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/östergötland/"> Östergötland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/jönköpings-län/"> Jönköpings län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/västra-götaland/"> Västra Götaland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/kalmar-län/"> Kalmar län</a><br>
            				<a href="https://besiktigaste.se/energideklaration/halland/"> Halland</a><br>
            				<a href="https://besiktigaste.se/energideklaration/skåne/"> Skåne</a><br>
            			</div>
            			 <div class="col-md-5">
				  	   <div id="map"></div>
	<?php

		 			$servername = "besiktigaste-se-content-157123.mysql.binero.se";
                    $username = "157123_xp30818";
                    $password = "Bes123cont";
                    $dbname = "157123-besiktigaste-se-content";
					$rating = "<i class='fa fa-star'></i>";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    //$sql = "SELECT company_name, city, service_specialitet, overallrating, internal_url FROM Companies WHERE region ='Västra Götaland' or region = 'Skåne'";
                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud FROM Companies WHERE latitud !=  '' AND company_id ='31' or company_id ='61' or company_id ='91' or company_id ='121'";
                    $result = $conn->query($sql);	
	?>
			 			</div><!-- end col-md-5-->
					</div><!-- end row-->
					</div><!-- end col-md-7-->
				<div class="container-fluid">
					 <div class="col-md-4">
					 <P>
    				 <h3 class="title3new">Kontaktinformation</h3>
                     	 
    					<table class="kontakttable"><tr><td class='textCompanyPres'>CEX-certifierad: &nbsp;</td><td class='textCompanyPres'> Rickard Svedin </td></tr>
    					<tr><td>Telefon:</td><td>070-480 98 80</td></tr>
    					<tr><td>Email:</td><td><a href='mailto:rickard@energi-fokus.se'>Kontakta oss</a></td></tr>
    					<tr><td>Adress:</td><td class='textCompanyPres'> 
    							Örebro EnergiFokus AB<br>
    							Berglundavägen 10 B<br>
								702 36 Örebro<br>
    							
    						</td></tr>
    					</table>
                    <br>
    				</p>
					 </div>
    				<div class="col-md-3">
                    	<h3 class="title3new">Kunderna säger ...</h3>
                        <div id="myCarousel" class="carousel slide ftgslider" data-ride="carousel">
                        	 <!-- Wrapper for slides -->
                             <div class="carousel-inner">
                               	 <div class="item active"> 
                                     <div class="quotes-comments">
                               			<P><img src="/assets/images/quotes.png"></p>
                                        <p class="carusel-text">Smart och enkelt. Rickard är verkligen kompetent. </p>     
										<p class="carusel-text black"><b>Marianne Ask</b></p>
                                                                          		  
                                     </div> 			
                                 </div>
                                 <div class="item">
                                     <div class="quotes-comments">
                               				<P><img src="/assets/images/quotes.png"></p>
                                            <p class="carusel-text">Vi kunde både få OVK och energideklaration utfört samtidigt. Bra.</p>
                                            <p class="carusel-text black"><b>Anders Eriksson</b></p>
                                     </div>
                               	 </div>
                               	 <div class="row">&nbsp;</div>
                               	 <div class="row">&nbsp;</div>
                               	 <div class="row">&nbsp;</div>
                                 <!-- Indicators -->
                                 <div class="row">
                               					 <ol class="carousel-indicators ftgslider">
                                        		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         		  <li data-target="#myCarousel" data-slide-to="1"></li>
                                       			 </ol>
                               	 </div>
                                     
                             </div><!-- end carousel-inner-->
					  	</div><!-- end mycarousel-->
					</div><!--col md 4-->
				</div><!--container fluid-->
         </div><!--row-->

	
			<hr>
			<div class="container-fluid">
				 <div class="row">
					<div class="col-md-6 inner">
								<h3 class="title3new">Örebro EnergiFokus AB - leverantörslöftet</h3>
            					 	<ul class="mainUl kontakttable">
                                		<li><strong>Kompetens</strong> - certifierad inom de flesta områden </li>
                                		<li><strong>Ekonomi </strong> - hög kvalitet till bra pris</li>
                                		<li><strong>Lokalt </strong> - i hela Örebro län  </li>
									</ul>
            							
					</div> 
					<div class="col-md-4">
						<div class="kontakttable">
                            		<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
                            			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="articlesBlock" style="border:0; height:150px;"/>
                            			</a>
  
						</div>
					</div>
					<div class="col-md-2"></div>
					
				</div
				
            </div>

				
			    <div class="container-fluid">
					 <div class="row">
					 	  <div class="col-md-12">
						  	   <p>&nbsp;</p>
						  </div>
					</div>
				</div>
		<hr>
	
		</div><!--inner-->
	
	
					       
        <div class="numberGroup">
            <div class="numberBlock">
                <span class="bigNumber">1</span><span class="numberText">Be om offert gratis<br> utan åtagande</span>
            </div>
            <div class="numberBlock numberTwo">
                <span class="bigNumber">2</span><span class="numberText">Jämför upp till 3 offerter<br> från certifierade företag</span>
            </div>
            <div class="numberBlock numberThree">
                <span class="bigNumber">3</span><span class="numberText">Välj leverantör<br> och få jobbet utfört</span>
            </div>
        </div>
					

						
	</div><!-- end page-content-->
 
	<div class="innerlightblue">
		<?php include $root . '/assets/scripts/footerMenuLightblue.php';
		?> 
	</div>	
	<div class="innerlightgrey">
		<?php include $root . '/assets/scripts/footerMenuNew.php';
		?> 
	</div>
	<div class="inner">	
		<?php include $root . '/assets/scripts/footerMenuCopyright.php';
		?> 
	</div>
</div><!--wrapper-->
		
		
    <script>
	
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 62.58, lng: 13.68}
        });

        setMarkers(map);

		marker.addListener('click', function() {
          window.location.href = 'https://besiktigaste.sehttps://besiktigaste.se/ovk-besiktning/varberg/';
        });
      }


      function setMarkers(map) {
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(10, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
		
        var shape = {
          coords: [1, 1, 1, 20, 28, 20, 28, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
		  var image = {
            url: beach[4],
            // This marker is 60 pixels wide by 60 pixels high.
            size: new google.maps.Size(60, 60),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is at (30, 30).
            anchor: new google.maps.Point(30, 30)
          };
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
			size: image[1],
            title: beach[0],
            zIndex: beach[3],
			url: beach[5]
          });
		  google.maps.event.addListener(marker, 'click', function() {
    	  	window.location.href = this.url;
		  });
        }
      }
	  				   
	        var beaches = [ 
			['OVK-besiktning Västernorrland', 63.89,19.53, 64, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/västernorrland/'],
			['OVK-besiktning Gävleborg', 61.19,17.83, 65, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/gävleborg/'],
			['OVK-besiktning Dalarna', 61.39,15.63, 66, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/dalarna/'],
			['Energideklaration Uppland', 60.19,18.93, 67, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/uppsala-län/'],
			['Energideklaration Örebro län', 59.70,15.93, 69, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/örebro-län/'],
			['Energideklaration Västmanland', 60.00,17.43, 70, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/västmanland/'],
        	['Energideklaration Södermanland', 59.13,17.18, 71, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/södermanland/'],
        	['Energideklaration Västra Götaland', 58.93,12.98, 72, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/västra-götaland/'],
        	['Energideklaration Östergötland', 58.63,16.48, 65, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/östergötland/'],
        	['Energideklaration Jönköpings län', 57.99,14.99, 25, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/jönköpings-län/'],
        	['Energideklaration Halland', 57.13,13.26, 22, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/halland/'],
        	['Energideklaration Kalmar län', 57.13,16.96, 22, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/kalmar-län/'],
			['Energideklaration Skåne', 55.89,13.73, 60, '/assets/images/5-stars-icon.png', 'https://besiktigaste.se/energideklaration/skåne/']];    

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
			 
		
		
	<!-- .stellar-nav -->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript" src="/assets/js/stellarnav.min.js"></script>
	<script type="text/javascript" src="/assets/scripts/ajax-contact-form.js"></script>
	<script src="/libs/jquery.min.js"></script>
	<script src="/libs/bootstrap.min.js"></script>
	
<script src="/libs/md5.js"></script>
<script src="/libs/moment.js"></script>
<script src="/libs/moment-timezone.min.js"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
	</script>
	<script>
    	$('.bxslider').bxSlider({
            auto: true,
            autoControls: false
        });
    </script>

</body>

</html>