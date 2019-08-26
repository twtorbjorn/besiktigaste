

	  	<div class="tab-content">
                	<div role="tabpanel" class="tab-pane tab-pane-nytr active" id="newBoiler" data-serviceId="energideklaration">
						 <input type="hidden" name="formURL" id="formURL" value="<?php echo dirname($_SERVER["PHP_SELF"])?>"> 
						 <input type="hidden" name="formURL2" id="formURL2" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
                        	<span class="boxText">Offertförfrågan</span>
							<label class="boxText inputLabel">Kontaktperson</label> 
                          	<input type="text" placeholder="" name="userName" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Epostadress</label>
                          	<input type="text" placeholder="" name="userEmail" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Mobiltelefon</label> 
                          	<input type="text" placeholder="" name="userPhone" class="boxArea inputField orange"> 
                          	<label class="boxText inputLabel">Meddelande</label> 
                          	<textarea placeholder="(fastighetsägare, byggnadens adress, ort)" name="additionalInfo" class="boxArea inputField orange"></textarea> 
                          	<button class="boxButton resultButton"> 
                          	<img src="/assets/images/click.png" class="boxButtonImage">Kontakta mig</button>
                           
 					</div>
              </div>

