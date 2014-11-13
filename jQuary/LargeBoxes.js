var $items = $( '#rb-grid > li' ),
    transEndEventNames = {
        'WebkitTransition' : 'webkitTransitionEnd',
        'MozTransition' : 'transitionend',
        'OTransition' : 'oTransitionEnd',
        'msTransition' : 'MSTransitionEnd',
        'transition' : 'transitionend'
    },
 
    // transition end event name
    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
 
    // window and body elements
    $window = $( window ),
    $body = $( 'BODY' ),
 
    // transitions support
    supportTransitions = Modernizr.csstransitions,
 
    // current item's index
    current = -1,
 
    // window width and height
    winsize = getWindowSize();
	
	function init( options ) {      
    // apply fittext plugin
    $items.find( 'div.rb-week > div span' ).fitText( 0.3 ).end().find( 'span.rb-city' ).fitText( 0.5 );
    initEvents();
}

