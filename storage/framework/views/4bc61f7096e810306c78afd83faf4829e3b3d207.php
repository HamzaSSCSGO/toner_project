

<?php $__env->startSection('title'); ?>Model
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Toner Model</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toner</li>
		<li class="breadcrumb-item">Model</li>
        <li class="breadcrumb-item active">Create</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD TONER MODEL</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('create.tonermodel')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner Model</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="name" type="text" placeholder="Add new toner model here" />
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/toner_model/create.blade.php ENDPATH**/ ?>