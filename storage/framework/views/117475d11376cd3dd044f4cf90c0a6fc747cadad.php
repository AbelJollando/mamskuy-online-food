<div>
    <div class="mb-10 cart-table">
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity w-lg-15">Quantity</th>
                    <th class="product-subtotal">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="">
                        <td class="text-center">
                            <a wire:click='deleteItem(<?php echo e($cart->id); ?>)' href="#"
                                class="text-gray-32 font-size-26">×</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="#"><img class="img-fluid max-width-100 p-1 border border-color-1"
                                    src="<?php echo e($cart->product->images[0]->image_name); ?>" alt="Image Description"></a>
                        </td>

                        <td data-title="Product">
                            <a href="#" class="text-gray-90"><?php echo e($cart->product->product_name); ?></a>
                        </td>

                        <td data-title="Price">
                            <?php if($cart->product->discount): ?>
                                <div>
                                    <ins class="text-red text-decoration-none">Rp.
                                        <?php echo e(number_format($cart->product->price_discount(), 2, ',', '.')); ?></ins>
                                    <del class="tex-gray-6 " style="bottom: 75%">Rp.
                                        <?php echo e(number_format($cart->product->price, 2, ',', '.')); ?></del>
                                </div>
                            <?php else: ?>
                                <span class="">Rp
                                    <?php echo e(number_format($cart->product->price, 2, ',', '.')); ?></span>
                            <?php endif; ?>
                        </td>

                        <td data-title="Quantity">
                            <span class="sr-only">Quantity</span>
                            <!-- Quantity -->
                            <div class="border rounded-pill py-1 width-122 w-xl-90 px-3 border-color-1">
                                <div class="js-quantity row align-items-center">
                                    <div class="col-auto pr-1">
                                        <button wire:click="decrementQty(<?php echo e($cart->id); ?>)"
                                            class=" btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0">
                                            <small class="fas fa-minus btn-icon__inner"></small>
                                        </button>

                                    </div>
                                    <div class="col">
                                        <input
                                            class="form-control h-auto border-0 rounded p-0 shadow-none bg-transparent"
                                            type="text" disabled value="<?php echo e($cart->qty); ?>">
                                    </div>
                                    <div class="col-auto pl-1">
                                        <button wire:click="incrementQty(<?php echo e($cart->id); ?>)"
                                            class="btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0">
                                            <small class="fas fa-plus btn-icon__inner"></small>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Quantity -->
                        </td>

                        <td data-title="Total">
                            <span class="">Rp
                                <?php echo e(number_format(($cart->product->discount ? $cart->product->price_discount() : $cart->product->price) * $cart->qty, 2, ',', '.')); ?></span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">Cart Empty 😥</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php if($carts->count() > 0): ?>
        <div class="mb-5 d-flex justify-content-center">
            <button type="button" wire:click='checkout' wire:loading.attr="disabled"
                class="btn btn-primary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Proceed
                to
                Payment</button>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/livewire/cart-list.blade.php ENDPATH**/ ?>