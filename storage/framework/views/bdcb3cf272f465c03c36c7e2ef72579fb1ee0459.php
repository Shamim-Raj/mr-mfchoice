

<?php $__env->startSection('title',$title ?? 'Shop'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .mid-search, .manu-bar, .top-bar, .maan-mybazar-filter, .mair-right ul {
        display: none !important;
    }
</style>
    <!-- Breadcrumb Start -->
    <nav class="breadcrumb-manu maan-shop-breadcrumb" aria-label="breadcrumb" data-background="<?php echo e(asset('frontend/img/breadcrumb.png')); ?>">
        <h3><?php echo e($title ?? 'Shop'); ?></h3>
    </nav>
    <!-- Breadcrumb End -->
    <section class="product pt-5">
        <div class="container">
            <div class="row p-5">
                <div class="coll-lg-12 sub-title">
                   <h3> <?php echo e($category->name); ?> </h3>
                    
                
                    
                </div>
            </div>
            <div class="row p-1">
                <div class="coll-lg-12 d-flex justify-content-center product-video">
               <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
           
                    <?php if($product->video): ?>
                        <iframe width="880" height="520" src="https://www.youtube.com/embed/LKBt6kmc9Cs"
                        
                            title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                
                <iframe width="880" height="520" src="https://www.youtube.com/embed/LKBt6kmc9Cs" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     
                </div>
            </div>
            <div class="row p-5">
                <div class="coll-lg-12 sub-title">
                   <h3> <?php echo e($category->meta_title); ?> </h3>
                </div>
            </div>

            <div class="row p-1">
                <div class="coll-lg-12 d-flex justify-content-center category-img">
                    <img src="/uploads/products/galleries/dZKdtwD8n5K48xbwmCRDOyyTNtXHg75XBpSyiwRq.png" alt="">
                </div>
            </div>

            <div class="row p-5">
                <div class="coll-lg-12">
                    <?php if($category->meta_description): ?>
                      
                           <div class="d-flex justify-content-center">
                                <button class="border-0 px-5 py-2 text-light description-tab" style="background: var(--color-orange)" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false"><?php echo e(__('Description')); ?></button>
                           </div>

                            <div class="tab-pane fade active show pt-4" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <?php echo $category->meta_description; ?>

                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>



    <!-- Shop List Start -->
    <section class="shop-list mybazar-product-with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-last" id="product-area">
                    <!-- ** ajax loader start ** -->
                    <div id="product-loader">
                        <div class="overlay-content">
                            <img src="<?php echo e(asset('frontend/img/loader/bar.gif')); ?>" alt="Loading..." />
                        </div>
                    </div>
                    <!-- ** ajax loader end ** -->
                    <div class="maan-mybazar-filter">
                        <div class="maan-filter-wrapper">
                            <div class="filter-left">
                                <p class="m-0">
                                    <?php if($products->count() > 0): ?>
                                        <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> <?php echo e(__('of')); ?>

                                    <?php endif; ?>
                                    <?php echo e($products->total()); ?> <?php echo e(__('Results')); ?>

                                </p>
                            </div>
                            <div class="maan-filter-right">
                                <select name="sorting" id="sorting">
                                    <option selected="selected" disabled><?php echo e(__('SORT BY')); ?></option>
                                    <option value="price"><?php echo e(__('Price')); ?></option>
                                    <option value="popularity"><?php echo e(__('Popularity')); ?></option>
                                </select>
                                <div class="nav filter-grid">
                                    <h5><?php echo e(__('View')); ?></h5>
                                    <a class="active" href="#ShopGrid" data-bs-toggle="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="26" viewBox="0 0 24 26">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect width="24" height="26" fill="none"/>
                                                </clipPath>
                                            </defs>
                                            <g id="Repeat_Grid_1" data-name="Repeat Grid 1" clip-path="url(#clip-path)">
                                                <g transform="translate(-1676 -611)">
                                                    <rect id="Rectangle_146" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -611)">
                                                    <rect id="Rectangle_146-2" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -611)">
                                                    <rect id="Rectangle_146-3" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1676 -601)">
                                                    <rect id="Rectangle_146-4" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -601)">
                                                    <rect id="Rectangle_146-5" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -601)">
                                                    <rect id="Rectangle_146-6" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1676 -591)">
                                                    <rect id="Rectangle_146-7" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1667 -591)">
                                                    <rect id="Rectangle_146-8" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                                <g transform="translate(-1658 -591)">
                                                    <rect id="Rectangle_146-9" data-name="Rectangle 146" width="6" height="6" transform="translate(1676 611)" fill="#ff8400"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#ShopList" data-bs-toggle="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                            <g id="Group_182" data-name="Group 182" transform="translate(-1430 -578)">
                                                <rect id="Rectangle_147" data-name="Rectangle 147" width="26" height="4" transform="translate(1430 578)" fill="#ff8400"/>
                                                <rect id="Rectangle_148" data-name="Rectangle 148" width="26" height="4" transform="translate(1430 585)" fill="#ff8400"/>
                                                <rect id="Rectangle_149" data-name="Rectangle 149" width="26" height="4" transform="translate(1430 593)" fill="#ff8400"/>
                                                <rect id="Rectangle_150" data-name="Rectangle 150" width="26" height="4" transform="translate(1430 600)" fill="#ff8400"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="ShopGrid">
                            <div class="row auto-margin-3">
                                <!-- ** ajax loader start ** -->
                                <div id="product-loader">
                                    <div class="overlay-content">
                                        <img src="<?php echo e(asset('frontend/img/loader/bar.gif')); ?>" alt="Loading..." />
                                    </div>
                                </div>
                                <!-- ** ajax loader end ** -->
                                <?php if($products->count() == 0): ?>
                                    <div class="text-center">
                                        <p><?php echo e(__('Not available. Try search with different keyword')); ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-6">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.sub-product-card','data' => ['product' => $product]]); ?>
<?php $component->withName('frontend.sub-product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.page-navigation-ajax','data' => ['paginator' => $products]]); ?>
<?php $component->withName('frontend.page-navigation-ajax'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>

                        <!-- shop list items -->
                        <div class="tab-pane fade" id="ShopList">
                            <div class="row auto-margin-3" id="product-area">
                                <?php if($products->count() == 0): ?>
                                    <div class="text-center">
                                        <p><?php echo e(__('Not available. Try search with different keyword')); ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="col-lg-12">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if (isset($component)) { $__componentOriginal5d9b37d58b4fc322377df48fa54c686fcf1ccad0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Frontend\ProductCard3::class, ['product' => $product]); ?>
<?php $component->withName('frontend.product-card3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d9b37d58b4fc322377df48fa54c686fcf1ccad0)): ?>
<?php $component = $__componentOriginal5d9b37d58b4fc322377df48fa54c686fcf1ccad0; ?>
<?php unset($__componentOriginal5d9b37d58b4fc322377df48fa54c686fcf1ccad0); ?>
<?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.page-navigation-ajax','data' => ['paginator' => $products]]); ?>
<?php $component->withName('frontend.page-navigation-ajax'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Shop List End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/pages/sub_shop.blade.php ENDPATH**/ ?>