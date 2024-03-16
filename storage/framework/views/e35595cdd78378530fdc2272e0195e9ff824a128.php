<?php $__env->startSection('title','Coupons | '); ?>

<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="content-tab-title">
                <h4><?php echo e(__('Coupon List')); ?></h4>
            </div>
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="questions-and-answer" role="tabpanel"
                 aria-labelledby="questions-and-answer-tab">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="float-md-start">
                                <a href="<?php echo e(route('backend.coupon.create')); ?>">
                                    <button class="btn theme-btn"> <?php echo e(__('Add Coupon')); ?></button>
                                </a>
                            </div>
                            <div class="float-md-end">
                                <label for="q"><?php echo e(__('Search')); ?></label>
                                <input type="text" name="search" class="form-control" id="search">
                            </div>
                        </div>
                    </div>
                    <div class="content-table">
                        <table class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('Id')); ?></th>
                                <th scope="col"><?php echo e(__('Code')); ?></th>
                                <th scope="col"><?php echo e(__('Type')); ?></th>
                                <th scope="col"><?php echo e(__('Duration')); ?></th>
                                <th scope="col"><?php echo e(__('Discount')); ?></th>
                                <th scope="col"><?php echo e(__('Usage')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody id="coupon-list">
                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($coupon->id); ?></td>
                                    <td><?php echo e($coupon->code); ?></td>
                                    <td><?php echo e($coupon->type); ?></td>
                                    <td>
                                        <?php echo e(date('Y-m-d',strtotime($coupon->start))??null); ?><br>
                                        <?php echo e(date('Y-m-d',strtotime($coupon->end))??null); ?>

                                    </td>
                                    <td>
                                        <?php if($coupon->discount_type == 'amount'): ?>
                                            $
                                        <?php endif; ?>
                                        <?php echo e($coupon->discount); ?>

                                        <?php if($coupon->discount_type == 'percent'): ?>
                                            %
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php echo e($coupon->usage->count()); ?>/<?php echo e($coupon->qty); ?>

                                    </td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a class="p-0 action" href="<?php echo e(route('backend.coupon.edit',$coupon->id)); ?>">
                                                    <button title="Edit">
                                                        <svg viewBox="0 0 11 11" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.72031 5.31576C8.48521 5.31576 8.29519 5.50625 8.29519 5.74089V9.1421C8.29519 9.37634 8.1047 9.56722 7.87007 9.56722H1.91801C1.68331 9.56722 1.49289 9.37634 1.49289 9.1421V3.19C1.49289 2.95575 1.68331 2.76487 1.91801 2.76487H5.3192C5.5543 2.76487 5.74432 2.57438 5.74432 2.33975C5.74432 2.10504 5.5543 1.91455 5.3192 1.91455H1.91801C1.21483 1.91455 0.642578 2.4868 0.642578 3.19V9.1421C0.642578 9.84529 1.21483 10.4175 1.91801 10.4175H7.87007C8.57326 10.4175 9.14551 9.84529 9.14551 9.1421V5.74089C9.14551 5.50579 8.95541 5.31576 8.72031 5.31576Z"></path>
                                                            <path d="M4.62759 4.9274C4.59785 4.95714 4.57785 4.99497 4.56936 5.03577L4.26879 6.53916C4.25477 6.60884 4.27688 6.68069 4.32702 6.73129C4.36742 6.77169 4.42184 6.79333 4.47758 6.79333C4.49112 6.79333 4.50521 6.79209 4.51923 6.78913L6.02218 6.48856C6.06383 6.48 6.10167 6.46007 6.13101 6.43025L9.49487 3.06645L7.99192 1.5636L4.62759 4.9274Z"></path>
                                                            <path d="M10.5329 0.525254C10.1184 0.110723 9.444 0.110723 9.02982 0.525254L8.44141 1.11362L9.94444 2.61652L10.5329 2.02808C10.7336 1.82786 10.8441 1.56084 10.8441 1.27686C10.8441 0.992876 10.7336 0.725864 10.5329 0.525254Z"></path>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </li>
                                            <li>
                                                <form user="deleteForm" method="POST" action="<?php echo e(route('backend.coupon.destroy', $coupon->id)); ?>">
                                                    <?php echo csrf_field(); ?> <?php echo method_field("DELETE"); ?>
                                                    <a class="p-0 action" href="javascript:void(0);"
                                                       onclick="deleteWithSweetAlert(event,parentNode);">
                                                        <button title="Delete">
                                                            <svg viewBox="0 0 10 11" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.65184 10.2545C8.63809 10.5288 8.36791 10.7452 8.03934 10.7452H2.31625C1.98768 10.7452 1.7175 10.5288 1.70375 10.2545L1.29504 3.04834H9.06055L8.65184 10.2545ZM3.88317 4.83823C3.88317 4.7234 3.77169 4.63027 3.63416 4.63027H3.23589C3.09844 4.63027 2.98688 4.72338 2.98688 4.83823V8.95529C2.98688 9.07014 3.09835 9.16324 3.23589 9.16324H3.63416C3.77163 9.16324 3.88317 9.07019 3.88317 8.95529V4.83823ZM5.62591 4.83823C5.62591 4.7234 5.51444 4.63027 5.37693 4.63027H4.97866C4.84121 4.63027 4.72968 4.72338 4.72968 4.83823V8.95529C4.72968 9.07014 4.84112 9.16324 4.97866 9.16324H5.37693C5.51441 9.16324 5.62591 9.07019 5.62591 8.95529V4.83823ZM7.36871 4.83823C7.36871 4.7234 7.25724 4.63027 7.11973 4.63027H6.72143C6.58396 4.63027 6.47245 4.72338 6.47245 4.83823V8.95529C6.47245 9.07014 6.58393 9.16324 6.72143 9.16324H7.11973C7.25721 9.16324 7.36871 9.07019 7.36871 8.95529V4.83823Z"/>
                                                                <path d="M1.0213 1.09395H3.66155V0.677051C3.66155 0.617846 3.71902 0.569824 3.78994 0.569824H6.56248C6.63337 0.569824 6.69083 0.617846 6.69083 0.677051V1.09393H9.33112C9.5436 1.09393 9.71582 1.23779 9.71582 1.41526V2.42468H0.636597V1.41528C0.636597 1.23782 0.808817 1.09395 1.0213 1.09395Z"/>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo $__env->make('backend.includes.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(function() {

            "use strict";
            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php echo e(route('backend.faq_content.list')); ?>",
                    columns: [
                        { data: 'id'},
                        { data: 'category_name' },
                        { data: 'subcategory_name'},
                        { data: 'question' },
                        { data: 'is_active' },
                        { data: 'action',searchable:false,sortable:false },
                    ]
                });

            });

            $(document).on('click','#mDataTable .status', function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path +'/admin/faq_contents/changeStatus',
                    data: {'status': status, 'id': id,'field': 'is_active'},
                    success: function(data){
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $("#search").on('input',function(){
            var search = $(this).val();
            var csrf = "<?php echo e(@csrf_token()); ?>";
            $.ajax({
                url : "<?php echo e(route('backend.coupon.list')); ?>",
                data : {_token:csrf,search:search},
                type : 'post'
            }).done(function(e){
                console.log(e);
                $("#coupon-list").html(e);
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/coupon/index.blade.php ENDPATH**/ ?>