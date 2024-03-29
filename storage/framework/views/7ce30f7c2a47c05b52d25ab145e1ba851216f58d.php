<!-- Side Bar User Start -->
<div class="side-bar-user">
    <button class="close-btn">
        <span></span>
        <span></span>
    </button>
    <ul>
        <?php if(auth('customer')->check()): ?>
        <li class="<?php echo e(isActiveMenu(['home','order'])); ?>">
            <a href="<?php echo e(route('customer.order')); ?>">
                <span class="icon"><svg viewBox="0 0 60.123 60.123"><path d="M57.124 51.893H16.92a3 3 0 1 1 0-6h40.203a3 3 0 0 1 .001 6zM57.124 33.062H16.92a3 3 0 1 1 0-6h40.203a3 3 0 0 1 .001 6zM57.124 14.231H16.92a3 3 0 1 1 0-6h40.203a3 3 0 0 1 .001 6z"></path><circle cx="4.029" cy="11.463" r="4.029"></circle><circle cx="4.029" cy="30.062" r="4.029"></circle><circle cx="4.029" cy="48.661" r="4.029"></circle></svg></span>
                <span class="title"><?php echo e(__('Order Management')); ?></span>
            </a>
        </li>
        <?php endif; ?>
        <li class="<?php echo e(isActiveMenu('announcement')); ?>">
            <a href="<?php echo e(route('customer.announcement')); ?>">
                <span class="icon"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M625.9 115c-5.9 0-11.9 1.6-17.4 5.3L254 352H90c-8.8 0-16 7.2-16 16v288c0 8.8 7.2 16 16 16h164l354.5 231.7c5.5 3.6 11.6 5.3 17.4 5.3 16.7 0 32.1-13.3 32.1-32.1V147.1c0-18.8-15.4-32.1-32.1-32.1zM586 803L293.4 611.7l-18-11.7H146V424h129.4l17.9-11.7L586 221v582zm348-327H806c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16h128c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16zm-41.9 261.8l-110.3-63.7a15.9 15.9 0 0 0-21.7 5.9l-19.9 34.5c-4.4 7.6-1.8 17.4 5.8 21.8L856.3 800a15.9 15.9 0 0 0 21.7-5.9l19.9-34.5c4.4-7.6 1.7-17.4-5.8-21.8zM760 344a15.9 15.9 0 0 0 21.7 5.9L892 286.2c7.6-4.4 10.2-14.2 5.8-21.8L878 230a15.9 15.9 0 0 0-21.7-5.9L746 287.8a15.99 15.99 0 0 0-5.8 21.8L760 344z"></path></svg></span>
                <span class="title"><?php echo e(__('Announcements')); ?></span>
            </a>
        </li>
        <li class="<?php echo e(isActiveMenu('faq')); ?>">
            <a href="<?php echo e(route('customer.faq')); ?>">
                <span class="icon">
                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.0007 13.5349C20.0007 11.0531 18.5769 8.83816 16.4445 7.76074C16.3783 12.5193 12.5203 16.3773 7.76172 16.4436C8.83914 18.576 11.0541 19.9998 13.5359 19.9998C14.6996 19.9998 15.8311 19.6899 16.8254 19.101L19.9725 19.9715L19.102 16.8244C19.6908 15.8302 20.0007 14.6986 20.0007 13.5349Z"></path>
                        <path d="M15.2734 7.63571C15.2734 3.42476 11.8476 -0.000976562 7.63669 -0.000976562C3.42574 -0.000976562 0 3.42476 0 7.63571C0 9.00808 0.365294 10.3443 1.05896 11.5174L0.0280761 15.2442L3.75502 14.2134C4.92811 14.9071 6.26432 15.2724 7.63669 15.2724C11.8476 15.2724 15.2734 11.8467 15.2734 7.63571ZM6.46482 5.85837H5.29295C5.29295 4.56596 6.34427 3.51463 7.63669 3.51463C8.9291 3.51463 9.98043 4.56596 9.98043 5.85837C9.98043 6.51435 9.70272 7.14484 9.21825 7.58795L8.22262 8.4992V9.41305H7.05075V7.98315L8.42709 6.72339C8.67306 6.49832 8.80856 6.19117 8.80856 5.85837C8.80856 5.21217 8.28289 4.6865 7.63669 4.6865C6.99048 4.6865 6.46482 5.21217 6.46482 5.85837ZM7.05075 10.5849H8.22262V11.7568H7.05075V10.5849Z"></path>
                    </svg>
                </span>
                <span class="title"><?php echo e(__('FAQ')); ?></span>
            </a>
        </li>
    </ul>
    <span class="overlay"></span>
</div>
<!-- Side Bar User End -->
<?php /**PATH D:\office\mf-final2\main_last\resources\views/customer/includes/sidebar.blade.php ENDPATH**/ ?>