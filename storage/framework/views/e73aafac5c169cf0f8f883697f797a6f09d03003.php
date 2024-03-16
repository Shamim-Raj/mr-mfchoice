
<?php $__env->startSection('title','Banner - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="main-content default-manu">
            <?php echo $__env->make('backend.pages.content_management.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Tab Manu End  -->
                <!-- Tab Content Start -->
                <div class="tab-content default-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="banner" aria-labelledby="banner-tab">
                        <div class="row">
                            <div class="col">
                                <div class="float-md-end">
                                    <?php if(auth()->user()->can('create_banners') || auth()->user()->hasRole('super-admin')): ?>
                                    <a href="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.banners.create')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.banners.create')); ?><?php endif; ?>">
                                        <button class="btn btn-warning pull-right"> <?php echo e(__('Add Banner')); ?></button>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="content-table">
                            <table id="mDataTable" class="table p-table">
                                <thead>
                                <tr>
                                    <th scope="col"><?php echo e(__('Image')); ?></th>
                                    <th scope="col"><?php echo e(__('Title')); ?></th>
                                    <th scope="col"><?php echo e(__('Click')); ?></th>
                                    <th scope="col"><?php echo e(__('Target')); ?></th>
                                    <th scope="col"><?php echo e(__('Type')); ?></th>
                                    <th scope="col"><?php echo e(__('Expire')); ?></th>
                                    <th scope="col"><?php echo e(__('Status')); ?></th>
                                    <th scope="col"><?php echo e(__('Publish')); ?></th>
                                    <th scope="col"><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Tab Content End  -->
            </div>
        </div>
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
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.banner.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.banner.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'image', searchable:false,sortable:false },
                        { data: 'title' },
                        { data: 'total_click'},
                        { data: 'target' },
                        { data: 'type' },
                        { data: 'expire_at' },
                        { data: 'is_active' },
                        { data: 'publish_stat' },
                        { data: 'action',searchable:false,sortable:false },
                    ]
                });

            });

            $(document).on('click', '#mDataTable .status', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + <?php if(auth()->guard('admin')->check()): ?>'/admin/banner/changeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/banner/changeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id, 'field': 'is_active'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
            $(document).on('click', '#mDataTable .publish', function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + <?php if(auth()->guard('admin')->check()): ?>'/admin/banner/changeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/banner/changeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id, 'field': 'publish_stat'},
                    success: function (data) {
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\office\mf-final2\main_last\resources\views/backend/pages/content_management/banners/index.blade.php ENDPATH**/ ?>