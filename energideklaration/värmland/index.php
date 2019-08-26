<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root . '/assets/scripts/';
?>

<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Hitta ett företag som utför energideklaration i Värmland. Se en översikt över besiktningsmän, certifierade enegiexperter (CEX), deras företags inriktning inom ventilation och läs andras omdömen.">
    <meta name="keywords" content="energideklaration, besiktningsman, energideklaration, besiktning, fastighetsskötare, leverantör">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Energideklaration Värmland - certifierade energiexperter</title>
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
                    <a href="/besiktning/besiktnings-foretag.php" class="headerLink headerLinkActive">Besiktningsföretag</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink">Vanliga frågor</a>
                   <!-- <span class="bullet">&#8226;</span> 
                    <a href="energideklaration-fakta.php" class="headerLink">energideklaration</a>-->
                </span>
					 <div class="kontaktaOss">
                    <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
					 </div>
        
        </nav> 
		<nav>      
                <span class="headerBreadcrumb">
                    <a href="https://besiktigaste.se/energideklaration/Värmland/" class="headerLink">Värmland</a>
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
                     <li><a href="https://besiktigaste.se/ovk-besiktning/"><span class="iconArray rightArray"></span>OVK-besiktning</a></li>
                    <li><a href="https://besiktigaste.se/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li class='active'><a href="https://besiktigaste.se/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
				<?php include $root . '/assets/scripts/cexServiceForm.php';
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
                      <li class="mainLiText"><strong>Lokalt</strong> - Leverantörer certifierade i Värmland</li>
                      <li class="mainLiText"><strong>Läs omdömen</strong> - Från beställare om besiktigaste.se och certifierade leverantörer.  
                      </li>
  					<li class="mainLiText"><strong>Gratis</strong> - Utan åtagande från dig</li>
                  </ul>
				</div>
				
