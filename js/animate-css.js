//Animate CSS + WayPoints javaScript Plugin
//Example: $(".element").animated("zoomInUp", "zoomOutDown");
(function($) {
		$.fn.animated = function(inEffect, outEffect) {
				$(this).addClass("animated").waypoint(function(dir) {
						if (dir === "down") {
								$(this).removeClass(outEffect).addClass(inEffect);
						} else {
								$(this).removeClass(inEffect).addClass(outEffect);
						};
				}, {
						offset: "80%"
				}).waypoint(function(dir) {
						if (dir === "down") {
								$(this).removeClass(inEffect).addClass(outEffect);
						} else {
								$(this).removeClass(outEffect).addClass(inEffect);
						};
				}, {
						offset: "20%"
				});
		};
})(jQuery);