<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Besiktigaste.se erbjuder tjänster till ägare eller skötare av fastigheter som planerar att genomföra en energibesiktning. Tjänsten är enkel och gratis">
    <meta name="keywords" content="energideklaration, miljö-besiktning, besiktning, fastighetsskötare, fastighetsägare, offert, leverantör">
     <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Energideklaration - välj en bra leverantör med besiktigaste.se </title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/energideklaration/">
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
            <a href="/" ><img class="logo" src="/assets/images/logo.png"></a>
            <nav>
                <span class="headerText">
                    <a href="/energideklaration/energideklaration-sverige/" class="headerLink">Regional info</a>
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
        <div class="topicMenuImg">
            <div class="tabPanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab">
                    <li><a href="/ovk-besiktning/"><span class="iconArray downArray"></span>OVK-besiktning</a></li>
                    <li><a href="/hiss-besiktning/"><span class="iconArray rightArray"></span>Hissbesiktning</a></li>
                    <li class="active"><a><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
               <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="newBoiler" data-serviceId="energideklaration">
					      <input type="hidden" name="formURL" id="formURL" value="<?php echo dirname($_SERVER["PHP_SELF"])?>"> 
					      <input type="hidden" name="formURL2" id="formURL2" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
                        <span class="boxText">Be om offert</span>

                            <label class="boxText inputLabel">Fastighetsägare</label>
							<input type="text" name="Fastighetsagare" class="boxArea inputField orange" data-id="111" placeholder=""/>
                       
                         <!-- Tab panes <div class="btn-group dropdownBoil orange firstForm">-->
                            <label class="boxText inputLabel">Fastighetsbeteckning</label>
                            <input type="text" name="Fastighetsbeteckning" class="boxArea inputField orange" data-id="222" placeholder=""/>
                        
						
                            <label class="boxText inputLabel">Fastighetens adress</label>
                            <input type="text" name="Fastighetsadress" class="boxArea inputField orange" data-id="333" placeholder=""/>
                        
                        
                            <label class="boxText inputLabel">Fastighetens ort</label>
                            <!-- <textarea placeholder="Skriv övrig info som kan vara relevant" name="additionalInfo1" data-id="444" class="boxArea inputField orange"></textarea>-->
							 <input type="textarea" name="Fastighetsort" class="boxArea inputField orange" data-id="454" placeholder=""/>
                        
                        
                        	<button class="nextButton boxButton">Ge mig offert gratis<img src="/assets/images/arrayButton.png" class="boxButtonArray"></button>
                        
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
                <div class="title1">Energideklaration</div>
                <div class="textFragment">Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger 
				eller representerar ägare av en fastighet där du planerar att genomföra en energibesiktning. 
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
                    <li>Hur prissätts energideklaration av leverantörerna? </li>
                    <li>Vad påverkar tid och kostnad för genomförandet av arbetet? </li>
                    <li>Vilka kringtjänster till energideklaration finns? </li>
                    <li>Ska jag välja samma leverantör av energideklarationen till att utföra förbättringsåtgärder? </li>
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
                    <li>Övrig relevant information</li>
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
        <div class="footerCexContext">
		
		<?php include $root . '/assets/scripts/footerCexMenu.php';
		?> 
		
                <span class="footerCexText">
					<a href="#" class="headerLink footerLink">2016 &copy; besiktigaste.se</a>
                    <span class="bullet">&#8226;</span>
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