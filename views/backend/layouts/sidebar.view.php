<!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dashboard" class="brand-link">
            <img src="<?php echo asset('img/logo-2.png')?>"  class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo asset('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo getAuthUserName() ?></a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link <?php echo isActiveRoute('/dashboard')?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item <?php if (urlIs('/slider') || urlIs('/slider/create') || urlIs('/slider/edit')) echo 'menu-open';?>">
                        <a href="#" class="nav-link <?php echo isActiveRoute('/slider')?>">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Slider
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/slider" class="nav-link <?php echo isActiveRoute('/slider')?>">
                                    <i class="fas fa-bars nav-icon"></i>
                                    <p>All Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/slider/create" class="nav-link <?php echo isActiveRoute('/slider/create')?>">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Add Slider</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php if (urlIs('/service') || urlIs('/service/create') || urlIs('/service/edit')) echo 'menu-open';?>">
                        <a href="#" class="nav-link <?php echo isActiveRoute('/service')?>">
                            <i class="nav-icon fas fa-icons"></i>
                            <p>
                                Service
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/service" class="nav-link <?php echo isActiveRoute('/service')?>">
                                    <i class="fas fa-bars nav-icon"></i>
                                    <p>All Service</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/service/create" class="nav-link <?php echo isActiveRoute('/service/create')?>">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Add Service</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php if (urlIs('/attorney') || urlIs('/attorney/create') || urlIs('/attorney/edit')) echo 'menu-open';?>">
                        <a href="#" class="nav-link <?php echo isActiveRoute('/attorney')?>">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Attorney
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/attorney" class="nav-link <?php echo isActiveRoute('/attorney')?>">
                                    <i class="fas fa-bars nav-icon"></i>
                                    <p>All Attorney</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/attorney/create" class="nav-link <?php echo isActiveRoute('/attorney/create')?>">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Add Attorney</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item <?php if (urlIs('/testimonial') || urlIs('/testimonial/create') || urlIs('/testimonial/edit')) echo 'menu-open';?>">
                        <a href="#" class="nav-link <?php echo isActiveRoute('/testimonial')?>">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Testimonial
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/testimonial" class="nav-link <?php echo isActiveRoute('/testimonial')?>">
                                    <i class="fas fa-bars nav-icon"></i>
                                    <p>All Testimonial</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/testimonial/create" class="nav-link <?php echo isActiveRoute('/testimonial/create')?>">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Add Testimonial</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="/message" class="nav-link <?php echo isActiveRoute('/message')?>">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>
                                Messages
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/setting" class="nav-link <?php echo isActiveRoute('/setting')?>">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>