

<?php $__env->startSection('title'); ?>Employee
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php 
use App\Models\Department;

$departments = Department::all();

?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Employee</h3>
		<?php $__env->endSlot(); ?>
		
		<li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Create</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD EMPLOYEE</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('create.employee')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Employee Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="name" type="text" placeholder="employee name?" />
                                                </div>
                                                
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                
                                                <label class="col-sm-3 col-form-label">Employee Matricule</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="matricule" type="text" placeholder="matricule?" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Department</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="department" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A DEPARTMENT</option>
                                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($department['id']); ?>" name="department"><?php echo e($department['department_name']); ?></option>                          
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                                    </select>
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/employee/create.blade.php ENDPATH**/ ?>