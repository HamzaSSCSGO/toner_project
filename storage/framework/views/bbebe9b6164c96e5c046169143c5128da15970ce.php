

<?php $__env->startSection('title'); ?>Ajax
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Ajax DataTables</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Data Tables</li>
		<li class="breadcrumb-item active">AJAX</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        
	        <!-- Ajax data source array start-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Ajax data source (Objects)</h5>
	                    <span>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display datatables" id="ajax-data-object">
	                            <thead>
	                                <tr>
										<th>id</th>
										<th>color</th>
										<th>created_at</th>
	                                    
	                                </tr>
	                            </thead>
	                            <tfoot>
	                                <tr>
										<th>id</th>
										<th>color</th>
	                                    
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Ajax data source array end-->
	        
	    </div>
	</div>

	<script>
		window.colors = '<?php echo $colorsJson ?>';
		window.col = '<?php echo $colors ?>';
	
	</script>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/colordata.custom.js')); ?>"></script> 
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/color/index.blade.php ENDPATH**/ ?>