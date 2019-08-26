<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root . '/assets/scripts/';
	
		 			$servername = "besiktigaste-se-content-157123.mysql.binero.se";
                    $username = "157123_xp30818";
                    $password = "Bes123cont";
                    $dbname = "157123-besiktigaste-se-content";
					                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
?>
<html>


<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Hitta ett företag som utför OVK i Stockholm. Se en översikt över besiktningsmän, deras företags inriktning inom ventilation och läs andras omdömen.">
    <meta name="keywords" content="OVK-besiktning, hiss-besiktning, besiktningsman, energideklaration, besiktning, fastighetsskötare, leverantör">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OVK-besiktning i Stockholm - hitta en besiktningsman, Besiktigaste.se</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/besiktnings-foretag.php">
	<link rel="stylesheet" href="/assets/style/reset.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/style/main-screen-tight-form-skovde.css">
    <style>
      #map {
        height: 55%;
      }
    </style>
</head>
<body>
<div id="post"></div>
<header>
    <div class="headerContent">
        <a href="/" ><img class="logo" src="/assets/images/logo.png"></a>
        <nav>
                <span class="headerText">
                    <a href="/ovk-besiktning/ventilationskontroll-sverige/" class="headerLink headerLinkActive">OVK regionalt</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/besiktnings-foretag.php" class="headerLink">Besiktningsföretag</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink">Vanliga frågor</a>
                   <!-- <span class="bullet">&#8226;</span> 
                    <a href="ovk-besiktning-fakta.php" class="headerLink">OVK</a>-->
                </span>
					 <div class="kontaktaOss">
                    <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
					 </div>
        
        </nav> 
		<nav>      
                <span class="headerBreadcrumb">
                    <a href="/ovk-besiktning/stockholm/" class="headerLink">Stockholm</a>
                    
                   <!-- <span class="bullet">&#8226;</span> 
                    <a href="ovk-besiktning-fakta.php" class="headerLink">OVK</a>-->
                </span>
        </nav>
    
		
    </div>
