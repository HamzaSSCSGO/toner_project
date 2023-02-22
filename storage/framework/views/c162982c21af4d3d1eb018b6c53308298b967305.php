
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="pixelstrap" />
        <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon" />
        <title>Toner Critical Stock</title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <style>
            body {
                width: 650px;
                font-family: work-Sans, sans-serif;
                background-color: #f6f7fb;
                display: block;
            }
            a {
                text-decoration: none;
            }
            span {
                font-size: 14px;
            }
            p {
                font-size: 13px;
                line-height: 1.7;
                letter-spacing: 0.7px;
                margin-top: 0;
            }
            .text-center {
                text-align: center;
            }
            .data-table {
                width: 100%;
                border: 1px solid;
                text-align: center;
            }
            .table-border {
                border: 1px solid;
            }
            
        </style>
    </head>
    <body style="margin: 30px auto;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td>
                        <table style="background-color: #f6f7fb; width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table style="width: 650px; margin: 0 auto; margin-bottom: 30px;">
                                            <tbody>
                                                <tr>
                                                    <td><img style="height:30px; width:auto;" src="<?php echo e(asset('assets/images/logo/tam.png')); ?>" alt="" /></td>
                                                    <td style="text-align: right; color: #999;"><span>Critical stock</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 30px;">
                                                        <p>Hi Dear,</p>
                                                        <p>this is a notice to inform you that your tonere stock has reached critical quantity</p>
                                                        <p>see the details below</p>
                                                        
                                                                    <table class="data-table">
                                                                        <thead class="table-border"  style="padding: 10px; background-color: #24695c; color: #ffffff;">
                                                                            
                                                                            <tr class="table-border">
                                                                                <th scope="col"  class="table-border">id</th>
                                                                                <th scope="col"  class="table-border">Image</th>
                                                                                <th scope="col"  class="table-border">Toner Model</th>
                                                                                <th scope="col"  class="table-border">Color</th>
                                                                                <th scope="col"  class="table-border">Quantity</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $__currentLoopData = $details['toners']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                                                            
                                                                            
                                                                                <tr  class="table-border">
                                                                                    <td  class="table-border"><?php echo e($detail->toners_id); ?></td>
                                                                                    <td  class="table-border"><img height="100px" width="auto" src="<?php echo e($message->embed(public_path('storage\storage\toner\\').  $detail->toner_image)); ?>"></td>
                                                                                    <td  class="table-border"><?php echo e($detail->toner_model_name); ?></td>
                                                                                    <td  class="table-border"><?php echo e($detail->color_name); ?></td>
                                    
                                                                                    
                                                                                    <td  class="table-border"> <?php echo e($detail->quantity_left); ?></td> 
                                                                                    
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                
                                                        
                                                        
                                                        <br>
                                                        <p>Hopefuly this information was beneficial to you.</p>
                                                        <p>Have a great day.</p>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/emails/TestMail.blade.php ENDPATH**/ ?>