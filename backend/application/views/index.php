<?php $this->load->view($content); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="Keyword" content="Ride Sharing"/>
    <meta name="Descriptions" content=""/>
    <title>Ride Sharing</title>
    <meta name="keywords" content="Ride Sharing"/>
    <meta name="description" content=""/>
    <base/>
    <link rel="icon" href="Page-Not-Found.html" type="image/x-icon"/>
    <link rel="shortcut icon" href="Page-Not-Found.html" type="image/x-icon">
    <link rel="apple-touch-icon" href="Page-Not-Found.html">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>

    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/home/home.css'); ?> rel="stylesheet"
          type="text/css"/>
    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/home/homemenu.css'); ?> rel="stylesheet"
          type="text/css"/>
    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/home/homemedia.css'); ?> rel="stylesheet"
          type="text/css"/>
    <!----------------- HOME LANGUAGE CSS ------------------------>

    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/EN/lang.css'); ?> rel="stylesheet" type="text/css"/>
    <!----------------- /HOME LANGUAGE CSS ------------------------>

    <script type="text/javascript" src="public_html/javascripts/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet"
          href=<?= base_url('assets/public_html/stylesheets/Theme36/front/validationEngine.jquery.css'); ?>
          type="text/css"/>
    <link href="notifications/css/jquery_notification.css type=" text
    /css" rel="stylesheet"/>
    <script src="public_html/javascripts/jquery.validationEngine-en.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="public_html/javascripts/jquery.validationEngine.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="public_html/javascripts/ajax_newsletter.js"></script>
    <script type="text/javascript" src="notifications/js/jquery_notification_v.1.js"></script>
    <script src="public_html/javascripts/script.js"></script>

    <script>
        var cookietext =
            'We use cookies to give you the best possible online experience. If you continue, we will assume you';
        var viewcookie = 'View Cookie Policy';
        var cookieaccept = 'I AGREE to the use of cookies';

    </script>

    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/front/twc.css'); ?> rel="stylesheet"
          type="text/css"/>
    <script type="text/javascript" src="public_html/javascripts/cookies.js"></script>

    <script>
        $(document).ready(function () {
            $('.tabs-account ul').hide();
            $(".open-s").click(function () {
                $(".tabs-account-list").toggle('fast');
            });
        });

    </script>


    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/home/application.css'); ?> media="all"
          rel="stylesheet" type="text/css">
    <script src="public_html/javascripts/conversion_async.js" async="" type="text/javascript"></script>
    <!--<script src="http://www.ridesharingscript.com/ridesharing/public_html/javascripts/application-ba4cfef7752778f6f6e3850a819dedc0.js" type="text/javascript"></script>-->
    <script src="public_html/javascripts/backstretch-29d4fdd11161d58cef6a48166cde0ac8.js"
            type="text/javascript"></script>
    <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
    <link rel="stylesheet" type="text/css"
          href=<?= base_url('assets/public_html/stylesheets/Theme36/front/simptip-mini.css'); ?>
          media="screen,projection"/>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places&amp;key=AIzaSyDvVTRDkVBKwGRLZLB4b-s_gANsV6zrtbY"></script>
    <script type="text/javascript" src="public_html/javascripts/gmap3.js"></script>
    <script src="public_html/javascripts/modernizr.custom.67841.js" type="text/javascript"></script>

    <script type="text/javascript">
        var site_url = 'index.html';

        function swapaddress() {
            $('#From').val([$('#To').val(), $('#To').val($('#From').val())][0]);
        }
    </script>
    <script type="text/javascript" src="rrb/zebra_datepicker.src.js"></script>
    <link rel="stylesheet" href="rrb/default.css" type="text/css">

    <link href=<?= base_url('assets/public_html/stylesheets/Theme36/home/slimmenu.css'); ?> rel="stylesheet"
          type="text/css"/>
    <script type="text/javascript" src="public_html/javascripts/jquery.fancybox8cbb.js?v=2.1.5"></script>
    <script type="text/javascript" src="public_html/javascripts/jquery.fancyboxnew8cbb.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css"
          href=<?= base_url('assets/public_html/stylesheets/Theme36/front/jquery.fancybox8cbb.css?v=2.1.5'); ?>
          media="screen"/>
    <link rel="stylesheet" type="text/css"
          href=<?= base_url('assets/public_html/stylesheets/Theme36/front/simptip-mini.css'); ?>  media="screen,projection"/>
    <!-- FOR CONFIRAMTION (By Vikrant) -->
    <script type="text/javascript" src="notifications/notiejs/notie.js"></script>

