<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root . '/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Besiktigaste.se erbjuder tjänster till ägare eller skötare av fastigheter i behov av att genomföra arbete relaterat till någon fastighet. Läs allmänna villkor">
    <meta name="keywords" content="allmänna villkor, cookies, besiktigaste.se, personuppgifter, kontaktinformation, besiktning, fastighetstjänster">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Besiktigaste.se - allmänna villkor för användare</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/villkor.php">
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
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink">Vanliga frågor</a>
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
            <label class="faqTitle serviceTitle">Allmänna användarvillkor</label>
             <div class="articlesBlock">
                <a href="#userName" class="faqQuestion articlesLink">Om tjänsten</a>
                <div class="faqAnswer articlesText">Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till den som äger eller representerar ägare av någon fastighet i behov av att genomföra arbete relaterat till någon fastighet. Tjänsten är enkel och hjälper denna part (köpare) att snabbt få offerter från certifierade leverantörer.  
				</div>

                
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Vem ligger bakom besiktigaste.se?</a>
                <div class="faqAnswer articlesText">
                    Besiktigaste.se ägs av stockholmsbaserade RättRådig Digitala Affärer i Sverige. Tjänsten drivs av personal på miljonline.se vilka har varit verksamma inom digitala affärer sedan 1999. 
					Vill du komma i kontakt med oss, vänligen använd kontaktformuläret på sidan "Kontakta oss" eller ring nr 0730 303030. 
					<br><br>Rättrådig har högsta kreditvärdighet enligt kreditinformationsföretaget UC, se och klicka på webbsigillet.     
 
                </div>
            </div>
                             
                                      
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Ansvar för affärsöverenskommelser</a>
                <div class="faqAnswer articlesText">
                    Besiktigaste.se är en förmedlingstjänst mellan poteniell köpare och leverantör, därmed skall köparen samt leverantörer ta ansvar för alla överenskommelser som sker efter att en kontakt upprättats via tjänsten.
                </div>
            </div>
	                             
                                      
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Information på besiktigaste.se</a>
                <div class="faqAnswer articlesText">
                    Besiktigaste.se arbetar aktivt för att de uppgifter som publiceras på besiktigaste.se är korrekta men kan ej garantera detta. Användare äger inte rätt att ställa ekonomiska krav gentemot de som driver besiktigaste.se i de fall det förekommer material på besiktigaste.se som inte är korrekt.
                </div>
            </div>
	
                                        
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Rättigheter och uppförande</a>
                <div class="faqAnswer articlesText">
                    Den som gör en offertförfrågan godkänner att besiktigaste.se skickar kontaktuppgifterna till företag som är anslutna till oss och som matchar förfrågan. 
					Den som gör en förfrågan på besiktigaste.se är inte bunden att anlita ett företag, en leverantör som är ansluten till tjänsten. 
					Det är inte tillåtet att göra oseriösa eller påhittade förfrågningar, ett reellt behov av hjälp måste finnas. 
					Det är inte tillåtet att förtala någon person eller företag eller skriva olagliga och oetiska saker i en förfrågan. 
					Det finns inga garantier för antalet svar som genereras av en förfrågan. Vi garanterar inte relevansen i de svar som kommer utan matchar endast förfrågningar med företag baserade på val av kategorier och regioner.
                </div>
            </div>
		
                                        
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Certifierade leverantörer och företag</a>
                <div class="faqAnswer articlesText">
  Besiktigaste har anslutna företag som tillhandahåller tjänster inom ett stort antal områden indelat i olika kategorier. För att hjälpa användare av besiktigaste.se att hitta trygga företag ställer vi krav på samtliga företag som vill ansluta sig till tjänsten. Besiktigaste.se genomför löpande kontroller av samtliga företag för att garantera att de fortfarande uppfyller följande krav: 
<li>F-skatt</li>
<li>Moms</li>
<li>Skuldfrihet hos Kronofogden</li>
                  
                </div>
            </div>
	                            
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Cookies, kakor</a>
                <div class="faqAnswer articlesText">
                    På denna webbplats, besiktigaste.se, används cookies.
