
<?php
session_start();

if (!isset( $_SESSION["origURL"]) ){
   $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
   //echo "session ref is " . $_SESSION["origURL"] . ".<br>";
   if (empty ($_SESSION["origURL"])) {
	   $_SESSION["origURL"] = 'noRef';
	   //echo "session ref is written as " . $_SESSION["origURL"] . ".<br>";
	}
} 

?>

	  	<div class="tab-content">
                	<div role="tabpanel" class="tab-pane tab-pane-nytr active" id="newBoiler" data-serviceId="ovk">
						 <span class="boxText">Offertförfrågan</span>
						 <input type="hidden" name="formURL" id="formURL" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
						 <input type="hidden" name="formURL2" id="formURL2" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
						 <input type="hidden" name="formRf" id="formRf" value="<?php echo $_SESSION["origURL"]?>"> 
                        	<label class="boxText inputLabel">Namn</label>
							<label class="boxText inputLabel"></label> 
                          	<input type="text" placeholder="" name="userName" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Epostadress</label>
                          	<input type="text" placeholder="" name="userEmail" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Mobiltelefon</label> 
                          	<input type="text" placeholder="" name="userPhone" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Meddelande</label> 
                          	<textarea placeholder="(fastighetens ägare, adress och ort, ev antal lägenheter och lägenhetstyp)" name="additionalInfo" class="boxArea inputField orange"></textarea> 
                          	<button class="boxButton resultButton"> 
                          	<img src="/assets/images/click.png" class="boxButtonImage">Kontakta mig</button>
                           
 					</div>
              </div>

