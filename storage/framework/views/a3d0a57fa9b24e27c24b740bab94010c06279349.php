

<?php $__env->startSection('title'); ?>ADD TONERS
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>ADD TONERS</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Toners</li>
        <li class="breadcrumb-item active">Add</li>
	<?php echo $__env->renderComponent(); ?>

    <?php 
        use App\Models\TonerModel;
        use App\Models\Color;
        use App\Models\Toner;

        $colors=Color::all();
        $tonerModels= TonerModel::all();
        $toners=Toner::select('toners.id as toner_id','toner_model_name','toner_model_id','color_name','color_id','quantity_left')
            ->join('toner_models','toners.toner_model_id','=','toner_models.id')
            ->join('colors','toners.color_id','=','colors.id')
            ->get();

    ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD TONER</h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('add.toner')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            
                                             
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Toner</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="toner" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT TONER MODEL</option>
                                                        <?php $__currentLoopData = $toners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($toner->toner_id); ?>" name="<?php echo e($toner->toner_model_name); ?>"><?php echo e($toner->toner_model_name); ?> , <?php echo e($toner->color_name); ?></option>
                                                        
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Quantity" name="quantity"/>
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/toner/add.blade.php ENDPATH**/ ?>