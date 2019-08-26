<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Hitta ett lokat företag som utför energideklaration i ditt län. Se översikt över obligatorisk ventilationskontroll, leverantörers specialist-inriktning samt få kostnad och pris.">
    <meta name="keywords" content="Energideklaration, ventilationskontroll, besiktningsman, besiktning, fastighetsskötare, leverantör, pris, kostnad">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Energideklaration i Sveriges alla län - företag, pris och kostnad</title>
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
                    <a href="https://besiktigaste.se/energideklaration/energideklaration-sverige/" class="headerLink">Regional info</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/besiktnings-foretag.php" class="headerLink">Besiktningsföretag</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink">Vanliga frågor</a>
                   <!-- <span class="bullet">&#8226;</span> 
                    <a href="Energideklaration-fakta.php" class="headerLink">energideklaration</a>-->
                </span>
					 <div class="kontaktaOss">
                    <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
					 </div>
        </nav>  
		<nav>      
                <span class="headerBreadcrumb">
                    <!-- <a href="https://besiktigaste.se/energideklaration/västra-götaland/" class="headerLink">Västra Götaland</a>
                    <a href="https://besiktigaste.se/energideklaration/jönköpings-län/" class="headerLink">Jönköpings län</a>
                    <a href="https://besiktigaste.se/energideklaration/halland/" class="headerLink">Halland</a>
                    <a href="https://besiktigaste.se/energideklaration/skåne/" class="headerLink">Skåne</a>
                    <a href="https://besiktigaste.se/energideklaration/blekinge/" class="headerLink">Blekinge</a>-->
                    
                   <!-- <span class="bullet">&#8226;</span> 
                    <a href="Energideklaration-fakta.php" class="headerLink">energideklaration</a>-->
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
                     <li><a href="https://besiktigaste.se/ovk-besiktning/"><span class="iconArray rightArray"></span>OVK</a></li>
                    <li><a href="https://besiktigaste.se/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li class="active"><a href="https://besiktigaste.se/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane tab-pane-nytr active" id="newBoiler" data-serviceId="energideklaration">
					      <input type="hidden" name="formURL" id="formURL" value="<?php echo dirname($_SERVER["PHP_SELF"])?>"> 
					      <input type="hidden" name="formURL2" id="formURL2" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
                        <span class="boxText">Offertförfrågan</span>
						  <label id="kontaktperson" class="boxText inputLabel">Kontaktperson</label> 
                          <input type="text" placeholder="" name="userName" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Epostadress</label>
                          <input type="text" placeholder="" name="userEmail" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Mobiltelefon</label> 
                          <input type="text" placeholder="" name="userPhone" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Meddelande</label> 
                          <textarea placeholder="(adress, ort och fastighetsbeteckning)" name="additionalInfo" class="boxArea inputField orange"></textarea> 
                          <button class="boxButton resultButton"> 
                          <img src="/assets/images/click.png" class="boxButtonImage">Kontakta mig</button>
                         <!-- <button class="boxButton resultButton">Ge mig offert gratis<img src="/assets/images/arrayButton.png" class="boxButtonArray"></button>-->
                            
					 </div>
                </div>
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
                      <li class="mainLiText"><strong>Lokalt</strong> - Leverantörer certifierade i syd- och mellansverige</li>
                      <li class="mainLiText"><strong>Läs omdömen</strong> - Från beställare om besiktigaste.se och certifierade leverantörer.  
                      </li>
  					<li class="mainLiText"><strong>Gratis</strong> - Utan åtagande från dig</li>
                  </ul>
				</div>
			
			<div class="title2"><h2 class="h2">Bra kostnadsförslag</h2></div>
				Normalt sett behöver besiktningsmannen som ska utfärda energideklarationen bara veta några uppgifter för att ta fram ett bra kostnadsförslag till dig.
				 <br><br>Förutom dina kontaktuppgifter anger du bara:
                
                  <ul class="mainUl">
                    <li>Fastighetsägare </li>
                    <li>Fastighetsbeteckning</li>
                    <li>Fastighetens adress</li>
                  </ul>
        			Tjänsten fungerar även för dig som är privatperson och om det gäller ditt bostadshus. 
        			<br><br>
        	        När du har skickat in uppgifterna kommer ett eller flera företag att höra av sig till dig med en offert. Du jämför erbjudanden och väljer om du vill beställa energideklarationen. Allt är gratis för dig.
					 
					<br><br>		
				
        </div>
		
        <div class="rightContentMap text-left">
  			 <h1 class="h2">Energideklaration i syd- och mellansverige</h1>

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
                    
                    $sql = "SELECT company_name, city, service_specialitet, overallrating, internal_url, company_presentation FROM Companies WHERE latitud !=  '' AND region ='Halland' AND company_presentation = 'cex'";
                    //$sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud FROM Companies WHERE latitud !=  '' AND company_id ='31' or company_id ='61' or company_id ='91' or company_id ='121'";
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
          zoom: 6,
          center: {lat: 56.58, lng: 13.68}
        });

        setMarkers(map);

		marker.addListener('click', function() {
          window.location.href = 'http://besiktigaste.sehttps://besiktigaste.se/energideklaration/varberg/';
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
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
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
			['Energideklaration Skåne', 55.89,13.73, 60, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Västra Götaland', 58.43,13.48, 24, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Jönköpings län', 57.99,14.99, 25, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Kronobergs län', 57.33,15.19, 23, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Halland', 57.13,13.26, 22, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Kalmar län', 57.13,16.96, 22, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/'],
        	['Energideklaration Blekinge', 56.56, 15.49, 26, '/assets/images/3-stars-icon.png', 'https://besiktigaste.se/energideklaration/energideklaration-sverige/']];    

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
			 
		</div>
        <div class="rightContentLocal text-left">
			 	
                <div class="faqAnswer articlesText"><strong><a href="https://besiktigaste.se/energideklaration/ventilationskontroll-sverige/">Södra Sverige</a></strong><br>
				<!--
				<a href="https://besiktigaste.se/energideklaration/västra-götaland/">Energideklaration Västra Götaland</a><br>
				<a href="https://besiktigaste.se/energideklaration/jönköpings-län/">Energideklaration Jönköpings län</a><br>
				<a href="https://besiktigaste.se/energideklaration/halland/">Energideklaration Halland</a><br>
				<a href="https://besiktigaste.se/energideklaration/skåne/">Energideklaration Skåne</a><br>
				<a href="https://besiktigaste.se/energideklaration/blekinge/">Energideklaration Blekinge</a><br><br>
				-->
				Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet och som behöver utfärdande av en 
				energideklaration för byggnaden. 
				Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade energiexperter (CEX)  verksamma i södra Sverige. 
				Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar.
				  
                </div> 
			 <h2 id="energideklarationTable" class="h2">Energideklaration - certifierade i Sydsverige</h2>
			 <div id="results-wrapper">
                  <table id="results" class="tableCertifieradeFtg">		
				      <tr class="headerCertifieradeFtg">
                          <th class="headerCertifieradeFtg">F&#246;retag</th>
                          <th class="headerCertifieradeFtg">Ort</th>
                          <th class="headerCertifieradeFtg">Specialitet</th>
                          <th class="headerCertifieradeFtg">Omdöme</th>
                      </tr>	
				<?php

            
            $sql = "SELECT company_name, city, service_specialitet, overallrating, internal_url, company_presentation FROM Companies WHERE  region ='Halland' AND company_presentation = 'cex'";
			$result = $conn->query($sql);	
				   
		    include $includes . 'certifieradeTabell.php';
					                    
                    $conn->close();
                ?>
                  </table>
				  <label class="textUnderTable">*Om stjärnorna i kolumnen "Omdöme" inte är klickbara finns det för få omdömen och default <span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></span> visas</label>
				  <br><br>
				  Ovan visas några slumpvis valda företag som har personal (så kallad certifierad energiexpert) för att utfärda energideklaration i södra Sverige. 
				  Vill du vara effektiv i ditt sökande efter rätt besiktningsman/energiexpert? 
				  <br><br>
				  <a href="#post">Be de registrerade företagen om offert</a> <br>(frågan går även till de företag som inte visas listade ovan).  
			 </div>
  			 <div class="title2"><h2 class="h2">Offerförfrågan - få svar på pris och kostnad</h2></div>
                 
 				När du ber leverantörerna om en offert får du svar på viktiga frågor. 
 			    Exempelvis: 
                 
                   <ul class="mainUl">
                     <li>Vilka leverantörer finns i mitt län? </li>
                     <li>När och hur snabbt kan jag få energideklaration utfört?</li>
                     <li>Vad kostar energideklarationen?</li>
                     <li>Hur prissätts en energideklaration av leverantörerna? </li>
                     <li>Vad påverkar tid, pris och kostnad för energideklarationen? </li>
                     <li>Vilka kringtjänster till energideklaration finns? </li>
                     <li>Ska jag välja samma leverantör till energideklarationen för att även utföra installation eller energioptimerande åtgärder? </li>
                     <li>Hur kan jag ta mig an energideklarationens innehåll?</li>
                     <li>Vilka är de senaste nyheterna kring lagar, regler, myndigheter eller IT-tjänster?</li>
                   </ul>
 				
				
			<br>
			<label class="faqTitle serviceTitle"><h2 class="h2">Fastighetsbesiktning - certifierade energiexperter</h2></label>
             <div class="articlesBlock">
                <a href="/besiktning/besiktnings-foretag.php" class="faqQuestion articlesLink">Registrera ditt företag kostnadsfritt</a>
                <div class="faqAnswer articlesText">Om du har ett företag som utfärdar energideklaration, utför OVK eller hissbesiktning kan du kontakta besiktigaste.se. Vi presenterar alla certifierade kontrollanter. Det kostar ingenting. <br><br>
				</div>
                <a href="/besiktning/besiktnings-foretag.php" class="faqQuestion articlesLink">Tipsa om ett företag eller konsult</a>
                <div class="faqAnswer articlesText">
                    Det går också bra att tipsa oss om du känner till ett sådant företag eller konsult som arbetar med detta i din region. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss. 
                </div>
            </div>				
			
           

    </div>
	<br><br><br>
</main>
<footer>
    <div class="footer">
        <div class="footerCexContext">
		
		<?php include $root . '/assets/scripts/footerCexMenu.php';
		?> 
		
		<?php include $root . '/assets/scripts/footerMenu2.php';
		?> 
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