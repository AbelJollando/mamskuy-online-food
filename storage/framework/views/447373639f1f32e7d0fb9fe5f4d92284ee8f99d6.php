

<?php $__env->startSection('content'); ?>
    <div class="mb-8">
        <!-- Shop-control-bar Title -->
        <div class="flex-center-between mb-3 mt-10">
            <h3 class="font-size-25 mb-0">Shop</h3>
        </div>
        <?php if(request()->input('search')): ?>
            <div>
                Display Result for "<?php echo e(request()->input('search')); ?>"
            </div>
        <?php endif; ?>
        <!-- End shop-control-bar Title -->
        <!-- Shop-control-bar -->

        <!-- End Shop-control-bar -->
        <!-- Shop Body -->
        <!-- Tab Content -->


        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-livewire', ['search' => request()->input('search')])->html();
} elseif ($_instance->childHasBeenRendered('LoaugfI')) {
    $componentId = $_instance->getRenderedChildComponentId('LoaugfI');
    $componentTag = $_instance->getRenderedChildComponentTagName('LoaugfI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LoaugfI');
} else {
    $response = \Livewire\Livewire::mount('product-livewire', ['search' => request()->input('search')]);
    $html = $response->html();
    $_instance->logRenderedChild('LoaugfI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- End Shop Body -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/user/home/index.blade.php ENDPATH**/ ?>