Om du inte accepterar användandet av cookies kan du stänga av cookies i din webbläsares säkerhetsinställningar. Du kan även ställa in webbläsaren så att du får en varning varje gång webbplatsen försöker placera en cookie på din dator.
Cookies är små textfiler som lagras på besökarens dator. Cookies används normalt för att förbättra webbplatsen för användaren, till exempel för att kunna anpassa en webbplats efter besökarens önskemål, val och intressen.
Ingen personlig information, som e-post eller namn, sparas automatiskt om besökaren. Personlig information som besökaren själv registrerar, sparas i syfte att optimera användarupplevelsen och för att Miljonline ska kunna anpassa kommunikationen efter varje användares unika intressen. Vi delar inte med oss av information till tredje part.
Det finns två typer:
<li>En permanent cookie ligger kvar på besökarens dator under en bestämd tid.</li>
<li>En sessionscookie lagras tillfälligt i datorns minne under tiden en besökare är inne på en webbsida. Sessioncookies försvinner när du stänger din webbläsare eller när mer än 30 minuter har passerat utan att du använt webbläsaren.</li>

Alla som besöker en webbplats som använder cookies ska få information om att webbplatsen innehåller cookies, vad dessa cookies används till och hur cookies kan undvikas, enligt lagen om elektronisk kommunikation, som trädde i kraft den 25 juli 2003 (SFS 2003:389). Ta kontakt med oss om du vill veta mer. 

                </div>
            </div>
                  
        
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Hantering av personuppgifter, (PUL)</a>
                <div class="faqAnswer articlesText">
                    Information enligt personuppgiftslagen (PuL).
RättRådig digitala affärer i Sverige (RättRådig) är personuppgiftsansvarig för behandlingen av personuppgifter på denna webbplats. De personuppgifter som RättRådig får av dig eller hämtar in, behandlas för att vi skall kunna fullgöra och administrera såväl RättRådig förpliktelser som dina önskemål.
RättRådig kan komma att behandla lämnade och inhämtade personuppgifter för administration, att tillhandahålla tjänster, hantera prenumerationer, göra marknads- och kundanalyser samt för affärs-, produkt- och metodutveckling. Vi använder också dina personuppgifter för att kunna skicka dig information om och i övrigt marknadsföra våra tjänster. Vi lämnar inte ut dina personuppgifter till tredje part.
Du har rätt att få information om vilka personuppgifter RättRådig har om dig, för vilket ändamål vi behandlar uppgifterna, varifrån uppgifterna har hämtats. Du har rätt att begära rättelse av felaktiga personuppgifter. Du kan också anmäla till oss att du motsätter dig att dina personuppgifter används för direktmarknadsföring.
Oavsett vilket ärende du har, och vill komma i kontakt med RättRådig, använd denna kontaktinformation: info@miljonline.se.


                </div>
            </div>
                                       
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Befriande omständigheter</a>
                <div class="faqAnswer articlesText">
                    Besiktigaste.se är befriade från påföljd för underlåtenhet att fullgöra viss förpliktelse om underlåtenheten har sin grund i en s.k. befriande omständighet. 
Befriande omständighet ska anses bl.a. myndighets åtgärd eller underlåtenhet, nytillkommen eller ändrad lagstiftning, personalavgång, sjukdom eller annan nedsättning av arbetsförmåga, dödsfall, konflikt på arbetsmarknaden, blockad, brand, översvämning, förlust eller förstörelse av data eller egendom av väsentlig betydelse eller olyckshändelse av större omfattning.

                </div>
            </div>
	
             <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Ändrade villkor</a>
                <div class="faqAnswer articlesText">
                    Besiktigaste.se har rätt att utan förvarning ändra dessa allmänna villkor, antingen på egen hand eller om lagar och förordningar kräver detta. Användare uppmanas att kontinuerligt ta del av dessa allmänna villkor. 

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


</html>