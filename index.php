<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Portrait Boutique Gallery" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Portrait Boutique Gallery</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php" class="standard-logo" data-dark-logo="images/logo-sketch.png"><img src="images/logo-sketch.png" alt=""></a>
                    <a href="index.php" class="retina-logo" data-dark-logo="images/logo-sketch.png"><img src="images/logo-sketch.png" alt=""></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="dark">

                    <ul>
                        <li class="current"><a href="index.php"><div>Home</div></a>

                        </li>
                        <li><a href="portfolio-portrait-gallery.php"><div>Portrait Gallery</div></a>
                        </li>
                        <li><a href="bohemian-boutique.php"><div>Bohemian Boutique</div></a>
                        </li>
                        <li><a href="interior-architecture.php"><div>Interior Architecture</div></a>
                        </li>
                        <li><a href="about.php"><div>About</div></a>
                        </li>
                        <li><a href="Contact.php"><div>Contact</div></a>
                        </li>


                    </ul>


                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/mediteraneo.jpg');"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/11.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/3rd.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/abstract2.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/1.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/2.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/3.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/4.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/12.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/5.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/6.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/7.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/8.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/9.jpg'); background-position: center top;"></div>
            <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/complete/10.jpg'); background-position: center top;"></div>
        </div>
        <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

    <script>
        jQuery(document).ready(function($){
            var swiperSlider = new Swiper('.swiper-parent',{
                paginationClickable: false,
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
//                autoplay:5000,
                onSwiperCreated: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeStart: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeEnd: function(swiper){
                    $('#slider').find('.swiper-slide').each(function(){
                        if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                        if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                    });
                    $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                        if($(this).find('video').length > 0) {
                            if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                        }
                        if($(this).find('.yt-bg-player').length > 0) {
                            $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                        }
                    });
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                    $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                }
            });

            $('#slider-arrow-left').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipePrev();
            });

            $('#slider-arrow-right').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipeNext();
            });
        });
    </script>
    <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down fadeInDown"></i></a>

</section>

<!-- Content
============================================= -->
<section id="content">

<div class="content-wrap">

<div class="container clearfix">
    <div class="row clearfix">

        <div class="col-lg-5">
            <div class="heading-block" style="margin-bottom: 20px">
                <h1>Welcome to PORTRAIT  boutique / gallery</h1>
            </div>
            <p class="lead" style="line-height: 1.2">Inspired from the trend of concept store the PORTRAIT Boutique Gallery
                refers to specificity of the visual representation of human features through the particular medium
                of oil on canvas. Considering the works of art an elitist wares, the boutique produces unique pieces
                of art for the niche of portrait's amateurs, by revisiting the past in a fresh way through techniques
                of the old masters to the contemporary hyperrealist approach. </p>
        </div>

        <div class="col-lg-7">

            <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                <img src="images/GALLERY_1_Individual_portraits/detail_Corina'ssampleforIdentityCard,oiloncanvas,140X80.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Corina">
            </div>

        </div>

    </div>
</div>



<div class="section topmargin nobottommargin nobottomborder">
    <div class="container clearfix">
        <div class="heading-block center nomargin">
            <h3>Our Latest Works</h3>
        </div>
    </div>
</div>

<div id="portfolio" class="portfolio-grid portfolio-full portfolio-notitle clearfix">

<article class="portfolio-item pf-media pf-icons">
    <div class="portfolio-image">
        <a href="/portfolio/individual/sorina.html">
            <img src="images/GALLERY_1_Individual_portraits/home/home_0003_Background.jpg" alt="Sorina Oil on canvas">
        </a>
        <div class="portfolio-overlay">
            <a href="images/GALLERY_1_Individual_portraits/home/home_0003_Background.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
            <a href="/portfolio/individual/sorina.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
    </div>
    <div class="portfolio-desc">
        <h3><a href="/portfolio/individual/sorina.html">Sorina</a></h3>
        <span><a href="#">Oil on canvas</a></span>
    </div>
