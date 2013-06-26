<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Jason Chaney | Mobile Web Application Development</title>

    <meta name="description" content="Mobile web application development" />

    <!-- Mobile Specifics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <link href="{{URL::asset('css/screen.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <!-- Modernizr -->
    <script src="{{URL::asset('js/modernizr.js')}}"></script>

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
    <section id="jSplash">
        <div id="circle"></div>
    </section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">
    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="slider-text">
                    <div id="slidecaption"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>

        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
            <a id="goUp" href="#home-slider" title="Jason Chaney | Mobile Web Application Development">Jason Chaney</a>
        </div>

        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">My Kung Foo</a></li>
                <li><a href="#about">Who is this guy?</a></li>
                <li><a href="#services">My Process</a></li>
                <li><a href="blog.html" class="external">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Our Work</h2>
                    <h3 class="title-description">Check Out Our Projects on <a href="#">Dribbble</a>.</h3>

                    <div class="page-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus.
                            Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus.
                            <a href="#">Suspendisse consectetur</a> consectetur bibendum. Pellentesque posuere, ligula volutpat elementum interdum, diam arcu elementum ipsum, vel ultricies est mauris ut nisi.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Portfolio Projects -->
        <div class="row">
            <div class="span12">
                <!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li class="type-work">Type of Work</li>
                        <li><a href="#filter" data-option-value="*" class="selected">All Projects</a></li>
                        <li><a href="#filter" data-option-value=".design">Design</a></li>
                        <li><a href="#filter" data-option-value=".illustration">Illustration</a></li>
                        <li><a href="#filter" data-option-value=".photography">Photography</a></li>
                        <li><a href="#filter" data-option-value=".video">Video</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="span12">
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs">

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="{{URL::asset('img/work/full/image-01-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-01.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="{{URL::asset('img/work/full/image-02-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-02.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{URL::asset('img/work/full/image-03-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-03.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 video">
                                <!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                                <a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-08.jpg')}}" alt="Video">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="{{URL::asset('img/work/full/image-04-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-04.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 photography">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="{{URL::asset('img/work/full/image-05-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-05.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 video">
                                <!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                                <a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/50834315">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-09.jpg')}}" alt="Video">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="{{URL::asset('img/work/full/image-06-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-06.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 design">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Beach" href="{{URL::asset('img/work/full/image-07-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-07.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 illustration">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Bat" href="{{URL::asset('img/work/full/image-10-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-10.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 illustration">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Wild Cat" href="{{URL::asset('img/work/full/image-11-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-11.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 illustration">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="HoneyBear" href="{{URL::asset('img/work/full/image-12-full.jpg')}}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-search"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="{{URL::asset('img/work/thumbs/image-12.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            <!-- End Item Project -->
                        </ul>
                    </section>

                </div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Who is this Guy?</h2>
                    <h3 class="title-description">I'm Jason.  I make the internets go.</h3>

                    <div class="page-description">
                        <p>I specialize in building well-architected mobile-first and desktop interactive solutions. I focus on usability,
                            ensuring code conforms to the highest level of web and <a href="http://en.wikipedia.org/wiki/Object-oriented_programming">OOP</a> semantic standards and keep up with bleeding-edge tools, techniques and new technologies.  Check out my process to hear how.</p>

                        <p>Take a moment to browse through my site in order to get a better idea of the type of work I do. If
                            you like what you see, think that I may be a good match for your project, or just want to say hello,
                            feel free to <a href="mailto:jason@jasonchaney.com">drop me a line</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <div class="row margin-40">
            <div class="span4">
                <h3>My Culture</h3>
                <p>The techniques, tools and architecture patterns used to create the modern web literally change everyday.  As a professional developer, I consider it my responsibility to constantly keep up. I listen to podcasts,
                follow industry leaders on Twitter and collaborate with other professionals daily to ensure I'm using the absolute latest resources available when project crunch time hits.</p>
                <p>
                     <a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
                     <a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a>
                </p>
            </div>

            <div class="span4">
                <h3>Experience</h3>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">Responsive CSS</span>
                        <span class="field-value">100%</span>
                        <div class="bar" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">Javascript/Node/Backbone</span>
                        <span class="field-value">85%</span>
                        <div class="bar" style="width: 85%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">LAMP</span>
                        <span class="field-value">75%</span>
                        <div class="bar" style="width: 75%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">NoSQL/MongoDB</span>
                        <span class="field-value">70%</span>
                        <div class="bar" style="width: 70%;"></div>
                    </div>
                </div>
            </div>

            <div class="span4">
                <h3>&nbsp;</h3>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">CSS3/Sass/LESS</span>
                        <span class="field-value">90%</span>
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">API Integration</span>
                        <span class="field-value">75%</span>
                        <div class="bar" style="width: 75%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">HTML5 APIs</span>
                        <span class="field-value">85%</span>
                        <div class="bar" style="width: 85%;"></div>
                    </div>
                </div>

                <div class="progress-bar">
                    <div class="progress">
                        <span class="field">MVC Architecture</span>
                        <span class="field-value">90%</span>
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="sep">
            <span class="separator"></span>
        </div>

        <!-- People -->
        <div class="row">

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">CTO/Founder</span>
                    </div>
                    <img src="{{URL::asset('img/profile/profile-01.jpg')}}" alt="John Doe">
                </div>
                <h3 class="profile-name">John Doe</h3>
                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-dribbble"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Creative Director</span>
                    </div>
                    <img src="{{URL::asset('img/profile/profile-02.jpg')}}" alt="Jane Helf">
                </div>
                <h3 class="profile-name">Jane Helf</h3>
                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

            <!-- Start Profile -->
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">Lead Designer</span>
                    </div>
                    <img src="{{URL::asset('img/profile/profile-03.jpg')}}" alt="Joshua Insanus">
                </div>
                <h3 class="profile-name">Joshua Insanus</h3>
                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                <div class="social">
                    <ul class="social-icons">
                        <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                        <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Profile -->

        </div>
        <!-- End People -->
    </div>
</div>
<!-- End About Section -->

<!-- Big Blockquote -->
<div class="big-quote page">
    <div class="container">
        <div class="row">
            <div class="span12">
                <p>We bring a personal and effective approach to every project we work on, which is why our clients love us and why they keep coming back.</p>
                <span class="font-icon-blockquote"></span>
            </div>
        </div>
    </div>
</div>
<!-- End Big Blockquote -->

<!-- Services Section -->
<div id="services" class="page-alternate">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">My Process</h2>
                    <h3 class="title-description">What separates me from other developers?</h3>

                    <div class="page-description">
                        <p>If you ask a developer what they use to make a website, one might say <a href="http://www.adobe.com/products/dreamweaver.html" target="_blank">Dreamweaver</a>,
                            another might say <a href="http://wordpress.org/" target="_blank">Wordpress</a> or <a href="http://www.squarespace.com/" target="_blank">Squarespace</a> and another might
                            say
                            <a href="http://en.wikipedia.org/wiki/Vim_(text_editor)">Vim</a> or <a href="http://nodejs.org/" target="_blank">Node</a>.

                            Just this one answer can tell you tons about the nature of those developers. While it doesn't
                            necessarily provide a way to know which one might be more skilled at software architecture, it does
                            tell
                            you which one probably has more knowledge that reaches beyond the average script-kiddies.</p>

                        <p>I have talked to many developers who say they know JavaScript, when in fact what they really know is
                            how
                            to modify <a href="http://jquery.com/" target="_blank">jQuery</a> code. What I do here is outline the general approach and tools I use for interactive project
                            construction. This should give you a good idea as to the type of developer I am.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <div class="row margin-40">
            <div class="span9">
                <h3>The Editor...or rather IDE</h3>

                <p>
                    A good text editor will do things like syntax
                    highlighting. A great editor will do things like code completion. But an awesome editor is not
                    an
                    editor at all, It's an <a
                        href="http://en.wikipedia.org/wiki/Integrated_development_environment">IDE</a> or Integrated
                    Development Environment. Some common IDE's are <a href="http://www.eclipse.org/">Eclipse</a>,
                    Apple's <a href="http://developer.apple.com/tools/xcode/">xCode</a>, <a href="http://www.adobe.com/products/flash-builder.html">Flash Builder</a> (Built on Eclipse), <a href="http://www.appcelerator.com/">Appcelerator</a> and <a href="http://www.jetbrains.com/webstorm/">Webstorm</a>. Personally, I use
                    <a href="http://www.jetbrains.com/idea/">IntelliJ</a>. The big reason to use an IDE is because text editors like <a href="http://www.sublimetext.com/" target="_blank">Sublime Text</a> simply
                    understand the piece of code you're writing, but IDE's understand how it all connects. This is an invaluable distinction and can save untold amounts
                    of
                    time both on the development and debugging sides.
                </p>

                <h3>Build Process</h3>
                <p>Websites and apps have grown to a complexity level that they now require more robust techniques for deployment, code optimization and overall organization.  The industry standard tool for doing this is <a href="http://gruntjs.com/" target="_blank">Grunt</a> and I love to find
                ever-efficient ways to build projects for both development and production with it.  I use grunt for many tasks including deployment, image optimization, CSS/JS complication, Linting and minifying.
                </p>

                <h3>Version Control</h3>

                <p>Any developer that doesn't use version control doesn't understand the benefits, and
                    therefore probably has not worked in a team environment or on extremely large projects and is most likely still FTPing files around. I take
                    version control
                    one step further. Not only do I use the <a href="http://git-scm.com/">Git version control system</a>, I also run my own Git server
                    with <a href="https://github.com/sitaramc/gitolite">Gitolite</a>. Many people who aren't able to run their own server also use <a href="https://github.com/">Github</a> which works
                    really well too.  If I am stuck dealing with FTP, I'll use something like <a href="https://github.com/scttnlsn/dandelion" target="_blank">Dandelion</a> if <a href="http://en.wikipedia.org/wiki/Rsync" target="_blank">Rsync</a> or Git deployment is unavailable.

                <h3>Pre-compilers</h3>

                <p>Every developer is going to say they know CSS. What this really means, is that they understand how to
                    position and style DOM elements. Once again, I take this further. I use <a href="http://sass-lang.com/">Sass</a> to
                    organize, optimize and generate cross-device/browser code. I also incorporate CSS3 transitions and transforms over JS whenever possible to take advantage of the accelerated performance. What
                    this
                    means for a client, is simply that I create more organized code and faster load times.</p>

                <h3>CSS Resetting</h3>

                <p>I use <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> to ensure that CSS is as consistent as possible when starting a
                    project.  Technically, I use a custom repo first started with <a href="http://www.initializr.com/" target="_blank">Initializr</a> which includes HTML5 Boilerplate, <a target="_blank" href="http://twitter.github.com/bootstrap/">Twitter's Bootstrap</a> and a few others.</p>

                <h3>Browser testing</h3>

                <p>I use <a href="http://www.parallels.com/products/desktop/">Parallels Desktop</a> and sometimes <a href="https://www.virtualbox.org/" target="_blank">Virtual Box</a> with Windows XP and 7 to test IE6-9. Chrome, Firefox, iOS and Safari are
                    tested
                    on the Mac side.  I also use a few Andriod tablets and the iOS simulator.</p>

                <h3>Mobile styling and functionality</h3>

                <p>What happens when a project is viewed on a mobile device? Suffice it to say it's a major
                    consideration on projects I work on. I'm intimately familiar with Apple's iOS developer
                    guidelines
                    for mobile web development.  Many developers don't consider <a href="http://www.tuaw.com/2008/01/23/how-web-clips-work/" target="_blank">Webclips</a> or High-PPI screens.  I do.</p>

                <h3>JavaScript</h3>

                <p>Most developers are going to say they know JavaScript but since JavaScript is a separate art in
                    it's
                    own right, I encourage prospective clients to understand the level that someone really
                    knows
                    JavaScript. I don't simply modify JavaScript or use a framework like JQuery. I write <em>custom</em>
                    JavaScript that follows the MVC design pattern utilizing <a href="http://documentcloud.github.com/backbone/">Backbone.js</a> and <a href="http://jquery.com/">JQuery</a>. If you're
                    interested in developing a polished site or application which includes as much <a href="http://en.wikipedia.org/wiki/Ajax_(programming)">AJAX</a>
                    functionality as
                    you can muster, you must develop in a way that allows you to organize large quantities of code. Mixing
                    data into the DOM is a great way to have parts of your site fail when it reaches a high
                    complexity level. When I say I know JavaScript, I really know it.</p>

                <h3>RequireJS</h3>

                <p>It's important to make sure that all script files are loaded and loaded in a specific order. I
                    use
                    <a href="http://requirejs.org/">require.js</a> for this function. If you're a developer and are using a ton of JavaScript files on
                    your
                    project, I encourage you to start using a module loader like RequireJS as it will help you
                    improve
                    the quality and speed of your code.</p>

                <h3>API</h3>

                <p>Many projects require pushing and pulling content from a database. Good developers will write
                    clean
                    code to interface with the database. Great developers will use an <a href="http://en.wikipedia.org/wiki/Object-relational_mapping">ORM</a> tool so they can simply
                    write
                    less code to interface with the database. Awesome developers will create an <a href="http://en.wikipedia.org/wiki/Application_programming_interface">API</a> (with a <a href="http://en.wikipedia.org/wiki/Representational_State_Transfer">REST</a>
                    interface) to utilize an ORM tool so other sites, web services and applications can access data.
                    Truly exceptional developers take it one step even further and use a REST server.</p>

                <p>Many people will look at this and say the good developer that just writes clean code to interface
                    with the database directly is all their project needs so why spend time (thus money) doing all that? What
                    they
                    wouldn't realize is that it's actually faster to develop with these tools. Using a REST API and
                    ORM
                    tool is faster, cleaner, more maintainable and extensible than interfacing with the database
                    directly so there's really no reason not to go that route except one. Knowledge.</p>

                <h3>ORM</h3>

                <p>I'll spare you from the technobabble but basically an ORM tool allows you to write a lot less
                    code
                    to work with a database to accomplish the exact same things. It also helps keep things
                    organized.
                    Personally, I use either <a href="http://redbeanphp.com/">RedbeanPHP</a> or the native
                    <a href="http://en.wikipedia.org/wiki/Active_record_pattern" target="_blank">active record pattren</a> syntax found in many frameworks like <a href="http://codeigniter.com/" target="_blank">CodeIgniter</a>.</p>

                <h3>Templating</h3>

                <p>For large-scale deployments, I use both <a href="http://twig.sensiolabs.org/">Twig</a> and on the JavaScript side, <a href="http://api.jquery.com/category/plugins/templates/">JQuery templates</a>.  On mid to small
                    projects or projects where other team members may not be familiar with those, I'll usually just use the templating tool that's part of whatever framework is being used.</p>

                <h3>REST Server</h3>

                <p>I like CodeIgniter's controllers for creating most APIs as it's one of the fastest in terms of performance
                    but I will also sometimes use a modified <a href="http://jacwright.com/250/simple-rest-server-in-php-supports-json-amf/">rest server</a> originally created by Jacob Wright that uses PHP introspection to
                    map
                    HTTP requests as defined in code comments to specific class methods. The server is also
                    responsible
                    for translating and escaping data to <a href="http://www.json.org/">JSON</a> as well and managing the various HTTP verbs (GET, POST, PUT, DELETE and UPDATE).</p>

                <h3>JQuery</h3>

                <p>If you're reading this, you likely already know what <a href="http://jquery.com/">JQuery</a> is since it's now on more than half of all websites, but if you don't, it's basically a
                    tool (framework) to write less JavaScript and have that JavaScript function consistently across
                    platforms. I use JQuery extensively in most interactive projects but can drop down to Javascript syntax if need be.  I also write custom JQuery plugins occasionally should one unlikely not exist.</p>

                <h3>Debugging Tools</h3>

                <p>I use <a href="http://www.charlesproxy.com/">Charles Proxy</a>, <a href="http://getfirebug.com/">Firebug</a> and <a href="http://www.deltopia.com/compare-merge-sync/macosx/">Deltawalker</a> in addition to the IDE. You can find out what each
                    of
                    these are via the links. When something doesn't work right, you want someone who can find out
                    why
                    and find out quickly.</p>

                <h3>Documentation</h3>
                <p>Any good developer will comment their code for others.  I also use <a href="http://daringfireball.net/projects/markdown/">Markdown</a>,
                    <a href="http://www.omnigroup.com/products/omnigraffle/" target="_blank">Omnigraffle</a>, and wikis to help document code should it make sense on a project.</p>

                <h3>Working Locally</h3>

                <p>I use <a href="http://www.mamp.info/en/mamp-pro/">MAMP Pro</a> to create virtual machines and map development URLs to local vhosts. In a
                    nutshell, I create projects on my computer before I push them up to a staging or live production server.  How do I push them up?  <a href="http://en.wikipedia.org/wiki/File_Transfer_Protocol" target="_blank">FTP</a> is slow and insecure
                    so I use a Git post-hook to keep production, stage and dev locations in sync with remote repos. In layman's terms, that means I can update a
                    site with a single click and that update happens faster and in such a way that's easy to fix should a file get narfed by someone else.
                    If you are a developer and would like to read more specifics, you can <a href="http://wiki.creativeacceleration.com/index.php/Git_as_a_deployment_mechanism" target="_blank">check out</a> how we do it.
                </p>

                <h3>Database management</h3>

                <p>I use <a href="http://www.navicat.com/">Navicat</a> and the CLI to manage my databases.  For those wondering, it would replace the need for <a href="http://www.phpmyadmin.net/home_page/index.php">PHPMyAdmin</a> when using a GUI.</p>

                <h3>Issue Tracking</h3>
                <p>I've used a few tools including <a href="http://www.atlassian.com/software/jira/overview" target="_blank">Jira</a>
                    and <a href="http://en.wikipedia.org/wiki/Lighthouse" target="_blank">Lighthouse</a> but perfer <a href="http://www.jetbrains.com/youtrack/" target="_blank">YouTrack</a>.
                    If you'd like to know why, just <a href="mailto:jason@jasonchaney.com">ask</a>.
                </p>

                <h3>URL rewriting</h3>

                <p>I use <a href="http://httpd.apache.org/docs/1.3/mod/mod_rewrite.html">mod_rewrite</a> when possible to create clean URLs.  This is usually a given when a platform or
                    framework is used but I mention it for good measure.
                </p>

                <h3>Video fallbacks</h3>

                <p>I'm still looking for a preference but I generally use a JavaScript library like the <a href="http://www.kaltura.org/project/HTML5_Video_Media_JavaScript_Library">Kartura Media Library</a> to provide Flash
                    replacement to HTML5 video if the video element is unsupported. This ensures that video and audio content is compatible on all
                    devices
                    and platforms.</p>

                <h3>Speed</h3>
                <p>I'd like to end this with one more point.  If you hand off a comp (a layered Photoshop file) for a developer to bring to life, will they separate out each multi-layer element
                    as a separate image with 2 or less clicks?  Do you want someone knowledgeable about
                    time-savers like <a href="http://www.mightymeta.co.uk/superslicr-ditch-the-slice-tool/" target="_blank">this</a>?  I'm always looking for more efficient ways to do things.

                    If you value that, let's chat.

                </p>

                <p>&nbsp;</p>
                <h3>As you can see, there are many aspects and tools to creating the rich interactive experiences
                    that
                    people expect. It's important to make sure that you know when and how to use them. Not using
                    these
                    tools, means development will take longer, cost more, be harder to maintain in the future and is generally more prone to fail. As a prospective client, you'll need to decide who you want to hire for your
                    project.</h3>
            </div>

            <div class="span3">
                <h3>Why Choose Me <span class="color-text">?</span></h3>
                <ul>
                    <li>The latest technology</li>
                    <li>Mobile-first</li>
                    <li>Over a decade of experience</li>
                    <li>I enjoy this stuff</li>
                </ul>
            </div>
        </div>

        <div class="sep">
            <span class="separator"></span>
        </div>

        <!-- Services Boxes -->
        <div class="row">
            <div class="span4">
                <div class="services-box">
                    <div class="icon">
                        <span class="font-icon-cog"></span>
                    </div>
                    <h3>Deployment</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec.</p>
                </div>
            </div>

            <div class="span4">
                <div class="services-box">
                    <div class="icon">
                        <span class="font-icon-layer"></span>
                    </div>
                    <h3>Optimization</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec.</p>
                </div>
            </div>

            <div class="span4">
                <div class="services-box">
                    <div class="icon">
                        <span class="font-icon-map"></span>
                    </div>
                    <h3>Manages Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec.</p>
                </div>
            </div>
        </div>
        <!-- End Services Boxes -->

    </div>
</div>
<!-- End Services Section -->

<!-- Google Map -->
<div id="map-area">
    <div class="map" id="map_1" data-mapLat="51.911475" data-mapLon="-1.461815" data-mapZoom="11" data-mapTitle="Your Title"></div>
</div>
<!-- End Google Map -->

<!-- Contact Section -->
<div id="contact" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Get in Touch</h2>
                    <h3 class="title-description">We’re currently accepting new client projects. We look forward to serving you.</h3>

                    <div class="page-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus.
                            Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus.
                            <a href="#">Suspendisse consectetur</a> consectetur bibendum. Pellentesque posuere, ligula volutpat elementum interdum, diam arcu elementum ipsum, vel ultricies est mauris ut nisi.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Contact Form -->
        <div class="row">
            <div class="span9">

                <form id="contact-form" class="contact-form" action="#">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p class="contact-submit">
                        <a id="contact-submit" class="submit" href="#">Send Your Email</a>
                    </p>

                    <div id="response">

                    </div>
                </form>

            </div>

            <div class="span3">
                <div class="contact-details">
                    <h3>Contact Details</h3>
                    <ul>
                        <li><a href="#">hello@chakra.com</a></li>
                        <li>(916) 375-2525</li>
                        <li>
                            Chakra Studio
                            <br>
                            5240 Vanish Island. 105
                            <br>
                            Unknow
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Services Form -->
    </div>
</div>
<!-- End Contact Section -->

<!-- Twitter Feed -->
<div id="twitter-feed" class="page-alternate">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="follow">
                    <a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><i class="font-icon-social-twitter"></i></a>
                </div>

                <div id="ticker" class="query">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Twitter Feed -->

<!-- Socialize -->
<div id="social-area" class="page">
    <div class="container">
        <div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="http://dribbble.com/Bluxart" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                        <li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                        <li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                        <li><a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                        <li><a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        <li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                        <li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
    <p class="credits">&copy;{{Date("Y")}} Chakra. <a href="http://themes.alessioatzeni.com/html/chakra/" title="Chakra | Responsive One Page Template">Chakra Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
    <i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Js -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> <!-- Google Map API -->
<script src="{{URL::asset('js/app.js')}}"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>