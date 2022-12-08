

<?php $__env->startSection('title'); ?>Styling Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Bootstrap Styling Tables</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Styling Tables</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table head options With Primary Background</h5>
						<span>
							Use background classes<code>.bg-*</code>and <code>table-primary</code>,<code>table-secondary</code>,<code>table-success</code>,<code>table-danger</code> ,<code>table-info</code>,<code>table-warning</code> to make
							custom <code>thead</code> background. You can also use Stack Admin color palette classes for background.
						</span>
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
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/index.blade.php ENDPATH**/ ?>