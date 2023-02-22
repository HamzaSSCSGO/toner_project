

<?php $__env->startSection('title'); ?>Styling Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

 

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Toneres Table</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Tonere</li>
		<li class="breadcrumb-item active">Index</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Toners</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										
										<tr>
											<th scope="col">id</th>
											<th scope="col">Image</th>
											<th scope="col">Toner Model</th>
											<th scope="col">Color</th>
											<th scope="col">Quantity</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
                                        <?php $__currentLoopData = $toners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										
                                        
                                            <tr>
												<td><?php echo e($toner->toners_id); ?></td>
                                                <td><img height="100px" width="auto" src="<?php echo e(asset('storage/storage/toner/' .$toner->toner_image)); ?>"></td>
												<td><?php echo e($toner->toner_model_name); ?></td>
												<td><?php echo e($toner->color_name/* $toner['color_id'] */); ?></td>

												<?php if($toner->quantity_left > 30): ?>
													<td style="color:green"> <?php echo e($toner->quantity_left); ?></td>
												<?php elseif($toner->quantity_left < 5): ?>
													<td style="color:red"> <?php echo e($toner->quantity_left); ?></td>
												<?php else: ?>
													<td> <?php echo e($toner->quantity_left); ?></td>
												<?php endif; ?>
													
												

												<td><a class="btn btn-danger btn-lg" href="<?php echo e(route('delete.toner',$toner->toners_id)); ?>">    <span class="icon-close"></span> Delete</a>
													<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="<?php echo e(route('edit.toner',$toner->toners_id)); ?>" > </span>Edit</a></td>
												
												
                                                
                                                
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/toner/index.blade.php ENDPATH**/ ?>