</header>
<main>
    <div class="topicMenu">
        <div class="topicMenuNytrMapImg">
            <div class="tabPanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab">
                     <li><a href="/ovk-besiktning/"><span class="iconArray rightArray"></span>OVK-besiktning</a></li>
                    <li><a href="/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li><a href="/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
				<?php include $root . '/assets/scripts/ovkServiceForm.php';
  				?> 
            </div>
        </div>
    </div>
    <div class="contentNytrMap">

	
        <div class="leftContentNytr">
            <h2 class="title2 titleCarouselNytr">Så här säger användarna</h2>
            <!-- <img src="/assets/images/100000.png" class="logo100 logoNytr">-->
			<!-- <div class="logo100 logoUC"logoUC">-->
			<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="logo100 logoUC" style="border:0;"/>
			</a>
			<!-- </div>-->
            <div id="carousel" class="carousel slide carouselNytr">
                <ol class="carousel-indicators carouselIndicatorNytr">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item carousel-indicators-bottom active">
                        <img src="/assets/images/quotes.png">
                        <div class="quotes-comments">
                                <p class="carusel-text">Smart och enkelt. Jag hittade en bra besiktningsman väldigt snabbt, innan vårt kravdatum </p><br>
                                <p class="carusel-text black"><b>Jörgen Klasson, Tuve</b></p>
                            </div>
                    </div>
                    <div class="item carousel-indicators-bottom">
                        <img src="/assets/images/quotes.png">
                         <div class="quotes-comments">
                                <p class="carusel-text">Det var ett bra sätt att kolla att vi betalar rätt pris. Fick ner priset en hel del.</p><br>
                                <p class="carusel-text black"><b>Jan-Erik Bergman</b></p>
                            </div>
                    </div>
                </div>
            </div>
			<div><h2 class="h2">Varför använda tjänsten besiktigaste.se?</h2></div>
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Effektivitet</strong> - Jämför offerter från upp till tre olika leverantörer</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - Leverantörer certifierade i Stockholm</li>
                      <li class="mainLiText"><strong>Läs omdömen</strong> - Från beställare om besiktigaste.se och certifierade leverantörer.  
                      </li>
  					<li class="mainLiText"><strong>Gratis</strong> - Utan åtagande från dig</li>
                  </ul>
				</div>
				
				<label class="faqTitle serviceTitle"><h2 class="h2">Jobbar du med fastighetsbesiktning?</h2></label>
             <div class="articlesBlock">
                <a href="#userName" class="faqQuestion articlesLink">Registrera ditt företag kostnadsfritt</a>
                <div class="faqAnswer articlesText">Om du har ett företag som utför OVK, hissbesiktning eller utfärdar energideklarationer kan du registrera dig som leverantör på besiktigaste.se. Det kostar ingenting. <br><br>
				</div>
                <a href="#userName" class="faqQuestion articlesLink">Tipsa om ett företag eller konsult</a>
                <div class="faqAnswer articlesText">
                    Det går också bra att tipsa oss om du känner till ett sådant företag eller egen konsult som arbetar med detta i din region. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss. 
                </div>
            </div>
			<?php
                $sql = "SELECT paragraph_name, paragraph_content FROM Paragraphs p1 INNER JOIN Pages p2 ON p1.page_id = p2.page_id WHERE p2.city_name = 'Stockholm' limit 1";
		    	$result = $conn->query($sql);	
				
				if ($result->num_rows > 0){
				   while($row = $result->fetch_assoc()) {   
		    	   			  echo "<div class='title2'><h2 class='h2'> " . $row["paragraph_name"] . " </h2></div>";
		    	   			  echo $row["paragraph_content"];
					}
                }              
			?>
		<!-- sluttag v kol -->		 
        
	
			<br><br>		
        </div>
		
        <div class="rightContentMap text-left">
  			 <h1 class="h2">OVK-besiktning Stockholm</h1>

	<div id="map"></div>
	<?php

					$rating = "<i class='fa fa-star'></i>";

                    
                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud, internal_url FROM Companies WHERE latitud !=  '' AND region = 'Stockholms län' order by overallrating desc";
                    $result = $conn->query($sql);	
	?>
	
    <script>


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: {lat: 59.3133, lng: 18.1180}
        });

        setMarkers(map);

		marker.addListener('click', function() {
          window.location.href = 'http://besiktigaste.se/ovk-besiktning/varberg/';
        });
      }


      function setMarkers(map) {

        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };

        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
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
			['OVK-besiktning Stockholm', 59.18,18.03, 20, '/assets/images/3-stars-icon.png', '/ovk-besiktning/stockholm/'],
        	<?php 
    			   include $root . '/assets/scripts/writeMap.php';
		 	?>
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
			 
		</div>
        <div class="rightContentLocal text-left">
                <div class="faqAnswer articlesText">Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet där människor vistas och som behöver genomföra en 
				OVK (obligatorisk ventilationskontroll). 
				Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade funktionskontrollanter verksamma i Stockholm. 
				Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar.
				  
                </div> 
			 <h2 class="h2">OVK-certifierade i Stockholm</h2>
			 <div id="results-wrapper">
                  <table id="results" class="tableCertifieradeFtg">		
				      <tr class="headerCertifieradeFtg">
                          <th class="headerCertifieradeFtg">F&#246;retag</th>
                          <th class="headerCertifieradeFtg">Ort</th>
                          <th class="headerCertifieradeFtg">Specialitet</th>
                          <th class="headerCertifieradeFtg">Omdöme</th>
                      </tr>	
				<?php

                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud, internal_url FROM Companies WHERE latitud !=  '' AND region = 'Stockholms län' AND company_presentation <> 'cex' order by overallrating desc";
		    		$result = $conn->query($sql);	
				   
		    	   include $includes . 'certifieradeTabell.php';
                ?>
                  </table>

			 </div>
			 <!-- paragraph vad får du svar på i offertförfrågan -->
			  
			  
			<?php
                $sql = "SELECT paragraph_name, paragraph_content FROM Paragraphs p1 INNER JOIN Pages p2 ON p1.page_id = p2.page_id WHERE p2.city_name = 'Stockholm' and p1.paragraph_id = '2'";
		    	$result = $conn->query($sql);	
				
				if ($result->num_rows > 0){
				   $ctr = 0;
				   while($row = $result->fetch_assoc()) {
						$ctr = $ctr + 1;
						if ($row["paragraph_id"] = "2") {   
		    	   		echo "<div class='title2'><h2 class='h2'> " . $row["paragraph_name"] . " </h2></div>";
		    	   		echo $row["paragraph_content"];
						$ctr = $ctr + 1;
						
						}
						
					}
				}               
			?>
		<!-- sluttag offertförfrågan -->	
			
           

    </div> 	
</main>
<footer>
    <div class="footer">
        <div class="footerContext2">
		
		<?php include $root . '/assets/scripts/footerMenu.php';
		?> 
            <label class="footerCopyright">2016 &copy; besiktigaste.se</label>

                <span class="footerText">
                    <a href="/besiktning/om-oss.php" class="headerLink footerLink">Om oss</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/kontakta-oss.php" class="headerLink footerLink">Kontakta oss</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/integritet.php" class="headerLink footerLink">Integritet</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/villkor.php" class="headerLink footerLink">Allmänna villkor</a>
                </span>
        </div>
    </div>
</footer>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
<script src="/libs/md5.js"></script>
<script src="/libs/moment.js"></script>
<script src="/libs/moment-timezone.min.js"></script>
<script src="/libs/jquery.min.js"></script>
<script src="/libs/bootstrap.min.js"></script>
<script src="/assets/scripts/main-screen-tight-form.js"></script>

<script type="text/javascript">
    /* <![CDATA[ */
    goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 1058540605;
        w.google_conversion_language = "en_GB";
        w.google_conversion_color = "ffffff";
        w.google_conversion_label = "rYPkCJWBfBC9mOD4Aw";
        w.google_conversion_value = 0;
    };
    // DO NOT CHANGE THE CODE BELOW.
    goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        var opt = new Object();
        opt.onload_callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        var conv_handler = window['google_trackConversion'];
        if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
        }
    };
    /* ]]> */
</script>
<script type="text/javascript"
        src="../../www.googleadservices.com/pagead/f.txt">
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72852411-3', 'auto');
  ga('send', 'pageview');

</script>

<?php					                    
    $conn->close();
?>
</body>
</html>