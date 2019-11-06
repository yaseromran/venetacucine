@extends('layouts.app')

@section('content')
    <div class="">
        <div class="uk-grid">
            <div class=" uk-width-1-1 ">
                <section class="uk-container-expand unit unit_remove-pt">
                    <div class="main-visual uk-grid-collapse main-visual_media-only uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-width-1-1 uk-first-column">
                            <div class="main-visual__content">
                                <a>
                                    <div class="main-visual__media main-visual__media_image uk-background-cover" data-visual-video-placeholder="" data-src="/cache/media/2019/04/venetacucine_caranto_video_3583.jpg/9e515da327984321caafa5fc7a59ce31.jpg" data-srcset="/cache/media/2019/04/venetacucine_caranto_video_3583.jpg/7f56729a4fe1d48720807ea32eddbbc2.jpg 768w, /cache/media/2019/04/venetacucine_caranto_video_3583.jpg/5a6be9a4d7d7a92f8088d5708004feb2.jpg 1200w, /cache/media/2019/04/venetacucine_caranto_video_3583.jpg/a21c6d0641264bd6c4d0c1207940409d.jpg 1920w" data-sizes="(min-width: 1920px) 1920px, (min-width: 1200px) 1200px, 100vw" uk-img="" style="background-image: url(&quot;https://www.venetacucine.com/cache/media/2019/04/venetacucine_caranto_video_3583.jpg/5a6be9a4d7d7a92f8088d5708004feb2.jpg&quot;);">
                                    </div>
                                </a>
                                <div id="visual-video" class="main-visual__media main-visual__media_iframe uk-cover-container" data-visual-video="">
                                    <canvas class="uk-height-1-1 uk-width-1-1"></canvas>
                                    <iframe src="https://www.youtube-nocookie.com/embed/rX5RN0Hs9kk?autoplay=1&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1&amp;wmode=transparent&amp;controls=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" uk-cover="" automute="false" class="uk-cover"></iframe>
                                </div>
                                <div id="videoPlay_btn" class="main-visual__play" uk-toggle="" target="#visual-video" cls="is-visible" data-visual-video-toggle="">
                                    <svg class="svg-inline--fa fa-play-circle fa-w-16" aria-hidden="true" data-prefix="far" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"></path></svg><!-- <i class="far fa-play-circle"></i> -->
                                </div>
                            </div>
                            <a href="#content" class="main-visual__scroller" uk-scroll="" offset="200"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path></svg><!-- <i class="far fa-chevron-down"></i> --></a>
                        </div>
                    </div>
                </section>
                <section id="content" class="uk-container uk-container-collapse-small unit">
                    <div uk-grid="" class="uk-grid uk-grid-stack">
                        <div class="uk-width-1-1 uk-first-column">
                            <div class="focuson focuson_caranto">
                                <div class="focuson__media">
                                    <div class="focuson__media-column">
                                        <figure class="focuson__media">
                                            <img data-src="/frontend/images/home/focus-caranto-01.jpg?id=e480de041dcb06d91904" alt="Veneta Cucine Caranto" uk-img="" src="index_files/focus-caranto-01.jpg">
                                        </figure>
                                    </div>
                                    <div class="focuson__media-column">
                                        <figure class="focuson__media">
                                            <img data-src="/frontend/images/home/focus-caranto-02.jpg?id=ff86047d81719ac602ae" alt="Veneta Cucine Caranto" uk-img="" src="index_files/focus-caranto-02.jpg">
                                        </figure>
                                    </div>
                                    <div class="focuson__media-logo uk-hidden@l">
                                        <div class="focuson__logo">
                                            <img data-src="/frontend/images/logos/logo-caranto.svg?id=e2733237f235f9df2dd0" alt="Caranto" uk-img="" src="index_files/logo-caranto.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="focuson__caption uk-width-1-2@l uk-width-1-3@xl uk-scrollspy-inview uk-animation-fade" uk-scrollspy="" cls="uk-animation-fade" delay="500" style="">
                                    <div class="focuson__logo uk-visible@l">
                                        <img data-src="/frontend/images/logos/logo-caranto.svg?id=e2733237f235f9df2dd0" alt="Caranto" uk-img="" src="index_files/logo-caranto.svg">
                                    </div>
                                    <h3 class="focuson__subtitle">Caranto is a new range of
                                        products designed to make your kitchen even more attractive.
                                        Caranto is synonymous with elegant design and superb quality,
                                        especially as regards technical worktops.</h3>
                                    <a href="http://www.caranto.com/en" target="_blank" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="unit">
                    <div data-reactive="">
                        <div uk-grid="" class="uk-grid uk-grid-stack">
                            <div class="uk-width-1-1 uk-first-column">
                                <div class="focuson-slideshow uk-container focuson-slideshow_reverse">
                                    <div class="focuson-slideshow__row">
                                        <div uk-scrollspy="" cls="uk-animation-slide-left" class="focuson-slideshow__column uk-scrollspy-inview uk-animation-slide-left" style="">
                                            <div tabindex="-1" id="focus-on-1_image" class="focuson-slideshow__slideshow uk-slideshow">
                                                <ul class="uk-slideshow-items" style="min-height: 474.485px;">
                                                    <li tabindex="-1" class="active" id="1li1" style="transform: translate3d(0px, 0px, 0px); z-index: 0;">
                                                        <img src="index_files/b847030fbb2c5fcd0ddf37df7a6eb9e1.jpg" alt="VenetaCucine_Milano.jpg" uk-cover="" class="uk-cover" style="height: 496px; width: 1081px;">
                                                    </li>
                                                    <li tabindex="-1" id="1li2">
                                                        <img src="index_files/1bb9db771c4345c4f6cf9a1b29b766fd.jpg" alt="venetacucine_start_time_presa_slides.jpg" uk-cover="" class="uk-cover">
                                                    </li>
                                                    <li tabindex="-1" id="1li3">
                                                        <img src="index_files/2dd6ac3eb98ad4b2438df4f8e68a6140.jpg" alt="VenetaCucine_CarreraF1.jpg" uk-cover="" class="uk-cover">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div uk-scrollspy="" class="focuson-slideshow__column uk-scrollspy-inview" style="">
                                            <div class="focuson-slideshow__caption">
                                                <div class="focuson uk-width-1-1">
                                                    <div class="focuson__caption">
                                                        <ul class="focuson__switcher-slidenav slidenav uk-hidden@m">
                                                            <li class="slidenav__item"><a class="is-disabled">
                                                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-left"></i> -->
                                                                </a>
                                                            </li>
                                                            <li><span class="slidenav__count">1 / 3</span></li>
                                                            <li><a class="slidenav__next">
                                                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-right"></i> -->
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="focuson__switcher uk-switcher uk-child-width-1-1" style="touch-action: pan-y pinch-zoom;">
                                                            <li id="1info_li1" class="active" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Milano</h2>
                                                                    <h3 class="focuson__subtitle">Milano expresses a
                                                                        style whose roots lie in the tradition of Made in
                                                                        Italy and the country’s great architecture. A truly
                                                                        “new Italian style” that helps to create real quality,
                                                                        a quality which is expressed in the form of clear,
                                                                        expressive and clean lines, without excess or
                                                                        exaggeration.</h3>
                                                                    <a href="https://www.venetacucine.com/en/kitchens/milano" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Discover Milano</a>
                                                                </div>
                                                            </li>
                                                            <li id="1info_li2" class="caption__element" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Start-Time Presa</h2>
                                                                    <h3 class="focuson__subtitle">A newly-designed
                                                                        handle for the popular Start-Time model. The new
                                                                        aluminium profile inserted into the door makes opening
                                                                        extra-simple, and is available in a burnished or
                                                                        bronze finish.</h3>
                                                                    <a href="https://www.venetacucine.com/en/kitchens/start-time" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Discover Start-Time Presa</a>
                                                                </div>
                                                            </li>
                                                            <li id="1info_li3" class="caption__element" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Carrera F1</h2>
                                                                    <h3 class="focuson__subtitle">Carrera F1 is a new
                                                                        addition to the Carrera line, an iconic Veneta Cucine
                                                                        model based on the Quick Design concept.</h3>
                                                                    <a href="https://www.venetacucine.com/en/kitchens/carrera" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Discover Carrera</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul id="focus-on-1_caption" class="uk-hidden">
                                                            <li class="uk-active"><a aria-expanded="true"></a></li>
                                                            <li><a aria-expanded="false"></a></li>
                                                            <li><a aria-expanded="false"></a></li>
                                                        </ul>
                                                        <ul class="focuson__switcher-slidenav slidenav uk-visible@m">
                                                            <li id="prev_1" class="slidenav__item"><a class="is-disabled">
                                                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-left"></i> -->
                                                                </a>
                                                            </li>
                                                            <li><span id="num_1" class="slidenav__count">1 / 3</span></li>
                                                            <li id="next_1"><a class="slidenav__next">
                                                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-right"></i> -->
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="unit">
                    <div data-reactive="">
                        <div uk-grid="" class="uk-grid uk-grid-stack">
                            <div class="uk-width-1-1 uk-first-column">
                                <div class="focuson-slideshow uk-container">
                                    <div class="focuson-slideshow__row">
                                        <div uk-scrollspy="" cls="uk-animation-slide-left" class="focuson-slideshow__column uk-scrollspy-inview uk-animation-slide-left" style="">
                                            <div tabindex="-1" id="focus-on-4_image" class="focuson-slideshow__slideshow uk-slideshow">
                                                <ul class="uk-slideshow-items" style="min-height: 474.485px;">
                                                    <li id="2li1" tabindex="-1" class="active" style="transform: translate3d(0px, 0px, 0px); z-index: 0;">
                                                        <img src="index_files/bcc7d39a3c00fc264184abd2027f2464.jpg" alt="Album_slider.jpg" uk-cover="" class="uk-cover" style="height: 496px; width: 881px;">
                                                    </li>
                                                    <li id="2li2" tabindex="-1">
                                                        <img src="index_files/4d397ee5342f6970ab007af04ac8bc2f.jpg" alt="venetacucine_madeinitay.jpg" uk-cover="" class="uk-cover">
                                                    </li>
                                                    <li id="2li3" tabindex="-1">
                                                        <img src="index_files/7f131023295fb16adc61bf43c00ad8c5.jpg" alt="milanodesignweek.jpg" uk-cover="" class="uk-cover">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div uk-scrollspy="" class="focuson-slideshow__column uk-scrollspy-inview" style="">
                                            <div class="focuson-slideshow__caption">
                                                <div class="focuson uk-width-1-1">
                                                    <div class="focuson__caption">
                                                        <ul class="focuson__switcher-slidenav slidenav uk-hidden@m">
                                                            <li class="slidenav__item"><a class="is-disabled">
                                                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-left"></i> -->
                                                                </a>
                                                            </li>
                                                            <li><span class="slidenav__count">1 / 3</span></li>
                                                            <li><a class="slidenav__next">
                                                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-right"></i> -->
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="focuson__switcher uk-switcher uk-child-width-1-1" style="touch-action: pan-y pinch-zoom;">
                                                            <li id="2info_li1" class="actives" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Find out the new Album stories</h2>
                                                                    <h3 class="focuson__subtitle">Maria, Federico and Matilde opened their house doors to show us their lives.</h3>
                                                                    <a href="https://www.venetacucine.com/en/news/corporate-news/check-out-the-new-album-stories" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Read more</a>
                                                                </div>
                                                            </li>
                                                            <li id="2info_li2" class="caption__element" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Veneta Cucine has obtained 'Made in Italy' certification</h2>
                                                                    <h3 class="focuson__subtitle">Veneta Cucine has obtained 'Made in Italy' certification based on UNI standard 11674/2017 and issued by Cosmob and Catas – the two most important Italian laboratories for analysis, tests and certification in the sector of wooden furnishings – which declares the Italian origin of the furniture.</h3>
                                                                    <a href="https://www.venetacucine.com/en/news/corporate-news/veneta-cucine-has-obtained-made-in-italy-certification" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Read more</a>
                                                                </div>
                                                            </li>
                                                            <li id="2info_li3" class="caption__element" style="height: 438px;">
                                                                <div class="focuson__switcher-caption">
                                                                    <!---->
                                                                    <h2 class="focuson__title">Veneta Cucine at Milano Design Week 2019</h2>
                                                                    <h3 class="focuson__subtitle">Veneta Cucine was present at Milano Design Week 2019 to present the latest products in the company's showroom in Milan.</h3>
                                                                    <a href="https://www.venetacucine.com/en/news/corporate-news/veneta-cucine-at-milano-design-week-2019" target="_self" class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Read more</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul id="focus-on-4_caption" class="uk-hidden">
                                                            <li><a></a></li>
                                                            <li><a></a></li>
                                                            <li><a></a></li>
                                                        </ul>
                                                        <ul class="focuson__switcher-slidenav slidenav uk-visible@m">
                                                            <li id="prev_2" class="slidenav__item"><a class="is-disabled">
                                                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-left"></i> -->
                                                                </a>
                                                            </li>
                                                            <li id="num_2"><span class="slidenav__count">1 / 3</span></li>
                                                            <li id="next_2"><a class="slidenav__next">
                                                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                        <path fill="currentColor" d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                                    </svg>
                                                                    <!-- <i class="fal fa-arrow-right"></i> -->
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="unit unit_remove-pt"></div>
            </div>
        </div>
    </div>
@endsection
