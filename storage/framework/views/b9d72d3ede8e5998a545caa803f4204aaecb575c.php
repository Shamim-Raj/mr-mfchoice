
<?php $__env->startSection('title','FAQ Category - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
        <?php echo $__env->make('backend.pages.faq_manager.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Manu End -->
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="faq-category" role="tabpanel" aria-labelledby="faq-category-tab">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="float-md-end">
                                <a href="<?php echo e(route('backend.faq_category.create')); ?>">
                                    <button class="btn theme-btn"> <?php echo e(__('Add FAQ Category')); ?></button>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="content-table mt-0">
                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('Name')); ?></th>
                                <th scope="col"><?php echo e(__('Icon')); ?></th>
                                <th scope="col"><?php echo e(__('Order')); ?></th>
                                <th scope="col"><?php echo e(__('Slug')); ?></th>
                                <th scope="col"><?php echo e(__('Status')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
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
        $(function () {

            "use strict";
            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php echo e(route('backend.faq_category.list')); ?>",
                    columns: [
                        { data: 'name' },
                        { data: 'icon'},
                        { data: 'order' },
                        { data: 'slug' },
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
                    url: public_path +'/admin/faq_category/changeStatus',
                    data: {'status': status, 'id': id,'field': 'is_active'},
                    success: function(data){
                        notification('success', data.message);
                    }
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/faq_manager/faq_categories/index.blade.php ENDPATH**/ ?>