/*
|--------------------------------------------------------------------------
| UItoTop jQuery Plugin 1.1
| http://www.mattvarone.com/web-design/uitotop-jquery-plugin/
|--------------------------------------------------------------------------
*/
var tz = jQuery.noConflict();
(function(tz){
	tz.fn.UItoTop = function(options) {

 		var defaults = {
			text: 'To Top',
			min: 200,
			inDelay:600,
			outDelay:500,
            containerID: 'toTop',
			containerHoverID: 'toTopHover',
			scrollSpeed: 1200,
			easingType: 'linear'
 		};

 		var settings = tz.extend(defaults, options);
		var containerIDhash = '#' + settings.containerID;
		var containerHoverIDHash = '#'+settings.containerHoverID;

        var SidebarWidth = jQuery('#sidebar-left').width();
        var HeaderHeight = jQuery('.tz-header').height();

		tz('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');
		tz(containerIDhash).hide().click(function(){

			tz('html, body').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
			tz('#'+settings.containerHoverID, this).stop().animate({'opacity': 0 }, settings.inDelay, settings.easingType);

			return false;
		})
		.prepend('<span id="'+settings.containerHoverID+'"></span>')
		.hover(function() {
				tz(containerHoverIDHash, this).stop().animate({
					'opacity': 1
				}, 600, 'linear');
			}, function() { 
				tz(containerHoverIDHash, this).stop().animate({
					'opacity': 0
				}, 700, 'linear');
			});
					
		tz(window).scroll(function() {
			var sd = tz(window).scrollTop();


            var windowHeight = tz(window).height();

            if(sd > windowHeight/2){
                var contentHeight = jQuery('#tz-content').height();
                var sidebarHeight = jQuery('#sidebar-left').height();
                var BooleanHeight = contentHeight - sidebarHeight;
                var sidebarHScroll = sidebarHeight - HeaderHeight - windowHeight;

                if(BooleanHeight >0){

                    if(sd>sidebarHScroll ){
                        jQuery('#sidebar-left').css({
                            position:'fixed',
                            bottom:0,
                            left:0,
                            'margin':'3px 0 0 0',
                            'width':SidebarWidth + 'px'
                        });
                    }
                    if(sd < sidebarHScroll ){
                        jQuery('#sidebar-left').css({
                            position:'relative',
                            bottom:'auto',
                            left:'auto',
                            'margin-left':'-99.9468%',
                            'width':SidebarWidth + 'px'
                        });
                    }

                }


            }

			if(typeof document.body.style.maxHeight === "undefined") {
				tz(containerIDhash).css({
					'position': 'absolute',
					'top': tz(window).scrollTop() + tz(window).height() - 50
				});
			}
			if ( sd > settings.min ) 
				tz(containerIDhash).fadeIn(settings.inDelay);
			else 
				tz(containerIDhash).fadeOut(settings.Outdelay);
		});


};
})(jQuery);