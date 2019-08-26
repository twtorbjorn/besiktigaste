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
   
    <link rel="stylesheet" href="/assets/style/main-screen3.css">  
    <link rel="stylesheet" href="/assets/style/ajax-contact-form.css">        
    <link href="/assets/style/media-queries.css" rel="stylesheet" type="text/css">    
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
	<!-- required -->	
	<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/stellarnav.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/style/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="all" href="/assets/style/bootstrap-theme.css">
    


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
			 			
                    <?php include $root . '/assets/scripts/ajax-contact-form.html';?>
    
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
		
		<div class="container-fluid">
			 <div class="row">
			 	  <div class="col-md-9">
          					 <h1>Om Besiktigaste.se</h1>
                          	 <h4>Om tjänsten</h4>	
          					 <p>Besiktigaste.se tillhandahåller en gratis och högkvalitativ tjänst till dig som äger eller representerar ägare av en fastighet där människor vistas och som behöver genomföra en OVK (obligatorisk ventilationskontroll). Tjänsten är enkel och hjälper dig att snabbt få offerter från certifierade funktionskontrollanter. Det ger dig svar på frågor om vilka tjänster som erbjuds till fastighetsägare. Och vad de kostar. 
          					 </P>
          					 <p>Även om du är van att få OVK utfört kan en offertförfrågan till fler leverantörer ge dig nya insikter om priser, kringtjänster och ev nyheter inom marknaden.
          					 </p>
				   </div>
					 	  <div class="col-md-3">
										<div class="kontaktSigill">
                                            <a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
                            				<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="logo100" style="border:0;"/>
                            				</a>
                        				</div>
							</div> 
			</div>
			<div class="row">&nbsp;</div>
		</div>
			    <div class="container-fluid">
					 <div class="row">
					 	  <div class="col-md-8">
								<h2>Besiktigaste.se - leverantörslöftet</h2>
            					 <p>
            					 	<ul class="mainUl">
                                		<li><strong>Effektivitet</strong> - Jämför offerter från upp till tre olika leverantörer </li>
                                		<li><strong>Lokalt </strong> - Leverantörer runtom i hela Sverige </li>
                                		<li><strong>Omdömen </strong> - Beställare och leverantörer får och ger omdömen </li>
                                		<li><strong>Kvalitetsstämpel </strong> - På besiktigaste.se finns endast certifierade leverantörer </li>
                                		<li><strong>Gratis </strong> - Utan åtagande från dig </li>
            							
            					 </P>
								 <P>&nbsp;</P>
						  </div> 
					 	  <div class="col-md-4">
						  	   <div class="row">
							   		<h3><i>Det här säger användarna</i></h3>
							   <p>
                               		<div id="myCarousel" class="carousel slide" data-ride="carousel">
                                       <!-- Wrapper for slides -->
                                       <div class="carousel-inner">
                                         	 <div class="item active">
                                                             			 
                                                 <div class="quotes-comments">
                               										 	  <P><img src="/assets/images/quotes.png"></p>
                                                                     	 	  <p class="carusel-text">Smart och enkelt. Jag hittade en bra besiktningsman väldigt snabbt, innan vårt kravdatum </p>                                                                     		  <p class="carusel-text black"><b>Jörgen Klasson, Tuve</b></p>
                                                 </div> 			
                                       	    </div>
                                       	    <div class="item">
                                                 <div class="quotes-comments">
                               										 	  <P><img src="/assets/images/quotes.png"></p>
                                                                     	 	  <p class="carusel-text">Det var ett bra sätt att kolla att vi betalar rätt pris. Fick ner priset en hel del.</p>
                                                                     	 	  <p class="carusel-text black"><b>Jan-Erik Bergman</b></p>
                                                                  
                                   		  		 </div>
                               		        </div>
                               
                               				<div class="row">&nbsp;
											</div>
                               				<div class="row">&nbsp;
											</div>
                               				<div class="row">&nbsp;
											</div>
                                       <!-- Indicators -->
                                       		<div class="row">
                               					 <ol class="carousel-indicators">
                                        		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         		  <li data-target="#myCarousel" data-slide-to="1"></li>
                                       			 </ol>
                               				</div>
                                     
                               	  	 	</div>
									</div>
								</div> 
					</div>
				
            	</div>



			    <div class="container-fluid">
					 <div class="row">
					 	  <div class="col-md-12">
						  	   <h2>&nbsp;</h2>
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
	<script src="/libs/jquery.min.js"></script>
	<script src="/libs/bootstrap.min.js"></script>
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