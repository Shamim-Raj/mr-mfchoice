<?php $__env->startSection('title','Product - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('productmanagement::includes.product_management', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="all-product" aria-labelledby="all-product-tab">
                <div class="container">

                    <div class="content-table mt-0">

                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('ID')); ?></th>
                                <th scope="col"><?php echo e(__('Name')); ?></th>
                                <th scope="col"><?php echo e(__('Image')); ?></th>
                                <th scope="col"><?php echo e(__('SKU')); ?></th>
                                <th scope="col"><?php echo e(__('Price')); ?></th>
                                <th scope="col"><?php echo e(__('Stock')); ?></th>
                                <th scope="col"><?php echo e(__('Variation')); ?></th>
                                <th scope="col"><?php echo e(__('Sold')); ?></th>
                                <th scope="col"><?php echo e(__('Viewed')); ?></th>
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

    <div class="modal fade" id="product-view-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product Views</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="product-view-modal-content-wrapper">
                        <div class="product-thumb text-center">
                            <img src="https://moova.maantechnology.com/back-end/img/gallery_image/16582944927366.jpg" alt="product-thumb">
                        </div>
                        <div class="row prodcut-info-items">
                            <div class="col-md-12">
                                <h5>Product Information</h5>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Product Name:</strong> Lorem ipsum dolor, sit amet</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Minimum Qty:</strong> 10</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Category:</strong> Baby</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Tags:</strong> Baby, Maan, Woman</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Brand:</strong> Fashion</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Slug:</strong> baby</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Sku:</strong> MS0044</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Seller:</strong> Kobir Mia </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Warranty:</strong> 6 Month </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Return Policy:</strong> 7 Days </p>
                            </div>
                        </div>
                        <div class="row prodcut-info-items">
                            <div class="col-md-12">
                                <h5>Product Variation</h5>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Color:</strong> red</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Sizes:</strong> M, SM</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Attributes:</strong> Baby</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Tags:</strong> Baby, Maan, Woman</p>
                            </div>
                        </div>
                        <div class="row prodcut-info-items">
                            <div class="col-md-12">
                                <h5>Product price + stock</h5>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Unit Price:</strong> 1200</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Purchase Price:</strong> 800</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Discount:</strong> 50</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Quantity:</strong> 100</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Shipping Cost:</strong> 50</p>
                            </div>
                        </div>
                        <div class="row prodcut-info-items">
                            <div class="col-md-12">
                                <h5>Discription</h5>
                            </div>
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam quibusdam nam molestias, voluptas suscipit magnam impedit iusto autem possimus? Aspernatur!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    ajax: "<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.product.list')); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.product.list')); ?><?php endif; ?>",
                    columns: [
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'image',searchable:false,sortable:false },
                        { data: 'sku' },
                        { data: 'unit_price' },
                        { data: 'quantity' },
                        { data: 'variation',searchable:false,sortable:false },
                        { data: 'sold',searchable:false,sortable:false},
                        { data: 'total_viewed' },
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
                    url: public_path +<?php if(auth()->guard('admin')->check()): ?>'/admin/product/changeStatus'<?php elseif(auth()->guard('seller')->check()): ?>'/seller/product/changeStatus'<?php endif; ?>,
                    data: {'status': status, 'id': id,'field': 'is_active'},
                    success: function(data){
                        notification('success', data.message);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\office\mf-final2\main_last\app/Modules/Backend/ProductManagement\Resources/views/products/index.blade.php ENDPATH**/ ?>