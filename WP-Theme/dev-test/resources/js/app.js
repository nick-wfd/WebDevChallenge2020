/* ====== Spine Agency JS ====== */

/* ======
Spine Agency JS
- UI CONTROLLERS
- APP CONTROLLER
- INIT
====== */

/* ==========================================================================
$ UI CONTROLLERS
========================================================================== */

const UIControllers = (function() {
    
    const selectors = {
        win: $(window),
        didScroll: false,
        docElem: window.document.documentElement
    }
    
    return {
        selectors: selectors,
        getViewportH: function() {
            var client = selectors.docElem['clientHeight'],
            inner = window['innerHeight'];
            if ( client < inner ) {
                return inner;
            }
            else {
                return client;
            }
        },
        scrollY: function() {
            return window.pageYOffset || selectors.docElem.scrollTop;
        },
        getOffset: function(el) {
            var offsetTop = 0, offsetLeft = 0;
            if ( !isNaN( el.offset().top ) ) {
                offsetTop += el.offset().top ;
            }
            if ( !isNaN( el.offset().left ) ) {
                offsetLeft += el.offset().left;
            }
            return {
                top : offsetTop + 10,
                left : offsetLeft
            }
        },
        inViewport: function(el, h) {
            var elH = el.outerHeight(),
            scrolled = UIControllers.scrollY(),
            viewed = scrolled + UIControllers.getViewportH(),
            elTop = UIControllers.getOffset(el).top,
            elBottom = elTop + elH,

            h = h || 0;
            return (elTop + elH * h) <= viewed && (elBottom) >= scrolled;
        },
        scrollPage: function(){
            $('header, main > section, footer').each(function(){
                var section = $(this);
                if( UIControllers.inViewport(section) ){
                    section.addClass('section-in section-been');
                } else {
                    section.addClass('section-init');          
                    section.removeClass('section-in');
                }
            });
            selectors.didScroll = false;
        },
        scrollHandler: function() {
            if( !selectors.didScroll ) {
                selectors.didScroll = true;
                setTimeout( function() { UIControllers.scrollPage(); }, 100 );
            }
        },
        // END Scroll Classes
        loadMap: function() {
            mapboxgl.accessToken = 'pk.eyJ1IjoiYm9ybnJvZ3VlIiwiYSI6ImNrY2Y2dW41djBmNXIyem56bGVyaWk2dzYifQ.jvYPi4QqJKnxTPXuuN7feA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [12.550343, 55.665957],
                zoom: 9
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([12.550343, 55.665957])
                .addTo(map);
            map.scrollZoom.disable();
        }
    }
})();

/* ==========================================================================
$ APP CONTROLLER
========================================================================== */

const App = (function(UIControllers) {

    const selectors = {
        win: $(window)
    }
    
    return {
        init: function() {
            var resizeTimer;
            selectors.win.on('load scroll', function() {
                UIControllers.scrollHandler();
            })
            .on('load', function() {
                UIControllers.loadMap();
            });
        }
    }
})(UIControllers);

/* ==========================================================================
$ INIT
========================================================================== */

(function($) {
	App.init();
}());