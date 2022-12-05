<?php 
use App\Models\Toner;
use App\Models\Printer;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

/* printer join with model, category and location tables */
$printers= Printer::select('printers.id as printer_id','serial_number','ip','printer_model_name','printer_model_id','printer_category_name','printer_category_id','printer_location_name','printer_location_id')
            ->join('printer_models','printers.printer_model_id','=','printer_models.id')
            ->join('printer_categories','printers.printer_category_id','=','printer_categories.id')
            ->join('printer_locations','printers.printer_location_id','=','printer_locations.id')
            ->get();
/* dd($printers); */
/* dd(JSON_encode($printers)); */
$prints= JSON_encode($printers);




/* toner join with color and model tables */
$toners=Toner::select('toners.id as toner_id','toner_model_name','toner_model_id','color_name','color_id','quantity_left')
            ->join('toner_models','toners.toner_model_id','=','toner_models.id')
            ->join('colors','toners.color_id','=','colors.id')
            ->get();
/* dd($toners); */

/* dd($printers[2]->serial_number,$printers[2]->printer_id,$printers[2]->printer_model_name,$printers,$toners[2]->toner_id,$toners[2]); */

$employees= Employee::all();

?>



<?php $__env->startSection('title'); ?>Printer
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>TONER ASSIGNEMENT</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Assignement</li>
        <li class="breadcrumb-item active">Create</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>ADD ASSIGNEMENT </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('create.toner-assignement')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            

                                            

                                            

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="printer" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT A PRINTER WITH THE SERIAL NUMBER</option>
                                                        <?php $__currentLoopData = $printers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $printer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <option value="<?php echo e($printer->printer_id); ?>" name="<?php echo e($printer->serial_number); ?>"><?php echo e($printer->serial_number); ?></option>
                                                        
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                
                                            </div>
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
                                                <label class="col-sm-3 col-form-label">Employee</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select btn-pill digits" name="employee" id="exampleFormControlSelect7" >
                                                        <option selected>SELECT AN EMPLOYEE</option>
                                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($employee->id); ?>" name="<?php echo e($employee->employee_name); ?>"><?php echo e($employee->employee_name); ?></option>
                                                        
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control digits" type="number" placeholder="Enter the quantity to assign" name="quantity"/>
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/assignement/create.blade.php ENDPATH**/ ?>