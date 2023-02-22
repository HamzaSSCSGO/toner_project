<?php 
use App\Models\TonerModel;
use App\Models\Color;

$colors=Color::all();
$tonerModels= TonerModel::all();

/* dd($colors, $tonerModels); */

?>


<?php $__env->startSection('title'); ?>Update Toner 
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Update Toner</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toner</li>
        <li class="breadcrumb-item active">Update</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>UPDATE TONER </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('update.toner',$toner->id)); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('PUT'); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Quantity Left</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" value=<?php echo e($toner->quantity_left); ?> placeholder="Quantity" name="quantity"/>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Upload Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="image" />
                                                    <img height="100px" width="auto" src="<?php echo e(asset('storage/storage/toner/' .$toner->toner_image)); ?>">
                                                </div>
                                            </div>

                                            
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="card-footer text-end">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button class="btn btn-primary" type="submit">Submit Update</button>
                                        <input class="btn btn-light" type="reset" value="Cancel" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/toner/update.blade.php ENDPATH**/ ?>