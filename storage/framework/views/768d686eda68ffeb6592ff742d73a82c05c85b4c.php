<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <?php echo e($breadcrumb_title ?? ''); ?>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Home</a></li>
                    <?php echo e($slot ?? ''); ?>

                </ol>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>