</head>
<body>
<div id="main-content">
    <!-- top part -->
    <div id="top-part" class="">
        <div class="top-part-inner">
            <div class="top-select-part">
                <div class="select-box select-box-home">
                    <div class="home-top-lang">
                        <div class="lang-part" id="lang-part-id">
                            <div class="lang" id="lang_open">
                                <b>
                                    <a href="javascript:void(0);">
                                        English
                                    </a>
                                </b>
                            </div>
                            <div class="lang-all" id="lang_box" style="display:none">
                                <div class="lang-all-inner">
                                    <h2>Select your Language
                                        <img src="<?= base_url('assets/public_html/images/cancel-but.png'); ?>"
                                             alt="cancel" id="hide_langs"/>
                                    </h2>
                                    <ul>
                                        <li onclick="change_lang('EN');">
                                            <a href="javascript:void(0);" class="active">English</a>
                                        </li>
                                        <li onclick="change_lang('DN');">
                                            <a href="javascript:void(0);">Danish</a>
                                        </li>
                                        <li onclick="change_lang('EE');">
                                            <a href="javascript:void(0);">Estonian</a>
                                        </li>
                                        <li onclick="change_lang('FI');">
                                            <a href="javascript:void(0);">Finnish</a>
                                        </li>
                                        <li onclick="change_lang('FN');">
                                            <a href="javascript:void(0);">French</a>
                                        </li>
                                        <li onclick="change_lang('DE');">
                                            <a href="javascript:void(0);">German</a>
                                        </li>
                                        <li onclick="change_lang('LV');">
                                            <a href="javascript:void(0);">Latvian</a>
                                        </li>
                                        <li onclick="change_lang('AF');">
                                            <a href="javascript:void(0);">Afrikaans</a>
                                        </li>
                                        <li onclick="change_lang('LT');">
                                            <a href="javascript:void(0);">Lithuanian</a>
                                        </li>
                                        <li onclick="change_lang('NO');">
                                            <a href="javascript:void(0);">Norwegian</a>
                                        </li>
                                        <li onclick="change_lang('PO');">
                                            <a href="javascript:void(0);">Polish</a>
                                        </li>
                                        <li onclick="change_lang('RS');">
                                            <a href="javascript:void(0);">Russian</a>
                                        </li>
                                        <li onclick="change_lang('ES');">
                                            <a href="javascript:void(0);">Spanish</a>
                                        </li>
                                        <li onclick="change_lang('SW');">
                                            <a href="javascript:void(0);">Swedish</a>
                                        </li>
                                        <li onclick="change_lang('IT');">
                                            <a href="javascript:void(0);">Italian</a>
                                        </li>
                                        <li onclick="change_lang('AR');">
                                            <a href="javascript:void(0);">Arabic</a>
                                        </li>
                                        <li onclick="change_lang('PS');">
                                            <a href="javascript:void(0);">Persian</a>
                                        </li>
                                        <li onclick="change_lang('AZ');">
                                            <a href="javascript:void(0);">Ajarbaijani</a>
                                        </li>
                                        <li onclick="change_lang('BG');">
                                            <a href="javascript:void(0);">Bulgarian</a>
                                        </li>
                                        <li onclick="change_lang('ZH');">
                                            <a href="javascript:void(0);">Chinese</a>
                                        </li>
                                        <li onclick="change_lang('HR');">
                                            <a href="javascript:void(0);">Croatian</a>
                                        </li>
                                        <li onclick="change_lang('CS');">
                                            <a href="javascript:void(0);">Czech</a>
                                        </li>
                                        <li onclick="change_lang('NL');">
                                            <a href="javascript:void(0);">Dutch</a>
                                        </li>
                                        <li onclick="change_lang('EL');">
                                            <a href="javascript:void(0);">Greek</a>
                                        </li>
                                        <li onclick="change_lang('HU');">
                                            <a href="javascript:void(0);">Hungrain</a>
                                        </li>
                                        <li onclick="change_lang('GA');">
                                            <a href="javascript:void(0);">Irish</a>
                                        </li>
                                        <li onclick="change_lang('JA');">
                                            <a href="javascript:void(0);">Japanese</a>
                                        </li>
                                        <li onclick="change_lang('MT');">
                                            <a href="javascript:void(0);">Maltese</a>
                                        </li>
                                        <li onclick="change_lang('PT');">
                                            <a href="javascript:void(0);">Portuguese</a>
                                        </li>
                                        <li onclick="change_lang('SK');">
                                            <a href="javascript:void(0);">Slovak</a>
                                        </li>
                                        <li onclick="change_lang('AF');">
                                            <a href="javascript:void(0);">Afrikaans</a>
                                        </li>
                                        <li onclick="change_lang('SL');">
                                            <a href="javascript:void(0);">Slovenian</a>
                                        </li>
                                        <li onclick="change_lang('TS');">
                                            <a href="javascript:void(0);">Turkish</a>
                                        </li>
                                        <li onclick="change_lang('RO');">
                                            <a href="javascript:void(0);">Romaian</a>
                                        </li>

                                    </ul>
                                    <p>Can't find your language here? No worry ! You can contact us, we will add it for
                                        you.
                                        <a href="contactus.html">Contact</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="currency-part" id="currency-part-id">
                            <div class="lang" id="lang_open1">
                                <b>
                                    <a href="javascript:void(0);">USD</a>
                                </b>
                            </div>
                            <div class="lang-all" id="lang_box1" style="display:none">
                                <div class="lang-all-inner">
                                    <h2>Select your Currency
                                        <img src="<?= base_url('assets/public_html/images/cancel-but.png'); ?>"
                                             alt="cancel" id="hide_currency"/>
                                    </h2>
                                    <ul>
                                        <li onclick="change_currency('USD')">
                                            <a href="javascript:void(0);" class="active">USD</a>
                                        </li>
                                        <li onclick="change_currency('GBP')">
                                            <a href="javascript:void(0);">GBP</a>
                                        </li>
                                        <li onclick="change_currency('EUR')">
                                            <a href="javascript:void(0);">EUR</a>
                                        </li>
                                        <li onclick="change_currency('NOK')">
                                            <a href="javascript:void(0);">NOK</a>
                                        </li>
                                        <li onclick="change_currency('PLN')">
                                            <a href="javascript:void(0);">PLN</a>
                                        </li>
                                        <li onclick="change_currency('RUB')">
                                            <a href="javascript:void(0);">RUB</a>
                                        </li>
                                        <li onclick="change_currency('SEK')">
                                            <a href="javascript:void(0);">SEK</a>
                                        </li>
                                        <li onclick="change_currency('DKK')">
                                            <a href="javascript:void(0);">DKK</a>
                                        </li>
                                        <li onclick="change_currency('BRL')">
                                            <a href="javascript:void(0);">BRL</a>
                                        </li>
                                        <li onclick="change_currency('IRR')">
                                            <a href="javascript:void(0);">IRR</a>
                                        </li>
                                        <li onclick="change_currency('UAE')">
                                            <a href="javascript:void(0);">UAE</a>
                                        </li>
                                        <li onclick="change_currency('INR')">
                                            <a href="javascript:void(0);">INR</a>
                                        </li>
                                        <li onclick="change_currency('AZN')">
                                            <a href="javascript:void(0);">AZN</a>
                                        </li>
                                        <li onclick="change_currency('BGN')">
                                            <a href="javascript:void(0);">BGN</a>
                                        </li>
                                        <li onclick="change_currency('CNY')">
                                            <a href="javascript:void(0);">CNY</a>
                                        </li>
                                        <li onclick="change_currency('HRK')">
                                            <a href="javascript:void(0);">HRK</a>
                                        </li>
                                        <li onclick="change_currency('CZK')">
                                            <a href="javascript:void(0);">CZK</a>
                                        </li>
                                        <li onclick="change_currency('NLG')">
                                            <a href="javascript:void(0);">NLG</a>
                                        </li>
                                        <li onclick="change_currency('HUF')">
                                            <a href="javascript:void(0);">HUF</a>
                                        </li>
                                        <li onclick="change_currency('JPY')">
                                            <a href="javascript:void(0);">JPY</a>
                                        </li>
                                        <li onclick="change_currency('TRY')">
                                            <a href="javascript:void(0);">TRY</a>
                                        </li>
                                        <li onclick="change_currency('RON')">
                                            <a href="javascript:void(0);">RON</a>
                                        </li>
                                        <li onclick="change_currency('KSH')">
                                            <a href="javascript:void(0);">KSH</a>
                                        </li>
                                    </ul>
                                    <p>Don't find your Currency here? No worry! You can contact us, we will add it for
                                        you.
                                        <a href="contactus.html">Contact</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span>
                <a href="sign-in.html">Log in</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="sign-up.html">Sign Up</a>
              </span>

                </div>
            </div>
            <div class="top-logo-menu-part">
                <div class="logo">

                    <a href="index.html">
                        <img src="<?= base_url('assets/public_html/images/home/Theme36/logo.png'); ?>">
                    </a>
                </div>

                <div class="menu-part">
                    <!--navigation-res-->
                    <ul class="slimmenu">
                        <li class="test">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="find-ride.html">Find ride</a>
                        </li>
                        <li>
                            <a target="_blank" href="blog/index.html">Blogs</a>
                        </li>
                        <!-- <li><a href="http://www.ridesharingscript.com/ridesharing/aboutus"  >About Us </a> </li> -->
                        <!-- <li><a href="http://www.ridesharingscript.com/ridesharing/contactus" >Contact</a></li> -->
                        <li class="last">
                            <a href="index91ad.html">Offer ride</a>
                        </li>
                    </ul>
                    <!--navigation-res end-->
                    <script type="text/javascript" src="public_html/javascripts/jquery.slimmenu.js"></script>
                    <script type="text/javascript" src="public_html/javascripts/jquery.easing.min.js"></script>
                    <script>
                        $('ul.slimmenu').slimmenu({
                            resizeWidth: '1023',
                            collapserTitle: '',
                            easingEffect: 'easeInOutQuint',
                            animSpeed: 'medium',
                            indentChildren: true,
                            childrenIndenter: '&raquo;'
                        });

                    </script>

                </div>
            </div>

        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<div style="display:none">
    <div id="locationmodel">
        <div class="popup-from popup-from2 popup-from-home">
            <form name="get_location_search" id="get_location_search" method="post" action="javascript:void(0);"
                  style="margin:0px;">
                <h3>Show only near-by Rides</h3>
                <p>Show me all rides that fall with-in 10km/Miles from the area you want.</p>
                <input name="Location_get_lat_long" id="Location_get_lat_long" type="hidden" value="">
                <input name="location_get" id="Location_get" type="text" placeholder="Enter your location"
                       class="validate[required] search-car-find-cla"
                       value=""/>
                <p>
                    <B>Selecting this option, the whole website will show rides only from the range of Area that you
                        select</b>
                </p>
                <a href="javascript:void(0);" onclick="search_location_now();" class="ride-list-but1">
                    <img src="<?= base_url('assets/public_html/images/search-icon.png'); ?>"/>Search</a>
            </form>
        </div>
    </div>
