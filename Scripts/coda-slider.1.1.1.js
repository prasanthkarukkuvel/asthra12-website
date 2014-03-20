jQuery(function(){
	jQuery("div.csw").prepend("<p class='loading'>Loading...<br /><img src='images/ajax-loader.gif' alt='loading...'/ ></p>");
});
var j = 0;
jQuery.fn.codaSlider = function(settings) {
	 settings = jQuery.extend({
     easeFunc: "easeOutExpo",
     easeTime: 700,
     toolTip: false
  }, settings);
	return this.each(function(){
		var container = jQuery(this);
		// Remove the preloader gif...
		container.find("p.loading").remove();
		// Self-explanatory...
		container.removeClass("csw").addClass("stripViewer");
		// Get the width of a panel, set from CSS...
		var panelWidth = container.find("div.panel").width();
		// panelCount gives us a count of the panels in the container...
		var panelCount = container.find("div.panel").size();
		// Calculate the width of all the panels when lined up end-to-end...
		var stripViewerWidth = panelWidth*panelCount;
		// Use the above width to specify the CSS width for the panelContainer element...
		container.find("div.panelContainer").css("width" , stripViewerWidth);
		// Set the navWidth as a multiple of panelCount to account for margin-right on each li
		var navWidth = panelCount*2;
		
		// Specify the current panel.
		// If the loaded URL has a hash (cross-linking), we're going to use that hash to give the slider a specific starting position...
		if (location.hash && parseInt(location.hash.slice(1)) <= panelCount) {
			var cPanel = parseInt(location.hash.slice(1));
			var cnt = - (panelWidth*(cPanel - 1));
			jQuery(this).find("div.panelContainer").css({ left: cnt });
		// Otherwise, we'll just set the current panel to 1...
		} else { 
			var cPanel = 1;
		};
		
		// Create appropriate nav
		container.each(function(i) {
			
			// Create the Left and Right arrows
			
			
			// Create the Tabs
			jQuery(this).before("<div class='stripNav' id='stripNav" + j + "'><ul><\/ul><\/div>");
			jQuery(this).find("div.panel").each(function(n) {
						jQuery("div#stripNav" + j + " ul").append("<li class='tab" + (n+1) + "'><a href='#" + (n+1) + "'>" + jQuery(this).attr("title") + "<\/a><\/li>");												
			});
			
			// Tab nav
			jQuery("div#stripNav" + j + " a").each(function(z) {
				// Figure out the navWidth by adding up the width of each li
				navWidth += jQuery(this).parent().width();
				// What happens when a nav link is clicked
				jQuery(this).bind("click", function() {
					jQuery(this).addClass("current").parent().parent().find("a").not(jQuery(this)).removeClass("current"); // wow!
					var cnt = - (panelWidth*z);
					cPanel = z + 1;
					jQuery(this).parent().parent().parent().next().find("div.panelContainer").animate({ left: cnt}, settings.easeTime, settings.easeFunc);
				});
			});
			
			// Left nav
			
			
			// Right nav
			
			
			// Same-page cross-linking
			jQuery("a.cross-link").click(function(){
				jQuery(this).parents().find(".stripNav ul li a:eq(" + (parseInt(jQuery(this).attr("href").slice(1)) - 1) + ")").trigger('click');
			});	
			
			// Set the width of the nav using the navWidth figure we calculated earlier. This is so the nav can be centred above the slider
			jQuery("div#stripNav" + j).css("width" , navWidth);
			
			// Specify which tab is initially set to "current". Depends on if the loaded URL had a hash or not (cross-linking).
			if (location.hash && parseInt(location.hash.slice(1)) <= panelCount) {
				jQuery("div#stripNav" + j + " a:eq(" + (location.hash.slice(1) - 1) + ")").addClass("current");
			} else {
				jQuery("div#stripNav" + j + " a:eq(0)").addClass("current");
			}
			
		});
		
		j++;
  });
};