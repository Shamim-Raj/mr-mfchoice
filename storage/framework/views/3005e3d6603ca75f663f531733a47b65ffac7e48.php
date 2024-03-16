<div class="product-card">
    <div class="product-img">
        <a href="<?php echo e(url('product-details',$product->slug)); ?>">
            <?php if($product->images->first()->image ?? false): ?>
            <img src="<?php echo e(asset('uploads/products/galleries/'.$product->images->first()->image ?? '')); ?>" class="b-1" alt="<?php echo e($product->name); ?>" >
         <button class="want-order">অর্ডার করতে চাই</button>

            <?php endif; ?>

            <?php if($product->quantity <= 0 && $product->is_manage_stock): ?>
                <small class="sold-out">Sold out</small>
            <?php endif; ?>
        </a>
        <?php if(isset($product->details->flash_deal_title)): ?>
            <?php if($product->details->flash_deal_title == ''): ?>
                <span></span>
            <?php else: ?>
                <span class="tag"><?php echo e($product->details->flash_deal_title); ?></span>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($product->quantity <= 0 && $product->is_manage_stock): ?>
            <div class="stock-out">
                <p>Stock Out</p>
            </div>
        <?php endif; ?>
        <ul class="product-cart">
            <li><a href="javascript:addToWishlist(<?php echo e($product->id); ?>)"><span class="icon"><i class="fa-regular fa-heart"></i></span></a></li>
            <li><a href="javascript:buyNow(<?php echo e($product->id); ?>)"><span class="text"><?php echo e(__('BUY NOW')); ?></span></a></li>
            <li><a href="javascript:addToCart(<?php echo e($product->id); ?>)"><span class="icon"><i class="fas fa-<?php echo e($product->quantity ? 'cart-shopping' : 'circle-xmark text-danger'); ?>"></i></span></a></li>
        </ul>
    </div>
    <div class="product-card-details">

        <h5 class="title"><a href="<?php echo e(url('product-details',$product->slug)); ?>"><?php echo e($product->name); ?></a></h5>
        <?php if(hasPromotion($product->id)): ?>
            <span class="price"><?php echo e(currency(promotionPrice($product->id))); ?></span>
            <span class=""><del class="text-secondary"><?php echo e(currency($product->unit_price)); ?></del> <small class="text-secondary"><?php echo e(__('-')); ?> <?php echo e(round((($product->unit_price-promotionPrice($product->id))/$product->unit_price) *100)); ?><?php echo e(__('%')); ?></small></span>
        <?php else: ?>
            <?php if($product->discount > 0): ?>
            <span class="price"><?php echo e(currency(($product->sale_price))); ?> </span>
                <span class=""><del class="text-secondary"><?php echo e(currency($product->unit_price)); ?></del> <small class="text-secondary"> <?php echo e(__('-')); ?><?php if($product->discount_type=='percentage'): ?><?php echo e($product->discount); ?><?php elseif($product->discount_type=='fixed'): ?><?php echo e(round(($product->discount/$product->unit_price) *100)); ?> <?php endif; ?><?php echo e(__('%')); ?></small></span>
            <?php else: ?>
                <span class="price"><?php echo e(currency($product->unit_price)); ?></span>
            <?php endif; ?>
        <?php endif; ?>
        
    </div>
</div>
<?php /**PATH D:\office\mf-final2\main_last\resources\views/components/frontend/sub-product-card.blade.php ENDPATH**/ ?>