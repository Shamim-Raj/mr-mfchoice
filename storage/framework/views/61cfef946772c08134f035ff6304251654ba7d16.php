

<?php $__env->startSection('title','Seller Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="multivendor-shop-bg">
        <div class="container">
            <div class="img-wrapper">
                <img src="<?php echo e(asset('uploads/sellers/'.$seller->banner)); ?>" alt="">
            </div>
        </div>
    </div>

    <section class="multivendor-profile-section">
        <div class="container">
            <div class="multivendor-profile-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="multivendors-filter">
                            <div class="follow">
                                <div class="img">
                                    <img src="<?php echo e(asset('uploads/sellers/'.$seller->image)); ?>" alt="">
                                </div>
                                <div class="content">
                                    <h5><?php echo e(__($seller->company_name)); ?></h5>
                                    
                                </div>
                            </div>
                            <div class="page-tabs">
                                <ul>
                                    <li><a href="<?php echo e(__('shop.html')); ?>"><?php echo e(__('Home Page')); ?></a></li>
                                    <li><a href="<?php echo e(route('seller.product',$seller->slug)); ?>"><?php echo e(__('All Products')); ?></a></li>
                                    <li><a class="active" href="<?php echo e(route('seller.profile',$seller->slug)); ?>"><?php echo e(__('Profile')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="profile-left-sidebar">
                            <div class="sellar-rating">
                                <h4 class="mb-2"><?php echo e(__('Seller Ratings')); ?></h4>
                                <h3 ><?php echo e(number_format($average_rating, 2)); ?>/<sub class="text-secondary">5</sub></h3>
                                <div class="rateit" data-rateit-value="<?php echo e($average_rating); ?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                <div class="seller-progress-wrapper">
                                    <div class="seller-progress">
                                        <span><?php echo e(__('Positive')); ?></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($positive); ?>%" aria-valuenow="<?php echo e($positive); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small><?php echo e($positive); ?></small>
                                    </div>
                                    <div class="seller-progress">
                                        <span><?php echo e(__('Neutral')); ?></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($neutral); ?>%" aria-valuenow="<?php echo e($neutral); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small><?php echo e($neutral); ?></small>
                                    </div>
                                    <div class="seller-progress">
                                        <span><?php echo e(__('Negative')); ?></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo e($negative); ?>%" aria-valuenow="<?php echo e($negative); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small><?php echo e($negative); ?></small>
                                    </div>
                                </div>
                                <p><?php echo e(__('Based on')); ?> <b><?php echo e($total_reviews); ?></b> <?php echo e(__('customer reviews')); ?></p>
                            </div>
                            <div class="join-date">
                                <h6><?php echo e(__('Joined')); ?> (<?php echo e(Carbon\Carbon::createFromTimeStamp(strtotime($seller->created_at))->diffForHumans()); ?>)</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="seller-review-wrapper">
                            <div class="seller-review-title">
                                <h5><?php echo e(__('Seller Ratings and Reviews') . ' ('.$total_reviews.')'); ?></h5>
                            </div>
                            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="seller-review-items">
                                <div class="left-side">
                                    <div class="rate">
                                        <?php if(in_array($rating->review_point, [4,5])): ?>
                                        <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/happy.png')); ?>" alt="">
                                        <span><?php echo e(__('Positive')); ?></span>
                                        <?php elseif(in_array($rating->review_point, [3,2])): ?>
                                        <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/neutral.png')); ?>" alt="">
                                        <span><?php echo e(__('Neutral')); ?></span>
                                        <?php elseif($rating->review_point == 1): ?>
                                        <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/angry.png')); ?>" alt="">
                                        <span class="text-danger"><?php echo e(__('Negative')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="reviewer">
                                        <label><?php echo e(Str::limit($rating->user->first_name ?? 'ABC', 3, '***')); ?> - </label>
                                        <span>
                                            <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/1.png')); ?>" alt="">
                                            <span> Verified Purchase </span>
                                        </span>
                                    </div>
                                    <div class="review-like">
                                        <span>
                                            <a href="javascript:void(0)"><img src="<?php echo e(asset('frontend/img/multi-vendors/icon/Ei-like.svg')); ?>" alt=""></a>
                                            <span>0</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="produtct-rating-wrapper">
                            <div class="seller-review-title">
                                <h5><?php echo e(__('Seller Ratings and Reviews') . ' ('.$total_reviews.')'); ?></h5>
                            </div>
                            <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-rating-items">
                                <div class="seller-img">
                                    <img class="rounded-circle" src="<?php echo e(asset($rating->user->image ? 'frontend/img/users/'. $rating->user->image : 'frontend/img/multi-vendors/shop/2.jpeg')); ?>" alt="">
                                </div>
                                <div class="product-ratign-discription-wrapper">
                                    <div class="meta-info">
                                        <?php for($i = 0; $i < $rating->review_point; $i++): ?>
                                        <i class="fa-solid fa-star text-warning"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="content">
                                        <h6><?php echo e(Str::limit($rating->user->first_name ?? 'ABC', 3, '***')); ?> - </h6>
                                        <p><?php echo e($rating->review_note); ?></p>
                                        
                                        <div class="reviewer">
                                            <span>
                                                <?php if(in_array($rating->review_point, [4,5])): ?>
                                                <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/happy.png')); ?>" alt="">
                                                <?php elseif(in_array($rating->review_point, [3,2])): ?>
                                                <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/neutral.png')); ?>" alt="">
                                                <?php elseif($rating->review_point == 1): ?>
                                                <img src="<?php echo e(asset('frontend/img/multi-vendors/icon/angry.png')); ?>" alt="">
                                                <?php endif; ?>
                                                <span> Verified Purchase </span>
                                            </span>
                                        </div>
                                        <div class="review-like">
                                            <span>
                                                <a href=""><img src="<?php echo e(asset('frontend/img/multi-vendors/icon/Ei-like.svg')); ?>" alt=""></a>
                                                <span>0</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/frontend/seller/index.blade.php ENDPATH**/ ?>