

<?php $__env->startSection('title'); ?>Styling Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php 
    use App\Models\Toner;

    $toners = Toner::all();
?>

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
						<h5>Toners</h5>
						
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										<tr>
											
                                            <th scope="col">Image</th>
                                            <th scope="col">Quantity</th>
                                            
										</tr>
									</thead>
									<tbody>
                                        <?php $__currentLoopData = $toners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <tr>
                                                <td><img height="50px" src="<?php echo e(asset('storage/storage/toner/' .$toner->toner_image)); ?>"></td>
                                                <td><?php echo e($toner->quantity_left); ?></td>
                                                
                                                
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