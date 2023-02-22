<header class="main-nav">
    
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li> 
                    
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>

                    <li >
                        <a href = "/dashboard2"><i data-feather="home"></i><span>Dashboard</span>
                            
                        </a>
                        
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/create-color')); ?>" href="javascript:void(0)"><i data-feather="droplet"></i><span>Toner</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/create-color')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Color<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/create-color" >Create Colors</a></li>
                                    <li><a href="/index-color" >List Colors</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Model<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/create-toner-model" >Create Toner Models</a></li>
                                    <li><a href="/index-toner-model" >List Toner Models</a></li>
                                </ul>
                            </li>

                            <li><a href="/toner-create" >Create Toner</a></li>
                            <li><a href="/toner-index" >List Toners</a></li>
                            <li><a href="/toner-add" >Add Toner Quantity</a></li>
                            
                        </ul>
                    </li>

                    

                    
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="printer"></i><span>Printer</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Category<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-category-create" >Create Printer Category</a></li>
                                    <li><a href="/printer-category-index" >List Printer Category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Model<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-model-create" >Create Printer Model</a></li>
                                    <li><a href="/printer-model-index" >List Printer Models</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Location<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-location-create" >Create Location</a></li>
                                    <li><a href="/printer-location-index" >List Locations</a></li>
                                </ul>
                            </li>
                            <li><a href="/printer-create" >Create New Printer</a></li>
                            <li><a href="/index-printer" >List Printers</a></li>
                        </ul>
                    </li>
                    

                    

                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="archive"></i><span>Assignement</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Department<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/department-create" >Create Department</a></li>
                                    <li><a href="/index-department" >List Departments</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Employee<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/employee-create" >Create new Employee</a></li>
                                    <li><a href="/index-employee" >List Employees</a></li>
                                </ul>
                            </li>

                            <li><a href="assignement-create" >Create Assignement</a></li>
                            <li><a href="<?php echo e(route('index.assignement')); ?>" >List Assignements</a></li>
                            <li><a href="assignement-date-range" >Date range Picker</a></li>
                        </ul>
                    </li>

                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="settings"></i><span>Settings</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            

                            <li><a href="critical-value" >Minimal Toner Value</a></li>
                            
                        </ul>
                    </li>
                    


                    

                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\theme\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>