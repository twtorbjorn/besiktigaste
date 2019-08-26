<?php

?>

<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Företag som utför OVK, hissbesiktning eller utfärdar energideklarationer kan registrera sig som leverantör på besiktigaste.se. Det kostar ingenting.">
    <meta name="keywords" content="OVK-besiktning, hiss-besiktning, energideklaration, besiktning, fastighetsskötare, leverantör">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fastighetsbesiktning, registrera leverantör på besiktigaste.se</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/besiktnings-foretag.php">
	<link rel="stylesheet" href="/assets/style/reset.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/assets/style/main-screen-tight-form.css">

</head>
<body>
<div id="post"></div>
<header>
    <div class="headerContent">
        <a href="/" ><img class="logo" src="/assets/images/logo.png"></a>
        <nav>
                <span class="headerText">
                    <a href="/besiktning/om-oss.php" class="headerLink">Om oss</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/besiktnings-foretag.php" class="headerLink headerLinkActive">Besiktningsföretag</a>
                    <span class="bullet">&#8226;</span>
                    <a href="/besiktning/vanliga-fragor.php" class="headerLink">Vanliga frågor</a>
                   <!-- <span class="bullet">&#8226;</span> 
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
        <div class="topicMenuNytrImg">
            <div class="tabPanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab">
                     <li><a href="/ovk-besiktning/"><span class="iconArray rightArray"></span>OVK-besiktning</a></li>
                    <li><a href="/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li><a href="/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane tab-pane-nytr active" id="newBoiler" data-serviceId="91439">
                        <span class="boxText">Annons på ovkbesiktning.se</span>
						  <label class="boxText inputLabel">Kontaktperson</label> 
                          <input type="text" placeholder="Namn på kontaktperson" name="userName" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Epostadress</label>
                          <input type="text" placeholder="Epostadress att kontakta" name="userEmail" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Mobiltelefon</label> 
                          <input type="text" placeholder="Mobiltelefon till kontaktperson" name="userPhone" class="boxArea inputField orange"> 
                          <label class="boxText inputLabel">Övrig information till oss</label> 
                          <textarea placeholder="Skriv övrig info som kan vara relevant" name="additionalInfo" class="boxArea inputField orange"></textarea> 
                          <button class="boxButton resultButton"> 
                          <img src="/assets/images/click.png" class="boxButtonImage">Kontakta mig</button>
                         <!-- <button class="boxButton resultButton">Ge mig offert gratis<img src="/assets/images/arrayButton.png" class="boxButtonArray"></button>-->
                            
					 </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contentNytr">

	
        <div class="leftContentNytr">
            <div class="title2 titleCarouselNytr">Så här säger användarna</div>
            <!-- <img src="/assets/images/100000.png" class="logo100 logoNytr">-->
			<!-- <div class="logo100 logoUC"logoUC">-->
			<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="logo100 logoNytr" style="border:0;"/>
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
            <label class="faqTitle serviceTitle">Vill du synas på ovkbesiktning.se?</label>
             <div class="articlesBlock">
                <a href="#userName" class="faqQuestion articlesLink">Jobbar du med fastighetsbesiktning?</a>
                <div class="faqAnswer articlesText">Om du har ett företag som utför OVK, hissbesiktning eller utfärdar energideklarationer kan du registrera dig som leverantör på www.ovkbesiktning.se och www.besiktigaste.se. Skicka oss ett meddelande via formuläret så kontaktar vi dig innan vi bestämmer om och hur ni vill synas på ovkbesiktning.se. 
				</div>

             <div class="articlesBlock">
                <a href="#userName" class="faqQuestion articlesLink">Registrera ditt företag kostnadsfritt</a>
                <div class="faqAnswer articlesText">Att presenteras på www.ovkbesiktning.se kostar ingenting. 
				</div>
                
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Tipsa om ett företag eller konsult</a>
                <div class="faqAnswer articlesText">
                    Det går också bra att tipsa oss om du känner till ett sådant företag eller egen konsult som arbetar med detta i din region. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss. 
                </div>
            </div>
           
            <label class="faqTitle serviceTitle">Besiktigaste.se - leverantörslöftet</label>
               
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Effektivitet</strong> - Intresserade fastighetsägare ger dig all info du behöver för att kunna offerera direkt</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - Offertförfrågningarna kommer från ditt närområde, runtom i hela Sverige</li>
                      <li class="mainLiText"><strong>Omdömen</strong> - Du får värdefulla omdömen efter genomfört uppdrag</li>
  					  <li class="mainLiText"><strong>Kvalitetsstämpel</strong> - På besiktigaste.se finns endast certifirade leverantörer</li>
                  </ul>
				</div>
        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="footerContext">
            <label class="footerCopyright">2016 &copy; besiktigaste.se</label>

                <span class="footerText">
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