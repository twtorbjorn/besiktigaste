<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Victor Consulting AB Utför energideklaration enligt Boverkets regler för villor, småhus och bostadsrätter såväl som för kommersiella lokaler (komplexa byggnader)">
    <meta name="keywords" content="fastighetstjänster, energideklaration, stockholm">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Victor Consulting AB - energideklarationer i Stockholm</title>
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
        <a href="https://besiktigaste.se/" ><img class="logo" src="/assets/images/logo.png"></a>
        <nav>
                <span class="headerText">
                    <a href="https://besiktigaste.se/energideklaration/" class="headerLink">Regional info</a>
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
                    <a href="https://besiktigaste.se/energideklaration/stockholm/" class="headerLink">Stockholm</a>
                    
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
                    <li class="active"><a href="https://besiktigaste.se/energideklaration/"><span class="iconArray rightArray"></span>Energideklaration</a></li>
                </ul>
                <!-- Tab panes -->
				<?php include $root . '/assets/scripts/ovkServiceForm.php';
  				?> 
            </div>
        </div>
    </div>

    <div class="contentNytr">
	<div class="leftContentNytr2">
	             <h2 class="h2">Victor Consulting AB - leverantörslöftet</h2>
               
                <div>
                  <ul class="mainUl">
                      <li class="mainLiText"><strong>Kompetens</strong> - certifierad, alla byggnadstyper</li>
                      <li class="mainLiText"><strong>Ekonomi</strong> - hög kvalitet och prisvärt</li>
                      <li class="mainLiText"><strong>Lokalt</strong> - hela Stockholmsområdet</li>
                  </ul>
				</div>
				
	</div>
	
        <div class="rightContentMap text-left">
    			 <h1 class="h1">Victor Consulting &nbsp;&nbsp;<span style='color: orange;'><i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i></h1>
			 <h4 class="title4">Vi utför energideklaration åt BRF:er, fastighetsägare och privatpersoner enligt Boverkets regler.</h4>			
				<div class="faqAnswer articlesText">
      				Certifierad som energiexpert sedan år 2009 förnyat år 2016, med kvalificerad nivå, avseende fastigheter, inklusive komplexa byggnader enligt Boverkets regelverk. 
				<br><br>
				Vi har kontor i Solna och arbetar i hela i Stockholm. Uppdragen varierar mellan BRF:er, villaägare och fastighetsägare av olika slag.

				<br><br>
                <b>Våra tjänster:</B><br>
                – energideklarationer<br>
                – energieffektviseringar<br>	
                – energiberäkningar<br>	  
                – energianalyser<br>	  
                – energiexpert vid projekt med extra höga krav<br>
                 
				<br>
				<B>Exempel på tidigare uppdrag:</B>
				<br>- Energieffektiviseringsprojekt (delprojekt) för Stockholm Stad Fastighetskontor. Omfattade 40+ fastigheter, däribland Stadshuset, Stockholms Stad. 
				<br>- Barilla Sverige AB, Filipstad (Wasa-bröd) omarbetat energiledningssystem enligt den ny standarden ISO 50001, nya rutiner, energipolicy och handlingsplan inför om certifiering.
				<br><br> 
				Vi tar uppdrag med kort varsel och det är enkelt att boka in oss. <br><br>
				Kontakta oss så besöker vi er och ni får ett prisförslag enligt era önskemål.  
				</div>

         <div class="leftContentNytrCompany">
            <!-- <img src="/assets/images/100000.png" class="logo100 logoNytr">-->
			<!-- <div class="logo100 logoUC"logoUC">-->
			<!-- </div>-->

        </div>                
            <div class="articlesBlock">

                <a href="#userName" class="faqQuestion articlesLink">Kontaktinfo Victor Consulting AB</a>
                <div class="faqAnswer articlesText">
					<table><tr><td class='textCompanyPres'>CEX-certifierad:</td><td class='textCompanyPres'> Kent Östergård </td></tr>
					<tr><td class='textCompanyPres'>Telefon kontor:</td><td class='textCompanyPres'>08-27 18 06</td></tr>
					<tr><td class='textCompanyPres'>Mobil:</td><td class='textCompanyPres'>0733-16 48 38</td></tr>
					<tr><td class='textCompanyPres'>Email:</td><td class='textCompanyPres'><a href='mailto:kent.ostergard@victorconsulting.se'>Kontakta oss</a></td></tr>
					<tr><td class='textCompanyPres'>Adress:</td><td class='textCompanyPres'> 
							Victor Consulting AB<br>
							Virebergsvägen 26<br>
							16930 Solna<br>
							<a href="http://www.victorconsulting.se/" rel="nofollow" target="_blank">www.victorconsulting.se</a><br>
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