<?php

?>

<html>

<head lang="en">
    <meta charset="utf-8">
	<meta name="description" content="Hitta företag som utför OVK i Göteborgstrakten och hela Västra Götalands län. Se översikt över ventilationskontroll och företags inriktning samt få kostnad och pris.">
    <meta name="keywords" content="OVK-besiktning, ventilationskontroll, besiktningsman, besiktning, fastighetsskötare, leverantör, pris, kostnad">
    
    <meta name="viewport" content="width=1100, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OVK-besiktning i Västra Götaland - pris och kostnader</title>
	<link rel="alternate" media="only screen and (max-width: 640px" href="http://m.besiktigaste.se/besiktning/besiktnings-foretag.php">
	<link rel="stylesheet" href="/assets/style/reset.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.3/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/style/main-screen-tight-form-skovde.css">
    <style>
      #map {
        height: 55%;
      }
    </style>
</head>
<body>
<div id="post"></div>

<main>


        <div class="rightContentMap text-left">
  			 <h1 class="h2">Regional OVK-besiktning - Västergötland</h1>

	<div id="map"></div>

	<?php

		 			$servername = "besiktigaste-se-content-157123.mysql.binero.se";
                    $username = "157123_xp30818";
                    $password = "Bes123cont";
                    $dbname = "157123-besiktigaste-se-content";
					$rating = "<i class='fa fa-star'></i>";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $sql = "SELECT company_name, city, service_specialitet, overallrating, latitud, longitud FROM Companies WHERE latitud !=  '' AND region =  'Västra Götaland'";
                    $result = $conn->query($sql);	
	?>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 58.18, lng: 12.68}
        });

        setMarkers(map);
		marker.addListener('click', function() {
          window.location.href = 'http://besiktigaste.se/ovk-besiktning/varberg/';
        });
      }


      function setMarkers(map) {


        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
		
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
		  var image = {
            url: beach[4],
            // This marker is 60 pixels wide by 60 pixels high.
            size: new google.maps.Size(60, 60),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is at (30, 30).
            anchor: new google.maps.Point(30, 30)
          };
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
			size: image[1],
            title: beach[0],
            zIndex: beach[3],
			url: beach[5]
          });
		  google.maps.event.addListener(marker, 'click', function() {
    	  	window.location.href = this.url;
		  });
        }
      }
	        var beaches = [     
			<?php 
				  if ($result->num_rows > 0) {
                        // output data of each row
						$ctr = 0;
						$z = 30;
                        while($row = $result->fetch_assoc()) {
							$ctr = $ctr + 1;
							$z = $z + 1; 
							if ($ctr < 16) {
    							$test = $row["overallrating"];
    						    if ($test < 20) {
    							  echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/1-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";
    							} elseif (20 > $test and $test > 9) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";
    							} elseif (30 > $test and $test > 19) {
    							    echo "[''" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/3-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";
    							} elseif (40 > $test and $test > 29) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/4-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";
    							} elseif (50 > $test and $test > 39) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/5-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";
    							} else {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";						
    							}
                                echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '/ovk-besiktning/vastra-gotaland/'],";	
							}
							else {
								 echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '/ovk-besiktning/vastra-gotaland/']];";	
                        		 break;
							}
						}
                    } else {
                        echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '/ovk-besiktning/vastra-gotaland/']];";	
                    }  				   
    
	
		 
	?>
    
    </script>
			 
		</div>

			 <h2 id="OVKTable" class="h2">OVK-certifierade i Västra Götaland</h2>
			 <div id="results-wrapper">
                  <table id="results" class="tableCertifieradeFtg">		
				      <tr class="headerCertifieradeFtg">
                          <th class="headerCertifieradeFtg">F&#246;retag</th>
                          <th class="headerCertifieradeFtg">Ort</th>
                          <th class="headerCertifieradeFtg">Specialitet</th>
                          <th class="headerCertifieradeFtg">Omdöme</th>
                      </tr>	
				<?php

                    
                    
					
				  if ($result->num_rows > 0) {
                        // output data of each row
						$ctr = 0;
                        while($row = $result->fetch_assoc()) {
							$ctr = $ctr + 1;
							if ($ctr < 16) {
    							$test = $row["overallrating"];
    						    if ($test < 20) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star-o'></i>";
    							} elseif (20 > $test and $test > 9) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (30 > $test and $test > 19) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (40 > $test and $test > 29) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";
    							} elseif (50 > $test and $test > 39) {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i>";
    							} else {
    							   $rating = "<span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";							
    							}
                                echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'>" . $row["company_name"]. "</td><td class='textCertifieradeFtg'>" . $row["city"]. "</td><td class='textCertifieradeFtg' width='200'>"  . $row["service_specialitet"].  "</td><td class='textCertifieradeFtg'>" . $rating. "</span></td></tr>";
							}
							else {
								 echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'>" . $row["company_name"]. "</td><td class='textCertifieradeFtg'>" . $row["city"]. "</td><td class='textCertifieradeFtg' width='200'>"  . $row["service_specialitet"].  "</td><td class='textCertifieradeFtg'>" . $rating. "</span></td></tr>";
                        		 break;
							}
						}
                    } else {
                        echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'>0 results</td><td></td><td></td><td></td>";
                    }
					                    
                    $conn->close();
                ?>
                  </table>
			 </div>
			
	

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Tu20mLrT31Q3C_tsWVv-T_1IBA3PrYQ&callback=initMap">
    </script>
	<br><br><br>
</main>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
<script src="/libs/md5.js"></script>
<script src="/libs/moment.js"></script>
<script src="/libs/moment-timezone.min.js"></script>
<script src="/libs/jquery.min.js"></script>
<script src="/libs/bootstrap.min.js"></script>
<script src="/assets/scripts/main-screen-tight-form.js"></script>



</body>
</html>