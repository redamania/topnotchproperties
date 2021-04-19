



// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

    	document.getElementById("navbarkiko").style.padding = "10px 20px";
    	document.getElementById("navbarkiko").style.background = "#1B527C";
    	document.getElementById("navbarkiko").style.marginTop = "0";

 	} else {
 		
    	// document.getElementById("navbarkiko").style.padding = "80px 10px";
    	document.getElementById("navbarkiko").style.background = "transparent";
    	document.getElementById("navbarkiko").style.marginTop = "5vh";
    	
  	}
}
