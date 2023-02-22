<?php 
use App\Models\PrinterModel;
use App\Models\PrinterCategory;
use App\Models\PrinterLocation;

$printerModels=PrinterModel::all();
$printerCategories= PrinterCategory::all();
$printerLocations= PrinterLocation::all();

?>



<?php $__env->startSection('title'); ?>UPDATE Printer
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?> 
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Update Printer</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Printer</li>
        <li class="breadcrumb-item active">Update</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>UPDATE PRINTER </h5>
                            </div>
                            <form class="form theme-form" method="POST" action="<?php echo e(route('update.printer',$printer->id)); ?>" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Printer Name</label>
                                                <div class="col-sm-9">
                                                    <input value=<?php echo e($printer->printer_name); ?> class="form-control" name="printer_name" type="text" placeholder="write the printer's name" />
                                                </div>
                                            </div>
                                            

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Serial Number</label>
                                                <div class="col-sm-9">
                                                    <input value=<?php echo e($printer->serial_number); ?> class="form-control" name="serialNumber" type="text" placeholder="write the serial number" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">IP Address</label>
                                                <div class="col-sm-9">
                                                    <input value=<?php echo e($printer->ip); ?> class="form-control" name="ip" type="text" placeholder="Write the IP address" />
                                                </div>
                                            </div>

                                            

                                            

                                            

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Upload Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="image" />
                                                    <img height="50px" src="<?php echo e(asset('storage/storage/printer/'.$printer->printer_image)); ?>">
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


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/printer/update.blade.php ENDPATH**/ ?>