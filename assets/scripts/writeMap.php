<?php

				  if ($result->num_rows > 0) {
                        // output data of each row
						$ctr = 0;
						$z = 30000;
                        while($row = $result->fetch_assoc()) {
							$ctr = $ctr + 1;
							$z = $z - 1; 
							if ($ctr < 35) {
    							$test = $row["overallrating"];
    						    if ($test < 20) {
    							  echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/1-stars-icon.png', '" . $row["internal_url"]. "'],\n";
    							} elseif (20 > $test and $test > 9) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '" . $row["internal_url"]. "'],\n";
    							} elseif (30 > $test and $test > 19) {
    							    echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/3-stars-icon.png', '" . $row["internal_url"]. "'],\n";
    							} elseif (40 > $test and $test > 29) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/4-stars-icon.png', '" . $row["internal_url"]. "'],\n";
    							} elseif (55 > $test and $test > 39) {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/5-stars-icon.png', '" . $row["internal_url"]. "'],\n";
    							} else {
    							   echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '" . $row["internal_url"]. "'],\n";						
    							}
							}
							else {
								  echo "['" . $row["company_name"]."', " . $row["latitud"].", " . $row["longitud"].", $z, '/assets/images/2-stars-icon.png', '" . $row["internal_url"]. "'],\n";
                        		 break;
							}
						}
						echo "['',,,, '', '']];\n";
                    } else {
                        echo "['',,,, '', '']];\n";	
                    } 
?>