<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>

	<script> 
	/*
	function getSelectionText() {
	    var text = "";
	    if (window.getSelection) {
	        text = window.getSelection().toString();
	    } else if (document.selection && document.selection.type != "Control") { // for Internet Explorer 8 and below
	        text = document.selection.createRange().text;
	    }
	    return text;
	}

	jQuery(document).ready(function (){ // when the document has completed loading
	   jQuery(document).mouseup(function (e){ // attach the mouseup event for the document
	    responsiveVoice.cancel(); // stop anything currently being spoken
	    responsiveVoice.speak(getSelectionText()); //speak the text as returned by getSelectionText
	   })
	});
	*/
	</script>


	<script type="text/javascript">
			jQuery(document).keyup(function(e) {
			     if (e.keyCode == 27) { // escape key maps to keycode `27`
			        responsiveVoice.cancel();
			    }
			});		
		jQuery(function() {
		    jQuery('input[type="text"], input[type="password"], input[type="email"], textarea').css({appearance: 'none'});
		    jQuery('input[type="checkbox"], input[type="radio"], select').css({appearance: 'none'});
		    jQuery('input[type="submit"], input[type="reset"], input[type="button"], button').css({appearance: 'none'});
		    //jQuery('.select-wrapper:before').css({pointer-events: 'none'});

			
			/*			
			jQuery('a').mouseenter(function() { // Attach this function to all mouseenter events for 'a' tags 
		      responsiveVoice.cancel(); // Cancel anything else that may currently be speaking
		      responsiveVoice.speak(jQuery(this).text(), 'Google UK English Female', {rate: 0.4}); // Speak the text contents of all nodes within the current 'a' tag
		    });
			*/


		    jQuery('a').keyup(function(e) {
		        console.log('keyup called');
		        var code = e.keyCode || e.which;
		        if (code == '9') {
		         responsiveVoice.cancel();
		         responsiveVoice.speak(jQuery(':focus').text());
		        }
		     });
		    jQuery('button').keyup(function(e) {
		        console.log('keyup called');
		        var code = e.keyCode || e.which;
		        if (code == '9') {
		         responsiveVoice.cancel();
		         setTimeout(responsiveVoice.speak(jQuery(':focus').text()+' button'),1000);
		        }
		     });
		    jQuery('textarea').keyup(function(e) {
		        console.log('keyup called');
		        var code = e.keyCode || e.which;
		        if (code == '9') {
		         responsiveVoice.cancel();
		         responsiveVoice.speak('Text Input '+jQuery(':focus').attr('placeholder'));
		        }
		     });
		    
		});
	</script>

