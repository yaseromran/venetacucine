@extends('layouts.app')

@section('content')
    <div class=" uk-container ">
        <ul class="uk-breadcrumb uk-margin-top">
            <li><a href="https://www.venetacucine.com/en">Home</a></li>
            <li><span>Living</span></li>
        </ul>
        <div class="uk-grid">
            <div class=" uk-width-1-1 ">
                <div data-reactive=""></div>
                <section class="uk-container">
                    <div class="page-header">
                        <div class="page-header__inner">
                            <h2 class="page-header__label">Living</h2>
                            <h1 class="page-header__title">Choose your next living </h1>
                        </div>
                    </div>
                </section>

                <section class="uk-container">
                    <div class="filters-wrapper" data-filters-content="">
                        <div class="filters-bar" data-filters-bar="">
                            <div class="filters-bar__inner">
                                <div class="filters-bar__header">
                                    <div class="uk-width-1-1">Filter results</div>
                                    <a class="filters-bar__close uk-close-large uk-icon uk-close" data-filters-trigger="" uk-close="">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large">
                                            <line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line>
                                            <line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line>
                                        </svg>
                                    </a>
                                </div>
                                <div class="filters-bar__content">
                                    <ul class="filters-bar__list uk-nav-default uk-nav-parent-icon uk-nav" uk-nav="" multiple="true">
                                        <li>
                                            <div data-reactive="" class="filters-bar__item">
                                                <div class="filters-bar__dynamic-filters"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filters-bar__footer">
                                    <div class="filters-bar__footer-buttons">
                                        <a class="uk-button">Reset</a>
                                        <a class="uk-button uk-button-primary" data-filters-trigger="">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-content uk-flex-right@m uk-grid uk-grid-stack" uk-grid="">
                            <div class="filters-results main-content__inner uk-width-1-1 uk-first-column" data-grid-content="" data-filters-results="">
                                <div data-reactive="" class="uk-inline uk-width-1-1">
                                    <div class="uk-overlay-default uk-position-cover uk-position-z-index" style="display: none;">
                                        <div uk-sticky="" bottom="true" class="flipping-square uk-sticky"></div>
                                        <div class="uk-sticky-placeholder" hidden="" style="height: 0px; margin: 40px auto;"></div>
                                    </div>
                                    <ul uk-grid="" class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                        <li class="uk-first-column">
                                            <div class="uk-card card card_small-overlay card_gallery card_collapse-xsmall">
                                                <div data-src="/cache/media/2019/04/venetacucine_living_09_2384.jpg/b0ece8ef2fa257b768b659e9ed88bfd7.jpg" uk-img="" class="card__media uk-card-media-top" style="background-image: url(&quot;https://www.venetacucine.com/cache/media/2019/04/venetacucine_living_09_2384.jpg/b0ece8ef2fa257b768b659e9ed88bfd7.jpg&quot;);">
                                                    <img data-src="/cache/media/2019/04/venetacucine_living_09_2384.jpg/b0ece8ef2fa257b768b659e9ed88bfd7.jpg" alt="#living" uk-img="" src="index_files/b0ece8ef2fa257b768b659e9ed88bfd7.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">#living</h3></div>
                                                <a href="https://www.venetacucine.com/en/living/living?page=1&amp;perPage=15&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card card card_small-overlay card_gallery card_collapse-xsmall">
                                                <div data-src="/cache/media/2019/04/venetacucine_stepsystem_01_2843.jpg/3b4732dedc5fb8e8134e5afbffbdbc79.jpg" uk-img="" class="card__media uk-card-media-top" style="background-image: url(&quot;https://www.venetacucine.com/cache/media/2019/04/venetacucine_stepsystem_01_2843.jpg/3b4732dedc5fb8e8134e5afbffbdbc79.jpg&quot;);">
                                                    <img data-src="/cache/media/2019/04/venetacucine_stepsystem_01_2843.jpg/3b4732dedc5fb8e8134e5afbffbdbc79.jpg" alt="Stepsystem" uk-img="" src="index_files/3b4732dedc5fb8e8134e5afbffbdbc79.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Stepsystem</h3></div>
                                                <a href="https://www.venetacucine.com/en/living/stepsystem?page=1&amp;perPage=15&amp;order=&amp;direction=" class="uk-position-cover"></a></div>
                                        </li>
                                        <li>
                                            <div class="uk-card card card_small-overlay card_gallery card_collapse-xsmall">
                                                <div data-src="/cache/media/2019/04/venetacucine_tribeca_01_2844.jpg/3d910182c283e37f26822cfe7572bb3c.jpg" uk-img="" class="card__media uk-card-media-top" style="background-image: url(&quot;https://www.venetacucine.com/cache/media/2019/04/venetacucine_tribeca_01_2844.jpg/3d910182c283e37f26822cfe7572bb3c.jpg&quot;);">
                                                    <img data-src="/cache/media/2019/04/venetacucine_tribeca_01_2844.jpg/3d910182c283e37f26822cfe7572bb3c.jpg" alt="Tribeca" uk-img="" src="index_files/3d910182c283e37f26822cfe7572bb3c.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Tribeca</h3></div>
                                                <a href="https://www.venetacucine.com/en/living/tribeca?page=1&amp;perPage=15&amp;order=&amp;direction=" class="uk-position-cover"></a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div uk-grid="" data-reactive="" class="uk-grid uk-grid-stack">
                                    <div class="uk-width-1-1 uk-flex uk-flex-center uk-margin-top"><!----></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner-products">
                    <div class="uk-background-cover uk-visible@m" data-src="index_files/banner-living.jpg" data-srcset="index_files/banner-living.jpg 1200w, index_files/banner-living.jpg 1920w" data-sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" uk-img="" style="">
                        <img data-src="index_files/banner-living.jpg" data-srcset="index_files/banner-living.jpg 1200w, index_files/banner-living.jpg 1920w" data-sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" alt="Living" class="uk-invisible" uk-img="" sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" srcset="index_files/banner-living.jpg 1200w, index_files/banner-living.jpg 1920w" src="index_files/banner-living.jpg">
                    </div>
                    <div class="banner-products__content">
                        <div class="banner-products__caption uk-width-3-5@m uk-width-2-5@xl uk-scrollspy-inview uk-animation-fade" uk-scrollspy="" cls="uk-animation-fade" delay="500" style="">
                            <div class="banner-products__text">Living system is able to give expressive depth not only
                                to the kitchen area but also to the living area for a consistent environment close to
                                the daily needs of the design. Living system defines a space with its own identity,
                                going beyond the traditional boundaries that separate the living area from the kitchen,
                                relocating operations and intended use. The elements of the kitchen are thus not
                                isolated, but are rightly performed, making spontaneous the integration with the living
                                area.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
