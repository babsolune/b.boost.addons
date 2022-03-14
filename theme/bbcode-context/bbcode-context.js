jQuery('textarea').each(function(){
	var x,
		y,
		longpress = 300,
		start,
		$this = jQuery(this),
		parent = $this.parent(),
		tools = $this.closest('.form-element-textarea').find('.bbcode-bar');

	// click date detection
	$this.on("mousedown", function(e) {
        start = new Date().getTime();
	});

	// reset date when leave textarea
	$this.on( 'mouseleave', function(e) {
        start = 0;
    } );

    $this.on('mouseup', function(e) {
        // Cursor coords
		x = e.clientX;
		y = e.clientY;

        // reveal or not the list of bbcode icons when release the LEFT mouse button depending on pressing time
    	// - if it's a long press & some text is highlighted, bbcode list is shown
    	// - if it's a short press, bbcode list is hidden
        if (new Date().getTime() >= (start + longpress)) // long press
		{
            if (window.matchMedia("(min-width: 769px)").matches)
    			$this.select(function(){
    		    	tools.css({'left': (x - 150) + 'px', 'top': (y + 20) + 'px'}).addClass('bbcode-active');
    			});
        }
		else // short press
		{
			tools.removeClass('bbcode-active');
        }
    } );

	// reveal or not the list of bbcode icons when release the RIGHT mouse button depending on pressing time
	// - if it's a long press, default browser contextmenu is shown
	// - if it's a short press, bbcode list is hidden
	$this.on("contextmenu", function(e) {
		if (new Date().getTime() >= (start + longpress))
		{ // long press
            if (window.matchMedia("(min-width: 769px)").matches)
                tools.css({'left': (x - 150) + 'px', 'top': (y + 20) + 'px'}).addClass('bbcode-active');
			return false;
        }
		else
		{ //short press
			tools.removeClass('bbcode-active');
		}
	});

	// hide bbcode list when press action
	tools.find('[class*="hide-modal"], [onclick*="insertbbcode"]').each(function(){
		jQuery(this).on('click', function(){
            if (new Date().getTime() >= (start + longpress))
    			$this.select(function(){
                    tools.removeClass('bbcode-active');
                });
            else
                tools.removeClass('bbcode-active');
		})
	})
});
