				$('.mainmenu').on({

					mouseenter: function(){
					$('.arrow').fadeOut(0);
					$('.arrow2').fadeOut(0);
					},

					mouseleave: function(){
					$('.arrow').fadeIn(100);
					$('.arrow2').fadeIn(100);
					}
				});