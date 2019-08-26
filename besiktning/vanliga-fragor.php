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
    <meta name="description" content="Vanliga frågor och svar till tjänsterna som besiktigaste.se erbjuder till fastighetsägare. Vem är ansluten, hur tas mina personuppgifter om hand, kostar det? ">
    <meta name="keywords" content="offertförfrågan, personuppgifter, kostnad, kontaktinformation, besiktning, fastighetstjänster, besiktigaste.se">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Besiktigaste.se - besiktning i superlativ. Vanliga frågor</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/vanliga-fragor.php">
    <link rel="stylesheet" href="/assets/style/reset.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/assets/style/main-screen-tight-form-map.css">

</head>
<body>
<div id="post"></div>
<header>
    <div class="headerContent">
        <a href="/" ><img class="logo" src="/assets/images/logo.png"></a>
        <nav>
                <span class="headerText">
                    <a href="/ovk-besiktning/ventilationskontroll-sverige/" class="headerLink">OVK regionalt</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/besiktnings-foretag.php" class="headerLink">Besiktningsföretag</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink headerLinkActive">Vanliga frågor</a>
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
        <div class="topicMenuNytrMapImg">
            <div class="tabPanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a><span class="iconArray downArray"></span>OVK-besiktning</a></li>
                    <li><a href="/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li><a href="/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
				<?php include $root . '/assets/scripts/kontaktServiceForm.php';
  				?> 
            </div>
        </div>
    </div>
      <div class="contentNytr">

	
	
        <div class="leftContentNytr">
            <div class="title2 titleCarouselNytr">Så här säger användarna</div>
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
        </div>
        <div class="rightContentNytr text-left">
            
            <label class="faqTitle">Vanliga frågor</label>
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock1">Hur fungerar tjänsten besiktigaste.se?</span>
                <div class="collapse faqAnswer" id="faqBlock1">En fastighetsägare eller dess representant fyller i uppgifterna i formuläret för offertförfrågan av en viss tjänst. Förfrågan slussas vidare till upp till tre företag som aktivt levererar denna tjänst i den geografiska region som anges i formuläret. De företag som levererar tjänster via besiktigaste.se är kvalitetskontrollerade. 
				Företagen kontaktar förfrågaren med ett kostnadsförslag eller för att få svar på kompletterade frågor som de behöver för att ge dig en offert. Vad som behandlas mellan offertförfrågaren och leverantören ligger utanför Besiktigastes kontroll och påverkan. Det finns inga krav på åtaganden från endera part, det är helt upp till dessa att komma väl överens.  
				</div>
			</div>
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock2">Kostar det något att göra en förfrågan?</span>
                <div class="collapse faqAnswer" id="faqBlock2">
                    Nej. Det kostar ingenting att skicka en offertförfrågan. Du åtar dig ingenting genom att skicka förfrågan. Om du via tjänsten får kontakt med en leverantör som du vill kontraktera är det någonting som sker utanför Besiktigastes kontroll och påverkan. Du betalar inga avgifter mer än de som din leverantör tar för att utföra sitt jobb. 
 
                </div>
            </div>
				
			
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock3">Måste jag köpa eller beställa om jag skickar en offertförfrågan?</span>
                <div class="collapse faqAnswer" id="faqBlock3">
                    Nej. Det finns inga krav på åtaganden i samband med att du skickar en offertförfrågan.  
Leverantörsföretaget som kontaktar dig med ett kostnadsförslag förväntar sig ett bra samtal med dig där du fritt väljer hur du vill gå vidare. Vad som behandlas mellan dig och leverantören ligger utanför Besiktigastes kontroll och påverkan. 
 
                </div>
            </div>
				
				
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock4">Får jag ett färdigt kostnadsförslag efter att jag har skickat offertförfrågan? </span>
                <div class="collapse faqAnswer" id="faqBlock4">Ja, i de flesta fall. Du får ett färdigt kostnadsförslag tack vare att du fyllt i alla uppgifter i offertförfrågan på ett sätt som klargör din situation och vad du vill ha utfört. Förutom de obligatoriska uppgifterna som exempelvis fastighetsbeteckning och adress finns fritextfält där du kan beskriva saker som leverantören särskilt behöver ta hänsyn till i sin kommande leverans. Hela processen kommer att upplevas som mycket effektiv och ge dig ett gott underlag för beslut.  
                
				</div>
            </div>
				
			
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock5">Hur hanteras mina personuppgifter?</span>
                <div class="collapse faqAnswer" id="faqBlock5">
                   Enligt PUL, personuppgiftslagen (PuL). RättRådig digitala affärer i Sverige (RättRådig) är personuppgiftsansvarig för behandlingen av personuppgifter på denna webbplats. De personuppgifter som RättRådig får av dig eller hämtar in, behandlas för att vi skall kunna fullgöra och administrera såväl RättRådig förpliktelser som dina önskemål. 
				   RättRådig kan komma att behandla lämnade och inhämtade personuppgifter för administration, att tillhandahålla tjänster, hantera prenumerationer, göra marknads- och kundanalyser samt för affärs-, produkt- och metodutveckling. Vi använder också dina personuppgifter för att kunna skicka dig information om och i övrigt marknadsföra våra tjänster. 
				   Vi lämnar inte ut dina personuppgifter till tredje part. Du har rätt att få information om vilka personuppgifter RättRådig har om dig, för vilket ändamål vi behandlar uppgifterna, varifrån uppgifterna har hämtats. Du har rätt att begära rättelse av felaktiga personuppgifter. Du kan också anmäla till oss att du motsätter dig att dina personuppgifter används för direktmarknadsföring. Oavsett vilket ärende du har, och vill komma i kontakt med RättRådig, använd denna kontaktinformation: info@miljonline.se, telefonnummer 0730 303030.
                
                </div>
            </div>
				
				
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock6">Vad gör jag om jag inte är nöjd?</span>
                <div class="collapse faqAnswer" id="faqBlock6">Vi vill veta om och varför du inte är nöjd. Besiktigaste.se skickar en enkät till dig efter att du har använt tjänsten där du berättar om dina upplevelser. Och vi vill givetvis agera och åtgärda det som gör att du inte är nöjd. Förhoppningsvis kommer vi överens om någonting bra som gör att du känner dig bättre omhändertagen. 
				
				</div>
            </div>
				
				
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock7">Är besiktigaste.se delaktig i affärsuppgörelsen mellan den offertförfrågare och leverantör?</span>
                <div class="collapse faqAnswer" id="faqBlock7">Nej. Det finns inga krav på åtaganden i samband med att du skickar en offertförfrågan.  
