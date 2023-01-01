<?php 
use App\Models\TonerModel;
use App\Models\Color;

$colors=Color::all();
$tonerModels= TonerModel::all();

/* dd($colors, $tonerModels); */

?>


<?php $__env->startSection('title'); ?>Toner
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Create Toner</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toner</li>
        <li class="breadcrumb-item active">Create</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD TONER </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('create.toner')); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Model</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="tonerModel" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A MODEL</option>
                                                        <?php $__currentLoopData = $tonerModels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tonerModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($tonerModel['id']); ?>" name="tonerModel"><?php echo e($tonerModel['toner_model_name']); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Color</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="color" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A COLOR</option>
                                                        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($color['id']); ?>" name="color"><?php echo e($color['color_name']); ?></option>                          
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Quantity" name="quantity"/>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Upload Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="image" />
                                                </div>
                                            </div>

                                            
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="card-footer text-end">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/toner/create.blade.php ENDPATH**/ ?>