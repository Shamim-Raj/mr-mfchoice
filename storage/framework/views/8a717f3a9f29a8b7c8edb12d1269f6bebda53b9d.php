<div class="maan-wrapper mybazar-maindashboard">
    <div class="body-overlay"></div>
    <!-- Page Content  -->
    <div id="content" class="maan-rightside-content">
        <div class="maan-main-content">
            <div class="maan-state-overview maan-layout-style-one">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="maan-counter-wpr grid-4">
                                <div class="maan-counter-box">
                                    <div class="maan-icon maan-radius maan-icon-clr-lightblue">
                                        <i> <img src="<?php echo e(URL::to('backend/img/icons/2.svg')); ?>" alt="Icon"></i>
                                    </div>
                                    <div class="maan-desc">
                                        <div class="maan-counter">
                                            <div class="maan-counter">
                                                <span
                                                    class="count-icon"><?php echo e($website_appearance->currency->symbol); ?></span>
                                                <span class="maan-counter-title timer"><?php echo e($total_sale); ?></span>
                                            </div>
                                            <p class="maan-counter-content"><?php echo e(__('Total Sale')); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="maan-counter-box">
                                    <div class="maan-icon maan-radius maan-icon-clr-lightdanger">
                                        <i> <img src="<?php echo e(URL::to('backend/img/icons/1.svg')); ?>" alt="Icon"></i>
                                    </div>
                                    <div class="maan-desc">
                                        <div class="maan-counter">
                                            <span
                                                class="maan-counter-title timer"><?php echo e($order_overview['total_order'] ?? 0); ?></span>
                                        </div>
                                        <p class="maan-counter-content"><?php echo e(__('Total Order')); ?></p>
                                    </div>
                                </div>

                                <div class="maan-counter-box">
                                    <div class="maan-icon maan-radius maan-icon-clr-lightgreen">
                                        <i> <img src="<?php echo e(URL::to('backend/img/icons/pending-blue.svg')); ?>"
                                                alt="Icon"></i>
                                    </div>
                                    <div class="maan-desc">
                                        <div class="maan-counter">
                                            <span class="maan-counter-title timer"><?php echo e($order_overview['1'] ?? 0); ?></span>
                                        </div>
                                        <p class="maan-counter-content"><?php echo e(__('Pending Order')); ?></p>
                                    </div>
                                </div>

                                <div class="maan-counter-box">
                                    <div class="maan-icon maan-radius maan-icon-clr-lightyellow">
                                        <i> <img src="<?php echo e(URL::to('backend/img/icons/order-cancel.svg')); ?>"
                                                alt="Icon"></i>
                                    </div>
                                    <div class="maan-desc">
                                        <div class="maan-counter">
                                            <span class="maan-counter-title timer"><?php echo e($order_overview['7'] ?? 0); ?></span>
                                        </div>
                                        <p class="maan-counter-content"><?php echo e(__('Cancel Order')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-7 col-xl-12">
                            <div class="maan-content-wpr">
                                <div class="maan-card-header maan-chart-radius">
                                    <h3 class="maan-chart-title"><?php echo e(__('Monthly Sale Status')); ?></h3>
                                    <div class="card-dropdown">
                                        <div class="card-dropdown" id="sale_month">
                                            <input type="month" id="start" name="start" class="month"
                                                min="2021-10" max="<?= date('Y-m') ?>" value="<?= date('Y-m') ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body dashboard-linecahrt-wrap pt-0">
                                    <?php echo $__env->make('backend.pages._monthly_sale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="maan-content-wrapper  pyechart-xl grid-2">
                                        <div class="maan-content-wpr">
                                            <div class="maan-card-header maan-appoint-header-bg3 maan-chart-radius">
                                                <h3 class="maan-chart-title"><?php echo e(__('Yearly Status by Category')); ?></h3>
                                                <div class="card-dropdown">
                                                    <div class="card-dropdown" id="category_month">
                                                        <input type="month" id="start" name="start"
                                                            class="month" min="2021-10" max="<?= date('Y-m') ?>"
                                                            value="<?= date('Y-m') ?>">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="maan-pie-card-body">
                                                <div class="maan-chart-point">
                                                    <div class="maan-check-point-area">
                                                        <canvas id="ShareProfit"></canvas>
                                                    </div>
                                                    <div id="monthly_category_status">
                                                        <?php echo $__env->make('backend.pages._monthly_category_status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="maan-content-wpr dashboard-topnew-customer">
                                            <div
                                                class="maan-card-header maan-appoint-header-bg2 maan-chart-radius text-center">
                                                <h3 class="maan-chart-title"><?php echo e(__('Top New Customer')); ?></h3>
                                            </div>
                                            <?php $__currentLoopData = $new_customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="maan-note-card-body">
                                                    <div class="dash-customar-author">
                                                        <?php if($customer->image): ?>
                                                            <img src="<?php echo e(URL::to('/frontend/img/users/' . $customer->image)); ?>"
                                                                alt="">
                                                        <?php else: ?>
                                                            <div class="p-3 useridname">
                                                                <?php echo e(strtoupper(mb_substr($customer->first_name, 0, 1) . mb_substr($customer->last_name, 0, 1))); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                        <div>
                                                            <p><?php echo e($customer->email ?? ''); ?></p>
                                                            <h6><?php echo e($customer->full_name() ?? ''); ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="invoice">
                                                        <a
                                                            href="<?php echo e(route('backend.orders.show', $customer->orders->first()->id ?? '#')); ?>">
                                                            <?php echo e($customer->orders->first()->order_no ?? ''); ?>

                                                        </a>
                                                    </div>
                                                    <div class="date">
                                                        <p><?php echo e(date('Y-m-d', strtotime($customer->created_at))); ?>

                                                            <br>
                                                            <?php echo e(date('H:i A', strtotime($customer->created_at))); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-12">
                            <div class="maan-content-wpr">
                                <div class="maan-card-header maan-appoint-header-bg  maan-chart-radius">
                                    <h3 class="maan-chart-title"><?php echo e(__('New Order')); ?></h3>
                                    <div class="card-dropdown" id="new_order_status">
                                        <select class="wide maan-chart-content status" name="status">
                                            <option value="" id="form5"><?php echo e(__('Select Status')); ?>

                                            <option value="1"><?php echo e(__('Pending')); ?></option>
                                            <option value="2"><?php echo e(__('Confirmed')); ?></option>
                                            <option value="3"><?php echo e(__('Processing')); ?></option>
                                            <option value="4"><?php echo e(__('Picked')); ?></option>
                                            <option value="5"><?php echo e(__('Shipped')); ?></option>
                                            <option value="6"><?php echo e(__('Delivered')); ?></option>
                                            <option value="7"><?php echo e(__('Cancelled')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="maan-appoint-card-body" id="new_orders">
                                    <?php echo $__env->make('backend.pages._new_orders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <?php if(auth()->guard('admin')->check()): ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="maan-content-wpr dashbest-selling-product">
                                        <div class="maan-card-header maan-appoint-header-bg  maan-chart-radius">
                                            <h3 class="maan-chart-title"><?php echo e(__('Best Selling Product')); ?></h3>
                                            <div class="card-dropdown" id="product_month">
                                                <input type="month" id="start" name="start" class="month"
                                                    min="2021-10" max="<?= date('Y-m') ?>" value="<?= date('Y-m') ?>">

                                            </div>
                                        </div>
                                        <div class="maan-appoint-card-body" id="best_selling_product">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="maan-content-wpr dashboard-topnew-customer">
                                        <div class="maan-card-header maan-appoint-header-bg3  maan-chart-radius">
                                            <h3 class="maan-chart-title"><?php echo e(__('Best Customer')); ?></h3>
                                            <div class="card-dropdown" id="customer_month">
                                                <input type="month" id="start" name="start" class="month"
                                                    min="2021-10" max="<?= date('Y-m') ?>" value="<?= date('Y-m') ?>">
                                            </div>
                                        </div>
                                        <div id="best_customer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('backend/js/chart.min.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";

            var category_count = <?php echo json_encode($best_selling_category['category_count'], 15, 512) ?>;
            var category_name = <?php echo json_encode($best_selling_category['category_name'], 15, 512) ?>;
            var inMonthsValu;
            piChart();

            function piChart() {

                // in inMonths round canvas start

                Chart.defaults.elements.arc.roundedCornersFor = {
                    "start": [0, 1, 2, 3],
                    "end": 3
                };
                Chart.defaults.datasets.doughnut.cutout = '65%';
                let inMonths = $("#ShareProfit");
                inMonthsValu = new Chart(inMonths, {
                    type: 'doughnut',
                    data: {
                        labels: category_name,
                        datasets: [{
                            label: "Test",
                            borderWidth: 0,
                            data: category_count,
                            backgroundColor: [
                                "#FE4F4F",
                                "#3190FF",
                                "#2CE78D",
                                "#FFDB1D"
                            ],
                        }]
                    },


                    plugins: [{
                        afterUpdate: function(chart) {
                            if (chart.options.elements.arc.roundedCornersFor !== undefined) {
                                var arcValues = Object.values(chart.options.elements.arc
                                    .roundedCornersFor);

                                arcValues.forEach(function(arcs) {
                                    arcs = Array.isArray(arcs) ? arcs : [arcs];
                                    arcs.forEach(function(i) {
                                        var arc = chart.getDatasetMeta(0).data[i];
                                        if (arc) {
                                            arc.round = {
                                                x: (chart.chartArea.left + chart
                                                    .chartArea.right) / 2,
                                                y: (chart.chartArea.top + chart
                                                    .chartArea.bottom) / 2,
                                                radius: (arc.outerRadius + arc
                                                    .innerRadius) / 2,
                                                thickness: (arc.outerRadius -
                                                    arc.innerRadius) / 2,
                                                backgroundColor: arc.options
                                                    .backgroundColor
                                            }
                                        }
                                    });
                                });
                            }
                        },
                        afterDraw: (chart) => {

                            if (chart.options.elements.arc.roundedCornersFor !== undefined) {
                                var {
                                    ctx,
                                    canvas
                                } = chart;
                                var arc,
                                    roundedCornersFor = chart.options.elements.arc
                                    .roundedCornersFor;
                                for (var position in roundedCornersFor) {
                                    var values = Array.isArray(roundedCornersFor[position]) ?
                                        roundedCornersFor[position] : [roundedCornersFor[position]];
                                    values.forEach(p => {
                                        arc = chart.getDatasetMeta(0).data[p];
                                        if (arc) {
                                            var startAngle = Math.PI / 2 - arc.startAngle;
                                            var endAngle = Math.PI / 2 - arc.endAngle;
                                            ctx.save();
                                            ctx.translate(arc.round.x, arc.round.y);
                                            ctx.fillStyle = arc.options.backgroundColor;
                                            ctx.beginPath();
                                            if (position == "start") {
                                                ctx.arc(arc.round.radius * Math.sin(
                                                        startAngle), arc.round.radius *
                                                    Math.cos(startAngle), arc.round
                                                    .thickness, 0, 2 * Math.PI);
                                            } else {
                                                ctx.arc(arc.round.radius * Math.sin(
                                                        endAngle), arc.round.radius *
                                                    Math.cos(endAngle), arc.round
                                                    .thickness, 0, 2 * Math.PI);
                                            }
                                            ctx.closePath();
                                            ctx.fill();
                                            ctx.restore();
                                        }
                                    });

                                };
                            }
                        }
                    }],


                    options: {
                        responsive: true,
                        tooltips: {
                            displayColors: true,
                            zIndex: 999999,
                        },
                        plugins: {
                            legend: {
                                display: false,
                            },
                        },
                        scales: {
                            x: {
                                display: false,
                                stacked: true,
                            },
                            y: {
                                display: false,
                                stacked: true,
                            }
                        },
                    },

                });

                // in inMonths round canvas start
            }

            var monthly_sales = <?php echo json_encode($monthly_sale_products, 15, 512) ?>;
            var previous_month_sales = <?php echo json_encode($previous_month_sale_products, 15, 512) ?>;
            var statiSticsValu;
            monthlySalesChart()

            function monthlySalesChart() {
                let statiStics = $("#timeline-chart");
                statiSticsValu = new Chart(statiStics, {
                    type: 'line',
                    data: {
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14',
                            '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27',
                            '28', '29', '30'
                        ],
                        datasets: [{
                                borderWidth: 1,
                                label: "Product",
                                backgroundColor: "#3190FF",
                                borderColor: "#3190FF",
                                // blue color ,
                                data: monthly_sales
                            },
                            {
                                label: "Product",
                                backgroundColor: "#FE4F4F",
                                borderWidth: 1,
                                borderColor: "#FE4F4F",
                                // red color
                                data: previous_month_sales
                            }
                        ],
                    },
                    options: {
                        responsive: true,
                        interaction: {
                            // mode: 'index',
                            intersect: false,
                        },
                        elements: {
                            point: {
                                radius: 0,
                            }
                        },
                        tooltips: {
                            displayColors: true,
                        },
                        plugins: {
                            legend: {
                                display: false,
                                //   position: 'bottom',
                            },
                            title: {
                                display: true,
                            }
                        },
                        scales: {

                            x: {
                                display: false,
                                stacked: true,
                            },
                            // y: {
                            // 	stacked: true
                            // }
                            y: {
                                beginAtZero: true
                            },
                        },
                    }
                });
            }

            $(document).ready(function() {

                /* $("#datepicker").datepicker( {
                     format: "mm-yyyy",
                     startView: "months",
                     minViewMode: "months"
                 });*/
                <?php if(auth()->guard('admin')->check()): ?>
                    getProducts('<?= date('Y-m') ?>');
                    getCustomers('<?= date('Y-m') ?>');
                <?php endif; ?>
                $(document).on('change', '#sale_month .month', function() {
                    var month = $(this).val();
                    if (month)
                        getMonthSale(month);
                });
                $(document).on('change', '#category_month .month', function() {
                    var month = $(this).val();
                    if (month)
                        getBestCategory(month);
                });

                $(document).on('change', '#product_month .month', function() {
                    var month = $(this).val();
                    if (month)
                        getProducts(month);
                });
                $(document).on('change', '#customer_month .month', function() {
                    var month = $(this).val();
                    if (month)
                        getCustomers(month);
                });

                $(document).on('change', '#new_order_status .status', function() {
                    var status = $(this).val();
                    if (status)
                        getOrders(status);
                });
            });

            function getMonthSale(month) {
                console.log(month);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path +
                        <?php if(auth()->guard('admin')->check()): ?>
                            '/admin/monthly_sale'
                            <?php elseif(auth()->guard('seller')->check()): ?>
                            '/seller/monthly_sale'
                        <?php endif; ?> ,
                    data: {
                        'month': month
                    },
                    success: function(data) {
                        if (data.success) {
                            monthly_sales = data.data.monthly_sale_products;
                            previous_month_sales = data.data.previous_month_sale_products;
                            statiSticsValu.data.datasets[0].data = monthly_sales;
                            statiSticsValu.data.datasets[1].data = previous_month_sales;
                            statiSticsValu.update();
                            notification('success', data.message);
                        }
                    }
                });
            }

            function getBestCategory(month) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path +
                        <?php if(auth()->guard('admin')->check()): ?>
                            '/admin/best_selling_category'
                            <?php elseif(auth()->guard('seller')->check()): ?>
                            '/seller/best_selling_category'
                        <?php endif; ?> ,
                    data: {
                        'month': month
                    },
                    success: function(data) {
                        if (data.success) {
                            category_count = data.best_selling_category.category_count;
                            category_name = data.best_selling_category.category_name;
                            if (category_count.length) {
                                inMonthsValu.data.datasets[0].labels = category_name;
                                inMonthsValu.data.datasets[0].data = category_count;
                                inMonthsValu.update();
                                $('#monthly_category_status').html(data.view);
                                notification('success', data.message);
                            } else {
                                notification('success', 'No Data Found');
                            }
                        }
                    }
                });
            }

            function getProducts(month) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + '/admin/best_selling_product',
                    data: {
                        'month': month
                    },
                    success: function(data) {
                        $('#best_selling_product').html(data.product);
                        notification('success', data.message);
                    }
                });
            }

            function getCustomers(month) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path + '/admin/best_customers',
                    data: {
                        'month': month
                    },
                    success: function(data) {
                        $('#best_customer').html(data.customers);
                        notification('success', data.message);
                    }
                });
            }

            function getOrders(status) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: public_path +
                        <?php if(auth()->guard('admin')->check()): ?>
                            '/admin/new_orders'
                            <?php elseif(auth()->guard('seller')->check()): ?>
                            '/seller/new_orders'
                        <?php endif; ?> ,
                    data: {
                        'status': status
                    },
                    success: function(data) {
                        $('#new_orders').html(data.orders);
                        notification('success', data.message);
                    }
                });
            }
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mfchoice/public_html/mr.mfchoice.com/resources/views/backend/pages/dashboard.blade.php ENDPATH**/ ?>