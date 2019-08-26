<?php
					
				  if ($result->num_rows > 0) {
                        // output data of each row						
						$ctr = 0;
                        while($row = $result->fetch_assoc()) {
							$ctr = $ctr + 1;
							if ($ctr < 16) {
    							$test = $row["overallrating"];
    						    if ($test < 10) {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star-o'></i></a>";
    							} elseif (20 > $test and $test > 9) {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>";
    							} elseif (30 > $test and $test > 19) {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>";
    							} elseif (40 > $test and $test > 29) {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>";
    							} elseif (50 > $test and $test > 39) {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i></a>";
    							} else {
    							   $rating = "<a href='" . $row["internal_url"]. "'><span style='color: orange;'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></a>";							
    							}
                                echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'><a href='" . $row["internal_url"]. "'>" . $row["company_name"]. "</a></td><td class='textCertifieradeFtg'>" . $row["city"]. "</td><td class='textCertifieradeFtg' width='200'>"  . $row["service_specialitet"].  "</td><td class='textCertifieradeFtg'><a href='" . $row["internal_url"]. "'>" . $rating. "</a></span></td></tr>";
							}
							else {
								 break;
							}
						
                        }
                    } else {
                        echo "<tr class='textCertifieradeFtg'><td class='textCertifieradeFtg'>0 results</td><td></td><td></td><td></td></tr>";
                    }
?>