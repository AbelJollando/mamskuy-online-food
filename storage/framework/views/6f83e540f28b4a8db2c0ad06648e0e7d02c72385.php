

<?php $__env->startSection('content'); ?>
    <main id="content" role="main">
        <div class="container">
            <!-- Single Product Body -->
            <div class="mb-14 mt-10">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-md-0">
                        <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true"
                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                            data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                            data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                            data-nav-for="#sliderSyncingThumb">
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="js-slide">
                                    <img class="img-fluid" src="<?php echo e($image->image_name); ?>" alt="Image Description">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div id="sliderSyncingThumb"
                            class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                            data-infinite="true" data-slides-show="5" data-is-thumbs="true"
                            data-nav-for="#sliderSyncingNav">
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="<?php echo e($image->image_name); ?>" alt="Image Description">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-md-6 mb-lg-0">
                        <div class="mb-2">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">Headphones</a>
                            <h2 class="font-size-25 text-lh-1dot2"><?php echo e($product->product_name); ?></h2>
                            <div class="mb-2">
                                <?php echo e(round($product->rate, 1)); ?>

                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($i <= round($product->rate, 1)): ?>
                                                <small class="fas fa-star"></small>
                                            <?php elseif($i - round($product->rate, 1) < 1): ?>
                                                <small class="fas fa-star-half"></small>
                                            <?php else: ?>
                                                <small class="far fa-star text-muted"></small>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="text-secondary font-size-13">(<?php echo e($product->reviews->count()); ?> customer
                                        reviews)</span>
                                </a>
                            </div>
                            <p>
                                <?php echo e($product->description); ?>

                            </p>
                        </div>
                    </div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-mini-cart-livewire', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('h0ptXcj')) {
    $componentId = $_instance->getRenderedChildComponentId('h0ptXcj');
    $componentTag = $_instance->getRenderedChildComponentTagName('h0ptXcj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('h0ptXcj');
} else {
    $response = \Livewire\Livewire::mount('product-mini-cart-livewire', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('h0ptXcj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
            <!-- End Single Product Body -->
        </div>

        
        <div class="bg-white py-4  px-md-5 px-4 mb-6">
            <div id="Reviews" class="mx-md-2">
                <div class="mb-4 px-lg-4">
                    <div class="row mb-8">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="font-size-18 mb-6">Based on <?php echo e($reviewCount); ?> reviews</h3>
                                <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0"><?php echo e(round($product->rate, 1)); ?>

                                </h2>
                                <div class="text-lh-1">overall</div>
                            </div>

                            <!-- Ratings -->
                            <ul class="list-unstyled">
                                <li class="py-1">
                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: <?php echo e($reviewCount == 0 ? 0 : ($rate[5] / $reviewCount) * 100); ?>%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto text-right">
                                            <span class="text-gray-90"><?php echo e($rate[5]); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: <?php echo e($reviewCount == 0 ? 0 : ($rate[4] / $reviewCount) * 100); ?>%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto text-right">
                                            <span class="text-gray-90"><?php echo e($rate[4]); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: <?php echo e($reviewCount == 0 ? 0 : ($rate[3] / $reviewCount) * 100); ?>%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto text-right">
                                            <span class="text-gray-90"><?php echo e($rate[3]); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: <?php echo e($reviewCount == 0 ? 0 : ($rate[2] / $reviewCount) * 100); ?>%;"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto text-right">
                                            <span class="text-gray-90"><?php echo e($rate[2]); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2 mb-md-0">
                                            <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: <?php echo e($reviewCount == 0 ? 0 : ($rate[1] / $reviewCount) * 100); ?>%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto text-right">
                                            <span class="text-muted"><?php echo e($rate[1]); ?></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Ratings -->
                        </div>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(!isset($isHasReview) || $isHasReview == false): ?>
                                <div class="col-md-6">
                                    <h3 class="font-size-18 mb-5">Add a review</h3>
                                    <!-- Form -->
                                    <form class="js-validate" method="POST"
                                        action="<?php echo e(route('review.store', $product)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="rating" class="form-label mb-0">Your Rating</label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-group">
                                                    <div id="full-stars-example-two">
                                                        <div class="rating-group">
                                                            <input disabled checked class="rating__input rating__input--none"
                                                                name="rating" id="rating3-none" value="0" type="radio">
                                                            <label aria-label="1 star" class="rating__label"
                                                                for="rating3-1"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating" id="rating3-1"
                                                                value="1" type="radio">
                                                            <label aria-label="2 stars" class="rating__label"
                                                                for="rating3-2"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating" id="rating3-2"
                                                                value="2" type="radio">
                                                            <label aria-label="3 stars" class="rating__label"
                                                                for="rating3-3"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating" id="rating3-3"
                                                                value="3" type="radio">
                                                            <label aria-label="4 stars" class="rating__label"
                                                                for="rating3-4"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating" id="rating3-4"
                                                                value="4" type="radio">
                                                            <label aria-label="5 stars" class="rating__label"
                                                                for="rating3-5"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating" id="rating3-5"
                                                                value="5" type="radio">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $__errorArgs = ['rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="descriptionTextarea" class="form-label">Your Review</label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="3" id="descriptionTextarea"
                                                    data-msg="Please enter your message."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success" name="content"></textarea>
                                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="offset-md-4 offset-lg-3 col-auto">
                                                <button type="submit"
                                                    class="btn btn-primary-dark btn-wide transition-3d-hover">Add
                                                    Review</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Review -->
                    
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border-bottom border-color-1 pb-4 mb-4">
                            <!-- Review Rating -->
                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                    <?php for($i = 0; $i < round($review->rate); $i++): ?>
                                        <small class="fas fa-star"></small>
                                    <?php endfor; ?>
                                    <?php for($i = 0; $i < 5 - round($review->rate); $i++): ?>
                                        <small class="far fa-star text-muted"></small>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <!-- End Review Rating -->

                            <p class="text-gray-90"><?php echo e($review->content); ?></p>

                            <!-- Reviewer -->
                            <div class="mb-2">
                                <strong><?php echo e($review->user->name); ?>

                                    <?php echo e($review->user->id == (auth()->user()->id ?? '') ? '(You)' : ''); ?></strong>
                                <span class="font-size-13 text-gray-23">
                                    - <?php echo e($review->created_at->diffForHumans()); ?>

                                </span>
                            </div>
                            <?php if($review->response()->exists()): ?>
                                <div class="ml-5 mt-5">
                                    <p class="text-gray-90"><?php echo e($review->response->content); ?></p>
                                    <strong><?php echo e($review->response->admin->name); ?></strong>
                                    <span class="font-size-13 text-gray-23">
                                        - <?php echo e($review->response->created_at->diffForHumans()); ?>

                                    </span>
                                </div>
                            <?php endif; ?>
                            <!-- End Reviewer -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <!-- End Review -->
                </div>
            </div>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        #full-stars-example-two .rating-group {
            display: inline-flex;
        }

        #full-stars-example-two .rating__icon {
            pointer-events: none;
        }

        #full-stars-example-two .rating__input {
            position: absolute !important;
            left: -9999px !important;
        }

        #full-stars-example-two .rating__input--none {
            display: none;
        }

        #full-stars-example-two .rating__label {
            cursor: pointer;
            padding: 0 0.1em;
            font-size: 2rem;
        }

        #full-stars-example-two .rating__icon--star {
            color: orange;
        }

        #full-stars-example-two .rating__input:checked~.rating__label .rating__icon--star {
            color: #ddd;
        }

        #full-stars-example-two .rating-group:hover .rating__label .rating__icon--star {
            color: orange;
        }

        #full-stars-example-two .rating__input:hover~.rating__label .rating__icon--star {
            color: #ddd;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/user/product/show.blade.php ENDPATH**/ ?>