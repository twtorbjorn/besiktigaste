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
<div id="page-wrapper" class="page-wrapper md-col-4">
    <h2 class="boxText">Kontaktformulär</h2>
    
    <div id="form-messages"></div>
    
    <form id="ajax-contact" method="post" action="/assets/scripts/ajax-contact-mailer.php">

 		 <input type="hidden" name="serviceId" id="serviceId" value="kontakt">
 		 <input type="hidden" name="formURL" id="formURL" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
		 <input type="hidden" name="formURL2" id="formURL2" value="<?php print dirname($_SERVER["PHP_SELF"])?>"> 
		 <input type="hidden" name="formRf" id="formRf" value="<?php echo $_SESSION["origURL"]?>"> 
 
        <div class="field">
            <label for="name" class="boxText inputLabel">Namn:</label>
            <input type="text" id="name" name="name" required value="">
        </div>
    
        <div class="field">
            <label for="email" class="boxText inputLabel">Epostadress:</label>
            <input type="email" id="email" name="email" required value="">
        </div>
        
        <div class="field">
            <label for="mobiltelefon" class="boxText inputLabel">Mobiltelefon:</label>
            <input type="mobiltelefon" id="mobiltelefon" name="mobiltelefon" required value="">
        </div>
    
        <div class="field">
            <label for="message" class="boxText inputLabel">Meddelande:</label>
            <textarea id="message" name="message" placeholder="(fastighetens ägare, adress och ort, ev antal lägenheter och lägenhetstyp)" ></textarea>
        </div>
    
        <div class="field">
            <button type="submit" class="boxTextslim">Skicka</button>
        </div>
    </form>
</div>