<div class="title2">Vilka uppgifter behöver vi av dig?</div>
				<div class="textFragment">Normalt sett behöver besiktningsföretagen bara veta några uppgifter för att ta fram en offert till dig.
				 <br><br>Förutom dina kontaktuppgifter anger du bara:
                
                  <ul class="mainUl">
                    <li>Fastighetsägare </li>
                    <li>Fastighetsbeteckning</li>
                    <li>Fastighetens adress</li>
                    <li>Övrig relevant information</li>
                  </ul>
        			Tjänsten fungerar även för dig som är privatperson och om det gäller ditt bostadshus. 
        			<br><br>
        	        När du har skickat in uppgifterna kommer ett eller flera företag att höra av sig till dig med en offert. Du jämför erbjudanden och väljer om du vill beställa energideklarationen. Allt är gratis för dig. 
					<br><br>
				</div>				
				
				<label class="faqTitle serviceTitle"><h2 class="h2">Jobbar du med fastighetsbesiktning?</h2></label>
             <div class="articlesBlock">
                <a href="#userName" class="faqQuestion articlesLink">Registrera ditt företag kostnadsfritt</a>
                <div class="faqAnswer articlesText">Om du har ett företag som utfärdar energideklarationer, utför hissbesiktning eller OVK-besiktningar kan du registrera dig som leverantör på besiktigaste.se. Det kostar ingenting. <br><br>
				</div>
                <a href="#userName" class="faqQuestion articlesLink">Tipsa om ett företag eller konsult</a>
                <div class="faqAnswer articlesText">
                    Det går också bra att tipsa oss om du känner till ett sådant företag eller konsult som arbetar med detta i ditt län. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss. 
                </div>
            </div>
				
        </div>
		
        <div class="rightContentMap text-left">
  			 <h1 class="h2">Energideklaration i Värmland</h1>

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
                    
                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud FROM Companies WHERE latitud !=  '' AND region = 'Värmland' AND company_presentation = 'cex' order by overallrating desc";
                    $result = $conn->query($sql);	
	?>
	
    <script>


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 59.69, lng: 13.34}
        });

        setMarkers(map);

		marker.addListener('click', function() {
          window.location.href = 'http://besiktigaste.sehttps://besiktigaste.se/ovk-besiktning/varberg/';
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
			<?php 
    			   include $root . '/assets/scripts/writeMap.php';
		 	?>
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
			 
		</div>
        <div class="rightContentLocal text-left">
                <div class="faqAnswer articlesText">
                <div class="faqAnswer articlesText"><strong>
				<a href="https://besiktigaste.se/energideklaration/Värmland/">Energideklaration i Värmland</a></strong><br>
				<!--<a href="https://besiktigaste.se/energideklaration/malmö/">energideklaration Malmö</a><br>
				<a href="https://besiktigaste.se/energideklaration/helsingborg/">energideklaration Helsingborg</a><br>
				<a href="https://besiktigaste.se/energideklaration/kristianstad/">energideklaration Kristianstad</a><br><br>-->
					
				Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet som behöver en 
				energideklaration. 
				Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade energiexperter verksamma i Värmland. 
				Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar.
				  
                </div> 
			 <h2 class="h2">Certifierade energiexperter (CEX) i Värmland </h2>
			 <div id="results-wrapper">
                  <table id="results" class="tableCertifieradeFtg">		
				      <tr class="headerCertifieradeFtg">
                          <th class="headerCertifieradeFtg">F&#246;retag</th>
                          <th class="headerCertifieradeFtg">Ort</th>
                          <th class="headerCertifieradeFtg">Specialitet</th>
                          <th class="headerCertifieradeFtg">Omdöme</th>
                      </tr>	
				<?php

                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud, internal_url FROM Companies WHERE latitud !=  '' AND region = 'Värmland' AND company_presentation = 'cex' order by overallrating desc";
                    $result = $conn->query($sql);	
					
				  if ($result->num_rows > 0) {
                        // output data of each row						
						$ctr = 0;
                        while($row = $result->fetch_assoc()) {
							$ctr = $ctr + 1;
							if ($ctr < 16) {
    							$test = $row["overallrating"];
    						    if ($test < 10) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star-o'></i>";
    							} elseif (20 > $test and $test > 9) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (30 > $test and $test > 19) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (40 > $test and $test > 29) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (50 > $test and $test > 39) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i>";
    							} else {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";							
    							}
                                echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'><a href='" . $row["internal_url"]. "'>" . $row["company_name"]. "</td><td class='textCertifieradeFtg'>" . $row["city"]. "</td><td class='textCertifieradeFtg' width='200'>"  . $row["service_specialitet"].  "</td><td class='textCertifieradeFtg'>" . $rating. "</span></td></tr>";
							}
							else {
								 break;
							}
						
                        }
                    } else {
                        echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'>0 results</td><td></td><td></td><td></td></tr>";
                    }
					                    
                    $conn->close();
                ?>
                  </table>

			 </div>
  			 <div class="title2"><h2 class="h2">Vad får du svar på i din offerförfrågan?</h2></div>
                 <div class="textFragment">
 				När du ber leverantörerna om en offert får du svar på viktiga frågor. 
 			    Exempelvis: 
                 
                   <ul class="mainUl">
                    <li>Vilka leverantörer finns i mitt närområde? </li>
                    <li>När och hur snabbt kan jag få besiktningen utfört?</li>
                    <li>Vad kostar besiktningen?</li>
                    <li>Hur prissätts energideklaration av leverantörerna? </li>
                    <li>Vad påverkar tid och kostnad för genomförandet av arbetet? </li>
                    <li>Vilka kringtjänster till energideklaration finns? </li>
                    <li>Ska jag välja samma leverantör av energideklarationen till att utföra förbättringsåtgärder? </li>
                    <li>Vad ska jag tänka på i samband med åtgärdande enligt rekommendationer som kommer med besiktningen?</li>
                    <li>Vilka är de senaste nyheterna kring lagar, regler, myndigheter eller IT-tjänster?</li>
                  </ul>
 				
				</div>
			
			
           

    </div> 	
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