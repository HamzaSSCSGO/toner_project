

<?php $__env->startSection('title'); ?>Chart <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Chart</h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item">Toner</li>
        <li class="breadcrumb-item active">Chart</li>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid chart-widget">
        
        <!-- Chart widget top Ends-->
        <!-- Chart widget with bar chart Start-->
        <div class="row">
          <div class="col-xl-12">
            <div class="card o-hidden">
              <div class="card-header pb-0">
                <h5>Toner Expenses</h5>
              </div>
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

        <script>
            window.count = '<?php echo $tonerResult ?>';
            window.tonerProd= '<?php echo $tonerProductionResult1 ?>';
            window.tonerAdmin= '<?php echo $tonerAdministrationResult1 ?>';
        
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
        <script src="<?php echo e(asset('assets/js/chart-widget-js.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/assignement-chart.blade.php ENDPATH**/ ?>