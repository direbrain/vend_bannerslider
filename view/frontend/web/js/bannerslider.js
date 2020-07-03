define([
    "jquery",
    "jquery/ui",
    "owlcarousel",
    "domReady!"
], function($) {
    "use strict";
    $.widget('banner.slider', {
        options: {
            items : 1,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,3],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : true,
        
            //Basic Speeds
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,
        
            //Autoplay
            autoPlay : false,
            stopOnHover : false,
        
            // Navigation
            nav: true,
            navText: [
                '<span aria-label="' + 'Previous' + '">&#x2039;</span>',
                '<span aria-label="' + 'Next' + '">&#x203a;</span>'
            ],
            navSpeed: false,
            navElement: 'button type="button" role="presentation"',
            navContainer: false,
            navContainerClass: 'owl-nav',
            navClass: [
                'owl-prev',
                'owl-next'
            ],
            slideBy: 1,
            dots: false,
        
            //Pagination
            pagination : false,
            paginationNumbers: false,
        
            // Responsive 
            responsive: {},
            responsiveRefreshRate : 200,
            responsiveBaseWidth: window,
        
            // CSS Styles
            baseClass : "owl-carousel",
            theme : "owl-theme",
        
            //Lazy load
            lazyLoad : false,
            lazyFollow : true,
        
            //JSON 
            jsonPath : false, 
            jsonSuccess : false,
        
            //Mouse Events
            mouseDrag : true,
            touchDrag : true,
        
            //Transitions
            transitionStyle : false,
        
            // Other
            addClassActive : false,
        
            //Callbacks
            beforeInit: false, 
            afterInit: false, 
            beforeMove: false, 
            afterMove: false,
            afterAction: false,
            startDragging : false
        },
        _create: function() {
            var carousel = this.element.owlCarousel(this.options);
        }
    });
    return $.banner.slider;
});