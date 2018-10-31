<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>

<script type="text/javascript">
    window.sr = ScrollReveal({reset:true});
    sr.reveal('section', { duration: 2000 });
   // sr.reveal(div,{ duration: 2000 });
</script>
<script type="text/javascript">
var tl = new TimelineMax({repeat:-1, repeatDelay:0.1});

tl.fromTo(["#artist1", "#avatar1"], 1, {opacity:0, x:"100%"}, {opacity:1, x:"-50%"})
  .fromTo("#heading1", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
  .fromTo("#description1", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
  .to("#artist1", 0.5, {opacity:0}, "+=3")

.fromTo(["#artist2", "#avatar2"], 1, {opacity:0, x:"100%"}, {opacity:1, x:"-50%"})
  .fromTo("#heading2", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
  .fromTo("#description2", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
  .to("#artist2", 0.5, {opacity:0}, "+=3")

 .fromTo(["#artist3", "#avatar3"], 1, {opacity:0, x:"100%"}, {opacity:1, x:"-50%"})
   .fromTo("#heading3", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
  .fromTo("#description3", 0.5, {opacity:0, x:10}, {opacity:1, x:0})
   .to("#artist3", 0.5, {opacity:0}, "+=3")


</script>
<script type="text/javascript">
    var tl = new TimelineMax();
tl.fromTo(["#connect1", "#connectul"], 1, {opacity:0, y:"-100%"}, {opacity:1, y:"-50%"})
  .fromTo("#connecta1", 0.5, {opacity:0, y:-100}, {opacity:1, y:0})
  .fromTo("#connecta2", 0.5, {opacity:0, y:-100}, {opacity:1, y:0})
  .fromTo("#connecta3", 0.5, {opacity:0, y:-100}, {opacity:1, y:0})
  .fromTo("#connecta4", 0.5, {opacity:0, y:-100}, {opacity:1, y:0})
  .fromTo("#connecta5", 0.5, {opacity:0, y:-100}, {opacity:1, y:0})
</script>
</html>
