

<?php $__env->startSection('title'); ?>Dashboard TAM
<?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('breadcrumb_title'); ?>
                <h3>General</h3>
            <?php $__env->endSlot(); ?>
            
            <li class="breadcrumb-item active">Dashboard</li>
        <?php echo $__env->renderComponent(); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class=" b-r-4 card-body" style="background-color: #201e1e; color: white;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Black Toner</span>
                                    <h4 class="mb-0 counter"><?php echo e($black); ?></h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class=" b-r-4 card-body" style="background-color: #954995;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Magenta Toner</span>
                                    <h4 class="mb-0 counter"><?php echo e($magenta); ?></h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class=" b-r-4 card-body" style="background-color: #d1d149">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Yellow Toner</span>
                                    <h4 class="mb-0 counter"><?php echo e($yellow); ?></h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class=" b-r-4 card-body" style="background-color: #39c0c0;">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Cyan Toner</span>
                                    <h4 class="mb-0 counter"><?php echo e($cyan); ?></h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card o-hidden">
                            <div class="card-header pb-0">
                                <div class="bar-chart-widget">
                                    <div class="bottom-content card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="chart-widget4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest Toner Assignements</h5>
                                    
                                </div>
                                <div class="card-block row">
                                    <div class="col-sm-12 col-lg-12 col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-primary">
                                                    <tr>
                                                        
                                                        <th scope="col">Tracking ID</th>
                                                        <th scope="col">Serial Number</th>
                                                        <th scope="col">Printer Model</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Toner Model</th>
                                                        <th scope="col">Color</th>
                                                        <th scope="col">Assigned To</th>
                                                        <th scope="col">Quantity Assigned</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $assignements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                        <tr>
                                                            <td><?php echo e($assignement->assignement_id); ?></td>
                                                            <td><?php echo e($assignement->serial_number); ?></td>
                                                            <td><?php echo e($assignement->printer_model_name); ?></td>
                                                            <td><?php echo e($assignement->printer_category_name); ?></td>
                                                            <td><?php echo e($assignement->toner_model_name); ?></td>
                                                            <td><?php echo e($assignement->color_name); ?></td>
                                                            <td><?php echo e($assignement->employee_name); ?></td>
                                                            <td><?php echo e($assignement->quantity_assigned); ?></td>
                                                            <td><?php echo e($assignement->creation); ?></td>
                                                            <td>Actions</td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>

            <script>
                
                window.tonerProd= '<?php echo $tonerProductionResult1an ?>';
                window.tonerAdmin= '<?php echo $tonerAdministrationResult1an ?>';
            
            </script>

            <?php $__env->startPush('scripts'); ?>    
                <script src="<?php echo e(asset('assets/js/chart/apex-chart/moment.min.js')); ?>"></script> 
                <script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/chart-widget-js-dash.js')); ?>"></script>
                <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
            <?php $__env->stopPush(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/dashb.blade.php ENDPATH**/ ?>