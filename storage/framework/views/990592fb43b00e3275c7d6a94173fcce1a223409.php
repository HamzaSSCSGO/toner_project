

<?php $__env->startSection('title'); ?>Employees Index
 
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Employees Index</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Employees</li>
		<li class="breadcrumb-item active">Index</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Employees</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										
										<tr>
                                               
                                            
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Actions</th>
                                            

                                           </tr>
									</thead>
									<tbody>
                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <tr>
                                                <td><?php echo e($employee['employee_name']); ?></td>
                                                <td><?php echo e($employee['matricule']); ?></td>
                                                <td><a class="btn btn-danger btn-lg" href="<?php echo e(route('delete.employee',$employee['id'])); ?>">    <span class="icon-close"></span> Delete</a>
													<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="<?php echo e(route('edit.employee',$employee['id'])); ?>" > </span>Edit</a></td>
                                                
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/employee/index.blade.php ENDPATH**/ ?>