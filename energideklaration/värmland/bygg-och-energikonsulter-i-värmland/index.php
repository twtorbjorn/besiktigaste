<?php
				   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="description" content="Bygg och Energikonsulter i Värmland AB är företag som erbjuder konsulttjänster kring energi för fastigheter. Företaget har kontor i Lesjöfors och utför bl a energideklarationer, energiberäkningar och analyser.">
	<meta name="keywords" content="energideklaration, energiberäkning, ovk, fastighetsskötare, fastighetsägare, offert">
    
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
      
      <title>Energideklaration i Värmland - läs om Bygg och Energikonsulter i Värmland AB</title>
   
    <link rel="stylesheet" href="/assets/style/main-screen4.css">  
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
<div id="wrapper">
	 <header id="page-header">
        <div class="inner">
                <div class="logo"><a href="https://besiktigaste.se/" >
    			<img src="/assets/images/logo.png"></a>	
				</div>	 
        </div>
        <div class="inner">
		
        	<div class="twkontakt">
    		<a href="mailto:info@besiktigaste.se"><img src="/assets/images/kontakta-oss2.png"></a>
        	</div>
		</div>
    </header>
	 <header id="page-headerp2">
        <div class="inner">
				<?php include $root . '/assets/scripts/topMenu.php';?>
    	<!-- .stellar-nav ska in here -->
        </div>
    </header>
    
	
	<div id="page-content">
	
    	<div class="inner">
			 <div class="row">
			 	  <div class="col-md-4">
                      <?php include $root . '/assets/scripts/ajax-contact-form.php';?>
				  </div>
			 	  <div class="col-md-8">
					   <h1 class="title1new"><span style='color: orange;'><i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i></span>  
						<br>Bygg och Energikonsulter i Värmland AB</h1>
			 <h4 class="title4new">Vi erbjuder energideklarationer och fastighetsrelaterade konsulttjänster såsom bland annat värmefotografering och täthetsprovning.</h4>			
				<p>
				Bygg och Energikonsulter i Värmland AB är ett konsultföretag baserat i Lesjöfors. Vår behörighet som certifierad energiexpert gäller alla typer av byggnader.
				För att kunna bedöma lämpliga energisparåtgärder genomförs alltid en besiktning av byggnaden.
				</p>
				<P>
				Vi tar uppdrag i hela Värmland, västra Dalarna och Örebro län. Bland kunderna finns BRF:er, fastighetsägare och privatpersoner.
				
				</p>
				<p>
                <b>Våra tjänster:</b><br>
                – energideklaration<br>
                – värmefotografering, täthetsprovning<br>
                – energiberäkningar, energianalyser<br>
                – rådgivning inom driftsekonomi<br>
                </p>
				
						 
				<P>
                <b>Pris:</b><br>
				Vi jobbar hela tiden för att hålla kostnader nere utan att ge avkall på kvalitén. 
				Vi erbjuder <b>fastpris</b> för egna hem. För hyreshus och andra byggnader förhandlas priset för varje fall.
				Det går snabbt och enkelt att boka in oss. 
				</p>	
				</div>
				<div class="container-fluid">
					 <div class="col-md-4">
					 <P>
    				 <h3 class="title3new">Kontaktinformation</h3>
                     	 
    					<table class="kontakttable"><tr><td class='textCompanyPres'>CEX-certifierad: &nbsp;</td><td class='textCompanyPres'> Göran Hellbom </td></tr>
    					<tr><td>Telefon:</td><td>0738-178 217</td></tr>
    					<tr><td>Email:</td><td><a href='mailto:info@bevarmland.se'>Kontakta oss</a></td></tr>
    					<tr><td>Adress:</td><td class='textCompanyPres'> 
    							Bygg och Energikonsulter i Värmland AB<br>
    							Rämmen Östervik 10A<br>
								680 96 Lesjöfors<br>
    							
    						</td></tr>
    					</table>
                    <br>
    				</p>
					 </div>
    				<div class="col-md-4">
                    	<h3 class="title3new">Kunderna säger ...</h3>
                        <div id="myCarousel" class="carousel slide ftgslider" data-ride="carousel">
                        	 <!-- Wrapper for slides -->
                             <div class="carousel-inner">
                               	 <div class="item active"> 
                                     <div class="quotes-comments">
                               			<P><img src="/assets/images/quotes.png"></p>
                                        <p class="carusel-text">Smart och enkelt. Göran är verkligen kompetent. </p>     
										<p class="carusel-text black"><b>Marianne Ask</b></p>
                                                                          		  
                                     </div> 			
                                 </div>
                                 <div class="item">
                                     <div class="quotes-comments">
                               				<P><img src="/assets/images/quotes.png"></p>
                                            <p class="carusel-text">Vi kunde få energianalys och energideklaration utfört med efterföljande samtidigt. Bra.</p>
                                            <p class="carusel-text black"><b>Anders Eriksson</b></p>
                                     </div>
                               	 </div>
                               	 <div class="row">&nbsp;</div>
                               	 <div class="row">&nbsp;</div>
                               	 <div class="row">&nbsp;</div>
                                 <!-- Indicators -->
                                 <div class="row">
                               					 <ol class="carousel-indicators ftgslider">
                                        		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                         		  <li data-target="#myCarousel" data-slide-to="1"></li>
                                       			 </ol>
                               	 </div>
                                     
                             </div><!-- end carousel-inner-->
					  	</div><!-- end mycarousel-->
					</div><!--col md 4-->
				</div><!--container fluid-->
         </div><!--row-->

	
			<hr>
			<div class="container-fluid">
				 <div class="row">
					<div class="col-md-6 inner">
								<h3 class="title3new">Bygg och Energikonsulter i Värmland AB - leverantörslöftet</h3>
            					 	<ul class="mainUl kontakttable">
                                		<li><strong>Kompetens</strong> - certifierad inom de flesta områden </li>
                                		<li><strong>Ekonomi </strong> - hög kvalitet till lågt pris</li>
                                		<li><strong>Lokalt </strong> - i hela Värmland, västra Dalarna och Örebro län  </li>
									</ul>
            							
					</div> 
					<div class="col-md-4">
						<div class="kontakttable">
                            		<a href="https://www.uc.se/risksigill2?showorg=IpElkLsnwP&language=swe" title="Sigillet är utfärdat av UC AB. Klicka på bilden för information om UC:s Riskklasser." target="_blank">
                            			<img src="https://www.uc.se/ucsigill2/sigill?org=IpElkLsnwP&language=swe&product=psa&fontcolor=b" alt="" class="articlesBlock" style="border:0; height:150px;"/>
                            			</a>
  
						</div>
					</div>
					<div class="col-md-2"></div>
					
				</div
				
            </div>

				
			    <div class="container-fluid">
					 <div class="row">
					 	  <div class="col-md-12">
						  	   <p>&nbsp;</p>
						  </div>
					</div>
				</div>
		<hr>
	
		</div><!--inner-->
	
	
					       
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
					

	</div><!-- end page-content-->
	<div class="innerlightblue">
		<?php include $root . '/assets/scripts/footerMenuLightblue.php';
		?> 
	</div>	
	<div class="innerlightgrey">
		<?php include $root . '/assets/scripts/footerMenuNew.php';
		?> 
	</div>
	<div class="inner">	
		<?php include $root . '/assets/scripts/footerMenuCopyright.php';
		?> 
	</div>
</div><!--wrapper-->
		
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