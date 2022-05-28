<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="<?php echo e(route('admin.index')); ?>"><img class="img-fluid"
                        src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="<?php echo e(route('admin.index')); ?>"><img class="img-fluid"
                        src="<?php echo e(asset('assets/images/logo/dark-logo.png')); ?>" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">
                </i></div>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>
                        <?php if(Auth::guard('admin')->user()->notifications->where('read_at',null)->count() != null): ?>
                            <span class="dot-animated"></span>
                        <?php endif; ?>
                    </div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <p class="f-w-700 mb-0">Notification Admin
                                <?php if(Auth::guard('admin')->user()->notifications->where('read_at',null)->count() != null): ?>
                                    <span class="pull-right badge badge-primary badge-pill"><?php echo e(Auth::guard('admin')->user()->notifications->where('read_at',null)->count()); ?></span>
                                <?php endif; ?>
                            </p>
                        </li>
                        <?php $__empty_1 = true; $__currentLoopData = Auth::guard('admin')->user()->notifications->where('read_at',null); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="noti-primary">
                                <div class="media">
                                    <div class="media-body">
                                        <p><?php echo e($data->data); ?></p><span><?php echo e($data->created_at->diffForHumans()); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="noti-primary">
                                <div class="media">
                                    <div class="media-body text-center">
                                        <span>Belum Terdapat Notifikasi</span>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if(Auth::guard('admin')->user()->notifications->where('read_at',null)->count() != 0): ?>
                            <li>
                                <a href="<?php echo e(route('admin.mark-notifications')); ?>" class="text-light  f-w-700 mb-0">Tandai Semua Telah diBaca</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <form action="<?php echo e(route('admin.logout')); ?>" method="POST" id="form-logout"><?php echo csrf_field(); ?></form>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button"
                        onclick="document.getElementById('form-logout').submit()"><i data-feather="log-out"></i>Log
                        out</button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
<?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/layouts/admin-layout/partials/header.blade.php ENDPATH**/ ?>