

<?php $__env->startSection('title'); ?>Color
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Date Range Picker</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Dates</li>
		
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>PICK YOUR DATES</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('test.testcontroller')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Start Date</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" name="start_date" type="date"  />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">End Date</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" name="end_date" type="date"  />
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/check-date-range.blade.php ENDPATH**/ ?>