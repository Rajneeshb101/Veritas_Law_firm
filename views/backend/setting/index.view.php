<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Setting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Setting</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="../../../Core/admin/setting/edit.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $setting['id']?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input type="text" class="form-control" id="experience" placeholder="Enter experience" name="experience" value="<?php echo $setting['experience']; ?>">
                                        <?php if (isset($_SESSION['experience_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['experience_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="case_handled">Case Handled</label>
                                        <input type="text" class="form-control" id="case_handled" placeholder="Enter case handled" name="case_handled" value="<?php echo $setting['case_handled']; ?>">
                                        <?php if (isset($_SESSION['case_handled_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['case_handled_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="clients">Clients</label>
                                        <input type="text" class="form-control" id="clients" placeholder="Enter clients" name="clients" value="<?php echo $setting['clients']; ?>">
                                        <?php if (isset($_SESSION['clients_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['clients_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="awards">Awards</label>
                                        <input type="text" class="form-control" id="awards" placeholder="Enter awards" name="awards" value="<?php echo $setting['awards']; ?>">
                                        <?php if (isset($_SESSION['awards_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['awards_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $setting['address']; ?>">
                                        <?php if (isset($_SESSION['address_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['address_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo $setting['phone']; ?>">
                                        <?php if (isset($_SESSION['phone_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['phone_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control" id="website" placeholder="Enter website" name="website" value="<?php echo $setting['website']; ?>">
                                        <?php if (isset($_SESSION['website_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['website_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $setting['email']; ?>">
                                        <?php if (isset($_SESSION['email_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['email_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php require 'views/backend/layouts/footer.view.php'; ?>