<?php

	if($_SERVER['HTTPS']!="on") {
		$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		header("Location:$redirect"); 
	} 
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Besiktigaste.se erbjuder tjänster till ägare eller representanter till fastigheter där människor vistas och som behöver föra OVK eller energideklaration">
	<meta name="keywords" content="OVK-besiktning, obligatorisk ventilationskontroll, besiktning, fastighetsskötare, fastighetsägare, offert, leverantör">
     <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OVK-besiktning och energideklaration - välj en bra leverantör</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="https://m.besiktigaste.se/energideklaration/">
    <link rel="stylesheet" href="/assets/style/reset.css">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/assets/style/main-screen.css">

</head>
<body>
<div id="post"></div>
    <header>
        <div class="headerContent">
            <a href="https://besiktigaste.se/" ><img class="logo" src="/assets/images/logo.png"></a>
            <nav>
                <span class="headerText">
                    <a href="https://besiktigaste.se/ovk-besiktning/sverige/" class="headerLink">OVK regionalt</a>
                    <span class="bullet">&#8226;</span>
                    <a href="https://besiktigaste.se/energideklaration/energideklaration-sverige/" class="headerLink">Energideklaration regionalt</a>
                    <span class="bullet">&#8226;</span>
                    <a href="https://besiktigaste.se/besiktning/vanliga-fragor.php" class="headerLink">Frågor</a>
                    <!--<span class="bullet">&#8226;</span>
                    <a href="ovk-besiktning-fakta.php" class="headerLink">OVK</a>-->
                </span>
					 <div class="kontaktaOss">
                    <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
					 </div>
        
            </nav>
        </div>
    </header>
    <main>
    <div class="topicMenu">
        <div class="topicMenuImg">
            <div class="tabPanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab">
                    <li><a href="/ovk-besiktning/"><span class="iconArray downArray"></span>OVK-besiktning</a></li>
                    <li><a href="/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li><a href="/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
               <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane-whiteboard active" id="newBoiler" data-serviceId="91439">
                        <span class="boxText">Hitta besiktningsbolag - kostnadsfritt</span>

                            <label class="boxTextBlack"><img src="/assets/images/checkUI.png"><strong>   Effektivt</strong> - Jämför flera offerter<br><br>
							<img src="/assets/images/checkUI.png"><strong>   Lokalt</strong> - Certifierade besiktningsmän<br><br>
                            <img src="/assets/images/checkUI.png"><strong>   Användaromdömen</strong> - Läs andras omdömen</label>    
                          	<style>
                               #map {
                                 height: 30%;
								 width: 92%;
								 border-width: 2px;
								 border-color: rgb(1, 32 ,61);
                               }
                            </style>
                    	<label class="boxTextBlackFramed"><div id="map"></div>
                        <script>
                    
                          // The following example creates complex markers to indicate beaches near
                          // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
                          // to the base of the flagpole.
                    
                          function initMap() {
                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 6,
          					  center: {lat: 58.58, lng: 15.68}
                            });
                    
                            setMarkers(map);
                          }
                    
                          // Data for the markers consisting of a name, a LatLng and a zIndex for the
                          // order in which these markers should display on top of each other.
                          
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
        	['OVK-besiktning Stockholm', 59.13,17.18, 71, '/assets/images/5-stars-icon.png', '/ovk-besiktning/stockholm/'],
        	['OVK-besiktning Södermanland', 59.13,17.18, 71, '/assets/images/5-stars-icon.png', '/ovk-besiktning/södermanland/'],
        	['OVK-besiktning Västra Götaland', 58.93,12.98, 72, '/assets/images/5-stars-icon.png', '/ovk-besiktning/västra-götaland/'],
        	['OVK-besiktning Östergötland', 58.63,16.48, 65, '/assets/images/5-stars-icon.png', '/ovk-besiktning/östergötland/'],
        	['OVK-besiktning Jönköpings län', 57.99,14.99, 25, '/assets/images/5-stars-icon.png', '/ovk-besiktning/jönköpings-län/'],
        	['OVK-besiktning Kronobergs län', 57.33,15.19, 23, '/assets/images/5-stars-icon.png', '/ovk-besiktning/kronobergs-län/'],
        	['OVK-besiktning Halland', 57.13,13.26, 22, '/assets/images/5-stars-icon.png', '/ovk-besiktning/halland/'],
        	['OVK-besiktning Kalmar län', 57.13,16.96, 22, '/assets/images/5-stars-icon.png', '/ovk-besiktning/kalmar-län/'],
			['OVK-besiktning Skåne', 55.89,13.73, 60, '/assets/images/5-stars-icon.png', '/ovk-besiktning/skåne/'],
        	['OVK-besiktning Blekinge', 56.56, 15.49, 26, '/assets/images/5-stars-icon.png', '/ovk-besiktning/blekinge/']];  
                    
                          function setMarkers(map) {
                            // Adds markers to the map.
                    
                            var shape = {
                              coords: [1, 1, 1, 20, 18, 20, 18, 1],
                              type: 'poly'
                            };
                            for (var i = 0; i < beaches.length; i++) {
                              var beach = beaches[i];
                              var image = {
                                url: beach[4],
                                // This marker is 20 pixels wide by 32 pixels high.
                                size: new google.maps.Size(60, 60),
                                // The origin for this image is (0, 0).
                                origin: new google.maps.Point(0, 0),
                                // The anchor for this image is the base of the flagpole at (0, 32).
                                anchor: new google.maps.Point(0, 32)
                              };
                              var marker = new google.maps.Marker({
                                position: {lat: beach[1], lng: beach[2]},
                                map: map,
                                icon: image,
                                shape: shape,
                                title: beach[0],
                                zIndex: beach[3]
                              });
                            }
                          }
                        </script>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgkhZCHVP1wyiOlkWS3OeKrrvsyf-7K5A&callback=initMap">
                        </script>
                    	</label>			 
						 
						    
                            <!-- <img src="/assets/images/alert.png" class="alertBox alertInput">-->
                        <a href="/ovk-besiktning/"><span class="nextButton boxButton">&nbsp;&nbsp;&nbsp;&nbsp;Hitta besiktningsbolag &raquo;</span></a>
                        <img src="/assets/images/quickEasy.png" class="quickEasy">
                    </div>
                </div>
            </div>
        </div>
    </div>


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
  <!--   <img src="/assets/images/100000.png" class="logo100">-->
			<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="logo100" style="border:0;"/>
			</a>
     <div>
        <div class="mainText">
            <div class="mainTextLeft">
                <div class="title1">OVK-besiktning och energideklaration</div>
                <div class="textFragment">Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet där du planerar att genomföra en OVK (obligatorisk ventilationskontroll) eller energibesiktning. 
				Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade besiktningsmän. 
				Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar.
				
				</div>
                <div class="title2">Varför använda tjänsten besiktigaste.se?</div>
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Effektivitet</strong> - Jämför offerter från upp till tre olika leverantörer</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - Certifierade leverantörer runtom i hela Sverige</li>
                      <li class="mainLiText"><strong>Omdömen</strong> - Läs vad beställare säger om leverantörerna</li>
  					<li class="mainLiText"><strong>Gratis</strong> - Utan åtagande från dig</li>
                  </ul>
				</div>
				
				
                <div class="title2">Vad får du svar på i din offerförfrågan?</div>
                <div class="textFragment">
				När du ber leverantörerna om en offert får du svar på viktiga frågor. 
			    Exempelvis: 
                
                  <ul class="mainUl">
                    <li>Vilka leverantörer finns i mitt närområde? </li>
                    <li>När och hur snabbt kan jag få besiktningen utfört?</li>
                    <li>Vad kostar besiktningen?</li>
                    <li>Hur prissätts OVK/energideklaration av leverantörerna? </li>
                    <li>Vad påverkar tid och kostnad för genomförandet av arbetet? </li>
                    <li>Vilka kringtjänster till OVK/energideklaration finns? </li>
                    <li>Ska jag välja samma leverantör av OVK/energideklarationen till att utföra förbättringsåtgärder? </li>
                    <li>Vad ska jag tänka på i samband med åtgärdande enligt rekommendationer som kommer med besiktningen?</li>
                    <li>Vilka är de senaste nyheterna kring lagar, regler, myndigheter eller IT-tjänster?</li>
                  </ul>
				
				</div>
				
				
                <div class="title2">Vilka uppgifter behöver vi av dig?</div>
				<div class="textFragment">Normalt sett behöver besiktningsföretagen bara veta några uppgifter för att ta fram en offert till dig.
				 <br><br>Förutom dina kontaktuppgifter anger du bara:
                
                  <ul class="mainUl">
                    <li>Fastighetsägare </li>
                    <li>Fastighetsbeteckning</li>
                    <li>Fastighetens adress</li>
                    <li>Övrig relevant information, exempelvis antal lägenheter och typ av befintligt ventilationssystem</li>
                  </ul>
        			Tjänsten fungerar även för dig som är privatperson och om det gäller ditt bostadshus. 
        			<br><br>
        	        När du har skickat in uppgifterna kommer ett eller flera företag att höra av sig till dig med en offert. Du jämför erbjudanden och väljer om du vill beställa energideklarationen. Allt är gratis för dig. 
					<br><br>
				</div>
            </div>
            <div class="mainTextRight">
                <div class="title2 title3">Det här säger våra användare</div>
                <div id="carousel" class="carousel slide">
                    <ol class="carousel-indicators" style="margin-left: -175px">
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

            </div>
        </div>
    </div>

    </main>
<footer>
    <div class="footer">
        <div class="footerContext2">
		
		<?php include $root . '/assets/scripts/footerMenu.php';
		?> 
            <label class="footerCopyright">2016 &copy; besiktigaste.se</label>

                <span class="footerText">
                    <a href="https://besiktigaste.se/besiktning/om-oss.php" class="headerLink footerLink">Om oss</a>
                    <span class="bullet">&#8226;</span>
                    <a href="https://besiktigaste.se/besiktning/kontakta-oss.php" class="headerLink footerLink">Kontakta oss</a>
                    <span class="bullet">&#8226;</span>
                    <a href="https://besiktigaste.se/besiktning/integritet.php" class="headerLink footerLink">Integritet</a>
                    <span class="bullet">&#8226;</span>
                    <a href="https://besiktigaste.se/besiktning/villkor.php" class="headerLink footerLink">Allmänna villkor</a>
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
<script src="/assets/scripts/main-screen-energi.js"></script>

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