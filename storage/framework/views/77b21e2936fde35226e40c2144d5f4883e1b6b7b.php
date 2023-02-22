

<?php $__env->startSection('title'); ?>Printers Index
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Printers Index</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Printers</li>
		<li class="breadcrumb-item active">Index</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Printers</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										
										<tr>
                                               
                                            <th scope="col">id</th>
											<th scope="col">Name</th>
											<th scope="col">Image</th>
                                            <th scope="col">Printer Serial Number</th>
                                            <th scope="col">IP Address</th>
                                            <th scope="col">Printer Model</th>
                                            <th scope="col">Printer Category</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Actions</th>

                                           </tr>
									</thead>
									<tbody>
                                        <?php $__currentLoopData = $printers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $printer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        
                                        
                                            <tr>
												<td><?php echo e($printer['printer_id']); ?></td>
												<td><?php echo e($printer['printer_name']); ?></td>
                                                <td><img height="50px" src="<?php echo e(asset('storage/storage/printer/'.$printer->printer_image)); ?>"> </td>
                                                <td><?php echo e($printer['serial_number']); ?></td>
												<td><?php echo e($printer['ip']); ?></td>
                                               <td><?php echo e($printer['printer_model_name']); ?></td>
                                               <td><?php echo e($printer['printer_category_name']); ?></td>
                                               <td><?php echo e($printer['printer_location_name']); ?></td>
											   <td><a class="btn btn-danger btn-lg" href="<?php echo e(route('delete.printer',$printer['printer_id'])); ?>">    <span class="icon-close"></span> Delete</a> 
												<a class="btn btn-primary btn-lg" data-original-title="btn btn-danger btn-xs" href="<?php echo e(route('edit.printer',$printer->printer_id)); ?>" > </span>Edit</a></td>
                                                
                                                
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/printer/index.blade.php ENDPATH**/ ?>