</div>

<!-- top part end -->
<!-- header part -->
<div id="header-part"
     style="background-image:url(<?= base_url('assets/public_html/uploads/banner/banner-img1_20170628033549.jpg') ?>)">
    <!-- <img src="http://www.ridesharingscript.com/ridesharing/public_html/images/home/Theme36/header-img.jpg" alt="" height="666" /> -->
    <div id="sldier" class="index">
        <div style="position: relative; z-index: 10; background: none repeat scroll 0% 0% transparent;" id="finder"
             class="collapse">
            <div class="container carpool">
                <div class="row">
                    <div class="span12">
                        <div class="intro hidden-phone">
                            <h5>Looking for a ride? </h5>
                            <h3>Find people travelling to your destination</h3>
                            <!--<p class="lead">More fun, Less expensive and more flexible transport!</p>-->
                        </div>
                        <form name="home_search" id="home_search" method="post"
                              action="http://www.ridesharingscript.com/ridesharing/index.php?file=c-ride_list">
                            <div style="margin:0;padding:0;display:inline"></div>
                            <input name="search" id="search" type="hidden" value="place">
                            <input name="From_lat_long" id="From_lat_long" type="hidden" value="">
                            <input name="To_lat_long" id="To_lat_long" type="hidden" value="">
                            <!--<span class="Search-ride-from">Find ride</span>-->
                            <div class="header-up-bg">
                    <span class="js-autocompleter">
                      <input name="From" id="From" type="text" placeholder="From (postcode, street, or town)"
                             class="validate[required] span3 from autocompleted"
                             value="" tabindex="1"/>
                    </span>
                                <span id="swapper" class="swap-img">
                      <a href="javascript:void(0)" onClick="swapaddress();">
                        <img src="<?= base_url('assets/public_html/images/swap.png'); ?>"
                             style="width:30px;height:30px;"/>
                      </a>
                    </span>
                                <!--<span class="reverse"> <span class="splash-version">to</span> </span>-->
                                <span class="js-autocompleter">
                      <input placeholder="To (postcode, street, or town)" name="To" id="To" tabindex="2" type="text"
                             class="validate[required] span3 to autocompleted"
                             value=""/>
                    </span>
                                <input name="searchdate" id="searchdate" type="text" tabindex="3"
                                       class="datepicker span2 hasDatepicker" value="" placeholder="Date"
                                />
                                <div class="btn-group" id="top-search-button">
                                    <a href="javascript:void(0);" onClick="search_now();"
                                       class="btn btn-warning submitter" tabindex="4">Search</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-banner-rids-img">
            <div class="home-banner-rids-img-inner">
                <ul>
                    <li>
                        <a href="find-ride.html">Find ride</a>
                    </li>
                    <li>
                        <a href="#rides-content">Book now</a>
                    </li>
                    <li>
                        <a href="search-ride-with-filter.html?file=c-ride_list&amp;search=simple&amp;type=latest">Travel </a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<!-- header part ends-->