</article>


    <article class="portfolio-item pf-media">
        <div class="portfolio-image">
            <a href="/portfolio/individual/Ella-and-the-red-picture.php">
                <img src="images/GALLERY_1_Individual_portraits/home/home_0002_Ellaandtheredpicture,oiloncanvas,2012,140X80cm.jpg" alt="  Ella And The red picture  ">
            </a>
            <div class="portfolio-overlay">
                <a href="images/GALLERY_1_Individual_portraits/home/home_0002_Ellaandtheredpicture,oiloncanvas,2012,140X80cm.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                <a href="/portfolio/individual/Ella-and-the-red-picture.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="/portfolio/individual/Ella-and-the-red-picture.php">    Ella and the red picture   </a></h3>
            <span><a href="#">Oil On Canvas</a></span>
        </div>
    </article>

    <article class="portfolio-item pf-abstract">
        <div class="portfolio-image">
            <a href="portfolio/abstract/Triton.php">
                <img src="images/GALLERY_1_Individual_portraits/home/home_0000_1_NETT_triton_80X120.jpg" alt="Triton">
            </a>
            <div class="portfolio-overlay">
                <a href="images/GALLERY_1_Individual_portraits/home/home_0000_1_NETT_triton_80X120.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                <a href="portfolio/abstract/Triton.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio/abstract/Triton.php">Triton</a></h3>
            <span><a href="#">Oil On Canvas</a></span>
        </div>
    </article>

    <article class="portfolio-item pf-individual">
        <div class="portfolio-image">
            <a href="portfolio/individual/">
                <img src="images/GALLERY_1_Individual_portraits/home/home_0001_zSavantulNicolaePAULESCU(1869-1931),oiloncanvas,70x100cm.jpg" alt="Nicolae Paulescu">
            </a>
            <div class="portfolio-overlay">
                <a href="images/GALLERY_1_Individual_portraits/home/home_0001_zSavantulNicolaePAULESCU(1869-1931),oiloncanvas,70x100cm.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                <a href="portfolio/individual/Nicolae-Paulescu.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
            </div>
        </div>
        <div class="portfolio-desc">
            <h3><a href="portfolio/individual/">Nicolae Paulescu</a></h3>
            <span><a href="#">Oil On Canvas</a></span>
        </div>
    </article>


</div><!-- #portfolio end -->

<script type="text/javascript">

    jQuery(window).load(function(){

        var $container = $('#portfolio');

        $container.isotope({
            transitionDuration: '0.65s',
            masonry: {
                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
            }
        });

        $('#page-menu a').click(function(){
            $('#page-menu li').removeClass('current');
            $(this).parent('li').addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
            return false;
        });

        $(window).resize(function() {
            $container.isotope('layout');
        });

    });

</script>

<div class="clear"></div>

<a href="portfolio-portrait-gallery.php" class="button button-full button-dark homepage-cta center tright bottommargin-lg ">
    <div class="container clearfix">
        <strong class="no-border">See more pictures in Portrait Gallery </strong><i class="icon-caret-right" style="top:4px;"></i>
    </div>
</a>

<div class="container clearfix">

    <div class="col_one_third bottommargin-sm center">
        <img data-animate="fadeInLeft" src="images/GALLERY_1_Individual_portraits/Maraat2,100X50cm,oiloncanvas,2014.jpg" class="img-rounded" alt="Mara">
    </div>

    <div class="col_two_third bottommargin-sm col_last">

        <div class="heading-block topmargin-sm">
            <h3>The Portrait in the 21st century</h3>
        </div>

        <p>The confusion created by some changes which have occurred in the last decades in the complex art
            system made many artists reconsider the values of the past. The academic or the classicizing factors
             of the portrait painting reappear in the current visual art not only inspired by admiration or
            affection for the subject, but as a topic beyond the narcissistic representation of self, in the
            context of today's major accent on the topic of memory.
        </p>
<p>To view or to be viewed is an important human feature in the history of art, so the representation or
    the self representation recalls the ancient registers of the old masters from the Age of Enlightenment,
    the Neoclassical or the Romanticism to the contemporary mirror picture of hyperrealism as a fine reproduction
    of the photographic technique, the newest vogue in portrait painting. The portrait artists of the 21 century
    are seeking an apparently obsolete formula, the lost certitude of the inner representation as artistic expression
    in order to be primarily understood by the viewer. The current return to this topic occurs because of the need for
    certitude above the contradictory aspects of the 21 century art world in a simple, conventional but noble way, like portrait painting.</p>
    <p>The portrait contains that amazing truth, easy to be recognized, which does not become ours since it was always ours,
        equal with the perception of the self.</p>
    </div>


</div>

