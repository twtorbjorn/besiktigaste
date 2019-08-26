<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Besiktigaste.se erbjuder tjänster till ägare eller representanter till fastigheter där människor vistas och som behöver föra OVK eller energideklaration">
	<meta name="keywords" content="OVK-besiktning, obligatorisk ventilationskontroll, besiktning, fastighetsskötare, fastighetsägare, offert, leverantör">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<!-- disable iPhone inital scale -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 

    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
      
    <title>OVK-besiktning och energideklaration - välj en bra leverantör</title>

   
    <link rel="stylesheet" href="/assets/style/main-screen2.css">
    <link href="/assets/style/media-queries.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
	<!-- required -->	
	<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/stellarnav.css">
	<!-- required -->
    
    <!-- bxSlider CSS file -->
	<link href="/assets/css/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>
    <header>
        <div class="headerContent">
            <a href="https://besiktigaste.se/" ><img class="logo" src="/assets/images/logo.png"></a>

	        </div>				 <div class="kontaktaOss">
                    <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
					 </div>
        
    </header>
    
    <main>
	<?php include $root . '/assets/scripts/topMenu.php';
	?>
    
	<!-- .stellar-nav -->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript" src="/assets/js/stellarnav.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
	</script>
         
       <!-- Tab panes -->
        <div class="tab-content">
			 	<div class="formArea">
		
                    <div class="tab-pane active" id="newBoiler" data-serviceId="91439">
                        <span class="boxText">Kontaktformulär</span>
						  <label class="boxText inputLabel">Namn</label> 
                          <input type="text" placeholder="" name="userName" class="boxArea orange"> 
                          <label class="boxText inputLabel">Epostadress</label>
                          <input type="text" placeholder="" name="userEmail" class="boxArea orange"> 
                          <label class="boxText inputLabel">Mobiltelefon</label> 
                          <input type="text" placeholder="" name="userPhone" class="boxArea orange"> 
                          <label class="boxText inputLabel">Meddelande till oss</label> 
                          <textarea placeholder="" name="additionalInfo" class="boxArea orange"></textarea> 
                          <button class="boxButton"> 
                          <img src="/assets/images/click.png" class="boxButtonImage" />Kontakta mig</button>
                         <!-- <button class="boxButton resultButton">Ge mig offert gratis<img src="/assets/images/arrayButton.png" class="boxButtonArray"></button>-->

                	</div>
				</div>
				<div class="mainTextRight">
            			 <a href="/ovk-besiktning/">
            			 <img class="mainImgRight" src="/assets/images/main4.jpg">
            			 </a>
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
		
     
        <div class="mainText">
            <div class="mainTextLeft">
                <div>
					 <h1>Om Besiktigaste.se</h1>
                	 <h4>Om tjänsten</h4>	
					 <p>Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger eller representerar ägare av en fastighet där människor vistas och som behöver genomföra en OVK (obligatorisk ventilationskontroll). Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade funktionskontrollanter. Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar. 
					 </P>
					 <p>Även om du är van att få OVK utfört kan en offertförfrågan till fler leverantörer ge dig nya insikter om priser, kringtjänster och ev nyheter inom marknaden.
					 </p>
				</div>
                <div>
					 <h2>Besiktigaste.se - leverantörslöftet</h2>
					 <p>
					 	<ul class="mainUl">
                    		<li><strong>Effektivitet</strong> - Jämför offerter från upp till tre olika leverantörer </li>
                    		<li><strong>Lokalt </strong> - Leverantörer runtom i hela Sverige </li>
                    		<li><strong>Omdömen </strong> - Beställare och leverantörer får och ger omdömen </li>
                    		<li><strong>Kvalitetsstämpel </strong> - På besiktigaste.se finns endast certifierade leverantörer </li>
                    		<li><strong>Gratis </strong> - Utan åtagande från dig </li>
							
					 </P>
				</div>
			
				
            </div>
            <div class="mainTextRight">
            	<div class="testimonial">
					 <h2>Det här säger <br>användarna</h2>
				</div>
				<div class="sigill">
                <a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
				<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="logo100" style="border:0;"/>
				</a>
				</div>
					  
				<!-- bxSlider Javascript file -->
				<script src="/assets/js/jquery.bxslider.min.js"></script>
				
                <div class="sigill">
                <ul class="bxslider">
                  <li>
                  <p>Smart och enkelt. Jag hittade en bra besiktningsman väldigt snabbt, innan vårt kravdatum </p><br>
                  <p><b>Jörgen Klasson, Tuve</b></p>
                  </li>
                  <li><p>Det var ett bra sätt att kolla att vi betalar rätt pris. Fick ner priset en hel del.</p><br>
                  <p><b>Jan-Erik Bergman</b></p>
                  </li>
                  
                </ul>
				</div>
      
                <script>
                $('.bxslider').bxSlider({
                    auto: true,
                    autoControls: false
                });
                </script>
                   
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







</body>

</html>