<!-- body part -->
<div id="body-content">
    <div class="how-does-work">
        <div class="how-does-work-inner">
            <h2>See, How does it works?</h2>
            <div class="how-does-work-left">
                <h3>It's easy</h3>
                <p>Individuals can earn extra money while solving the transportation problem by offering an affordable
                    and convenient
                    alternative to taxi and vehicle services. This can also help you earn some extra dollars every
                    day.</p>
            </div>
            <div class="how-does-work-mid">
                <img src="<?= base_url('assets/public_html/uploads/media_partners/How-to-work-mid-img_20160128214930.png') ?>"
                     alt="">
            </div>
            <div class="how-does-work-right">
            <span>
              <h3 class="how-does-work-right-heading-find">Find a match</h3>
              <p>Find People who share similar journey and match criteria. </p>
            </span>
                <span>
              <h3 class="how-does-work-right-heading-book">Book</h3>
              <p>Book your ride online in few clicks. </p>
            </span>
                <span>
              <h3 class="how-does-work-right-heading-that-all">That's all</h3>
              <p>Connect people &amp; make new friends.</p>
            </span>
            </div>
            <div class="how-work-bottom-img">
                <img src="<?= base_url('assets/public_html/images/home/Theme36/how-work-bottom-img.jpg'); ?>" alt="">
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- -->
    <div id="rides-content">
        <div class="rides-content-inner">
            <div class="upcoming-rides-area">
                <h2>Latest Rides
                    <a href="search-ride-with-filter.html?file=c-ride_list&amp;search=simple&amp;type=latest">View
                        more</a>
                </h2>
                <ul>
                    <li>
                        <a href="index4b8a.html?file=c-ride_details&amp;from=home&amp;id=1&amp;dt=1517337000&amp;ret=No">
                            <div class="trip roundcol simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Las Vegas, NV, United States - New York, NY, United States">
                                <div class="rides-img">
                      <span>
                        <img src="<?= base_url('assets/public_html/uploads/member/1/4_1502287700_11458.jpg'); ?>"
                             class="mem-img"/>
                      </span>
                                </div>
                                <div class="rides-text">
                                    <p>31 Jan 2018 - 23:10</p>
                                    <h3>Las Vegas,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;New York,...
                                        <br/> Cars: Austin Mini</h3>
                                    <div class="no-smoking-img "></div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style="  position:relative; top:-10px; margin-right: 10px;display: block; width: %; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 253.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index41e0.html?file=c-ride_details&amp;from=home&amp;id=148&amp;dt=1517337000&amp;ret=No">
                            <div class="trip roundcol simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Delhi, India - Jaipur, Rajasthan, India">
                                <div class="rides-img">
                      <span>
                        <img src="<?= base_url('assets/public_html/uploads/member/62/3_1516944130_81365.jpg'); ?>"
                             class="mem-img"/>
                      </span>
                                </div>
                                <div class="rides-text">
                                    <p>31 Jan 2018 - 12:37</p>
                                    <h3>Delhi, India&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Jaipur,...
                                        <br/> Cars: Suzuki Swift</h3>
                                    <div class="no-smoking-img "></div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style="  position:relative; top:-10px; margin-right: 10px;display: block; width: %; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 5.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ladies-rides">
                <h2>Ladies only rides
                    <a href="indexd780.html?file=c-ride_list&amp;search=simple&amp;type=ladiesonly">View more</a>
                </h2>
                <ul>
                    <li>
                        <a href="index91e7.html?file=c-ride_details&amp;from=home&amp;id=4&amp;dt=1533493800&amp;ret=No">
                            <div class="trip ladiescol  simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Seattle, WA, United States - Boston, MA, United States">
                                <div class="rides-img">
                      <span>
                        <img src="Page-Not-Found.html" alt=""/> </span>
                                </div>
                                <div class="rides-text">
                                    <p>6 Aug 2018 - 23:20</p>
                                    <h3>Seattle, WA,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Boston, MA,...
                                        <br/> Cars: Buddy Basic</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="It's all about the Playlist!">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_67648.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I love to chat">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_73190.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Depending on my mood">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_72125.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style=" position:relative; top:-10px; margin-right: 10px;display: block; width: 0%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 305.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="indexa86b.html?file=c-ride_details&amp;from=home&amp;id=4&amp;dt=1534185000&amp;ret=No">
                            <div class="trip ladiescol  last  simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Seattle, WA, United States - Boston, MA, United States">
                                <div class="rides-img">
                      <span>
                        <img src="Page-Not-Found.html" alt=""/> </span>
                                </div>
                                <div class="rides-text">
                                    <p>14 Aug 2018 - 23:20</p>
                                    <h3>Seattle, WA,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Boston, MA,...
                                        <br/> Cars: Buddy Basic</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="It's all about the Playlist!">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_67648.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I love to chat">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_73190.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Depending on my mood">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_72125.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style=" position:relative; top:-10px; margin-right: 10px;display: block; width: 0%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 305.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div style="clear:both;"></div>
        </div>
        <!------------------------------------------------------------------------------>
        <div class="rides-content-inner">
            <div class="upcoming-rides-area">
                <h2>Airport rides
                    <a href="index803d.html?file=c-ride_list&amp;search=simple&amp;type=airport">View more</a>
                </h2>
                <ul>
                    <li>
                        <a href="indexa156.html?file=c-ride_details&amp;from=home&amp;id=1&amp;dt=1534271400&amp;ret=No">
                            <div class="trip roundcol simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Las Vegas, NV, United States - New York, NY, United States">
                                <div class="rides-img">
                      <span>
                        <img src="<?= base_url('assets/public_html/uploads/member/1/4_1502287700_11458.jpg'); ?>"
                             class="mem-img"/>
                      </span>
                                </div>
                                <div class="rides-text">
                                    <p>15 Aug 2018 - 23:10</p>
                                    <h3>Las Vegas,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;New York,...
                                        <br/> Cars: Austin Mini</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Depending on my mood">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_72125.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="It's all about the Playlist!">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_67648.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I love to chat">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_73190.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style="  position:relative; top:-10px; margin-right: 10px;display: block; width: 60%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 253.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index4911.html?file=c-ride_details&amp;from=home&amp;id=1&amp;dt=1525545000&amp;ret=No">
                            <div class="trip roundcol simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Las Vegas, NV, United States - New York, NY, United States">
                                <div class="rides-img">
                      <span>
                        <img src="<?= base_url('assets/public_html/uploads/member/1/4_1502287700_11458.jpg'); ?>"
                             class="mem-img"/>
                      </span>
                                </div>
                                <div class="rides-text">
                                    <p>6 May 2018 - 23:10</p>
                                    <h3>Las Vegas,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;New York,...
                                        <br/> Cars: Austin Mini</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Depending on my mood">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_72125.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="It's all about the Playlist!">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_67648.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I love to chat">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_73190.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style="  position:relative; top:-10px; margin-right: 10px;display: block; width: 60%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png'); ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 253.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="ladies-rides">
                <h2>Shopping rides
                    <a href="indexec86.html?file=c-ride_list&amp;search=simple&amp;type=shopping">View more</a>
                </h2>
                <ul>
                    <li>
                        <a href="indexb6b1.html?file=c-ride_details&amp;from=home&amp;id=4&amp;dt=1537209000&amp;ret=No">
                            <div class="trip ladiescol  simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Seattle, WA, United States - Boston, MA, United States">
                                <div class="rides-img">
                      <span>
                        <img src="Page-Not-Found.html" alt=""/> </span>
                                </div>
                                <div class="rides-text">
                                    <p>18 Sep 2018 - 23:20</p>
                                    <h3>Seattle, WA,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;Boston, MA,...
                                        <br/> Cars: Buddy Basic</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="It's all about the Playlist!">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_67648.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I love to chat">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_73190.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Depending on my mood">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_72125.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style=" position:relative; top:-10px; margin-right: 10px;display: block; width: 0%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 305.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="indexddff.html?file=c-ride_details&amp;from=home&amp;id=2&amp;dt=1523817000&amp;ret=No">
                            <div class="trip ladiescol  last  simptip-position-top simptip-multiline simptip-info simptip-smooth"
                                 data-tooltip="Bristol, United Kingdom - London, United Kingdom">
                                <div class="rides-img">
                      <span>
                        <img src="Page-Not-Found.html" alt=""/> </span>
                                </div>
                                <div class="rides-text">
                                    <p>16 Apr 2018 - 22:00</p>
                                    <h3>Bristol,...&nbsp;&nbsp;&nbsp;&raquo;&nbsp;&nbsp;London,...
                                        <br/> Cars: BMW 5-serie</h3>
                                    <div class="no-smoking-img ">
                        <span data-tooltip="No Smoking Please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751900_43686.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="No pets in my Vehicle please">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751871_91908.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="I'm the quiet type :)">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751767_90404.jpg'); ?>">
                        </span>&nbsp;
                                        <span data-tooltip="Silence is golden">
                          <img alt=""
                               src="<?= base_url('assets/public_html/uploads/preferences/1453751851_90808.jpg'); ?>">
                        </span>&nbsp;
                                    </div>
                                </div>
                                <div class="rides-price">
                                    <p>
                        <span style="display: block; width: 65px; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 0;">
                          <span style=" position:relative; top:-10px; margin-right: 10px;display: block; width: 100%; height: 13px; background: url(<?= base_url('assets/public_html/images/star-rating-sprite.png') ?>) 0 -13px;"></span>
                        </span>
                                    </p>
                                    <h2>USD 12.00</h2>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div style="clear:both;"></div>
        </div>
        <!------------------------------------------------------------------------------->
    </div>
    <!-- travelling-alone -->
    <div id="travelling-alone">
        <div class="travelling-alone-inner">
            <div class="travelling-alone-left-part">
                <h2>
                    <b>Travelling</b>Alone</h2>
                <p>Offer ride and earn money! Enjoy the freedom of income with no efforts with the help of this
                    incredible website.</p>
                <p>
                    <a href="index91ad.html">Offer ride</a>
                </p>
            </div>
            <div class="travelling-alone-right-part">
                <img src="<?= base_url('assets/public_html/images/home/Theme36/travelling-alone-right-img.jpg'); ?>"
                     alt=""></div>
        </div>
    </div>
    <!-- -->
    <div id="share-ride-part">
        <div class="share-ride-part-inner">
            <div class="share-ride-part-box1">
                <p>Share a ride.
                    <br> Earn a penny.</p>
            </div>
            <div class="share-ride-part-box2">
                <p>Connect with
                    <br> people and make
                    <br> friends
                </p>
            </div>
            <div class="share-ride-part-box3">
                <p>A simple way for you
                    <br> to do your bit for
                    <br> the Environment. </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- -->
    <div id="latest-blog-part">
        <div class="latest-blog-part-inner">
            <div class="latest-blog-box">
                <h2>Latest Blogs
                    <a href="blog/index.html">view all</a>
                </h2>
                <ul>
                    <li>
                        <div class="home-blog-img">
                            <img src="<?= base_url('assets/public_html/images/home/Theme36/1.jpg'); ?>" alt="">
                        </div>
                        <div class="home-blog-text">
                            <h3>
                                <a href="#">Ride and Share!</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo Aenean
                                massa.</p>
                        </div>
                    </li>
                    <li>
                        <div class="home-blog-img">
                            <img src="<?= base_url('assets/public_html/images/home/Theme36/1.jpg'); ?>" alt="">
                        </div>
                        <div class="home-blog-text">
                            <h3>
                                <a href="#">Aenean massa.</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                    </li>
                    <li>
                        <div class="home-blog-img">
                            <img src="<?= base_url('assets/public_html/images/home/Theme36/1.jpg'); ?>" alt="">
                        </div>
                        <div class="home-blog-text">
                            <h3>
                                <a href="#">Lorem ipsum dolor</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor..</p>
                        </div>
                    </li>
                    <!-- 								<li>
                                      <div class="home-blog-img"><img src="http://www.ridesharingscript.com/ridesharing/public_html/uploads/default_photos/no_image.png" alt=""></div>
                                      <div class="home-blog-text">
                                      <h3><a href="http://192.168.1.131/sharing/blog/?p=1">Hello world!</a></h3>
                                      <p>Welcome to WordPress. This is your first post. Edit or delete it, then start blogging! </p>
                                      </div>
                                      </li>
                                                                  -->
                </ul>
            </div>
            <div class="facebook-like-div">
                <h2>See, how carpooling works</h2>
                <b id="box1video"></b>
            </div>
            <div class="newsleter-subscription-div">
                <h2>subscribe for newsletter</h2>
                <div class="subscription">
                    <b>
                        <form id="frmnewsletter" method="post" action="#">
                            <input class="newsleter-text-box validate[required,custom[email]]" type="email"
                                   id="vNewsletterEmail" name="vNewsletterEmail"
                                   placeholder="Enter your E-mail Address">
                            <input type="button" class="newsleter-btn" value="SUBMIT" onClick="checknewsletter();">
                        </form>
                    </b>
                </div>
                <div class="facebook-ho" id="facebook-ho"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <!-- -->
    <!-- member-story-home -->
    <!------------------------------------------ member-story-home end -------------------------------------->
