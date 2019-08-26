<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Företag som utför OVK, hissbesiktning eller utfärdar energideklarationer kan registrera sig som leverantör på besiktigaste.se. Det kostar ingenting.">
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
      
    <title>Fastighetsbesiktning, registrera leverantör på besiktigaste.se</title>
   
    <link rel="stylesheet" href="/assets/style/main-screen3.css">  
    <link rel="stylesheet" href="/assets/style/ajax-contact-form.css">        
    <link href="/assets/style/media-queries.css" rel="stylesheet" type="text/css">    
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
	<!-- required -->	
	<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/stellarnav.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/style/bootstrap-theme.css">
    
    <!-- bxSlider CSS file -->
	<link href="/assets/css/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>
    <header>
        <div class="headerContent">
            <a href="https://besiktigaste.se/" >
			<img class="logo" src="/assets/images/logo.png"></a>

        </div>				 
		<div class="kontaktaOss">
            <a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss.png"></a>
		</div>
        
    </header>
    
    <main>
	<?php include $root . '/assets/scripts/topMenu.php';
	?>
    

         
       <!-- Tab panes -->
        <div class="tab-content">
			 			
                    <?php include $root . '/assets/scripts/ajax-contact-form2.html';?>
    
				<div class="mainImgRight">
            			 <img src="/assets/images/besiktigaste-kontakt2.jpg">
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
					 <h1>Jobbar du med fastighetsbesiktning?</h1>
                	 <h4>Registrera ditt företag kostnadsfritt</h4>	
					 <p>Om du har ett företag som utför OVK, hissbesiktning eller utfärdar energideklarationer kan du kontakta besiktigaste.se. Vi presenterar alla certifierade kontrollanter. Det kostar ingenting. 
					 </P>
                	 <h4>Tipsa om ett företag eller konsult</h4>	
					 <p>Det går också bra att tipsa oss om du känner till ett sådant företag eller egen konsult som arbetar med detta i din region. Fyll i din information i kontaktformuläret så kontaktar vi personen med de kontaktuppgifter du skickar oss.
					 </p>
                	 
				</div>
                <div>
					 <h2>Besiktigaste.se - leverantörslöftet</h2>
					 <p>
					 	<ul class="mainUl">
                    		<li><strong>Effektivitet</strong> - Intresserade fastighetsägare ger dig all info du behöver för att kunna offerera direkt</li>
                    		<li><strong>Lokalt </strong> - Offertförfrågningarna kommer från ditt närområde, runtom i hela Sverige </li>
                    		<li><strong>Omdömen </strong> - Du får värdefulla omdömen efter genomfört uppdrag </li>
                    		<li><strong>Kvalitetsstämpel </strong> - På besiktigaste.se finns endast certifierade leverantörer </li>
                    		
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
      

                   
            </div>
        </div>   

    </main>

		<?php include $root . '/assets/scripts/footerMenuLightblue.php';
		?> 
		<?php include $root . '/assets/scripts/footerMenuNew.php';
		?> 
		<?php include $root . '/assets/scripts/footerMenuCopyright.php';
		?> 
		

	<!-- .stellar-nav -->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script type="text/javascript" src="/assets/js/stellarnav.min.js"></script>
	<script type="text/javascript" src="/assets/scripts/ajax-contact-form.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
	</script>
	<script>
    	$('.bxslider').bxSlider({
            auto: true,
            autoControls: false
        });
    </script>

</body>

</html>