<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Hitta ett lokat företag som utför OVK i ditt län. Se översikt över obligatorisk ventilationskontroll, leverantörers specialist-inriktning samt få kostnad och pris.">
    <meta name="keywords" content="OVK-besiktning, ventilationskontroll, besiktningsman, besiktning, fastighetsskötare, leverantör, pris, kostnad">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OVK-besiktning i Sveriges alla län - företag, pris och kostnad</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="https://m.besiktigaste.se/besiktning/besiktnings-foretag.php">
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
        width: 60%;
	    float: right;		
      }
    </style>
</head>
<body>
<div id="post"></div>
<header>
    <div class="headerContent">
        <a href="https://besiktigaste.se/" ><img class="logo" src="/assets/images/logo.png"></a>
        <nav>
                <span class="headerText">
                    <a href="/ovk-besiktning/ventilationskontroll-sverige/" class="headerLink">OVK regionalt</a>
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
                    <a href="/ovk-besiktning/västra-götaland/" class="headerLink">Västra Götaland</a>
                    <a href="/ovk-besiktning/jönköpings-län/" class="headerLink">Jönköpings län</a>
                    <a href="/ovk-besiktning/dalarna/" class="headerLink">Dalarna</a>
                    <a href="/ovk-besiktning/skåne/" class="headerLink">Skåne</a>
                    <a href="/ovk-besiktning/södermanland/" class="headerLink">Sörmland</a>
                    
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
                     <li class="active"><a href="/ovk-besiktning/"><span class="iconArray rightArray"></span>OVK-besiktning</a></li>
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
			<div><h2 class="h2">Besiktigaste.se - erbjudandet</h2></div>
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Effektivitet</strong> - Jämför offerter från upp till tre olika leverantörer</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - Leverantörer certifierade i Sverige</li>
                      <li class="mainLiText"><strong>Läs omdömen</strong> - Från beställare om besiktigaste.se och certifierade leverantörer.  
                      </li>
  					<li class="mainLiText"><strong>Gratis</strong> - Utan åtagande från dig</li>
                  </ul>
				</div>
			
			<div class="title2"><h2 class="h2">Bra kostnadsförslag</h2></div>
				Normalt sett behöver OVK-kontrollanterna bara veta några uppgifter för att ta fram ett bra kostnadsförslag till dig.
				 <br><br>Förutom dina kontaktuppgifter anger du bara:
                
                  <ul class="mainUl">
                    <li>Fastighetsägare </li>
                    <li>Fastighetsbeteckning</li>
                    <li>Fastighetens adress</li>
                    <li>Hur många lägenheter som finns i fastigheten</li>
                    <li>typ av existerande ventilation (S, F, FT, FX, FTX)</li>
                  </ul>
        			Tjänsten fungerar även för dig som är privatperson och om det gäller ditt bostadshus. 
        			<br><br>
        	        När du har skickat in uppgifterna kommer ett eller flera företag att höra av sig till dig med en offert. Du jämför erbjudanden och väljer om du vill beställa OVK-besiktningen. Allt är gratis för dig.
					 
					<br><br>		
				
        </div>
		
        <div class="rightContentMap text-left">
  			 <h1 class="h2">Regional OVK-besiktning - Sverige</h1>
		
			 <div class="mapContainer" id="map"></div>
			 <div class="mapContext" id="mapcontext">
				<a href="/ovk-besiktning/norrbotten/"> Norrbotten</a><br>
				<a href="/ovk-besiktning/västerbotten/"> Västerbotten</a><br>
				<a href="/ovk-besiktning/västernorrland/"> Västernorrland</a><br>
				<a href="/ovk-besiktning/gävleborg/"> Gävleborgs län</a><br>
				<a href="/ovk-besiktning/dalarna/"> Dalarna</a><br>
				<a href="/ovk-besiktning/uppsala-län/"> Uppsala län</a><br>
				<a href="/ovk-besiktning/stockholm/"> Stockholm</a><br>
				<a href="/ovk-besiktning/södermanland/"> Södermanland</a><br>
				<a href="/ovk-besiktning/västmanland/"> Västmanland</a><br>
				<a href="/ovk-besiktning/örebro-län/"> Örebro län</a><br>
				<a href="/ovk-besiktning/värmland/"> Värmland</a><br>
				<a href="/ovk-besiktning/östergötland/"> Östergötland</a><br>
				<a href="/ovk-besiktning/jönköpings-län/"> Jönköpings län</a><br>
				<a href="/ovk-besiktning/västra-götaland/"> Västra Götaland</a><br>
				<a href="/ovk-besiktning/kalmar-län/"> Kalmar län</a><br>
				<a href="/ovk-besiktning/blekinge/"> Blekinge</a><br>
				<a href="/ovk-besiktning/kronobergs-län/"> Kronoberg</a><br>
				<a href="/ovk-besiktning/halland/"> Halland</a><br>
				<a href="/ovk-besiktning/skåne/"> Skåne</a><br>
			</div>
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
    <script>
      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.

      // The following example creates complex markers to indicate beaches near
      // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
      // to the base of the flagpole.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 62.58, lng: 13.68}
        });

        setMarkers(map);

		marker.addListener('click', function() {
          window.location.href = 'https://besiktigaste.se/ovk-besiktning/varberg/';
        });
      }


      function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(10, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
          coords: [1, 1, 1, 40, 38, 40, 38, 1],
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
			['OVK-besiktning Norrbotten', 68.09,22.33, 61, '/assets/images/5-stars-icon.png', '/ovk-besiktning/norrbotten/'],
			['OVK-besiktning Västerbotten', 65.19,21.83, 62, '/assets/images/5-stars-icon.png', '/ovk-besiktning/västerbotten/'],
			//['OVK-besiktning Jämtland', 64.09,16.23, 63, '/assets/images/5-stars-icon.png', '/ovk-besiktning/jämtland/'],
			['OVK-besiktning Västernorrland', 63.89,19.53, 64, '/assets/images/5-stars-icon.png', '/ovk-besiktning/västernorrland/'],
			['OVK-besiktning Gävleborg', 61.19,17.83, 65, '/assets/images/5-stars-icon.png', '/ovk-besiktning/gävleborg/'],
			['OVK-besiktning Dalarna', 61.39,15.63, 66, '/assets/images/5-stars-icon.png', '/ovk-besiktning/dalarna/'],
			['OVK-besiktning Uppland', 60.19,18.93, 67, '/assets/images/5-stars-icon.png', '/ovk-besiktning/uppsala-län/'],
			['OVK-besiktning Värmland', 60.45,14.33, 68, '/assets/images/5-stars-icon.png', '/ovk-besiktning/värmland/'],
			['OVK-besiktning Örebro län', 59.70,15.93, 69, '/assets/images/5-stars-icon.png', '/ovk-besiktning/örebro-län/'],
			['OVK-besiktning Västmanland', 60.00,17.43, 70, '/assets/images/5-stars-icon.png', '/ovk-besiktning/västmanland/'],
        	['OVK-besiktning Södermanland', 59.13,17.18, 71, '/assets/images/5-stars-icon.png', '/ovk-besiktning/södermanland/'],
        	['OVK-besiktning Västra Götaland', 58.93,12.98, 72, '/assets/images/5-stars-icon.png', '/ovk-besiktning/västra-götaland/'],
        	['OVK-besiktning Östergötland', 58.63,16.48, 65, '/assets/images/5-stars-icon.png', '/ovk-besiktning/östergötland/'],
        	['OVK-besiktning Jönköpings län', 57.99,14.99, 25, '/assets/images/5-stars-icon.png', '/ovk-besiktning/jönköpings-län/'],
        	['OVK-besiktning Kronobergs län', 57.33,15.19, 23, '/assets/images/5-stars-icon.png', '/ovk-besiktning/kronobergs-län/'],
        	['OVK-besiktning Halland', 57.13,13.26, 22, '/assets/images/5-stars-icon.png', '/ovk-besiktning/halland/'],
        	['OVK-besiktning Kalmar län', 57.13,16.96, 22, '/assets/images/5-stars-icon.png', '/ovk-besiktning/kalmar-län/'],
			['OVK-besiktning Skåne', 55.89,13.73, 60, '/assets/images/5-stars-icon.png', '/ovk-besiktning/skåne/'],
        	['OVK-besiktning Blekinge', 56.56, 15.49, 26, '/assets/images/5-stars-icon.png', '/ovk-besiktning/blekinge/']];    

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
			 
		</div>
        <div class="rightContentLocal text-left">
				<div class="faqAnswer articlesText">
				Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet där människor vistas och som behöver genomföra en 
				OVK (obligatorisk ventilationskontroll). 
				Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade funktionskontrollanter verksamma i Sverige. 
				Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar.
				  
                </div> 
			 <h2 id="OVKTable" class="h2">OVK-certifierade i Sverige</h2>
			 <div id="results-wrapper">
                  <table id="results" class="tableCertifieradeFtg">		
				      <tr class="headerCertifieradeFtg">
                          <th class="headerCertifieradeFtg">F&#246;retag</th>
                          <th class="headerCertifieradeFtg">Ort</th>
                          <th class="headerCertifieradeFtg">Specialitet</th>
                          <th class="headerCertifieradeFtg">Omdöme</th>
                      </tr>	
				<?php

                   $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud, internal_url FROM Companies WHERE latitud !=  '' AND company_id ='45' or company_id ='250' or company_id ='31' or company_id ='61' or company_id ='91' or company_id ='121'";
                   $sql .=  "or company_id ='151' or company_id ='181' or company_id ='211' or company_id ='181' or company_id ='241' or company_id ='271' or company_id ='301' or company_id ='331'";
		    $result = $conn->query($sql);	
				   
		    include $includes . 'certifieradeTabell.php';
					                    
                    $conn->close();
                ?>
                  </table>
				  <label class="textUnderTable">*Om stjärnorna i kolumnen "Omdöme" inte är klickbara finns det för få omdömen och default <span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></span> visas</label>
				  <br><br>
				  Ovan visas några slumpvis valda företag som har OVK-certifierad personal i Västra Götaland. 
				  Vill du vara effektiv i ditt sökande efter rätt besiktningsman? 
				  <br><br>
				  <a href="#post">Be de registrerade företagen om offert</a> <br>(frågan går även till de företag som inte visas listade ovan).  
			 </div>
  			 <div class="title2"><h2 class="h2">Offerförfrågan - få svar på pris och kostnad</h2></div>
                 
 				När du ber leverantörerna om en offert får du svar på viktiga frågor. 
 			    Exempelvis: 
                 
                   <ul class="mainUl">
                     <li>Vilka leverantörer finns i Västergötland? </li>
                     <li>När och hur snabbt kan jag få OVK utfört?</li>
                     <li>Vad kostar OVK-besiktningen?</li>
                     <li>Hur prissätts OVK av leverantörerna? </li>
                     <li>Vad påverkar tid, pris och kostnad för OVK? </li>
                     <li>Vilka kringtjänster till OVK finns? </li>
                     <li>Ska jag välja samma leverantör till OVK som att utföra installation av ventilation? </li>
                     <li>Vad ska jag tänka på i samband med åtgärdande av fel och brister som påträffas i OVK?</li>
                     <li>Vilka är de senaste nyheterna kring lagar, regler, myndigheter eller IT-tjänster?</li>
                   </ul>
 				
				
			<br>
			<label class="faqTitle serviceTitle"><h2 class="h2">Fastighetsbesiktning - Kontrollanter</h2></label>
             <div class="articlesBlock">
                <a href="/besiktning/besiktnings-foretag.php" class="faqQuestion articlesLink">Registrera ditt företag kostnadsfritt</a>
                <div class="faqAnswer articlesText">Om du har ett företag som utför <b>OVK</b>, <b>hissbesiktning</b> eller utfärdar <b>energideklarationer</b> kan du kontakta besiktigaste.se. Vi presenterar alla certifierade kontrollanter. Det kostar ingenting. <br><br>
				</div>
                <a href="/besiktning/besiktnings-foretag.php" class="faqQuestion articlesLink">Tipsa om ett företag eller konsult</a>
                <div class="faqAnswer articlesText">
                    Det går också bra att tipsa oss om du känner till ett sådant företag eller egen konsult som arbetar med detta i din region. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss. 
                </div>
            </div>				
			
           

    </div>
	<br><br><br>
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
</body>
</html>