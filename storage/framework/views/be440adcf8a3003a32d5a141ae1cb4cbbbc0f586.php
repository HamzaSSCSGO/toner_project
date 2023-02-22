

<?php $__env->startSection('title'); ?>Product list
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Toner Assignements</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toner</li>
		<li class="breadcrumb-item">Assignement</li>
		<li class="breadcrumb-item active">List</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid list-products">
	    <div class="row">
	        <!-- Individual column searching (text inputs) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>List Of Assignements</h5>
	                    
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive product-table">
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Printer Name</th>
	                                    <th>Serial Number</th>
	                                    <th>IP</th>
	                                    <th>Printer Mode</th>
	                                    <th>Category</th>
                                        <th>Toner Model</th>
                                        <th>Color</th>
                                        <th>Assigned To</th>
                                        <th>Department</th>
                                        <th>Manager</th>
                                        <th>Quantity Assigned</th>
                                        <th>Date</th>
                                        <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    <?php $__currentLoopData = $assignements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($assignement->assignement_id); ?></td>
                                            <td><?php echo e($assignement->printer_name); ?></td>
                                            <td><?php echo e($assignement->serial_number); ?></td>
                                            <td><?php echo e($assignement->ip); ?></td>
                                            <td><?php echo e($assignement->printer_model_name); ?></td>
                                            <td><?php echo e($assignement->printer_category_name); ?></td>
                                            <td><?php echo e($assignement->toner_model_name); ?></td>
                                            <td><?php echo e($assignement->color_name); ?></td>
                                            <td><?php echo e($assignement->employee_name); ?></td>
                                            <td><?php echo e($assignement->department_name); ?></td>
                                            <td><?php echo e($assignement->department_manager); ?></td>
                                            <td><?php echo e($assignement->quantity_assigned); ?></td>
                                            <td><?php echo e($assignement->creation); ?></td>
                                            <td>
                                                <a class="btn btn-danger btn-xs"  data-original-title="btn btn-danger btn-xs" href="<?php echo e(route('delete.assignement',$assignement->assignement_id)); ?>" >Delete</a>
                                                <a class="btn btn-primary btn-xs" data-original-title="btn btn-danger btn-xs" href="<?php echo e(route('update.assignement',$assignement->assignement_id)); ?>" >Edit</a>
                                            </td>
                                        </tr>
	                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Individual column searching (text inputs) Ends--> 
	    </div>
	</div>

	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/test-assignement.blade.php ENDPATH**/ ?>