<div class="section">
    <div class="container clearfix">

        <div class="row topmargin-sm">

            <div class="heading-block center">
                <h3 data-animate="fadeInUp">Meet The Founders</h3>
            </div>

            <div class="col-md-6 col-sm-6 bottommargin">

                <div class="team">
                    <div class="team-image">
                        <a href="about.php"><img data-animate="fadeInUp" src="images/bianca-predoi.jpeg" alt="Bianca Predoi" class="img-rounded"></a>
                    </div>
                    <div class="team-desc team-desc-bg">
                        <div class="team-title"><a href="#about"><h4>Bianca Predoi</h4></a><span>Co-founder / Artist</span></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 bottommargin">
                <p>
                    In the digital age the imagination of those who grew up in a culture of analog is still having a nostalgic element
                    of naturalism. Bianca Predoi is not an exception. As architect by profession, she approaches at first to the informal
                    painting. Since 1992, her exhibitions in small galleries in the art’s city Florence, Italy, arouse the interest of
                    international art collectors and it is with the involvement of the experts her increasing sensibility on the figurative sense.
                    After a period of existential upheavals and hesitations she decided to dedicate her career to rediscovered passion for the artistic
                    drawing and for the representation of her messages on the canvas. The painting became her main concern. Since 2011, her artwork is
                    characterized by a continuous search of the human figure focusing particularly on the portrait painting as technique but particularly
                    as a fundamental question of memory, attempting to the National Portrait Gallery from London as entrant. From July 2013 she is the main
                    founder of Boutique Portrait Gallery, Cultural Association with headquarters in Bucharest. In 2014 Bianca Predoi has participated in the
                    Biancoscuro Art Contest where she won the award made by the Critique Commission and drafting of Biancoscuro. Also in 2014 she participated
                    at the Triennale of Visual Arts in Rome, taking part at the "Architecture of Paradise" held in Frescoes Room of “La Sapienza” University, Rome, Italy.
                    She also participated with success at Art Monaco 2014 in the Principality of Monaco, at Art Rotterdam 2014 in Nederland, and at
                    Florence Biennale, Italy in 2013; she is mentioned in CANON of Contemporary Art Network, based in Manhattan, New York.
                </p>
            </div>
        </div>

        <div class="row topmargin-sm">


            <div class="col-md-6 col-sm-6 bottommargin">

                <div class="team">
                    <div class="team-image">
                        <a href="about.php"><img data-animate="fadeInUp" src="images/sorina-degeratu.jpg" alt="Sorina Degeratu" class="img-rounded"></a>
                    </div>
                    <div class="team-desc team-desc-bg">
                        <div class="team-title"><a href="#about"><h4>Sorina Degeratu</h4></a><span>Co-founder</span></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 bottommargin">
                <p>
                    Sorina’s admiration for the topic of portrait of art was growing from her passion
                    for style and beauty. Art enthusiast, she becomes a strong supporter for art and
                    fashion throught organizing events and exhibitions for her friends whom vision for
                    art she shares. Her charisma inspired them, therefore she participated at the artistic
                    process as critique of art, and often as model/sitter. Business women and eminent
                    communicator by profession she attended in 2013 the courses in vanguard and contemporary
                    art of Artmark - Art Society.


                </p>
            </div>
        </div>

    </div>
</div>

<div class="container clearfix">

    <div id="oc-clients" class="owl-carousel image-carousel">

        <div class="oc-item"><a href="/portfolio/individual/Youngmaninaspotoflight.php"><img src="images/portfolio/pbg/pbg1.jpg" alt="Clients"></a></div>
        <div class="oc-item"><a href="/portfolio/individual/Ella-on-armchair.php"><img src="images/portfolio/pbg/pbg3.jpg" alt="Clients"></a></div>
        <div class="oc-item"><a href="/portfolio/individual/Ella-and-the-red-picture.php"><img src="images/portfolio/pbg/pbg4.jpg" alt="Clients"></a></div>
        <div class="oc-item"><a href="/portfolio/individual/Dido-at-window.php"><img src="images/portfolio/pbg/pbg5.jpg" alt="Clients"></a></div>
        <div class="oc-item"><a href="portfolio/individual/Corinas-sample-for-ID-card.php"><img src="images/portfolio/pbg/pbg6.jpg" alt="Clients"></a></div>
        <div class="oc-item"><a href="/portfolio/individual/Marius.php"><img src="images/portfolio/pbg/pbg8.jpg" alt="Clients"></a></div>


    </div>

    <script type="text/javascript">

        jQuery(document).ready(function($) {

            var ocClients = $("#oc-clients");

            ocClients.owlCarousel({
                margin: 20,
                loop: true,
                nav: false,
                autoplay: true,
                dots: false,
                autoplayHoverPause: true,
                responsive:{
                    0:{ items:2 },
                    480:{ items:3 },
                    768:{ items:4 },
                    992:{ items:5 },
                    1200:{ items:6 }
                }
            });

        });

    </script>

</div>

</div>

</section><!-- #content end -->

    <?php include 'footer-home.php'; ?>

</body>
</html>