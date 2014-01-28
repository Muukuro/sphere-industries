/*
	jQuery zAccordion Plugin
	Copyright 2010 - 2011 - Nate Armagost - http://www.armagost.com
	Version 1.0.1
	Licensed under the MIT and GPL licenses
*/
(function($){
	$.fn.extend({ 
		zAccordion: function(options) {
			/* Default Options */
			var defaults = {
				timeout: 6000, /* Time between each slide (in ms) */
				width: 960, /* Width of the container (in px) */
				height: 340, /* Height of the container (in px) */
				slideWidth: 660, /* Width of each slide (in px) */
				slideHeight: 340, /* Height of each slide (in px) */
				tabWidth: 100, /* Width of each slide's "tab" (when clicked it opens the slide) */
				startingSlide: 0, /* Zero-based index of which slide should be displayed */
				slideClass: "slide", /* Class of each slide */
				slideOpenClass: "slide-open", /* Class of open slides */
				slideClosedClass: "slide-closed", /* Class of closed slides */
				easing: null, /* Easing method */
				speed: 1200, /* Speed of the slide transition (in ms) */
				open: null, /* Callback function for opening slide */
				close: null, /* Callback function for closing slides */
				auto: true, /* Whether or not the slideshow should play automatically */
				trigger: "click", /* Event type that will bind to the "tab" (click, mouseover, etc.) */
				pause: true, /* Pause on hover */
				click: null /* Function called on click */
			};
			/* Measuring the height */
			if ((options.height == undefined) && (options.slideHeight == undefined)) {
				options.height = defaults.height;
				options.slideHeight = defaults.slideHeight;
			}
			else if ((options.height != undefined) && (options.slideHeight == undefined)) {
				options.slideHeight = options.height;
			}
			else if ((options.height == undefined) && (options.slideHeight != undefined)) {
				options.height = options.slideHeight;
			}
			/* Measure the width - this gets a bit tricky */
			/* Nothing is defined */
			if ((options.width == undefined) && (options.slideWidth == undefined) && (options.tabWidth == undefined)) {
				options.width = defaults.width;
				options.tabWidth = defaults.tabWidth;
				options.slideWidth = defaults.slideWidth;
			}
			/* One of three is defined */
			else if ((options.width != undefined) && (options.slideWidth == undefined) && (options.tabWidth == undefined)) {
				options.tabWidth = 100;
				options.slideWidth = options.width - ((this.children().size() - 1) * options.tabWidth);
			}
			else if ((options.width == undefined) && (options.slideWidth != undefined) && (options.tabWidth == undefined)) {
				options.width = defaults.width;
				options.tabWidth = (defaults.width - options.slideWidth) / (this.children().size() - 1);
			}
			else if ((options.width == undefined) && (options.slideWidth == undefined) && (options.tabWidth != undefined)) {
				options.width = defaults.width;
				options.slideWidth  = options.width - ((this.children().size() - 1) * options.tabWidth);
			}
			/* Two of three are defined */
			else if ((options.width != undefined) && (options.slideWidth != undefined) && (options.tabWidth == undefined)) {
				options.tabWidth = (options.width - options.slideWidth) / (this.children().size() - 1);
			}
			else if ((options.width != undefined) && (options.slideWidth == undefined) && (options.tabWidth != undefined)) {
				options.slideWidth = options.width - ((this.children().size() - 1) * options.tabWidth);
			}
			else if ((options.width == undefined) && (options.slideWidth != undefined) && (options.tabWidth != undefined)) {
				options.width = ((this.children().size() - 1) * options.tabWidth) + options.slideWidth;
			}
			defaults.animate = options.slideWidth - options.tabWidth; /* Number of pixels yet do be displayed on a hidden slide */
			var interval = null;
			defaults.stop = false;
			defaults.inside = false; /* Determines whether or not the mouse is inside the container.  Container should pause on hover if needed. */
			defaults.current = defaults.startingSlide;
			var options = $.extend(defaults, options);
			this.click = function(num) {
				clearTimeout(interval);
				num++;
				if ((num > $(this).children().size()) || (num < 1)) {
					num = 1;
				}
				$(this).children($(this).children().get(0).tagName + ":nth-child(" + num + ")").trigger(defaults.trigger);
			};
			this.stop = function() { /* This will stop the accordion unless the slides are clicked, however, it will not resume the autoplay */
				clearTimeout(interval);
				defaults.stop = true;
			};
			this.start = function() { /* This will start the accordion back up if it has been stopped */
				clearTimeout(interval);
				defaults.stop = false;
				var s = $(this).children().get(0).tagName + "." + defaults.slideOpenClass;
				this.click($(this).children(s).index() + 1);
			};
			return this.each(function() {
				var o = options;
				var obj = $(this);
				var x; /* Used to set up each slide's position */
				/* Count the number of slides */
				var originals = [];
				/* Loop through each of the slides */
				obj.children().each(function(index) {
					var z; /* Used to set the z-index of a slide */
					x = index * o.tabWidth; /* Used for the position of each slide */
					originals[index] = x;
					z = index * 10; /* Increase each slide's z-index by 10 so they sit on top of each other */
					$(this).addClass(o.slideClass); /* Add the slide class to each of the slides */
					$(this).css({
						"left": x + "px",
						"top": 0,
						"z-index": z,
						"margin": 0,
						"padding": 0,
						"display": "block",
						"position": "absolute",
						"overflow": "hidden",
						"width": o.slideWidth + "px",
						"height": o.slideHeight + "px",
						"float": "left"
					});
					if (index == (o.startingSlide)) {
						$(this).addClass(o.slideOpenClass).css("cursor", "default");
					}
					else {
						$(this).addClass(o.slideClosedClass).css("cursor", "pointer");
						if (index > (o.startingSlide)) {
							var y = index + 1;
							obj.children(obj.children().get(0).tagName + ":nth-child(" + y + ")").css({
								left: originals[y-1] + o.animate + "px"
							});
						}
					}
				});
				/* Modify the CSS of the main container */
				obj.css({
					"display": "block",
					"list-style": "none",
					"height": o.height + "px",
					"overflow": "hidden",
					"width": o.width + "px",
					"padding": 0,
					"position": "relative",
					"overflow": "hidden"
				});
				/* If the container is a list, get rid of any bullets */
				if ((obj.get(0).tagName == "UL") || (obj.get(0).tagName == "OL")) {
					obj.css({
						"list-style": "none"
					});
				}
				obj.hover(function () {
					o.inside = true;
					/*try{
						clearTimeout(interval);
					} catch(e){} */
				},
				/* Restart the accordion when user moves mouse out of the slides */
				function () {
					o.inside = false;
					try{
						clearTimeout(interval);
					} catch(e){}
					if (o.auto && !o.stop) {
						interval = setTimeout(function(){
							o.current = obj.children(obj.children().get(0).tagName + "." + o.slideOpenClass).index() + 1;
							var next = o.current + 1;
							if (next > originals.length) {
								next = 1;
							}
							obj.children(obj.children().get(0).tagName + ":nth-child(" + next + ")").trigger(o.trigger);
						}, o.timeout );
					}
				});
				/* Set up the listener to change slides when clicked */
				obj.children(obj.children().get(0).tagName + "." + o.slideClass).bind(o.trigger, function() {
					/* Don't do anything if the slide is already open */
					if ($(this).hasClass(o.slideOpenClass)) {
						//return false;
						/* Not going to return false... any links within the element should now be clickable */
					}
					/* If the slide is not open... */
					else {
						try{
							clearTimeout(interval);
						} catch(e){}
						if (!o.inside && !o.stop) {
							interval = setTimeout(function(){
								o.current = obj.children(obj.children().get(0).tagName + "." + o.slideOpenClass).index() + 1;
								var next = o.current + 1;
								if (next > originals.length) {
									next = 1;
								}
								obj.children(obj.children().get(0).tagName + ":nth-child(" + next + ")").trigger(o.trigger);
							}, o.timeout );
						}
						obj.children(obj.children().get(0).tagName + "." + o.slideClass).addClass(o.slideClosedClass).removeClass(o.slideOpenClass).css("cursor", "pointer"); /* Remove the open class from all the slide tabs */
						$(this).addClass(o.slideOpenClass).removeClass(o.slideClosedClass).css("cursor", "default"); /* Add the open class to the slide tab that was just clicked */
						var index = $(this).index() + 1; /* The index refers to the actual slide number that was clicked (no zeros) */
						if (o.click != null) {
							o.click();
						}
						obj.children(obj.children().get(0).tagName + ":nth-child(" + index + ")").animate(
							{ left: originals[index-1] + "px" }, o.speed, o.easing, o.open);
						/* Closing other slides */
						for (var i = 1;i <= originals.length;i++) {
							if (i < index) {
								obj.children(obj.children().get(0).tagName + ":nth-child(" + i + ")").animate(
									{ left: originals[i-1] + "px" }, o.speed, o.easing, o.close);
							}
							if (i > index) {
								obj.children(obj.children().get(0).tagName + ":nth-child(" + i + ")").animate(
								{ left: originals[i-1] + o.animate + "px" }, o.speed, o.easing, o.close);
							}
						}
						return false; /* This is important. If a visible link is clicked within the slide, it will open the slide instead of redirecting the link */
					}
				});
				/* Set up the original timer */
				if (o.auto && !o.stop) {
					interval = setTimeout(function(){
						o.current = obj.children(obj.children().get(0).tagName + "." + o.slideOpenClass).index() + 1;
						var next = o.current + 1;
						if (next > originals.length) {
							next = 1;
						}
						obj.children(obj.children().get(0).tagName + ":nth-child(" + next + ")").trigger(o.trigger);
					}, o.timeout );
				}
			});
		}
	});
})(jQuery);