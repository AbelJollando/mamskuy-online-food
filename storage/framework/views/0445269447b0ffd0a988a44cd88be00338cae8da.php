<div>
    <?php $__env->startPush('scripts'); ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            Livewire.on('addedToCart', function(message) {
                toastr.success("Product success added to cart");
            });
        </script>
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('css'); ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <?php $__env->stopPush(); ?>


    <ul class="row list-unstyled products-group no-gutters">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="col-6 col-md-3 col-xl-3 product-item">
                <div class="product-item__outer h-100">
                    <div class="product-item__inner px-xl-4 p-3">
                        <div class="product-item__body pb-xl-2">
                            <div class="d-flex">
                                <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="mb-2 mr-2">
                                        <a href="../shop/product-categories-7-column-full-width.html"
                                            class="font-size-12 text-gray-5"><?php echo e($category->category_name); ?>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <h5 class="mb-1 product-item__title"><a href="<?php echo e(route('product.show', $product->id)); ?>"
                                    class="text-blue font-weight-bold"><?php echo e($product->product_name); ?></a></h5>
                            <div class="mb-2">
                                <a href="<?php echo e(route('product.show', $product->id)); ?>" class="d-block text-center"><img
                                        class="img-fluid" src="<?php echo e($product->image); ?>"
                                        alt="Image Description"></a>
                            </div>
                            <div class="flex-center-between mb-1">
                                <?php if($product->discount): ?>
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">Rp.
                                            <?php echo e(number_format($product->price_discount(), 2, ',', '.')); ?></ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute " style="bottom: 75%">Rp.
                                            <?php echo e(number_format($product->price, 2, ',', '.')); ?></del>
                                    </div>
                                <?php else: ?>
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">Rp.
                                            <?php echo e(number_format($product->price, 2, ',', '.')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="d-none d-xl-block prodcut-add-cart">
                                    <button wire:click="addToCart(<?php echo e($product->id); ?>)"
                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                            class="ec ec-add-to-cart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12 mt-10">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Product Not Found</h4>
                    <p>
                        <a href="<?php echo e(route('home')); ?>" class="alert-link">Back to Home</a>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </ul>

    <!-- Shop Pagination -->
    <?php echo e($products->links()); ?>

    <!-- End Shop Pagination -->
</div>
<?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/livewire/product.blade.php ENDPATH**/ ?>