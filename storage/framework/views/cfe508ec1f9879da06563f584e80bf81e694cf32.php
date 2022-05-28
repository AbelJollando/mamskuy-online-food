<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <div>
            
            <?php if(auth()->guard()->check()): ?>
                <?php if(!Auth::user()->hasVerifiedEmail()): ?>
                    <div class="alert alert-danger fade show" role="alert">
                        <div class="alert-text">
                            <strong>Warning!</strong> Please verify your email address.
                            <a class="alert-link" href="<?php echo e(route('verification.notice')); ?>">
                                Click here to resend verification email.
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <!-- Topbar -->
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to Worldwide
                            Foods Store</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li
                                class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <!-- Account Sidebar Toggle Button -->
                                <?php if(auth()->guard()->guest()): ?>
                                    <a id="sidebarNavToggler" href="<?php echo e(route('login')); ?>"
                                        class="u-header-topbar__nav-link">
                                        <i class="ec ec-user mr-1">
                                        </i> Register <span class="text-gray-50">or</span> Sign in
                                    </a>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <a id="sidebarNavToggler" href="javascript:;" class="u-header-topbar__nav-link">
                                        <i class="ec ec-user mr-1">
                                        </i> <?php echo e(auth()->user()->name); ?>

                                    </a>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="form-logout">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                <li class="list-inline-item  u-header-topbar__nav-item-border">
                                    <a href="#" class=""
                                        onclick="document.getElementById('form-logout').submit()">Logout</a>
                                </li>
                            <?php endif; ?>
                            <!-- End Account Sidebar Toggle Button -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Logo and Menu -->
        <div class="py-2 py-xl-4 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav
                            class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <h4>Mamskuy Online Foods</h4>
                            
                        </nav>
                        <!-- End Nav -->

                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Primary Menu -->
                    <div class="col d-none d-xl-block">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">
                                    <!-- Home -->
                                    <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="<?php echo e(route('my-transaction')); ?>">My
                                            Transaction</a>
                                    </li>
                                    <!-- End Home -->
                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>
                    <!-- End Primary Menu -->
                    <?php if(auth()->guard()->check()): ?>
                        <div class="d-navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                            <li class="nav-item dropdown" >
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                    <i class="far fa-bell fa-2x"></i>
                                    <?php if(Auth::user()->notifications->where('read_at',null)->count() != null): ?>
                                        <span class="badge badge-warning navbar-badge"><?php echo e(Auth::user()->notifications->where('read_at',null)->count()); ?></span>
                                    <?php endif; ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                                    <span class="dropdown-item dropdown-header p-2 ml-2">User Notifications</span>
                                    <?php $__empty_1 = true; $__currentLoopData = Auth::user()->notifications->where('read_at',null); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <?php echo e($data->data); ?>

                                            <div class="my-2">
                                                <span class="text-muted text-sm"><?php echo e($data->created_at->diffForHumans()); ?></span>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            Belum Terdapat Notifikasi
                                        </a>
                                    <?php endif; ?>
                                    <?php if(Auth::user()->notifications->where('read_at',null)->count() != 0): ?>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?php echo e(route('user.mark-notifications')); ?>" class="dropdown-item dropdown-footer">Baca Semua Notifications</a>
                                    <?php endif; ?>

                                </div>
                            </li>
                        </div>
                    <?php endif; ?>

                    
                    <!-- End Customer Care -->
                    <!-- Header Icons -->
                    <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">

                                    <!-- Input -->
                                    <div class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2">
                                        <form class="input-group px-3">
                                            <input class="form-control" type="text" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                        class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-xl-none px-2 px-sm-3"><a href="../shop/my-account.html"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex "
                                        data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span
                                            class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">2</span>
                                        <span
                                            class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo and Menu -->

        <!-- Vertical-and-Search-Bar -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-livewire')->html();
} elseif ($_instance->childHasBeenRendered('T1UeujL')) {
    $componentId = $_instance->getRenderedChildComponentId('T1UeujL');
    $componentTag = $_instance->getRenderedChildComponentTagName('T1UeujL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T1UeujL');
} else {
    $response = \Livewire\Livewire::mount('cart-livewire');
    $html = $response->html();
    $_instance->logRenderedChild('T1UeujL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- End Vertical-and-secondary-menu -->
    </div>
</header>
<!-- ========== END HEADER ========== -->
<?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/layouts/user-layout/partials/header.blade.php ENDPATH**/ ?>