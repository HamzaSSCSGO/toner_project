<?php 
use App\Models\CriticalValue;
$checkValue = CriticalValue::all()->first();
if($checkValue===null){
    $check=null;
}else{
    $check=1;
    $newCriticalValue = CriticalValue::all()->first()->critical_value;
}

/* dd($newCriticalValue = CriticalValue::all()->first()); */
?>


<?php $__env->startSection('title'); ?>Minimum Toner
 
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Settings</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Minimum Toner</li>
        
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>CRITICAL TONER VALUE </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('minimum-update')); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?> 
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <?php if($check === null): ?>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Minimum Value</label>
                                                    
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" type="number" placeholder="Minimum Quantity" name="minimum"/>
                                                    </div>
                                                </div>
                                            
                                                
                                            <?php else: ?>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Minimum Value</label>
                                                    
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" type="number" placeholder="<?php echo e($newCriticalValue); ?>" name="minimum"/>
                                                </div>
                                            </div>
                                                
                                            <?php endif; ?>

                                            

                                            
                                            
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/minimum-tonere/minimum-tonere.blade.php ENDPATH**/ ?>