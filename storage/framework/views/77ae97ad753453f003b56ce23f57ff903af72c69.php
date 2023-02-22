

<?php $__env->startSection('title'); ?>Styling Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Toner Assignements</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toner</li>
		<li class="breadcrumb-item">Assignements</li>
		<li class="breadcrumb-item active">Index</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					
					<div class="card-body">
						<div class="table-responsive">
							<table class="display datatables" id="ajax-data-object">
								<thead>
									<tr>
										<th scope="col">Tracking ID</th>
										<th scope="col">Printer Name</th>
										<th scope="col">Serial Number</th>
										<th scope="col">IP</th>
										<th scope="col">Printer Model</th>
										<th scope="col">Category</th>
										<th scope="col">Toner Model</th>
										<th scope="col">Color</th>
										<th scope="col">Assigned To</th>
										<th scope="col">Department</th>
										<th scope="col">Manager</th>
										<th scope="col">Quantity Assigned</th>
										<th scope="col">Date</th>
										
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">Tracking ID</th>
										<th scope="col">Printer Name</th>
										<th scope="col">Serial Number</th>
										<th scope="col">IP</th>
										<th scope="col">Printer Model</th>
										<th scope="col">Category</th>
										<th scope="col">Toner Model</th>
										<th scope="col">Color</th>
										<th scope="col">Assigned To</th>
										<th scope="col">Department</th>
										<th scope="col">Manager</th>
										<th scope="col">Quantity Assigned</th>
										<th scope="col">Date</th>
										
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>	

	<script>
		window.assignements = '<?php echo $assignementsj ?>';
		
	
	</script>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/assignements.custom.js')); ?>"></script>  
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/index.blade.php ENDPATH**/ ?>