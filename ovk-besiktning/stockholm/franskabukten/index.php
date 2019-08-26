<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Franska Bukten AB i Stockholm är ett modernt konsult- och serviceföretag som utför OVK-besiktning till BRF:er och andra fastighetsägare.">
    <meta name="keywords" content="OVK-besiktning, ventilationstjänster, energideklaration, stockholm">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Franska Bukten AB i Stockholm - OVK och energideklaration</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/besiktnings-foretag.php">
	<link rel="stylesheet" href="/assets/style/reset.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/style/main-screen-tight-form-company.css">

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

    <div class="contentNytr">
	<div class="leftContentNytr2">
	             <h2 class="h2">Franska Bukten AB - leverantörslöftet</h2>
               
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Kompetens</strong> - certifierade, senaste tekniken</li>
                      <li class="mainLiText"><strong>Ekonomi</strong> - energieffektivt och prisvärt</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - konsulter i hela Stockholm</li>
                  </ul>
				</div>
				
	</div>
	
        <div class="rightContentMap text-left"><h1 class="h1"><span style='color: orange;'><i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i></span></h1>
    			 <h1 class="h1">Franska Bukten AB</h1>
			 <h4 class="title4">Vi hjälper BRF:er, fastighetsägare och privatpersoner med OVK, injustering och ventilationsservice.</h4>			
				<div class="faqAnswer articlesText">
				AB Franska Bukten är ett modernt konsult- och serviceföretag inom fastighetsteknik med ca 20 konsulter. Förutom OVK-besiktningar och energideklarationer gör vi energiberäkningar och entreprenader. 
				<br><br>
				Huvudkontoret finns på Södermalm i Stockholm.

				<br><br>
                Våra tjänster:<br>
                – OVK-besiktning<br>
                – injustering<br>
                – ventilationsservice<br>
                – energianalyser<br>
                – energideklarationer
                <br><br>
				Varje år gör vi över tvåhundra besiktningar av fastigheter i Stockholmsområdet. Vi har 8 st. OVK-certifierade (riksbehörighet K) besiktningsmän som tack vare Franska Buktens höga aktivitet har stor erfarenhet och är pålästa gällande aktuella OVK krav och regler. 
				Det går snabbt och enkelt att boka in oss. <br><br>
				Kontakta oss så återkommer vi direkt till er med bra prisförslag.
				</div>

         <div class="leftContentNytrCompany">
            <div class="title4 titleCarouselNytrCompany">Så här säger kunderna</div>
            <!-- <img src="/assets/images/100000.png" class="logo100 logoNytr">-->
			<!-- <div class="logo100 logoUC"logoUC">-->
			<!-- </div>-->
            <div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item carousel-indicators-bottom active">
                        <img src="/assets/images/quotes.png">
                        <div class="quotes-comments">
                                <p class="carusel-text">Vi fick snabbt offert och de låg bäst till i pris. Konsulterna var proffsiga och hjälpsamma.
                        <img src="/assets/images/quotes.png"></p><br>
								
                                <p class="carusel-text black"><b>Johannes Melkersson, Vasastan, Stockholm</b></p>
                         </div>
						 
                    </div>
                   
                </div>
            </div>
        </div>                
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Kontaktinfo Franska Bukten AB</a>
                <div class="faqAnswer articlesText">
					<table><tr><td class='textCompanyPres'>OVK-certifierad:</td><td class='textCompanyPres'> Fredrik Jönsson </td></tr>
					<tr><td class='textCompanyPres'>Telefon:</td><td class='textCompanyPres'>076-112 60 22</td></tr>
					<tr><td class='textCompanyPres'>Email:</td><td class='textCompanyPres'><a href='mailto:fredrik.jonsson@franskabukten.se'>Kontakta oss</a></td></tr>
					<tr><td class='textCompanyPres'>Adress:</td><td class='textCompanyPres'> 
							Franska Bukten AB<br>
							Magnus Ladulåsgatan 27<br>
							118 65 Stockholm<br>
							<a href="http://www.franskabukten.se/" target="_blank">www.franskabukten.se</a><br>
						</td></tr>
					</table>
                </div>
            </div>
          

        </div>
		<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="articlesBlock" style="border:0; height:150px;"/>
			</a>
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
</body>
</html>