Leverantörsföretaget som kontaktar dig med ett kostnadsförslag förväntar sig ett bra samtal med dig där du fritt väljer hur du vill gå vidare. Vad som behandlas mellan dig och leverantören ligger utanför Besiktigastes kontroll och påverkan. 


				</div>
            </div>
				
					
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock8">Hur registrerar jag mig som certifierad leverantör? </span>
                <div class="collapse faqAnswer" id="faqBlock8">
                   Du fyller i formuläret "Kontakta oss angående leverantör" som finns under länken "Besiktningsföretag". Vi på besiktigaste.se kontaktar dig för att skaffa oss en bild av era tjänster så att vi kan matcha ert företag med rätt tjänster och mot rätt region. 
                  Alla företag på besiktigaste ska ha ett bra rykte på marknaden och hålla hög kvalitet i sina leveranser. Vi ber därför om referenser. Besiktigaste.se genomför dessutom löpande kontroller av samtliga företag för att garantera att de fortfarande uppfyller följande krav:
                  <li>F-skatt</li>
                  <li>Moms</li>
                  <li>Skuldfrihet hos Kronofogden</li>
                  <li>Nödvändiga certifikat utställda via Swedac och andra myndigheter
                  <br><br>Processen att bli en av Besiktigastes leverantörer går snabbt, ofta är allt klart samma dag som kontakten tas. 

				</div>
            </div>
						
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock9">Kan alla företag ansluta sig som leverantör hos besiktigaste.se?</span>
                <div class="collapse faqAnswer" id="faqBlock9">
                    Alla företag med bra rykte för att hålla hög kvalitet kan ansluta sig till besiktigaste.se. Vi ber de företag som vill ansluta sig om referenser. Besiktigaste.se genomför dessutom löpande kontroller av samtliga företag för att garantera att de fortfarande uppfyller följande krav: 
                   <li>F-skatt</li>
                  <li>Moms</li>
                  <li>Skuldfrihet hos Kronofogden</li>
                  <li>Nödvändiga certifikat utställda via Swedac och andra myndigheter
                </div>
            </div>
		
						
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock10">Hur kvalitetssäkras de leverantörer som skickar offert?</span>
                <div class="collapse faqAnswer" id="faqBlock10">
                    Besiktigaste har ett lagom antal anslutna företag med bra kvalitet som tillhandahåller nischade fastighetstjänster. Tack vare att vi inte tillhandahåller all världens tjänster kan vi ha bra samtal med såväl leverantörer som offertförfrågare. Vi pratar med och ber om omdömen ifrån de som gör offertförfrågningar. Och vi pratar med leverantörsföretagen och ber på liknande sätt om omdömen. På så sätt hittar fastighetsägare och dess representanter trygga, bra leverantörer. Besiktigaste.se genomför dessutom löpande kontroller av samtliga företag för att garantera att de fortfarande uppfyller följande krav: 
                   <li>F-skatt</li>
                  <li>Moms</li>
                  <li>Skuldfrihet hos Kronofogden</li>
                  <li>Nödvändiga certifikat utställda via Swedac och andra myndigheter
               </div>
            </div>
									
            <div class="faqBlock">
                <img src="/assets/images/plus.png" class="faqImg">
                <span class="faqQuestion" data-toggle="collapse" data-target="#faqBlock11">Vem ligger bakom besiktigaste.se?</span>
                <div class="collapse faqAnswer" id="faqBlock11">
                    Besiktigaste.se ägs av RättRådig Digitala Affärer i Sverige. Tjänsten drivs av personal på Stockholmsbaserade miljonline.se vilka har varit verksamma inom digitala affärer sedan 1999. Vill du komma i kontakt med oss, vänligen använd kontaktformuläret till vänster eller ring nr 0730 303030. 
					<br><br>Rättrådig har högsta kreditvärdighet enligt kreditinformationsföretaget UC, se och klicka på webbsigillet.     
 
               </div>
            </div>
			
        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="footerContext">
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

<!-- Mirrored from boiler-offers.co.uk/desktop/about_us.php  , Wed, 17 Feb 2016 12:15:59 GMT -->
</html>