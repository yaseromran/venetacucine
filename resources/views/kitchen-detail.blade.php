@extends('layouts.app')

@section('content')
    <div class=" uk-container ">
        <ul class="uk-breadcrumb uk-margin-top">
            <li><a href="/">Home</a></li>
            <li><a href="/kitchens">Kitchens</a></li>
            <li><span>Lounge</span></li>
        </ul>
        <div class="uk-grid">
            <div class=" uk-width-1-1 ">
                <div data-reactive=""></div>
                <section class="product-detail uk-container">
                    <div class="back-link uk-visible@m uk-sticky" data-back-link="" uk-sticky="" media="@m" style="">
                        <a href="https://www.venetacucine.com/en/kitchens?page=1&amp;perPage=30&amp;order=&amp;direction="
                           class="back-link__inner" title="Back to the kitchens">
                            <div class="back-link__label">Back to the kitchens</div>
                            <svg class="svg-inline--fa fa-arrow-left fa-w-14 back-link__icon" aria-hidden="true"
                                 data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                            </svg><!-- <i class="back-link__icon fal fa-arrow-left"></i> -->
                        </a>
                    </div>
                    <div class="uk-sticky-placeholder" style="height: 53px; margin: 0px;" hidden=""></div>

                    <div uk-grid="" data-reactive="" data-product-slideshow=""
                         class="unit unit_remove-pt product-detail__slideshow-container uk-grid uk-grid-stack">
                        <div class="uk-width-1-1 uk-first-column">
                            <div id="detail-main-slider" uk-slideshow="" ratio="1760:896" animation="push"
                                 class="product-detail__slideshow slideshow slideshow_small-expand uk-slideshow">
                                <div class="uk-position-relative">
                                    <div class="hotpoints-wrapper is-active">
                                        <ul class="uk-slideshow-items" style="min-height: 605.309px;">
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/9e67825b612a843e399c88702d87ea52.jpg"
                                                            alt="Lounge Shellsystem Metallo Liquido Bronzo 685, Abete Ossidato 447"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/657193d5d2dc7b3a65791722ef1a5d9a.jpg"
                                                            alt="Lounge Shellsystem Fenix Bianco Kos 714, Rovere Nodoso Chiaro 799"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/1828ebdede752d2a6080b5fa4192630f.jpg"
                                                            alt="Lounge Shellsystem Grigio Corda 476, Noce Nodoso 446, Corten Rosso Dek 614"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/d65cb4c7aa756d18045c28ea3de33281.jpg"
                                                            alt="Lounge.Go Laccato Opaco Bianco Puro 215, Noce Nodoso 446"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/a2a06096a9e1bb00fe73e16b953a57c5.jpg"
                                                            alt="Lounge.Go Laccato Opaco Bianco Puro 215, Noce Nodoso 446"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/868e1c5d0bcd2c17d18ec8f5ed53fba6.jpg"
                                                            alt="Lounge.Go Laccato Opaco Bianco Puro 215, Noce Nodoso 446"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/7acf5f10a9023e0a6e9c6f36a30f8159.jpg"
                                                            alt="Lounge Shellsystem Laccato Opaco Grigio Corda 476, Quercia Medio Dek 801"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/1495fe31e5292e25bd7905bf69554121.jpg"
                                                            alt="Lounge Pro Sabbia Wood Dek 611, Metallo Liquido Mercurio 686"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="uk-active uk-transition-active"
                                                style="transform: translateX(0px); z-index: 0;">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/2a66aef5aa86a59f7cb67a33eb565569.jpg"
                                                            alt="Lounge Shellsystem Beige Ecru 084" uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/b433face7d117ee2c60a68e59bb4ff63.jpg"
                                                            alt="Lounge Shellsystem Verde Alpi 853" uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/0bfca9fae49f959bd138a52763ed2cd0.jpg"
                                                            alt="Lounge Shellsystem Beige Ecru 084, Rosso Veneziano 710"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/32ce5adaf955cc32c24d9b11b51dca0a.jpg"
                                                            alt="Lounge Shellsystem Blu Navy 855, Bianco Puro 214"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" style="">
                                                <div class="hotpoints">
                                                    <div class="hotpoints__media"><img
                                                            src="./index_files/397bb2f8f026bf7a1e72ac55f5766895.jpg"
                                                            alt="Lounge Shellsystem Beige Ecru 084, Giallo Girasole 861"
                                                            uk-img="">
                                                        <div class="hotpoints__content"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slideshow__slidenav">
                                        <ul class="slidenav slidenav_negative slidenav_bottom-left slidenav_outer@s uk-slidenav-container">
                                            <li class="slidenav__item uk-visible@m"><a uk-slideshow-item="previous"
                                                                                       class="slidenav__prev">
                                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true"
                                                         data-prefix="fal" data-icon="arrow-left" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                                    </svg><!-- <i class="fal fa-arrow-left"></i> --></a></li>
                                            <li>
                                                9 / 13
                                            </li>
                                            <li class="slidenav__item uk-visible@m"><a uk-slideshow-item="next"
                                                                                       class="slidenav__next">
                                                    <svg class="svg-inline--fa fa-arrow-right fa-w-14"
                                                         aria-hidden="true" data-prefix="fal" data-icon="arrow-right"
                                                         role="img" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                    </svg><!-- <i class="fal fa-arrow-right"></i> --></a></li>
                                            <li class="slidenav__caption">
                                                Lounge Shellsystem Beige Ecru 084
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin-top">
                                    <li uk-slideshow-item="0" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="1" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="2" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="3" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="4" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="5" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="6" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="7" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="8" class="uk-active"><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="9" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="10" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="11" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                    <li uk-slideshow-item="12" class=""><a
                                            href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=&amp;fbclid=IwAR2qgL5RDSYuHS4AfjGybA-jhhJzUOSRCBT32cPvAYOqq1UJjw81ZZzLBN8#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="unit unit_remove-pt uk-position-z-index uk-position-relative">
                        <div class="uk-flex-center uk-grid uk-grid-stack" uk-grid="">
                            <div class="product-detail__intro-wrapper uk-width-4-5@l uk-first-column">
                                <div class="product-detail__intro uk-flex-between uk-grid" uk-grid="">

                                    <div class="uk-width-1-1 uk-first-column">
                                        <div class="section section_lined uk-margin-remove-top">
                                            <div
                                                class="product-detail__line uk-flex-middle uk-flex-between uk-flex-left@m uk-grid"
                                                uk-grid="">
                                                <div class="uk-width-1-1 uk-width-auto@m uk-first-column">
                                                    <img
                                                        data-src="/cache/media/2019/05/essence_4274.png/5ae93190a5eae609531088da3355a846.png"
                                                        alt="Essence" width="180" uk-img=""
                                                        src="./index_files/5ae93190a5eae609531088da3355a846.png">
                                                </div>
                                                <div class="uk-width-1-1 uk-width-auto@m uk-flex-1">
                                                    <p>Essence gives real form to projects that improve everyday living
                                                        by maximising functionality. The image of the kitchen is
                                                        expressed by taking maximum advantage of Essence’s design
                                                        potential.&nbsp; The transition from compact to designed
                                                        configurations enables you to go beyond the idea of a “model” to
                                                        give rise to an innovative appearance in which the relationship
                                                        between form and function is interpreted as the surmounting of
                                                        standards.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-3-5@m uk-width-3-5@xl uk-grid-margin uk-first-column">
                                        <figure
                                            class="product-detail__logo uk-text-center uk-margin-bottom uk-hidden@m uk-width-1-3 uk-width-1-5@s">
                                            <img
                                                data-src="/cache/media/2019/04/lounge_2148.png/96fd3bb1a7a6c2edc235c19199be402b.png"
                                                alt="Lounge" uk-img=""
                                                src="./index_files/96fd3bb1a7a6c2edc235c19199be402b.png">
                                        </figure>
                                        <h1 class="product-detail__title uk-h2 uk-margin-remove-top uk-visible@m">
                                            Lounge</h1>
                                        <div class="product-detail__text text-toggle text-toggle@s">
                                            <div class="text-toggle__inner">
                                                <p style="margin-left:7.1pt">Lounge - a system in the Essence collection
                                                    - interprets the concept of maximum serviceability by revisiting the
                                                    meaning of quality and daily living, to turn the kitchen into a
                                                    place that is more accommodating, functional and aesthetically
                                                    pleasing, and thus become the premier area for pleasure, relaxation,
                                                    cheerfulness and good living.</p>

                                                <p style="margin-left:7.1pt">The increased storage capacity results from
                                                    the use of a compact skirting board with height of 8 cm, which
                                                    enables extra volume in the base cabinet to be recovered and
                                                    effectively utilised.</p>

                                            </div>
                                            <a class="text-toggle__toggle" uk-toggle="" target=".text-toggle"
                                               cls="is-open">Read more</a>
                                        </div>
                                    </div>

                                    <div class="uk-width-2-5@m uk-width-1-4@xl uk-grid-margin">
                                        <figure
                                            class="product-detail__logo uk-text-center uk-margin-medium-bottom uk-visible@m">
                                            <img
                                                data-src="/cache/media/2019/04/lounge_2148.png/96fd3bb1a7a6c2edc235c19199be402b.png"
                                                alt="Lounge" uk-img=""
                                                src="./index_files/96fd3bb1a7a6c2edc235c19199be402b.png">
                                        </figure>
                                        <ul class="button-group button-group_vertical uk-width-1-1">
                                            <li>
                                                <a href="https://www.venetacucine.com/en/media/download/2019/04/venetacucine_lounge_ita_eng_spa_2248.pdf"
                                                   class="uk-button button-icon uk-button-primary">
                                                    <div class="button-icon__label">
                                                        <span>Download</span>
                                                        Catalogue Lounge
                                                    </div>
                                                    <div class="button-icon__icon">
                                                        <svg class="svg-inline--fa fa-arrow-to-bottom fa-w-12"
                                                             aria-hidden="true" data-prefix="fal"
                                                             data-icon="arrow-to-bottom" role="img"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                             data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                  d="M348.5 264l-148 148.5c-4.7 4.7-12.3 4.7-17 0L35.5 264c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l115.4 116V44c0-6.6 5.4-12 12-12h10c6.6 0 12 5.4 12 12v311.9L324.4 240c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.6 4.7 12.2 0 16.9zM384 468v-8c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h360c6.6 0 12-5.4 12-12z"></path>
                                                        </svg><!-- <i class="fal fa-arrow-to-bottom"></i> -->
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.venetacucine.com/frontend/pdf/catalogo_generale.pdf"
                                                   download="" class="uk-button button-outline button-icon">
                                                    <div class="button-icon__label">
                                                        <span>Download</span>
                                                        General catalogue
                                                    </div>
                                                    <div class="button-icon__icon">
                                                        <svg class="svg-inline--fa fa-arrow-to-bottom fa-w-12"
                                                             aria-hidden="true" data-prefix="fal"
                                                             data-icon="arrow-to-bottom" role="img"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                             data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                  d="M348.5 264l-148 148.5c-4.7 4.7-12.3 4.7-17 0L35.5 264c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l115.4 116V44c0-6.6 5.4-12 12-12h10c6.6 0 12 5.4 12 12v311.9L324.4 240c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.6 4.7 12.2 0 16.9zM384 468v-8c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h360c6.6 0 12-5.4 12-12z"></path>
                                                        </svg><!-- <i class="fal fa-arrow-to-bottom"></i> -->
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <h2 class="uk-margin-remove-bottom">Colours and Woods</h2>
                                        <div class="subnav-wrapper">
                                            <div class="overflow-x-section">
                                                <ul class="overflow-x-section__content uk-subnav subnav subnav_tab"
                                                    uk-switcher="" connect="[data-colors-switcher]" swiping="false">
                                                    <li class="uk-active">
                                                        <a aria-expanded="true">All</a></li>
                                                    <li><a aria-expanded="false">Wood</a></li>
                                                    <li><a aria-expanded="false">Liquid Metal Finish Lacquered</a></li>
                                                    <li><a aria-expanded="false">Glossy Lacquered</a></li>
                                                    <li><a aria-expanded="false">Matt Lacquered</a></li>
                                                    <li><a aria-expanded="false">Fenix</a></li>
                                                    <li><a aria-expanded="false">Decorative</a></li>
                                                    <li><a aria-expanded="false">Steel</a></li>
                                                    <li><a aria-expanded="false">Shellsystem Elite Wood</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <ul class="uk-switcher switcher" data-colors-switcher="">
                                            <li class="uk-active">
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li class="uk-first-column">
                                                        <div class="sample-panel__label">Wood</div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_nodoso_chiaro_799_1341.jpg/f40f77d61e6ae5051ea6bce69adb4656.jpg"
                                                                        alt="Rovere Nodoso Chiaro (799)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/f40f77d61e6ae5051ea6bce69adb4656.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/rovere_nodoso_chiaro_799_1341.jpg/f40f77d61e6ae5051ea6bce69adb4656.jpg"
                                                                            alt="Rovere Nodoso Chiaro (799)" uk-img="">
                                                                        <div class="sample-list__label">Rovere Nodoso
                                                                            Chiaro (799)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Rovere
                                                                    Nodoso Chiaro (799)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_nodoso_grigio_455_1342.jpg/985018b3b7b20fc02902cfa31738c1fd.jpg"
                                                                        alt="Rovere Nodoso Grigio (455)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/985018b3b7b20fc02902cfa31738c1fd.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/rovere_nodoso_grigio_455_1342.jpg/985018b3b7b20fc02902cfa31738c1fd.jpg"
                                                                            alt="Rovere Nodoso Grigio (455)" uk-img="">
                                                                        <div class="sample-list__label">Rovere Nodoso
                                                                            Grigio (455)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Rovere
                                                                    Nodoso Grigio (455)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/noce_nodoso_446_1311.jpg/3b7877526d36bae6b632754c05f8508c.jpg"
                                                                        alt="Noce Nodoso (446)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/3b7877526d36bae6b632754c05f8508c.jpg"
                                                                        class="">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-top-center"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150"
                                                                        style="left: -60.1406px; top: -231px;">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/noce_nodoso_446_1311.jpg/3b7877526d36bae6b632754c05f8508c.jpg"
                                                                            alt="Noce Nodoso (446)" uk-img=""
                                                                            src="./index_files/3b7877526d36bae6b632754c05f8508c.jpg">
                                                                        <div class="sample-list__label">Noce Nodoso
                                                                            (446)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Noce Nodoso
                                                                    (446)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Liquid Metal Finish Lacquered
                                                        </div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_platino_684_1290.jpg/1e7da168854c3a01859a57556817bbb6.jpg"
                                                                        alt="Metallo Liquido Platino (684)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/1e7da168854c3a01859a57556817bbb6.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/laccato_metallo_liquido_platino_684_1290.jpg/1e7da168854c3a01859a57556817bbb6.jpg"
                                                                            alt="Metallo Liquido Platino (684)"
                                                                            uk-img="">
                                                                        <div class="sample-list__label">Metallo Liquido
                                                                            Platino (684)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Metallo
                                                                    Liquido Platino (684)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_bronzo_685_1291.jpg/5f14f8df23e3e9da0df131fe43f32a3d.jpg"
                                                                        alt="Metallo Liquido Bronzo (685)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/5f14f8df23e3e9da0df131fe43f32a3d.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/laccato_metallo_liquido_bronzo_685_1291.jpg/5f14f8df23e3e9da0df131fe43f32a3d.jpg"
                                                                            alt="Metallo Liquido Bronzo (685)"
                                                                            uk-img="">
                                                                        <div class="sample-list__label">Metallo Liquido
                                                                            Bronzo (685)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Metallo
                                                                    Liquido Bronzo (685)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_mercurio_686_1292.jpg/53cd7f911740b779a234b37de8456c09.jpg"
                                                                        alt="Metallo Liquido Mercurio (686)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/53cd7f911740b779a234b37de8456c09.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/laccato_metallo_liquido_mercurio_686_1292.jpg/53cd7f911740b779a234b37de8456c09.jpg"
                                                                            alt="Metallo Liquido Mercurio (686)"
                                                                            uk-img="">
                                                                        <div class="sample-list__label">Metallo Liquido
                                                                            Mercurio (686)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Metallo
                                                                    Liquido Mercurio (686)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Glossy Lacquered</div>
                                                        <div class="overflow-x-section">
                                                            <div class="overflow-x-section__content">
                                                                <div class="sample-list-wrapper">
                                                                    <ul class="sample-list sample-list_overflow uk-grid"
                                                                        uk-grid="">
                                                                        <li class="uk-first-column">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_puro_1237.jpg/c5cff5d6579c1a5560c035e34f9f8f85.jpg"
                                                                                    alt="Bianco Puro Laccato Lucido (214)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c5cff5d6579c1a5560c035e34f9f8f85.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/bianco_puro_1237.jpg/c5cff5d6579c1a5560c035e34f9f8f85.jpg"
                                                                                        alt="Bianco Puro Laccato Lucido (214)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Bianco Puro Laccato Lucido (214)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Bianco Puro Laccato Lucido (214)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_laccato_1229.jpg/259b1b93fc6c713df1c7c3e9e70aba72.jpg"
                                                                                    alt="Bianco Laccato Lucido (196)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/259b1b93fc6c713df1c7c3e9e70aba72.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/bianco_laccato_1229.jpg/259b1b93fc6c713df1c7c3e9e70aba72.jpg"
                                                                                        alt="Bianco Laccato Lucido (196)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Bianco Laccato Lucido (196)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Bianco Laccato Lucido (196)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/panna_laccato_1317.jpg/c594267a2575913453b6a8601db3ddd3.jpg"
                                                                                    alt="Panna Lucido (209)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/c594267a2575913453b6a8601db3ddd3.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/panna_laccato_1317.jpg/c594267a2575913453b6a8601db3ddd3.jpg"
                                                                                        alt="Panna Lucido (209)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Panna Lucido (209)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Panna Lucido (209)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_corda_laccato_1280.jpg/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                    alt="Grigio Corda Laccato Lucido (473)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_corda_laccato_1280.jpg/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                        alt="Grigio Corda Laccato Lucido (473)"
                                                                                        uk-img=""
                                                                                        src="./index_files/9a01bbf1283444fade4d0d5ad8258dbd.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Corda Laccato Lucido
                                                                                        (473)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Corda Laccato Lucido (473)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/beige_ecru_laccato_1223.jpg/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg"
                                                                                    alt="Beige Ecru Laccato Lucido (083)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/beige_ecru_laccato_1223.jpg/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg"
                                                                                        alt="Beige Ecru Laccato Lucido (083)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Beige Ecru Laccato Lucido (083)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Beige Ecru Laccato Lucido (083)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marron_visone_laccato_1305.jpg/5a3646967034411e0a3e23e65efd039b.jpg"
                                                                                    alt="Marrone Visone Laccato Lucido (680)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/5a3646967034411e0a3e23e65efd039b.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/marron_visone_laccato_1305.jpg/5a3646967034411e0a3e23e65efd039b.jpg"
                                                                                        alt="Marrone Visone Laccato Lucido (680)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Marrone Visone Laccato Lucido
                                                                                        (680)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Marrone Visone Laccato Lucido (680)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marrone_oliva_laccato_1304.jpg/3a3d160bb88ff87b7ee8781ce7a475c8.jpg"
                                                                                    alt="Marron Oliva Laccato Lucido (496)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/3a3d160bb88ff87b7ee8781ce7a475c8.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/marrone_oliva_laccato_1304.jpg/3a3d160bb88ff87b7ee8781ce7a475c8.jpg"
                                                                                        alt="Marron Oliva Laccato Lucido (496)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Marron Oliva Laccato Lucido
                                                                                        (496)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Marron Oliva Laccato Lucido (496)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/nero_laccato_1308.jpg/bd2bf55ba94ffd0a5ae5d42196dde645.jpg"
                                                                                    alt="Nero Laccato Lucido (517)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/bd2bf55ba94ffd0a5ae5d42196dde645.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/nero_laccato_1308.jpg/bd2bf55ba94ffd0a5ae5d42196dde645.jpg"
                                                                                        alt="Nero Laccato Lucido (517)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">Nero
                                                                                        Laccato Lucido (517)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Nero Laccato Lucido (517)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ardesia_laccato_1217.jpg/908f7044f8d9d78c5642dc143076ecbe.jpg"
                                                                                    alt="Ardesia laccato lucido (076)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/908f7044f8d9d78c5642dc143076ecbe.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/ardesia_laccato_1217.jpg/908f7044f8d9d78c5642dc143076ecbe.jpg"
                                                                                        alt="Ardesia laccato lucido (076)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Ardesia laccato lucido (076)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Ardesia laccato lucido (076)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_bistro_laccato_1277.jpg/c3d9028f36dd0688161600553d7b30bf.jpg"
                                                                                    alt="Grigio Bistro Laccato Lucido (700)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c3d9028f36dd0688161600553d7b30bf.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_bistro_laccato_1277.jpg/c3d9028f36dd0688161600553d7b30bf.jpg"
                                                                                        alt="Grigio Bistro Laccato Lucido (700)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Bistro Laccato Lucido
                                                                                        (700)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Bistro Laccato Lucido (700)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin uk-first-column">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_perla_laccato_1284.jpg/c974125894517f7f10012e6ef8bb59a3.jpg"
                                                                                    alt="Grigio Perla Laccato Lucido (462)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c974125894517f7f10012e6ef8bb59a3.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_perla_laccato_1284.jpg/c974125894517f7f10012e6ef8bb59a3.jpg"
                                                                                        alt="Grigio Perla Laccato Lucido (462)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Perla Laccato Lucido
                                                                                        (462)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Perla Laccato Lucido (462)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ottanio_laccato_1316.jpg/789214aca07ec9af64ca3855c6991ad9.jpg"
                                                                                    alt="Ottanio Lucido (704)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/789214aca07ec9af64ca3855c6991ad9.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/ottanio_laccato_1316.jpg/789214aca07ec9af64ca3855c6991ad9.jpg"
                                                                                        alt="Ottanio Lucido (704)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Ottanio Lucido (704)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Ottanio Lucido (704)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_navy_laccato_1240.jpg/9d114ac9e5b6e12bb40933c1711b1a4c.jpg"
                                                                                    alt="Blu Navy Laccato Lucido (855)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9d114ac9e5b6e12bb40933c1711b1a4c.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/blu_navy_laccato_1240.jpg/9d114ac9e5b6e12bb40933c1711b1a4c.jpg"
                                                                                        alt="Blu Navy Laccato Lucido (855)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">Blu
                                                                                        Navy Laccato Lucido (855)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Blu Navy Laccato Lucido (855)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_topazio_laccato_1241.jpg/9a5b97b48d656220ec43d52deac31f2d.jpg"
                                                                                    alt="Blu Topazio Laccato Lucido (857)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9a5b97b48d656220ec43d52deac31f2d.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/blu_topazio_laccato_1241.jpg/9a5b97b48d656220ec43d52deac31f2d.jpg"
                                                                                        alt="Blu Topazio Laccato Lucido (857)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">Blu
                                                                                        Topazio Laccato Lucido (857)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Blu Topazio Laccato Lucido (857)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_lago_laccato_1368.jpg/37182152e505265f7406a8d4240edc34.jpg"
                                                                                    alt="Verde Lago Laccato Lucido (851)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/37182152e505265f7406a8d4240edc34.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/verde_lago_laccato_1368.jpg/37182152e505265f7406a8d4240edc34.jpg"
                                                                                        alt="Verde Lago Laccato Lucido (851)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Verde Lago Laccato Lucido (851)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Verde Lago Laccato Lucido (851)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_alpi_laccato_1367.jpg/027dc4a8104cd3cd97f3cb07af663fd1.jpg"
                                                                                    alt="Verde Alpi Laccato Lucido (853)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/027dc4a8104cd3cd97f3cb07af663fd1.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/verde_alpi_laccato_1367.jpg/027dc4a8104cd3cd97f3cb07af663fd1.jpg"
                                                                                        alt="Verde Alpi Laccato Lucido (853)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Verde Alpi Laccato Lucido (853)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Verde Alpi Laccato Lucido (853)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/rosso_veneziano_laccato_1329.jpg/369af845b38effaf40681f9c44a0a280.jpg"
                                                                                    alt="Rosso Veneziano Lucido (710)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/369af845b38effaf40681f9c44a0a280.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/rosso_veneziano_laccato_1329.jpg/369af845b38effaf40681f9c44a0a280.jpg"
                                                                                        alt="Rosso Veneziano Lucido (710)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Rosso Veneziano Lucido (710)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Rosso Veneziano Lucido (710)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/giallo_girasole_laccato_1270.jpg/29ca2fdf4a075c7d1406792b79a689f3.jpg"
                                                                                    alt="Giallo Girasole Laccato Lucido"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/29ca2fdf4a075c7d1406792b79a689f3.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/giallo_girasole_laccato_1270.jpg/29ca2fdf4a075c7d1406792b79a689f3.jpg"
                                                                                        alt="Giallo Girasole Laccato Lucido"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Giallo Girasole Laccato Lucido
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Giallo Girasole Laccato Lucido
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1282.jpg/a10dcc0919d4b8d0b779c359acc62c7f.jpg"
                                                                                    alt="Grigio Metallizzato Laccato Lucido (640)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/a10dcc0919d4b8d0b779c359acc62c7f.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1282.jpg/a10dcc0919d4b8d0b779c359acc62c7f.jpg"
                                                                                        alt="Grigio Metallizzato Laccato Lucido (640)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Metallizzato Laccato
                                                                                        Lucido (640)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Metallizzato Laccato Lucido (640)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/mazzetta_ral_k7_1307.jpg/3ab9d5662a808de6118418311f6eacc1.jpg"
                                                                                    alt="Mazzetta RAL (K7)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/3ab9d5662a808de6118418311f6eacc1.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/mazzetta_ral_k7_1307.jpg/3ab9d5662a808de6118418311f6eacc1.jpg"
                                                                                        alt="Mazzetta RAL (K7)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Mazzetta RAL (K7)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Mazzetta RAL (K7)
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Matt Lacquered</div>
                                                        <div class="overflow-x-section">
                                                            <div class="overflow-x-section__content">
                                                                <div class="sample-list-wrapper">
                                                                    <ul class="sample-list sample-list_overflow uk-grid"
                                                                        uk-grid="">
                                                                        <li class="uk-first-column">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_puro_1237.jpg/c5cff5d6579c1a5560c035e34f9f8f85.jpg"
                                                                                    alt="Bianco Puro Laccato Opaco (215)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c5cff5d6579c1a5560c035e34f9f8f85.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/bianco_puro_1237.jpg/c5cff5d6579c1a5560c035e34f9f8f85.jpg"
                                                                                        alt="Bianco Puro Laccato Opaco (215)"
                                                                                        uk-img=""
                                                                                        src="./index_files/c5cff5d6579c1a5560c035e34f9f8f85.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Bianco Puro Laccato Opaco (215)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Bianco Puro Laccato Opaco (215)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_laccato_1229.jpg/259b1b93fc6c713df1c7c3e9e70aba72.jpg"
                                                                                    alt="Bianco Laccato Opaco (159)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/259b1b93fc6c713df1c7c3e9e70aba72.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/bianco_laccato_1229.jpg/259b1b93fc6c713df1c7c3e9e70aba72.jpg"
                                                                                        alt="Bianco Laccato Opaco (159)"
                                                                                        uk-img=""
                                                                                        src="./index_files/259b1b93fc6c713df1c7c3e9e70aba72.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Bianco Laccato Opaco (159)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Bianco Laccato Opaco (159)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/panna_laccato_1317.jpg/c594267a2575913453b6a8601db3ddd3.jpg"
                                                                                    alt="Panna Opaco (211)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/c594267a2575913453b6a8601db3ddd3.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/panna_laccato_1317.jpg/c594267a2575913453b6a8601db3ddd3.jpg"
                                                                                        alt="Panna Opaco (211)"
                                                                                        uk-img=""
                                                                                        src="./index_files/c594267a2575913453b6a8601db3ddd3.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Panna Opaco (211)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Panna Opaco (211)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_corda_laccato_1280.jpg/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                    alt="Grigio Corda Laccato opaco (476)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_corda_laccato_1280.jpg/9a01bbf1283444fade4d0d5ad8258dbd.jpg"
                                                                                        alt="Grigio Corda Laccato opaco (476)"
                                                                                        uk-img=""
                                                                                        src="./index_files/9a01bbf1283444fade4d0d5ad8258dbd.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Corda Laccato opaco (476)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Corda Laccato opaco (476)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/beige_ecru_laccato_1223.jpg/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg"
                                                                                    alt="Beige Ecru Laccato Opaco (084)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/beige_ecru_laccato_1223.jpg/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg"
                                                                                        alt="Beige Ecru Laccato Opaco (084)"
                                                                                        uk-img=""
                                                                                        src="./index_files/cf1d1b3e0310e8d9a746e9d6d7affcde.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Beige Ecru Laccato Opaco (084)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Beige Ecru Laccato Opaco (084)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marron_visone_laccato_1305.jpg/5a3646967034411e0a3e23e65efd039b.jpg"
                                                                                    alt="Marrone Visone Laccato Opaco (681)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/5a3646967034411e0a3e23e65efd039b.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/marron_visone_laccato_1305.jpg/5a3646967034411e0a3e23e65efd039b.jpg"
                                                                                        alt="Marrone Visone Laccato Opaco (681)"
                                                                                        uk-img=""
                                                                                        src="./index_files/5a3646967034411e0a3e23e65efd039b.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Marrone Visone Laccato Opaco
                                                                                        (681)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Marrone Visone Laccato Opaco (681)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marrone_oliva_laccato_1304.jpg/3a3d160bb88ff87b7ee8781ce7a475c8.jpg"
                                                                                    alt="Marron Oliva Laccato Opaco (497)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/3a3d160bb88ff87b7ee8781ce7a475c8.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/marrone_oliva_laccato_1304.jpg/3a3d160bb88ff87b7ee8781ce7a475c8.jpg"
                                                                                        alt="Marron Oliva Laccato Opaco (497)"
                                                                                        uk-img=""
                                                                                        src="./index_files/3a3d160bb88ff87b7ee8781ce7a475c8.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Marron Oliva Laccato Opaco (497)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Marron Oliva Laccato Opaco (497)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/nero_laccato_1308.jpg/bd2bf55ba94ffd0a5ae5d42196dde645.jpg"
                                                                                    alt="Nero Laccato Opaco (514)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/bd2bf55ba94ffd0a5ae5d42196dde645.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/nero_laccato_1308.jpg/bd2bf55ba94ffd0a5ae5d42196dde645.jpg"
                                                                                        alt="Nero Laccato Opaco (514)"
                                                                                        uk-img=""
                                                                                        src="./index_files/bd2bf55ba94ffd0a5ae5d42196dde645.jpg">
                                                                                    <div class="sample-list__label">Nero
                                                                                        Laccato Opaco (514)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Nero Laccato Opaco (514)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ardesia_laccato_1217.jpg/908f7044f8d9d78c5642dc143076ecbe.jpg"
                                                                                    alt="Ardesia laccato opaco (077)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/908f7044f8d9d78c5642dc143076ecbe.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/ardesia_laccato_1217.jpg/908f7044f8d9d78c5642dc143076ecbe.jpg"
                                                                                        alt="Ardesia laccato opaco (077)"
                                                                                        uk-img=""
                                                                                        src="./index_files/908f7044f8d9d78c5642dc143076ecbe.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Ardesia laccato opaco (077)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Ardesia laccato opaco (077)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_bistro_laccato_1277.jpg/c3d9028f36dd0688161600553d7b30bf.jpg"
                                                                                    alt="Grigio Bistro Laccato Opaco (701)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c3d9028f36dd0688161600553d7b30bf.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_bistro_laccato_1277.jpg/c3d9028f36dd0688161600553d7b30bf.jpg"
                                                                                        alt="Grigio Bistro Laccato Opaco (701)"
                                                                                        uk-img=""
                                                                                        src="./index_files/c3d9028f36dd0688161600553d7b30bf.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Bistro Laccato Opaco
                                                                                        (701)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Bistro Laccato Opaco (701)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin uk-first-column">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_perla_laccato_1284.jpg/c974125894517f7f10012e6ef8bb59a3.jpg"
                                                                                    alt="Grigio Perla Laccato Opaco (463)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/c974125894517f7f10012e6ef8bb59a3.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_perla_laccato_1284.jpg/c974125894517f7f10012e6ef8bb59a3.jpg"
                                                                                        alt="Grigio Perla Laccato Opaco (463)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Perla Laccato Opaco (463)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Perla Laccato Opaco (463)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ottanio_laccato_1316.jpg/789214aca07ec9af64ca3855c6991ad9.jpg"
                                                                                    alt="Ottanio Opaco (705)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/789214aca07ec9af64ca3855c6991ad9.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/ottanio_laccato_1316.jpg/789214aca07ec9af64ca3855c6991ad9.jpg"
                                                                                        alt="Ottanio Opaco (705)"
                                                                                        uk-img=""
                                                                                        src="./index_files/789214aca07ec9af64ca3855c6991ad9.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Ottanio Opaco (705)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Ottanio Opaco (705)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_navy_laccato_1240.jpg/9d114ac9e5b6e12bb40933c1711b1a4c.jpg"
                                                                                    alt="Blu Navy Laccato Opaco (856)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9d114ac9e5b6e12bb40933c1711b1a4c.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/blu_navy_laccato_1240.jpg/9d114ac9e5b6e12bb40933c1711b1a4c.jpg"
                                                                                        alt="Blu Navy Laccato Opaco (856)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">Blu
                                                                                        Navy Laccato Opaco (856)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Blu Navy Laccato Opaco (856)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_topazio_laccato_1241.jpg/9a5b97b48d656220ec43d52deac31f2d.jpg"
                                                                                    alt="Blu Topazio Laccato Opaco (858)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/9a5b97b48d656220ec43d52deac31f2d.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/blu_topazio_laccato_1241.jpg/9a5b97b48d656220ec43d52deac31f2d.jpg"
                                                                                        alt="Blu Topazio Laccato Opaco (858)"
                                                                                        uk-img=""
                                                                                        src="./index_files/9a5b97b48d656220ec43d52deac31f2d.jpg">
                                                                                    <div class="sample-list__label">Blu
                                                                                        Topazio Laccato Opaco (858)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Blu Topazio Laccato Opaco (858)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_lago_laccato_1368.jpg/37182152e505265f7406a8d4240edc34.jpg"
                                                                                    alt="Verde Lago Laccato Opaco (852)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/37182152e505265f7406a8d4240edc34.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/verde_lago_laccato_1368.jpg/37182152e505265f7406a8d4240edc34.jpg"
                                                                                        alt="Verde Lago Laccato Opaco (852)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Verde Lago Laccato Opaco (852)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Verde Lago Laccato Opaco (852)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_alpi_laccato_1367.jpg/027dc4a8104cd3cd97f3cb07af663fd1.jpg"
                                                                                    alt="Verde Alpi Laccato Opaco (854)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/027dc4a8104cd3cd97f3cb07af663fd1.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/verde_alpi_laccato_1367.jpg/027dc4a8104cd3cd97f3cb07af663fd1.jpg"
                                                                                        alt="Verde Alpi Laccato Opaco (854)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Verde Alpi Laccato Opaco (854)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Verde Alpi Laccato Opaco (854)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/rosso_veneziano_laccato_1329.jpg/369af845b38effaf40681f9c44a0a280.jpg"
                                                                                    alt="Rosso Veneziano Opaco (711)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/369af845b38effaf40681f9c44a0a280.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/rosso_veneziano_laccato_1329.jpg/369af845b38effaf40681f9c44a0a280.jpg"
                                                                                        alt="Rosso Veneziano Opaco (711)"
                                                                                        uk-img=""
                                                                                        src="./index_files/369af845b38effaf40681f9c44a0a280.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Rosso Veneziano Opaco (711)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Rosso Veneziano Opaco (711)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/giallo_girasole_laccato_1270.jpg/29ca2fdf4a075c7d1406792b79a689f3.jpg"
                                                                                    alt="Giallo Girasole Laccato Opaco (862)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/29ca2fdf4a075c7d1406792b79a689f3.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/giallo_girasole_laccato_1270.jpg/29ca2fdf4a075c7d1406792b79a689f3.jpg"
                                                                                        alt="Giallo Girasole Laccato Opaco (862)"
                                                                                        uk-img=""
                                                                                        src="./index_files/29ca2fdf4a075c7d1406792b79a689f3.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Giallo Girasole Laccato Opaco
                                                                                        (862)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Giallo Girasole Laccato Opaco (862)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1282.jpg/a10dcc0919d4b8d0b779c359acc62c7f.jpg"
                                                                                    alt="Grigio Metallizzato Laccato Opaco (641)"
                                                                                    uk-img="" aria-expanded="false"
                                                                                    src="./index_files/a10dcc0919d4b8d0b779c359acc62c7f.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center uk-animation-fade uk-animation-enter"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px; animation-duration: 200ms;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1282.jpg/a10dcc0919d4b8d0b779c359acc62c7f.jpg"
                                                                                        alt="Grigio Metallizzato Laccato Opaco (641)"
                                                                                        uk-img=""
                                                                                        src="./index_files/a10dcc0919d4b8d0b779c359acc62c7f.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Grigio Metallizzato Laccato
                                                                                        Opaco (641)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Grigio Metallizzato Laccato Opaco (641)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/brunito_laccato_107_1242.jpg/c1ce9175dbb65afcd41f78122bc985fb.jpg"
                                                                                    alt="Brunito (107)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/c1ce9175dbb65afcd41f78122bc985fb.jpg"
                                                                                    class="">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown uk-dropdown-bottom-center"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150"
                                                                                    style="left: -60.1406px; top: 79.7187px;">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/brunito_laccato_107_1242.jpg/c1ce9175dbb65afcd41f78122bc985fb.jpg"
                                                                                        alt="Brunito (107)" uk-img=""
                                                                                        src="./index_files/c1ce9175dbb65afcd41f78122bc985fb.jpg">
                                                                                    <div class="sample-list__label">
                                                                                        Brunito (107)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Brunito (107)
                                                                            </div>
                                                                        </li>
                                                                        <li class="uk-grid-margin uk-first-column">
                                                                            <div class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/mazzetta_ral_k7_1307.jpg/3ab9d5662a808de6118418311f6eacc1.jpg"
                                                                                    alt="Mazzetta RAL (K7)" uk-img=""
                                                                                    aria-expanded="false"
                                                                                    src="./index_files/3ab9d5662a808de6118418311f6eacc1.jpg">
                                                                                <div
                                                                                    class="sample-list__hover uk-visible@m uk-dropdown"
                                                                                    uk-dropdown="" pos="bottom-center"
                                                                                    delay-hide="150">
                                                                                    <img
                                                                                        data-src="/cache/media/2019/03/mazzetta_ral_k7_1307.jpg/3ab9d5662a808de6118418311f6eacc1.jpg"
                                                                                        alt="Mazzetta RAL (K7)"
                                                                                        uk-img="">
                                                                                    <div class="sample-list__label">
                                                                                        Mazzetta RAL (K7)
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sample-list__label uk-hidden@m">
                                                                                Mazzetta RAL (K7)
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Fenix</div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_bianco_kos_714_1258.jpg/ac3b5279e7afe95089390ebbedd715b1.jpg"
                                                                        alt="Fenix Bianco Kos (714)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/ac3b5279e7afe95089390ebbedd715b1.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_bianco_kos_714_1258.jpg/ac3b5279e7afe95089390ebbedd715b1.jpg"
                                                                            alt="Fenix Bianco Kos (714)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Bianco Kos
                                                                            (714)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix Bianco
                                                                    Kos (714)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_castoro_ottawa_712_1259.jpg/0cbc4d6ebdd91ff58817e1fd5feb28a3.jpg"
                                                                        alt="Fenix Castoro Ottawa (712)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/0cbc4d6ebdd91ff58817e1fd5feb28a3.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_castoro_ottawa_712_1259.jpg/0cbc4d6ebdd91ff58817e1fd5feb28a3.jpg"
                                                                            alt="Fenix Castoro Ottawa (712)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Castoro
                                                                            Ottawa (712)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix
                                                                    Castoro Ottawa (712)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_grigio_londra_713_1261.jpg/c9e79380f7e010aee829d96124cf2cd4.jpg"
                                                                        alt="Fenix Grigio Londra (713)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/c9e79380f7e010aee829d96124cf2cd4.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_grigio_londra_713_1261.jpg/c9e79380f7e010aee829d96124cf2cd4.jpg"
                                                                            alt="Fenix Grigio Londra (713)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Grigio
                                                                            Londra (713)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix Grigio
                                                                    Londra (713)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_grigio_bromo_715_1260.jpg/e78fd2254755e3126c7756b6e20e8a80.jpg"
                                                                        alt="Fenix Grigio Bromo (715)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/e78fd2254755e3126c7756b6e20e8a80.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_grigio_bromo_715_1260.jpg/e78fd2254755e3126c7756b6e20e8a80.jpg"
                                                                            alt="Fenix Grigio Bromo (715)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Grigio
                                                                            Bromo (715)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix Grigio
                                                                    Bromo (715)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_nero_ingo_716_1262.jpg/1ee09b534b6cadd3f83f492290f8c7cb.jpg"
                                                                        alt="Fenix Nero Ingo (716)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/1ee09b534b6cadd3f83f492290f8c7cb.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_nero_ingo_716_1262.jpg/1ee09b534b6cadd3f83f492290f8c7cb.jpg"
                                                                            alt="Fenix Nero Ingo (716)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Nero Ingo
                                                                            (716)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix Nero
                                                                    Ingo (716)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_pietra_nera_718_1263.jpg/663ccc4a58790a6cffa3390df89f8999.jpg"
                                                                        alt="Fenix Pietra Nera (718)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/663ccc4a58790a6cffa3390df89f8999.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/fenix_pietra_nera_718_1263.jpg/663ccc4a58790a6cffa3390df89f8999.jpg"
                                                                            alt="Fenix Pietra Nera (718)" uk-img="">
                                                                        <div class="sample-list__label">Fenix Pietra
                                                                            Nera (718)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Fenix Pietra
                                                                    Nera (718)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Decorative</div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/sabbia_wood_dek_611_1350.jpg/88a0d239fc2d3b9647e3b7b26e6205b4.jpg"
                                                                        alt="Sabbia Wood DEK (611)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/88a0d239fc2d3b9647e3b7b26e6205b4.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/sabbia_wood_dek_611_1350.jpg/88a0d239fc2d3b9647e3b7b26e6205b4.jpg"
                                                                            alt="Sabbia Wood DEK (611)" uk-img="">
                                                                        <div class="sample-list__label">Sabbia Wood DEK
                                                                            (611)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Sabbia Wood
                                                                    DEK (611)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/cenere-wood-dek_612.jpg/6546fd9ad362303c2db7942c75798026.jpg"
                                                                        alt="Cenere Wood DEK (612)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/6546fd9ad362303c2db7942c75798026.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/05/cenere-wood-dek_612.jpg/6546fd9ad362303c2db7942c75798026.jpg"
                                                                            alt="Cenere Wood DEK (612)" uk-img="">
                                                                        <div class="sample-list__label">Cenere Wood DEK
                                                                            (612)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Cenere Wood
                                                                    DEK (612)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/terra_wood_dek_613_1363.jpg/ce59068c796c8ce0ee97dd02d57216df.jpg"
                                                                        alt="Terra Wood DEK (613)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/ce59068c796c8ce0ee97dd02d57216df.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/terra_wood_dek_613_1363.jpg/ce59068c796c8ce0ee97dd02d57216df.jpg"
                                                                            alt="Terra Wood DEK (613)" uk-img="">
                                                                        <div class="sample-list__label">Terra Wood DEK
                                                                            (613)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Terra Wood
                                                                    DEK (613)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/corten_rosso_dek_614_d.jpg/000bf3d8b2f643442a4701406e7bec52.jpg"
                                                                        alt="Corten Rosso DEK (614)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/000bf3d8b2f643442a4701406e7bec52.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/05/corten_rosso_dek_614_d.jpg/000bf3d8b2f643442a4701406e7bec52.jpg"
                                                                            alt="Corten Rosso DEK (614)" uk-img="">
                                                                        <div class="sample-list__label">Corten Rosso DEK
                                                                            (614)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Corten Rosso
                                                                    DEK (614)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/corten-grigio-dek_633_d.jpg/a1310beee6335296187b3e1aedb1fc6c.jpg"
                                                                        alt="Corten Grigio DEK (633)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/a1310beee6335296187b3e1aedb1fc6c.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/05/corten-grigio-dek_633_d.jpg/a1310beee6335296187b3e1aedb1fc6c.jpg"
                                                                            alt="Corten Grigio DEK (633)" uk-img="">
                                                                        <div class="sample-list__label">Corten Grigio
                                                                            DEK (633)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Corten
                                                                    Grigio DEK (633)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/vinile_grigio_dek_632_1371.jpg/1245ec80e2c5c936c555ef80263fc0e7.jpg"
                                                                        alt="Vinile Grigio DEK (632)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/1245ec80e2c5c936c555ef80263fc0e7.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/vinile_grigio_dek_632_1371.jpg/1245ec80e2c5c936c555ef80263fc0e7.jpg"
                                                                            alt="Vinile Grigio DEK (632)" uk-img="">
                                                                        <div class="sample-list__label">Vinile Grigio
                                                                            DEK (632)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Vinile
                                                                    Grigio DEK (632)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Steel</div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/acciaio_562_1216.jpg/c23e6c41b4f8217cae5190960a940899.jpg"
                                                                        alt="Acciaio (562)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/c23e6c41b4f8217cae5190960a940899.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/acciaio_562_1216.jpg/c23e6c41b4f8217cae5190960a940899.jpg"
                                                                            alt="Acciaio (562)" uk-img="">
                                                                        <div class="sample-list__label">Acciaio (562)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Acciaio
                                                                    (562)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/acciaio_vissuto_002_1215.jpg/5f6d0d052ba0f16381805a575e3ce1e7.jpg"
                                                                        alt="Acciaio Vissuto ( 002)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/5f6d0d052ba0f16381805a575e3ce1e7.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/acciaio_vissuto_002_1215.jpg/5f6d0d052ba0f16381805a575e3ce1e7.jpg"
                                                                            alt="Acciaio Vissuto ( 002)" uk-img="">
                                                                        <div class="sample-list__label">Acciaio Vissuto
                                                                            ( 002)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Acciaio
                                                                    Vissuto ( 002)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="uk-grid-margin uk-first-column">
                                                        <div class="sample-panel__label">Shellsystem Elite Wood</div>
                                                        <ul class="sample-list uk-grid" uk-grid="">
                                                            <li class="uk-first-column">
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/abete_ossidato_447_1214.jpg/815ef38b58057c1401e35d6eb8703f72.jpg"
                                                                        alt="Abete Ossidato (447)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/815ef38b58057c1401e35d6eb8703f72.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/abete_ossidato_447_1214.jpg/815ef38b58057c1401e35d6eb8703f72.jpg"
                                                                            alt="Abete Ossidato (447)" uk-img="">
                                                                        <div class="sample-list__label">Abete Ossidato
                                                                            (447)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Abete
                                                                    Ossidato (447)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_barrique_445_1330.jpg/515d5db05c5c83557b55a0d03abd294c.jpg"
                                                                        alt="Rovere Barrique (445)" uk-img=""
                                                                        aria-expanded="false"
                                                                        src="./index_files/515d5db05c5c83557b55a0d03abd294c.jpg">
                                                                    <div
                                                                        class="sample-list__hover uk-visible@m uk-dropdown"
                                                                        uk-dropdown="" pos="bottom-center"
                                                                        delay-hide="150">
                                                                        <img
                                                                            data-src="/cache/media/2019/03/rovere_barrique_445_1330.jpg/515d5db05c5c83557b55a0d03abd294c.jpg"
                                                                            alt="Rovere Barrique (445)" uk-img="">
                                                                        <div class="sample-list__label">Rovere Barrique
                                                                            (445)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sample-list__label uk-hidden@m">Rovere
                                                                    Barrique (445)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Wood</div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_nodoso_chiaro_799_1491.jpg/9b363d45cc153668211b63ec90f32d88.jpg"
                                                                        alt="Rovere Nodoso Chiaro" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Rovere Nodoso Chiaro
                                                                    (799)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_nodoso_grigio_455_1492.jpg/0986d32787f1750f99da1f3a990adb6b.jpg"
                                                                        alt="Rovere Nodoso Grigio" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Rovere Nodoso Grigio
                                                                    (455)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/noce_nodoso_446_1460.jpg/2a6bb68ee145a881c60406495992b60c.jpg"
                                                                        alt="Noce Nodoso" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Noce Nodoso (446)</div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Liquid Metal Finish Lacquered
                                                        </div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_platino_684_1442.jpg/ca7b5b6ad4bb2b3e0dfcf0c9c615b001.jpg"
                                                                        alt="Metallo Liquido Platino" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Metallo Liquido Platino
                                                                    (684)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_bronzo_685_1440.jpg/bb65ebb7ace513b5582ddcb2d9d05f4a.jpg"
                                                                        alt="Metallo Liquido Bronzo" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Metallo Liquido Bronzo
                                                                    (685)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/laccato_metallo_liquido_mercurio_686_1441.jpg/a19897b1ced7e14aa7b25ffa62c6e2d3.jpg"
                                                                        alt="Metallo Liquido Mercurio" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Metallo Liquido Mercurio
                                                                    (686)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Glossy Lacquered</div>
                                                        <div class="overflow-x-section">
                                                            <div class="overflow-x-section__content">
                                                                <div class="sample-list-wrapper">
                                                                    <ul class="sample-list sample-list_1-4 sample-list_overflow uk-grid uk-grid-stack"
                                                                        uk-grid="">
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_puro_1525.jpg/48ba63c4efe7b3df7d6eb6209aec9146.jpg"
                                                                                    alt="Bianco Puro Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Bianco Puro
                                                                                Laccato Lucido (214)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_laccato_1523.jpg/2952e0c12e2072c0ce55c094453820cc.jpg"
                                                                                    alt="Bianco Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Bianco
                                                                                Laccato Lucido (196)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/panna_laccato_1544.jpg/d2dc8b43b6a42aefb6a4e76c3ace1ce8.jpg"
                                                                                    alt="Panna Lucido" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Panna Lucido
                                                                                (209)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_corda_laccato_1532.jpg/c5ae32a03b68950a3d4801d1a13d0b74.jpg"
                                                                                    alt="Grigio Corda Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio Corda
                                                                                Laccato Lucido (473)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/beige_ecru_laccato_1522.jpg/2651f81d88c0249845d432d9a1b768fc.jpg"
                                                                                    alt="Beige Ecru Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Beige Ecru
                                                                                Laccato Lucido (083)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marron_visone_laccato_1538.jpg/e849520428b94a076df6eb002c5a7a2e.jpg"
                                                                                    alt="Marrone Visone Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Marrone
                                                                                Visone Laccato Lucido (680)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marrone_oliva_laccato_1539.jpg/be3176fa1c1c03a4a9ba453bbcfd039b.jpg"
                                                                                    alt="Marron Oliva Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Marron Oliva
                                                                                Laccato Lucido (496)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/nero_laccato_1541.jpg/5b0e87248e8c81a245e9626ec4416d2c.jpg"
                                                                                    alt="Nero Laccato Lucido" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Nero Laccato
                                                                                Lucido (517)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ardesia_laccato_1519.jpg/937bf54ad7e9dd156e736170f71c82d7.jpg"
                                                                                    alt="Ardesia laccato lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Ardesia
                                                                                laccato lucido (076)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_bistro_laccato_1531.jpg/9292203a12faa55e606f088be586b7ce.jpg"
                                                                                    alt="Grigio Bistro Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio
                                                                                Bistro Laccato Lucido (700)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_perla_laccato_1536.jpg/5df721c27ee5426e0ecd751099fa5272.jpg"
                                                                                    alt="Grigio Perla Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio Perla
                                                                                Laccato Lucido (462)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ottanio_laccato_1543.jpg/111c97b56d5b58e4f7c31e60ccf61684.jpg"
                                                                                    alt="Ottanio Lucido" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Ottanio
                                                                                Lucido (704)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_navy_laccato_1528.jpg/2c4096a3b155b9982e6cf7dc1403bd32.jpg"
                                                                                    alt="Blu Navy Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Blu Navy
                                                                                Laccato Lucido (855)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_topazio_laccato_1529.jpg/2740290d987ebd55dcae3b6ecb21e568.jpg"
                                                                                    alt="Blu Topazio Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Blu Topazio
                                                                                Laccato Lucido (857)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_lago_laccato_1548.jpg/d72c39dd4dbbc207bf86ee8606b17003.jpg"
                                                                                    alt="Verde Lago Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Verde Lago
                                                                                Laccato Lucido (851)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_alpi_laccato_1547.jpg/ddecad10508aa7f5d927adedc8bf0178.jpg"
                                                                                    alt="Verde Alpi Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Verde Alpi
                                                                                Laccato Lucido (853)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/rosso_veneziano_laccato_1546.jpg/08ceddfd4df4b87b4e4d6cad42801ba6.jpg"
                                                                                    alt="Rosso Veneziano Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Rosso
                                                                                Veneziano Lucido (710)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/giallo_girasole_laccato_1530.jpg/c145e8ffa62f823f3bcdd1b78be1c03e.jpg"
                                                                                    alt="Giallo Girasole Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Giallo
                                                                                Girasole Laccato Lucido
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1534.jpg/f73fd7bc34dd96b722b547e0c8729c2c.jpg"
                                                                                    alt="Grigio Metallizzato Laccato Lucido"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio
                                                                                Metallizzato Laccato Lucido (640)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/mazzetta_ral_k7_1456.jpg/eaf94e45f9ff819522baa12becd464ee.jpg"
                                                                                    alt="Mazzetta RAL" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Mazzetta RAL
                                                                                (K7)
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Matt Lacquered</div>
                                                        <div class="overflow-x-section">
                                                            <div class="overflow-x-section__content">
                                                                <div class="sample-list-wrapper">
                                                                    <ul class="sample-list sample-list_1-4 sample-list_overflow uk-grid uk-grid-stack"
                                                                        uk-grid="">
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_puro_1525.jpg/48ba63c4efe7b3df7d6eb6209aec9146.jpg"
                                                                                    alt="Bianco Puro Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Bianco Puro
                                                                                Laccato Opaco (215)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/bianco_laccato_1523.jpg/2952e0c12e2072c0ce55c094453820cc.jpg"
                                                                                    alt="Bianco Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Bianco
                                                                                Laccato Opaco (159)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/panna_laccato_1544.jpg/d2dc8b43b6a42aefb6a4e76c3ace1ce8.jpg"
                                                                                    alt="Panna Opaco" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Panna Opaco
                                                                                (211)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_corda_laccato_1532.jpg/c5ae32a03b68950a3d4801d1a13d0b74.jpg"
                                                                                    alt="Grigio Corda Laccato opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio Corda
                                                                                Laccato opaco (476)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/beige_ecru_laccato_1522.jpg/2651f81d88c0249845d432d9a1b768fc.jpg"
                                                                                    alt="Beige Ecru Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Beige Ecru
                                                                                Laccato Opaco (084)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marron_visone_laccato_1538.jpg/e849520428b94a076df6eb002c5a7a2e.jpg"
                                                                                    alt="Marrone Visone Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Marrone
                                                                                Visone Laccato Opaco (681)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/marrone_oliva_laccato_1539.jpg/be3176fa1c1c03a4a9ba453bbcfd039b.jpg"
                                                                                    alt="Marron Oliva Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Marron Oliva
                                                                                Laccato Opaco (497)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/nero_laccato_1541.jpg/5b0e87248e8c81a245e9626ec4416d2c.jpg"
                                                                                    alt="Nero Laccato Opaco" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Nero Laccato
                                                                                Opaco (514)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ardesia_laccato_1519.jpg/937bf54ad7e9dd156e736170f71c82d7.jpg"
                                                                                    alt="Ardesia laccato opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Ardesia
                                                                                laccato opaco (077)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_bistro_laccato_1531.jpg/9292203a12faa55e606f088be586b7ce.jpg"
                                                                                    alt="Grigio Bistro Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio
                                                                                Bistro Laccato Opaco (701)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_perla_laccato_1536.jpg/5df721c27ee5426e0ecd751099fa5272.jpg"
                                                                                    alt="Grigio Perla Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio Perla
                                                                                Laccato Opaco (463)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/ottanio_laccato_1543.jpg/111c97b56d5b58e4f7c31e60ccf61684.jpg"
                                                                                    alt="Ottanio Opaco" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Ottanio
                                                                                Opaco (705)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_navy_laccato_1528.jpg/2c4096a3b155b9982e6cf7dc1403bd32.jpg"
                                                                                    alt="Blu Navy Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Blu Navy
                                                                                Laccato Opaco (856)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/blu_topazio_laccato_1529.jpg/2740290d987ebd55dcae3b6ecb21e568.jpg"
                                                                                    alt="Blu Topazio Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Blu Topazio
                                                                                Laccato Opaco (858)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_lago_laccato_1548.jpg/d72c39dd4dbbc207bf86ee8606b17003.jpg"
                                                                                    alt="Verde Lago Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Verde Lago
                                                                                Laccato Opaco (852)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/verde_alpi_laccato_1547.jpg/ddecad10508aa7f5d927adedc8bf0178.jpg"
                                                                                    alt="Verde Alpi Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Verde Alpi
                                                                                Laccato Opaco (854)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/rosso_veneziano_laccato_1546.jpg/08ceddfd4df4b87b4e4d6cad42801ba6.jpg"
                                                                                    alt="Rosso Veneziano Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Rosso
                                                                                Veneziano Opaco (711)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/giallo_girasole_laccato_1530.jpg/c145e8ffa62f823f3bcdd1b78be1c03e.jpg"
                                                                                    alt="Giallo Girasole Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Giallo
                                                                                Girasole Laccato Opaco (862)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/grigio_metallizzato_laccato_1534.jpg/f73fd7bc34dd96b722b547e0c8729c2c.jpg"
                                                                                    alt="Grigio Metallizzato Laccato Opaco"
                                                                                    uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Grigio
                                                                                Metallizzato Laccato Opaco (641)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/brunito_laccato_107_1401.jpg/c15885bf4a89b363896c1bec011a37d9.jpg"
                                                                                    alt="Brunito" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Brunito
                                                                                (107)
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <figure class="sample-list__item">
                                                                                <img
                                                                                    data-src="/cache/media/2019/03/mazzetta_ral_k7_1456.jpg/eaf94e45f9ff819522baa12becd464ee.jpg"
                                                                                    alt="Mazzetta RAL" uk-img="">
                                                                            </figure>
                                                                            <div class="sample-list__label">Mazzetta RAL
                                                                                (K7)
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Fenix</div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_bianco_kos_714_1416.jpg/a5cfaf37b23e77d37528bbae386b8abc.jpg"
                                                                        alt="Fenix Bianco Kos" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Bianco Kos (714)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_castoro_ottawa_712_1417.jpg/11e5f083333645fe342c957311dcd57f.jpg"
                                                                        alt="Fenix Castoro Ottawa" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Castoro Ottawa
                                                                    (712)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_grigio_londra_713_1419.jpg/44dc279c55163ef7c9031f53d24c7153.jpg"
                                                                        alt="Fenix Grigio Londra" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Grigio Londra
                                                                    (713)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_grigio_bromo_715_1418.jpg/110035f3376c714d93dc6762ea7fc539.jpg"
                                                                        alt="Fenix Grigio Bromo" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Grigio Bromo
                                                                    (715)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_nero_ingo_716_1420.jpg/3f06d64eaf5d52a9373cf1d5711aa6ac.jpg"
                                                                        alt="Fenix Nero Ingo" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Nero Ingo (716)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/fenix_pietra_nera_718_1421.jpg/7dba464da83582541f7905f87603f274.jpg"
                                                                        alt="Fenix Pietra Nera" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Fenix Pietra Nera
                                                                    (718)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Decorative</div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/sabbia_wood_dek_611_1500.jpg/f5aee3f7ea3339feb6f3897bcade5b85.jpg"
                                                                        alt="Sabbia Wood DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Sabbia Wood DEK (611)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/cenere_wood_dek_612.jpg/0b401b79417dfed1daecc1d5faf1c219.jpg"
                                                                        alt="Cenere Wood DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Cenere Wood DEK (612)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/terra_wood_dek_613_1513.jpg/57f0eff595a73d3bdefc84ac00beee66.jpg"
                                                                        alt="Terra Wood DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Terra Wood DEK (613)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/corten_rosso_dek_614.jpg/7fc7795c202d72b8121af514ae7a2266.jpg"
                                                                        alt="Corten Rosso DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Corten Rosso DEK (614)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/05/corten_grigio_dek_633.jpg/d6ebd374d7024b8c94f6efaf20e340fa.jpg"
                                                                        alt="Corten Grigio DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Corten Grigio DEK
                                                                    (633)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/vinile_grigio_dek_632_1479.jpg/97b211d4a4c8660991afedef23cc05f2.jpg"
                                                                        alt="Vinile Grigio DEK" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Vinile Grigio DEK
                                                                    (632)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Steel</div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/acciaio_562_1385.jpg/e180177a43eab146952244ab7ea708ea.jpg"
                                                                        alt="Acciaio" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Acciaio (562)</div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/acciaio_vissuto_002_1384.jpg/d00295fc2db3d009421f3b68b0581aae.jpg"
                                                                        alt="Acciaio Vissuto" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Acciaio Vissuto ( 002)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul class="switcher__list uk-child-width-1-1 uk-grid uk-grid-stack"
                                                    uk-grid="">
                                                    <li>
                                                        <div class="sample-panel__label">Shellsystem Elite Wood</div>
                                                        <ul class="sample-list sample-list_1-4 uk-grid uk-grid-stack"
                                                            uk-grid="">
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/abete_ossidato_447_1383.jpg/15a91d51296322a0c13e2a42d8a446f8.jpg"
                                                                        alt="Abete Ossidato" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Abete Ossidato (447)
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure class="sample-list__item">
                                                                    <img
                                                                        data-src="/cache/media/2019/03/rovere_barrique_445_1480.jpg/a5102a75c4a42c644e939ab1dcde9c38.jpg"
                                                                        alt="Rovere Barrique" uk-img="">
                                                                </figure>
                                                                <div class="sample-list__label">Rovere Barrique (445)
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-flex-center uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-width-4-5@xl uk-first-column">
                            <div class="product-detail__content uk-grid-large uk-grid uk-grid-stack" uk-grid="">
                                <div class="uk-width-1-1 uk-first-column">
                                    <div data-reactive=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-section-muted section section_expanded unit uk-scrollspy-inview uk-animation-fade"
                         uk-scrollspy="" cls="uk-animation-fade" delay="500" style="">
                        <h3 class="section__title uk-h2 uk-text-center">Features</h3>
                        <div class="slider slider_gallery uk-slider uk-slider-container" uk-slider=""
                             id="details-slider" center="true">
                            <ul class="uk-slider-items uk-child-width-auto uk-grid" uk-grid=""
                                uk-lightbox="animation: slide" style="transform: translateX(-341px);">
                                <li class="" style="order: 1;">
                                    <a class="slider__item uk-link-reset uk-inline uk-transition-toggle"
                                       href="https://www.venetacucine.com/cache/media/2019/05/venetacucine-lounge-c1_4205.jpg/4e3078e35f15a36f4d5a5f044f20abed.jpg"
                                       data-caption="Lounge Shellsystem" tabindex="0">
                                        <figure class="slider__media">
                                            <img
                                                data-src="/cache/media/2019/05/venetacucine-lounge-c1_4205.jpg/363f7494b9a10301d77ce6b49a57fb55.jpg"
                                                alt="Lounge Shellsystem" uk-img=""
                                                src="./index_files/363f7494b9a10301d77ce6b49a57fb55.jpg">
                                        </figure>
                                        <div
                                            class="slider__caption uk-transition-fade uk-overlay uk-overlay-primary uk-visible@m">
                                            Lounge Shellsystem
                                        </div>
                                    </a>
                                </li>
                                <li class="uk-first-column" style="order: -1;">
                                    <a class="slider__item uk-link-reset uk-inline uk-transition-toggle"
                                       href="https://www.venetacucine.com/cache/media/2019/05/venetacucine-lounge-c2_4206.jpg/6bacd0481d332558bbdef602ff06b14b.jpg"
                                       data-caption="Lounge Pro" tabindex="0">
                                        <figure class="slider__media">
                                            <img
                                                data-src="/cache/media/2019/05/venetacucine-lounge-c2_4206.jpg/7c045c89330d71ed0bf6e72ac02ce853.jpg"
                                                alt="Lounge Pro" uk-img=""
                                                src="./index_files/7c045c89330d71ed0bf6e72ac02ce853.jpg">
                                        </figure>
                                        <div
                                            class="slider__caption uk-transition-fade uk-overlay uk-overlay-primary uk-visible@m">
                                            Lounge Pro
                                        </div>
                                    </a>
                                </li>
                                <li class="uk-active" style="">
                                    <a class="slider__item uk-link-reset uk-inline uk-transition-toggle"
                                       href="https://www.venetacucine.com/cache/media/2019/05/venetacucine-lounge-c3_4207.jpg/f4d8d2681453647a7b805b0a87d39dbd.jpg"
                                       data-caption="Lounge.Go" tabindex="0">
                                        <figure class="slider__media">
                                            <img
                                                data-src="/cache/media/2019/05/venetacucine-lounge-c3_4207.jpg/97d1525cccf6169fe9d99a267016fc5e.jpg"
                                                alt="Lounge.Go" uk-img=""
                                                src="./index_files/97d1525cccf6169fe9d99a267016fc5e.jpg">
                                        </figure>
                                        <div
                                            class="slider__caption uk-transition-fade uk-overlay uk-overlay-primary uk-visible@m">
                                            Lounge.Go
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="slider__slidenav uk-visible@m">
                                <ul class="slidenav uk-slidenav-container uk-flex-center">
                                    <li class="slidenav__item uk-visible@m">
                                        <a uk-slider-item="previous" class="slidenav__prev">
                                            <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true"
                                                 data-prefix="fal" data-icon="arrow-left" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                 data-fa-i2svg="">
                                                <path fill="currentColor"
                                                      d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                            </svg><!-- <i class="fal fa-arrow-left"></i> -->
                                        </a>
                                    </li>
                                    <li data-reactive=""><span>3 / 3</span></li>
                                    <li class="slidenav__item uk-visible@m">
                                        <a uk-slider-item="next" class="slidenav__next">
                                            <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true"
                                                 data-prefix="fal" data-icon="arrow-right" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                 data-fa-i2svg="">
                                                <path fill="currentColor"
                                                      d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                            </svg><!-- <i class="fal fa-arrow-right"></i> -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="unit">
                        <div class="uk-flex-center uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-width-4-5@xl uk-first-column">
                                <div class="product-detail__caranto uk-grid" uk-grid="">
                                    <div class="uk-width-1-2@m uk-first-column">
                                        <div class="product-detail__caranto-logo uk-text-center uk-hidden@m">
                                            <img src="./index_files/logo-caranto-horizontal.svg"
                                                 alt="Caranto is a new range of products designed to make your kitchen even more attractive. "
                                                 width="385" height="63">
                                        </div>
                                        <div
                                            class="product-detail__caranto-media uk-scrollspy-inview uk-animation-slide-left"
                                            uk-scrollspy="" cls="uk-animation-slide-left" style="">
                                            <img
                                                data-src="/frontend/images/placeholders/product-caranto-01.jpg?id=054749049b6866315c7b"
                                                alt="Veneta Cucine Caranto" uk-img=""
                                                src="./index_files/product-caranto-01.jpg">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@m">
                                        <div class="uk-width-2-3@xl uk-scrollspy-inview uk-animation-fade"
                                             uk-scrollspy="" cls="uk-animation-fade" style="">
                                            <div class="product-detail__caranto-logo uk-visible@m uk-margin-large-top">
                                                <img src="./index_files/logo-caranto-horizontal.svg"
                                                     alt="Caranto is a new range of products designed to make your kitchen even more attractive. "
                                                     width="385" height="63">
                                            </div>
                                            <h3 class="uk-h2 uk-margin-remove-top">Caranto is a new range of products
                                                designed to make your kitchen even more attractive. </h3>
                                            <p>Caranto is synonymous with elegant design and superb quality, especially
                                                as regards technical worktops, and each and every different model is
                                                built to the most exacting standards of quality and design. The wide
                                                range of finishes, both in quartz and in ceramic stoneware, offers an
                                                infinity of combinations.</p>
                                            <a href="http://www.caranto.com/en" target="_blank"
                                               class="uk-button button-outline uk-width-1-1 uk-width-auto@s">Find out
                                                more</a>
                                        </div>
                                        <figure
                                            class="uk-margin-large-top uk-visible@m uk-scrollspy-inview uk-animation-slide-right"
                                            uk-scrollspy="" cls="uk-animation-slide-right" style="">
                                            <img
                                                data-src="/frontend/images/placeholders/product-caranto-02.jpg?id=82153511dc608813f065"
                                                alt="Veneta Cucine Caranto" uk-img=""
                                                src="./index_files/product-caranto-02.jpg">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
