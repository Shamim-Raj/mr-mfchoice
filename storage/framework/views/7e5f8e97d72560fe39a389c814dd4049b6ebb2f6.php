<div class="product-card">
    <div class="product-img">
        <a href="<?php echo e(route('product',$product->slug)); ?>">
            <?php if($product->images->first()->image ?? false): ?>
            <img src="<?php echo e(asset('uploads/products/galleries/'.$product->images->first()->image ?? '')); ?>" class="b-1" alt="<?php echo e($product->name); ?>" >
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
            <li><a href="javascript:addToWishlist(<?php echo e($product->id); ?>)"><span class="icon"><svg viewBox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path></svg></span></a></li>
            <li><a href="javascript:buyNow(<?php echo e($product->id); ?>)"><span class="text"><?php echo e(__('BUY NOW')); ?></span></a></li>
            <li><a href="javascript:addToCart(<?php echo e($product->id); ?>)"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"><path d="M503.142,79.784c-7.303-8.857-18.128-13.933-29.696-13.933H176.37c-6.085,0-11.023,4.938-11.023,11.023 c0,6.085,4.938,11.023,11.023,11.023h297.07c5.032,0,9.541,2.1,12.688,5.914c3.197,3.88,4.475,8.995,3.511,13.972l-44.054,220.282 c-1.709,7.871-8.383,13.366-16.232,13.366H184.323L83.158,36.854C77.69,21.234,62.886,10.74,45.932,10.74 c-0.005,0-0.011,0-0.017,0c-14.38,0.496-28.963,0.491-32.535,0.248c-3.555-0.772-7.397,0.22-10.152,2.976 c-4.305,4.305-4.305,11.282,0,15.587c3.412,3.412,4.564,4.564,43.068,3.23c7.22,0,13.674,4.564,15.995,11.188l103.618,311.962 c1.499,4.503,5.71,7.545,10.461,7.545h252.982c18.31,0,33.841-12.638,37.815-30.909l44.109-220.525 C513.503,100.513,510.544,88.757,503.142,79.784z"></path><path d="M424.392,424.11H223.77c-6.785,0-13.162-4.674-15.46-11.233l-21.495-63.935c-1.94-5.771-8.207-8.885-13.961-6.934 c-5.771,1.935-8.874,8.19-6.934,13.961l21.539,64.061c5.473,15.625,20.062,26.119,36.31,26.119h200.622 c6.085,0,11.023-4.933,11.023-11.018S430.477,424.11,424.392,424.11z"></path><path d="M231.486,424.104c-21.275,0-38.581,17.312-38.581,38.581s17.306,38.581,38.581,38.581s38.581-17.312,38.581-38.581 S252.761,424.104,231.486,424.104z M231.486,479.22c-9.116,0-16.535-7.419-16.535-16.535c0-9.116,7.419-16.535,16.535-16.535 c9.116,0,16.535,7.419,16.535,16.535C248.021,471.802,240.602,479.22,231.486,479.22z"></path><path d="M424.392,424.104c-21.269,0-38.581,17.312-38.581,38.581s17.312,38.581,38.581,38.581 c21.269,0,38.581-17.312,38.581-38.581S445.661,424.104,424.392,424.104z M424.392,479.22c-9.116,0-16.535-7.419-16.535-16.535 c0-9.116,7.419-16.535,16.535-16.535c9.116,0,16.535,7.419,16.535,16.535C440.927,471.802,433.508,479.22,424.392,479.22z"></path></svg></span></a></li>
        </ul>
    </div>
    <div class="product-card-details">

        <h5 class="title"><a href="<?php echo e(route('product',$product->slug)); ?>"><?php echo e($product->name); ?></a></h5>
        <?php if(hasPromotion($product->id)): ?>
            <span class="price"><?php echo e(currency(promotionPrice($product->id),2)); ?></span>
            <span class=""><del class="text-secondary"><?php echo e(currency($product->unit_price,2)); ?></del> <small class="text-secondary"><?php echo e(__('-')); ?><?php echo e(round((($product->unit_price-promotionPrice($product->id))/$product->unit_price) *100)); ?><?php echo e(__('%')); ?></small></span>
        <?php else: ?>
            <?php if($product->discount > 0): ?>
                <span class="price"><?php echo e(currency(($product->sale_price),2)); ?> </span>
                <span><del class="text-secondary"><?php echo e(currency($product->unit_price,2)); ?></del> <small class="text-secondary"><?php echo e(__('-')); ?><?php if($product->discount_type=='percentage'): ?><?php echo e($product->discount); ?><?php elseif($product->discount_type=='fixed'): ?><?php echo e(round(($product->discount/$product->unit_price) *100)); ?> <?php endif; ?><?php echo e(__('%')); ?></small></span>
            <?php else: ?>
                <span class="price"><?php echo e(currency($product->unit_price)); ?></span>
                <span class=""> </span>
            <?php endif; ?>
        <?php endif; ?>
        <div class="d-flex justify-content-between">
            <div class="star-rating">
                <div class="rateit" data-rateit-value="<?php echo e(productRating($product->reviews)); ?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\office\mr-mfchoice\resources\views/components/frontend/product-card2.blade.php ENDPATH**/ ?>