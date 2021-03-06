@extends('layouts.app')

@section('content')
    <div class=" uk-container ">
        <ul class="uk-breadcrumb uk-margin-top">
            <li><a href="/">Home</a></li>
            <li><span>Kitchens</span></li>
        </ul>
        <div class="uk-grid">
            <div class=" uk-width-1-1 ">
                <div data-reactive=""></div>

                <section class="uk-container">
                    <div class="page-header">
                        <div class="page-header__inner">
                            <h2 class="page-header__label">Kitchens</h2>
                            <h1 class="page-header__title">Choose your next kitchen</h1>
                        </div>
                    </div>
                </section>

                <section class="uk-container">
                    <div class="filters-wrapper" data-filters-content="" style="">
                        <div class="filters-nav">
                            <div class="uk-flex uk-flex-wrap uk-flex-between">
                                <a class="filters-nav__trigger uk-button button-outline" data-filters-trigger="">
                                    <svg class="svg-inline--fa fa-sliders-h fa-w-16 filters-nav__trigger-icon" aria-hidden="true" data-prefix="fal" data-icon="sliders-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 384H192v-40c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h88v40c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24v-40h312c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm-344 64h-32v-96h32v96zM504 96H256V56c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h152v40c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24v-40h248c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm-280 64h-32V64h32v96zm280 80h-88v-40c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h312v40c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24v-40h88c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm-120 64h-32v-96h32v96z"></path></svg><!-- <i class="fal fa-sliders-h filters-nav__trigger-icon"></i> -->
                                    <svg class="svg-inline--fa fa-arrow-left fa-w-14 filters-nav__trigger-icon filters-nav__trigger-icon_active" aria-hidden="true" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path></svg><!-- <i class="fal fa-arrow-left filters-nav__trigger-icon filters-nav__trigger-icon_active"></i> -->
                                    Filter results
                                </a>
                                <div data-reactive="" class="uk-flex-auto uk-visible@m"><div class="filters-nav__tag-wrapper"></div></div>
                                <div class="filters-nav__button-group uk-visible@m">
                                    <a class="filters-nav__button is-active" data-grid-trigger="is-third"><svg class="svg-inline--fa fa-th fa-w-16" aria-hidden="true" data-prefix="fal" data-icon="th" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48H48C21.49 32 0 53.49 0 80zm320-16v106.667H192V64h128zm160 245.333H352V202.667h128v106.666zm-160 0H192V202.667h128v106.666zM32 202.667h128v106.667H32V202.667zM160 64v106.667H32V80c0-8.837 7.163-16 16-16h112zM32 432v-90.667h128V448H48c-8.837 0-16-7.163-16-16zm160 16V341.333h128V448H192zm160 0V341.333h128V432c0 8.837-7.163 16-16 16H352zm128-277.333H352V64h112c8.837 0 16 7.163 16 16v90.667z"></path></svg><!-- <i class="fal fa-th"></i> --></a>
                                    <a class="filters-nav__button" data-grid-trigger="is-half"><svg class="svg-inline--fa fa-th-large fa-w-16" aria-hidden="true" data-prefix="fal" data-icon="th-large" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48H48C21.49 32 0 53.49 0 80zm240-16v176H32V80c0-8.837 7.163-16 16-16h192zM32 432V272h208v176H48c-8.837 0-16-7.163-16-16zm240 16V272h208v160c0 8.837-7.163 16-16 16H272zm208-208H272V64h192c8.837 0 16 7.163 16 16v160z"></path></svg><!-- <i class="fal fa-th-large"></i> --></a>
                                </div>
                            </div>
                        </div>
                        <div class="filters-bar" data-filters-bar="">
                            <div class="filters-bar__inner">
                                <div class="filters-bar__header">
                                    <div class="uk-width-1-1">Filter results</div>
                                    <a class="filters-bar__close uk-close-large uk-icon uk-close" data-filters-trigger="" uk-close=""><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line></svg></a>
                                </div>
                                <div class="filters-bar__content">
                                    <ul class="filters-bar__list uk-nav-default uk-nav-parent-icon uk-nav" uk-nav="" multiple="true">
                                        <li>
                                            <div data-reactive="" class="filters-bar__item">
                                                <div class="filters-bar__dynamic-filters">
                                                    <div>
                                                        <label class="uk-form-label">Door<!----></label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-child-width-auto uk-grid">
                                                                <label><input type="checkbox" name="tags[]" class="uk-checkbox" value="1">With handle</label>
                                                                <label><input type="checkbox" name="tags[]" class="uk-checkbox" value="2">Without handle</label>
                                                                <label><input type="checkbox" name="tags[]" class="uk-checkbox" value="3">With frame</label>
                                                                <label><input type="checkbox" name="tags[]" class="uk-checkbox" value="4">Flat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><label class="uk-form-label">Finishes<!----></label>
                                                        <div class="uk-form-controls">
                                                            <div class="uk-grid-small uk-child-width-auto uk-grid">
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="1"> <span>Wood</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="2"> <span>Steel</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="3"> <span>Lacquered</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="4"> <span>Glass</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="5"> <span>Quick lacquered</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="6"> <span>Decorative</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="7"> <span>Matt</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="8"> <span>Fenix</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="9"> <span>Colorboard</span></label>
                                                                <label><input type="checkbox" name="undefined[]" class="uk-checkbox" value="10"> <span>Silk</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                <div data-reactive="" class="uk-inline uk-width-1-1"><div class="uk-overlay-default uk-position-cover uk-position-z-index" style="display: none;">
                                        <div uk-sticky="" bottom="true" class="flipping-square uk-sticky"></div>
                                        <div class="uk-sticky-placeholder" hidden="" style="height: 0px; margin: 40px auto;"></div>
                                    </div>
                                    <ul uk-grid="" class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                        <li class="uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top"><img data-src="/cache/media/2019/05/venetacucine_lounge_4230.jpg/a313565f60e762332e207ca0d7d4f852.jpg" alt="Lounge" uk-img="" src="index_files/a313565f60e762332e207ca0d7d4f852.jpg"></div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Lounge</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/lounge?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Quick Design</span></div>
                                                <div class="card__media uk-card-media-top"><img data-src="/cache/media/2019/05/venetacucine_carrera_4231.jpg/8bdfc80d1da477e4d4a6da9b09eaefa7.jpg" alt="Carrera" uk-img="" src="index_files/8bdfc80d1da477e4d4a6da9b09eaefa7.jpg"></div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Carrera</h3> <div class="card__label card__label_uppercase uk-hidden@m">Quick Design</div></div>
                                                <a href="https://www.venetacucine.com/en/kitchens/carrera?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Quick Design</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_start-time_4232.jpg/1b650f647e4f703bc5bdb6ff3884a085.jpg" alt="Start-Time" uk-img="" src="index_files/1b650f647e4f703bc5bdb6ff3884a085.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Start-Time</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Quick Design</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/start-time?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Quick Design</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_tablet_4233.jpg/2974476460026eb46a2b8fa3db7c8548.jpg" alt="Tablet" uk-img="" src="index_files/2974476460026eb46a2b8fa3db7c8548.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Tablet</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Quick Design</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/tablet?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Quick Design</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_like_4234.jpg/84a67fae826607203181dd2c6ac47873.jpg" alt="Like" uk-img="" src="index_files/84a67fae826607203181dd2c6ac47873.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Like</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Quick Design</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/likego?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_oyster_4237.jpg/366a77a70067f1e5416a639e6417b1f1.jpg" alt="Oyster" uk-img="" src="index_files/366a77a70067f1e5416a639e6417b1f1.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Oyster</h3> <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/oyster?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_extra_4236.jpg/5a1c056e34318492084d02332c6cd2ae.jpg" alt="Extra" uk-img="" src="index_files/5a1c056e34318492084d02332c6cd2ae.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Extra</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/extra?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_ethica_4235.jpg/bc3dc88dad04567fab0ec60eb4c0589e.jpg" alt="Ethica" uk-img="" src="index_files/bc3dc88dad04567fab0ec60eb4c0589e.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Ethica</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/ethica?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_ri-flex_4238.jpg/d997e3c86b5181d3ad520f7e0a62a759.jpg" alt="Ri-flex" uk-img="" src="index_files/d997e3c86b5181d3ad520f7e0a62a759.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Ri-flex</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/ri-flex?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_dialogo_4239.jpg/5bed55f50b374c0795346b4295cae614.jpg" alt="Dialogo" uk-img="" src="index_files/5bed55f50b374c0795346b4295cae614.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Dialogo</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/dialogo?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_elegante_4240.jpg/7656a6cb323b31cb6e2913f8566e74ba.jpg" alt="Elegante" uk-img="" src="index_files/7656a6cb323b31cb6e2913f8566e74ba.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Elegante</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/elegante?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Essence</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_artemisia_4241.jpg/66ef8aabad906eaf701e63fa7df19631.jpg" alt="Artemisia" uk-img="" src="index_files/66ef8aabad906eaf701e63fa7df19631.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Artemisia</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Essence</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/artemisia?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/06/venetacucine_mirabeau_1000x560.jpg/a497afd6216395c2f9ca26493d73a221.jpg" alt="Mirabeau" uk-img="" src="index_files/a497afd6216395c2f9ca26493d73a221.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Mirabeau</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/mirabeau?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_newport_4243.jpg/ed51f96ef163a48cdbe4d9290b91726e.jpg" alt="Newport" uk-img="" src="index_files/ed51f96ef163a48cdbe4d9290b91726e.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Newport</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/newport?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_verdiana_4244.jpg/4da51d87e5565ea638bcde3ca183ddb8.jpg" alt="Verdiana" uk-img="" src="index_files/4da51d87e5565ea638bcde3ca183ddb8.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Verdiana</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/verdiana?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_villadeste_4245.jpg/0e1a888679591cc1b047d07931bf10be.jpg" alt="Villa d&#39;Este" uk-img="" src="index_files/0e1a888679591cc1b047d07931bf10be.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Villa d'Este</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/villa-d-este?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_memory_4246.jpg/bbebb3da9b699d132ba33ed3ee2ba31f.jpg" alt="Memory" uk-img="" src="index_files/bbebb3da9b699d132ba33ed3ee2ba31f.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Memory</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/memory?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_caveneta_4247.jpg/b6d6de6c191dde7a325a381959047410.jpg" alt="Ca&#39; Veneta" uk-img="" src="index_files/b6d6de6c191dde7a325a381959047410.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Ca' Veneta</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/ca-veneta?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin uk-first-column">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_vintage_4248.jpg/28ac91b5e0ec63c3ad36ef839847b804.jpg" alt="Vintage" uk-img="" src="index_files/28ac91b5e0ec63c3ad36ef839847b804.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Vintage</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/vintage?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                        <li class="uk-grid-margin">
                                            <div class="uk-card card card_small-overlay card_collapse-xsmall">
                                                <div class="card__label card__label_uppercase uk-text-right uk-visible@m"><span class="uk-text-muted">Tradizione</span></div>
                                                <div class="card__media uk-card-media-top">
                                                    <img data-src="/cache/media/2019/05/venetacucine_pavese_4249.jpg/77bfc8322fb4e7e7a88dc72eb811aa35.jpg" alt="Pavese" uk-img="" src="index_files/77bfc8322fb4e7e7a88dc72eb811aa35.jpg">
                                                </div>
                                                <div class="uk-card-body"><h3 class="card__title uk-h4 uk-margin-remove">Pavese</h3>
                                                    <div class="card__label card__label_uppercase uk-hidden@m">Tradizione</div>
                                                </div>
                                                <a href="https://www.venetacucine.com/en/kitchens/pavese?page=1&amp;perPage=30&amp;order=&amp;direction=" class="uk-position-cover"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div uk-grid="" data-reactive="" class="uk-grid uk-grid-stack"><div class="uk-width-1-1 uk-flex uk-flex-center uk-margin-top"><!----></div></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner-products">
                    <div class="uk-background-cover uk-visible@m" data-src="/resources/image/banner-products.jpg" data-srcset="/resources/image/banner-products.jpg 1200w, /resources/image/banner-products.jpg 1920w" data-sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" uk-img="" style="">
                        <img data-src="index_files/banner-products.jpg" data-srcset="index_files/banner-products.jpg 1200w, index_files/banner-products.jpg 1920w" data-sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" alt="Kitchens" class="uk-invisible" uk-img="" sizes="(min-width: 1200px) 1920px, (min-width: 960px) 1200px, 100vw" srcset="index_files/banner-products.jpg 1200w, index_files/banner-products.jpg 1920w" src="index_files/banner-products.jpg">
                    </div>
                    <div class="banner-products__content">
                        <div class="banner-products__caption uk-width-3-5@m uk-width-2-5@xl uk-scrollspy-inview uk-animation-fade" uk-scrollspy="" cls="uk-animation-fade" delay="500" style="">
                            <div class="banner-products__text">A kitchen project experiences two essential moments: the choice of the product in relation to functional and appearance requirements, and the method of using it through actions and practices that exploit the furnished kitchen to the greatest extent possible and also make it more personal. Its image is created through its expression of the diverse ways of experiencing daily living.</div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
