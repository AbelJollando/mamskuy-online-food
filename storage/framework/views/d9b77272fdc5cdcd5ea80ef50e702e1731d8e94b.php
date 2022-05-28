<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Mamskuy | Online Food</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/font-awesome/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/css/font-electro.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/animate.css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/hs-megamenu/src/hs.megamenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/ion-rangeslider/css/ion.rangeSlider.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets_user/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/fancybox/jquery.fancybox.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/vendor/slick-carousel/slick/slick.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets_user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="<?php echo e(asset('assets_user/css/theme.css')); ?>">

    <?php echo $__env->yieldPushContent('css'); ?>

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

    <?php echo $__env->make('layouts.user-layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer>
        <!-- Footer-bottom-widgets -->
        <div class="  pt-8 pb-4 bg-gray-13">
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-6">
                            <a href="#" class="d-inline-block">
                                <h4>Mamskuy Online Foods</h4>
                                
                            </a>
                        </div>
                        <div class="mb-4">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <i class="ec ec-support text-primary font-size-56"></i>
                                </div>
                                <div class="col pl-3">
                                    <div class="font-size-13 font-weight-light">Got questions? Call us
                                        24/7!
                                    </div>
                                    <a href="tel:+80080018588" class="font-size-20 text-gray-90">(800)
                                        8001-8588,
                                    </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600)
                                        874
                                        548</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-1 font-weight-bold">Contact info</h6>
                            <address class="">
                                17 Princess Road, London, Greater London NW1 8JR, UK
                            </address>
                        </div>
                        <div class="my-4 my-md-4">
                            <ul class="list-inline mb-0 opacity-7">
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-google btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                        href="#">
                                        <span class="fab fa-github btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Nusantasa Foods</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Italian Foods</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Chinese Foods</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Japanese Foods</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Fast Food</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">All About Ice</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Desert Foods</a></li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Main Foods</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">See Foods</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Snacks</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Bakery & Pastry</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/product-categories-5-column-sidebar.html">Milk</a>
                                    </li>
                                </ul>
                                <!-- End List Group -->
                            </div>

                            <div class="col-12 col-md mb-4 mb-md-0">
                                <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/my-account.html">My Account</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/track-your-order.html">Order Tracking</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../shop/wishlist.html">Wish List</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../home/terms-and-conditions.html">Customer Service</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../home/terms-and-conditions.html">Returns / Exchange</a>
                                    </li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../home/faq.html">FAQs</a></li>
                                    <li><a class="list-group-item list-group-item-action"
                                            href="../home/terms-and-conditions.html">Product Support</a>
                                    </li>
                                </ul>
                                <!-- End List Group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-bottom-widgets -->
        <!-- Footer-copy-right -->
        <div class="bg-gray-14 py-2">
            <div class="container">
                <div class="flex-center-between d-block d-md-flex">
                    <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Kelompok ?</a> -
                        All rights Reserved</div>
                </div>
            </div>
        </div>
        <!-- End Footer-copy-right -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
        data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="<?php echo e(asset('assets_user/vendor/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/jquery-migrate/dist/jquery-migrate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/bootstrap/bootstrap.min.js')); ?>"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php echo e(asset('assets_user/vendor/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/hs-megamenu/src/hs.megamenu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/svg-injector/dist/svg-injector.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('assets_user/vendor/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/fancybox/jquery.fancybox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/ion-rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/typed.js/lib/typed.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/slick-carousel/slick/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>"></script>

    <!-- JS Electro -->
    <script src="<?php echo e(asset('assets_user/js/hs.core.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.countdown.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.header.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.hamburgers.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.unfold.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.focus-state.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.malihu-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.validation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.fancybox.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.onscroll-animation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.slick-carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.quantity-counter.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.range-slider.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.show-animation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.svg-injector.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.scroll-nav.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.go-to.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_user/js/components/hs.selectpicker.js')); ?>"></script>


    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of HSScrollNav component
            $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                duration: 700
            });

            // initialization of quantity counter
            $.HSCore.components.HSQantityCounter.init('.js-quantity');

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of forms
            $.HSCore.components.HSRangeSlider.init('.js-range-slider');

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();

                var target = $(this).data('target');

                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/layouts/user-layout/master.blade.php ENDPATH**/ ?>