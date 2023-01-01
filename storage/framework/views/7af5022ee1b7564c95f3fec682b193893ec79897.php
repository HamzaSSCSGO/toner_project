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
                        <a href = "/dashboard-test">Dashboard
                            
                        </a>
                        
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/create-color')); ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Toner</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/create-color')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Color<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/create-color" >Create</a></li>
                                    <li><a href="/index-color" >Index</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Model<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/create-toner-model" >Create</a></li>
                                    <li><a href="/index-toner-model" >Index</a></li>
                                </ul>
                            </li>

                            <li><a href="/toner-create" >Create</a></li>
                            <li><a href="/toner-index" >Index</a></li>
                            <li><a href="/toner-add" >Add Toner</a></li>
                            
                        </ul>
                    </li>

                    

                    
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Printer</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Category<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-category-create" >Create</a></li>
                                    <li><a href="/printer-category-index" >Index</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Model<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-model-create" >Create</a></li>
                                    <li><a href="/printer-model-index" >Index</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Location<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/printer-location-create" >Create</a></li>
                                    <li><a href="/printer-location-index" >Index</a></li>
                                </ul>
                            </li>
                            <li><a href="/printer-create" >Create</a></li>
                            <li><a href="/index-printer" >Index</a></li>
                        </ul>
                    </li>
                    

                    

                    
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Assignement</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Department<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/department-create" >Create</a></li>
                                    <li><a href="/index-department" >Index</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Employee<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="/employee-create" >Create</a></li>
                                    <li><a href="/index-employee" >Index</a></li>
                                </ul>
                            </li>

                            <li><a href="assignement-create" >Create</a></li>
                            <li><a href="<?php echo e(route('index.assignement')); ?>" >Index</a></li>
                            <li><a href="assignement-date-range" >Date Picker</a></li>
                        </ul>
                    </li>
                    


                    

                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\1projet3wa\laravel\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>