</div>
<!-- footer-part -->

<script>
    var cPage = '';
    var offerRidePage = 'c-offer_ride';
    var offerRideEditPage = 'm-offer_ride_edit';
    var offerRideDuplicatePage = 'm-offer_ride_duplicate';
    var sel_lang = $("#sess_language").val();
    var sel_curr = $("#sess_price_ratio").val();

    function lostData(rdURL, x) {
        var Page1 = cPage.localeCompare(offerRidePage);
        var Page2 = cPage.localeCompare(offerRideEditPage);
        var Page3 = cPage.localeCompare(offerRideDuplicatePage);
        if (Page1 == 0 || Page2 == 0 || Page3 == 0) {
            notie.confirm('You will lose all filled data if you click on YES. Do you want to continue ?', 'Yes', 'Cancel',
                function () {
                    window.location = rdURL;
                });
            if (x == 1) {
                setTimeout(function () {
                    $('#sess_language option[value="' + sel_lang + '"]').attr("selected", "selected");
                }, 1000);
            } else {
                setTimeout(function () {
                    $('#sess_price_ratio option[value="' + sel_curr + '"]').attr("selected", "selected");
                }, 1000);
            }
            return false;
        } else {
            window.location = rdURL;
        }
    }

    function change_lang(lang) {
        var rdURL = 'index.html?lang=' + lang;
        lostData(rdURL, 1);
    }

    function change_currency(currency) {
        var rdURL = 'index.html?currency=' + currency;
        lostData(rdURL, 2);
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    function preLoaderStart() {
        //alert("before");
        var over = '<div id="overlay">' +
            '<img id="loading" src="http://www.ridesharingscript.com/ridesharing/public_html/images/hourglass.gif">' +
            '</div>';
        var maxHeight = $("body").height() + "px";
        $(over).appendTo('body');
        $("#overlay").css("height", maxHeight / 2);
        //alert("after");

    }

    function preLoaderStop() {
        setTimeout(function () {
            $('#overlay').remove();
        }, 1000);
    }

    function search_location_now() {
        resp = jQuery("#get_location_search").validationEngine('validate');
        if (resp == true) {
            if (document.getElementById('Location_get').value != '') {
                preLoaderStart();
                var From = $("#Location_get").val();
                $("#map-canvas").gmap3({
                    getlatlng: {
                        address: From,
                        callback: function (results) {
                            $("#Location_get_lat_long").val(results[0].geometry.location);
                        }
                    }
                });
                var latlongs = $("#Location_get_lat_long").val(); //Value of lattitude and Longitude
                //alert(latlongs);
                var locations = latlongs.split(',');
                lat_loc = locations[0].replace("(", ""); // value of lattitude
                lang_loc = locations[1].replace(")", ""); // value of langitude
                setlocatedPostition(lat_loc, lang_loc);
            } else {
                alert('Please select both From and To address');
                return false;
            }
        } else {
            return false;
        }
    }

    function showPosition(position) {
        //setCookie('ride_locations_type', 'local', 1);
        setCookie('userlatitude', position.coords.latitude, 1);
        setCookie('userlongitude', position.coords.longitude, 1);
        if (getCookie('country_code') == '') {
            var request = $.ajax({
                type: "POST",
                url: site_url + "createcookie.php",
                data: "",

                success: function (data) {
                    document.location.reload(true);
                }
            });
        }
    }

    function setlocatedPostition(get_latitude, get_longitude) {
        setCookie('userlatitude', get_latitude, 1);
        setCookie('userlongitude', get_longitude, 1);
        if (getCookie('country_code') == '') {
            var request = $.ajax({
                type: "POST",
                url: site_url + "createcookie.php",
                data: "",

                success: function (data) {
                    document.location.reload(true);
                }
            });
        }
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
            //window.location = site_url;
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function checkCookie() {
        var userlatitude = getCookie("userlatitude");
        var userlongitude = getCookie("userlongitude");
        if (userlatitude != "" && userlongitude != '') {
        } else {
            getLocation();
        }
    }

    function chnage_ride_types(type) {
        if (type == 'international') {
            document.cookie = "country_code=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            setCookie('ride_locations_type', 'international', 1);
            //window.location = site_url;
            location.reload();
        } else {
            $.fancybox12("#locationmodel");
            setCookie('ride_locations_type', 'local', 1);
            //getLocation();
        }
    }

    function go_get_latlong(from) {
        if (from == 'From') {
            var From = $("#From").val();
            $("#map-canvas").gmap3({
                getlatlng: {
                    address: From,
                    callback: function (results) {
                        $("#From_lat_long").val(results[0].geometry.location);
                    }
                }
            });
        } else if (from == 'Location_get') {
            var From = $("#Location_get").val();
            $("#map-canvas").gmap3({
                getlatlng: {
                    address: From,
                    callback: function (results) {
                        $("#Location_get_lat_long").val(results[0].geometry.location);
                    }
                }
            });
        } else {
            var To = $("#To").val();
            $("#map-canvas").gmap3({
                getlatlng: {
                    address: To,
                    callback: function (results) {
                        $("#To_lat_long").val(results[0].geometry.location);
                    }
                }
            });
        }
    }

</script>

<!-- select drop box -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".custom-select-new").each(function () {
            $(this).wrap("<em class='select-wrapper'></em>");
            $(this).after("<em class='holder'></em>");
        });
        $(".custom-select-new").change(function () {
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    });


    $(document).ajaxComplete(function () {
        $(".custom-select-new1").each(function () {
            $(this).wrap("<em class='select-wrapper'></em>");
            $(this).after("<em class='holder'></em>");
        });
        $(".custom-select-new1").change(function () {
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    });


    $("#lang_box").hide();
    $("#lang_open").click(function () {
        $("#lang_box").slideToggle();
    });

    $("#lang_box1").hide();
    $("#lang_open1").click(function () {
        $("#lang_box1").slideToggle();
    });

    $("#lang_box2").hide();
    $("#lang_open2").click(function () {
        $("#lang_box2").slideToggle();
    });

    $(document).mouseup(function (e) {
        var container = $("#lang_box,#lang_open");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $("#lang_box").slideUp(200);
        }

        var container1 = $("#lang_box1,#lang_open1");
        if (!container1.is(e.target) && container1.has(e.target).length === 0) {
            $("#lang_box1").slideUp(200);
        }

        var container2 = $("#lang_box2,#lang_open2");
        if (!container2.is(e.target) && container2.has(e.target).length === 0) {
            $("#lang_box2").slideUp(200);
        }
    });

    $("#hide_langs").on('click', function () {
        $("#lang_box").slideUp(200);
    });

    $("#hide_currency").on('click', function () {
        $("#lang_box1").slideUp(200);
    });


    (function () {
        function id(v) {
            return document.getElementById(v);
        }

        function loadbar() {
            var ovrl = id("overlay"),
                prog = id("progress"),
                stat = id("progstat"),
                img = document.images,
                c = 0,
                tot = img.length;
            if (tot == 0) return doneLoading();

            function imgLoaded() {
                c += 1;
                var perc = ((100 / tot * c) << 0) + "%";
                prog.style.width = perc;
                stat.innerHTML = "Loading " + perc;
                if (c === tot) return doneLoading();
            }

            function doneLoading() {
                ovrl.style.opacity = 0;
                setTimeout(function () {
                    ovrl.style.display = "none";
                }, 1200);
            }

            for (var i = 0; i < tot; i++) {
                var tImg = new Image();
                tImg.onload = imgLoaded;
                tImg.onerror = imgLoaded;
                tImg.src = img[i].src;
            }
        }

        //document.addEventListener('DOMContentLoaded', loadbar, false);
    }());

    function setDefault001() {
        $("#customselect001").val('international');
    }

</script>
<script>

    $(window).load(function () {
        $("#themebox").css('display', 'none');
    });

    $(function () {
        $("#changetheme").click(function () {
            $("#themebox").show(500).fadeIn("slow");

            $(".theme-color").on("click", function () {
                var id = $(this).attr("id");

                $.ajax({
                    url: 'theme.php',
                    type: 'POST',
                    data: "id=" + id,
                    success: function () {
                    }
                });
                $("#themebox").hide().fadeOut();
                location.reload();
            });

            return false;
        })
    });

</script>

<div id="footer">
    <div class="footer-inner">
        <div class="footer-top-part">
            <div class="footer-mid-part">
                <div class="footer-box1">
                    <h2>Using car sharing</h2>
                    <ul>
                        <li>
                            <a href="page/2/privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="page/3/terms-and-conditions.html">Terms And Conditions</a>
                        </li>
                        <li>
                            <a href="faqs.html">FAQ's</a>
                        </li>
                        <li>
                            <a href="index91ad.html">Member Stories</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-box2">
                    <h2>Our company</h2>
                    <ul>
                        <li>
                            <a href="page/4/partners.html">Partners</a>
                        </li>
                        <li>
                            <a href="page/5/how-carpooling-works.html">How Carpooling Works</a>
                        </li>
                        <li>
                            <a href="page/6/projectname-code-of-conduct.html">projectName Code of Conduct</a>
                        </li>
                        <li>
                            <a href="page/7/see-how-carpooling-works.html">See, how carpooling works</a>
                        </li>
                        <li>
                            <a href="contactus.html">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-box3">
                    <h2>Where we located</h2>
                    <div class="map">
                        <img src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/map.jpg'); ?>" alt="">
                    </div>
                </div>
                <div class="footer-box4">
                    <h2>Contact with us</h2>
                    <span>
                <b>Call:</b>
                <p>+123456789</p>
              </span>
                    <span>
                <b>E-mail: </b>
                <p>
                  <a href="mailto:demo_support@email.com">demo_support@email.com</a>
                </p>
              </span>
                    <span class="footer-address">
                <b>Address:</b>
                <p>Lorum ipsum lorum ipsum lorum ipsum</p>
              </span>
                    <span>
                <em>
                  <a href="https://www.facebook.com/" target="_blank">
                    <img onmouseout="this.src='<?= base_url('assets/public_html/images/home/Theme36/color-blue/fb.png'); ?>'"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/fb-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/fb.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="https://twitter.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/twi.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/twi-hover.png'); ?>
                      "
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/twi.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="https://www.google.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/google-plush.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/google-plush-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/google-plush.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="https://www.instagram.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/instagram.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/instagram-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/instagram.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="http://www.pinterest.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/pinterest.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/pinterest-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/pinterest.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="https://youtube.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/you-tube.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/you-tube-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/you-tube.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                  <a href="https://linkedin.com/" target="_blank">
                    <img onmouseout="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/linkedin.png'); ?>
                      '"
                         onmouseover="this.src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/linkedin-hover.png'); ?>
                      '"
                         onclick="return submitsearch(document.frmsearch);"
                         src="<?= base_url('assets/public_html/images/home/Theme36/color-blue/linkedin.png'); ?>"
                         alt="" onerror="this.style.display='none'"/>
                  </a>
                </em>
              </span>
                </div>
            </div>
        </div>
        <div class="footer-bottom-part">
            <p>© Copyright 2016
                <a href="index.html">Ride Sharing</a>. All rights are reserved.</p>

        </div>
        <div class="home-footer-bottom-part">
            <a class="toTop" href="#top-part">
                <img src="<?= base_url('assets/public_html/images/arrow-up-down.jpg'); ?>" alt=""
                     onerror="this.style.display='none'">
            </a>
            <div style="clear:both;"></div>
        </div>
    </div>

    <script>
        /*$('#frmnewsletter').bind('keydown',function(e){
        					if(e.which == 13){
        					checknewsletter(); return false;
        					}
        				});*/

        jQuery('.toTop').click(function () {
            jQuery('html, body').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });

    </script>

    <!-- -->
</div>
<div id="map-canvas" class="gmap3"></div>

<script type="text/javascript">

    $('#frmnewsletter').bind('keydown', function (e) {
        if (e.which == 13) {
            checknewsletter();
            return false;
        }
    });

    $('#searchdate').Zebra_DatePicker({
        format: 'j M Y',
        direction: true
    });

    function initialize() {
        //var input = document.getElementById("From);
        //var options = {componentRestrictions: {country: 'us'}};

        var from = new google.maps.places.Autocomplete(document.getElementById('From'));
        var to = new google.maps.places.Autocomplete(document.getElementById('To'));
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    function search_now() {
        resp = jQuery("#home_search").validationEngine('validate');
        if (resp == true) {
            if (document.getElementById('From').value != '' && document.getElementById('To').value != '') {
                var From = $("#From").val();
                $("#map-canvas").gmap3({
                    getlatlng: {
                        address: From,
                        callback: function (results) {
                            $("#From_lat_long").val(results[0].geometry.location);
                        }
                    }
                });

                var To = $("#To").val();
                $("#map-canvas").gmap3({
                    getlatlng: {
                        address: To,
                        callback: function (results) {
                            $("#To_lat_long").val(results[0].geometry.location);
                            document.home_search.submit();
                        }
                    }
                });
                return false;
            } else {
                alert('Please select both From and To address');
                return false;
            }
        } else {
            return false;
        }
    }

    $(function () {
        var e = document.getElementById("From"),
            o = new google.maps.places.Autocomplete(e);
        google.maps.event.addListener(o, "place_changed", function () {
            o.getPlace();
            go_get_latlong("From")
        });
        var t = document.getElementById("To"),
            g = new google.maps.places.Autocomplete(t);
        google.maps.event.addListener(g, "place_changed", function () {
            g.getPlace();
            go_get_latlong("to")
        })
    });

</script>
</body>
</html>