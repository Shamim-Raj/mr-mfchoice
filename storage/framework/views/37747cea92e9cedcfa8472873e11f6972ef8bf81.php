<!-- Info Footer Start -->
<div class="info-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-5">
                <div class="footer-left">
                    <h6><?php echo e(__('About us')); ?></h6>
                    <p><?php echo e(maanAppearance('about_us')); ?></p>
                    <ul>
                        <li>
                            <a href="<?php echo e(maanAppearance('facebook_link')); ?>"><svg viewBox="0 0 7.611 15.612"><path d="M182.157,756.25v-1.366c0-.683.1-1.073,1.171-1.073h1.366v-2.634H182.45c-2.732,0-3.61,1.268-3.61,3.513v1.659h-1.756v2.634h1.659v7.806h3.415v-7.806H184.4l.293-2.732Z" transform="translate(-177.083 -751.176)"></path></svg></a>
                        </li>
                        <li>
                            <a href="<?php echo e(maanAppearance('twitter_link')); ?>"><svg viewBox="0 0 16.438 12.506"><path d="M260.322,753.734a6.3,6.3,0,0,1-1.922.481,3.152,3.152,0,0,0,1.442-1.73,7.937,7.937,0,0,1-2.115.769,3.649,3.649,0,0,0-2.5-.961,3.308,3.308,0,0,0-3.364,3.172,1.436,1.436,0,0,0,.1.673,9.507,9.507,0,0,1-6.921-3.268,2.987,2.987,0,0,0-.481,1.634,3.033,3.033,0,0,0,1.538,2.6,4.036,4.036,0,0,1-1.538-.384h0a3.183,3.183,0,0,0,2.691,3.076,2.676,2.676,0,0,1-.865.1,1.883,1.883,0,0,1-.673-.1A3.269,3.269,0,0,0,248.883,762a6.949,6.949,0,0,1-4.23,1.346h-.769a10.5,10.5,0,0,0,5.191,1.442,9.2,9.2,0,0,0,9.607-8.769c0-.057,0-.113.006-.17v-.385A9.388,9.388,0,0,0,260.322,753.734Z" transform="translate(-243.884 -752.292)"></path></svg></a>
                        </li>
                        <li>
                            <a href="<?php echo e(maanAppearance('pinterest_link')); ?>"><svg viewBox="0 0 10.802 13.892"><path d="M468.8,905.325a3.953,3.953,0,0,1-1.816-.865c-.346,1.9-.778,3.719-2.162,4.671-.432-2.854.605-5.017,1.038-7.352-.779-1.3.086-3.979,1.73-3.374,2.076.779-1.816,4.93.779,5.449,2.681.519,3.806-4.671,2.162-6.4-2.422-2.422-7.006-.087-6.487,3.46.173.865,1.038,1.125.346,2.336-1.557-.346-1.99-1.557-1.9-3.2a5.178,5.178,0,0,1,4.671-4.757c2.941-.346,5.622,1.038,6.055,3.806.433,3.114-1.3,6.487-4.411,6.228Z" transform="translate(-462.474 -895.239)"></path></svg></a>
                        </li>
                        <li>
                            <a href="<?php echo e(maanAppearance('instagram_link')); ?>"><svg viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="row">
                    <div class="col-lg-4">
                        <h6><?php echo e(__('Information')); ?></h6>
                        <ul>
                            <?php $__currentLoopData = maanMenus(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('page',$menu->url)); ?>" target="<?php echo e($menu->target); ?>"><?php echo e($menu->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h6><?php echo e(__('Returns')); ?></h6>
                        <ul>
                            <?php $__currentLoopData = maanMenus(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('page',$menu->url)); ?>" target="<?php echo e($menu->target); ?>"><?php echo e($menu->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-right">
                            <h6><?php echo e(__('Get In Touch')); ?></h6>
                            <div class="payment-gateway">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#"><img src="<?php echo e(asset('frontend/img/playstore.png')); ?>" alt="img"></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#"><img src="<?php echo e(asset('frontend/img/apple.png')); ?>" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Info Footer End -->
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/customer/includes/info-footer.blade.php ENDPATH**/ ?>