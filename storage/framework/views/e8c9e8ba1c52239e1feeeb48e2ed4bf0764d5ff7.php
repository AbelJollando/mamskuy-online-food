

<?php $__env->startSection('content'); ?>
<main id="content" role="main" class="cart-page">

    <div class="container">
        <div class="mb-4 mt-4">
            <h1 class="text-center">Cart</h1>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-list-livewire')->html();
} elseif ($_instance->childHasBeenRendered('Xv5aOFM')) {
    $componentId = $_instance->getRenderedChildComponentId('Xv5aOFM');
    $componentTag = $_instance->getRenderedChildComponentTagName('Xv5aOFM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Xv5aOFM');
} else {
    $response = \Livewire\Livewire::mount('cart-list-livewire');
    $html = $response->html();
    $_instance->logRenderedChild('Xv5aOFM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/user/cart/index.blade.php ENDPATH**/ ?>