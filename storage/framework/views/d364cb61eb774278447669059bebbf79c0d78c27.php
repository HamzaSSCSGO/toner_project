
<div class="page-main-header"> 
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      
      
      <div class="logo-wrapper" ><a href="<?php echo e(route('dash-index')); ?>"><img style="height:40px; width:auto;" class="img-fluid" src="<?php echo e(asset('assets/images/logo/tam.png')); ?>" alt=""></a></div>

      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>

    </div>
    
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        
        <li>
            <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
        <li><a class="text-dark"  href="/toner-index" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Toners List" ><i data-feather="droplet"></i></a></li>
        <li><a class="text-dark" href="/index-printer" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Printers List" ><i data-feather="printer"></i></a></li>
        <li><a class="text-dark " href="<?php echo e(route('index.assignement')); ?>" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Assignements List" ><i data-feather="archive"></i></a></li>
        

        
        <form method="POST" action="<?php echo e(route('logout')); ?>">
          <?php echo csrf_field(); ?>
          <li class="onhover-dropdown p-0">
            <button class="btn btn-primary-light"  type="submit" ><i data-feather="log-out"></i>Log out</button>
          </li>
        </form>
        
        
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/layouts/admin/partials/header.blade.php ENDPATH**/ ?>