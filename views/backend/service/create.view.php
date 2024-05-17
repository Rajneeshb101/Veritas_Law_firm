<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Service</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/service">Service</a></li>
                            <li class="breadcrumb-item active">Add Service</li>
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
                                <h3 class="card-title">Create Service</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="../../../Core/admin/service/create.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="<?php echo isset($_SESSION['old_title']) ? $_SESSION['old_title'] : ''; unset($_SESSION['old_title']); ?>">
                                        <?php if (isset($_SESSION['title_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['title_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo isset($_SESSION['old_description']) ? $_SESSION['old_description'] : ''; unset($_SESSION['old_description']); ?></textarea>
                                        <?php if (isset($_SESSION['description_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['description_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Icon</label>
                                        <input type="text" class="form-control" id="icon" placeholder="Enter icon" name="icon" value="<?php echo isset($_SESSION['old_icon']) ? $_SESSION['old_icon'] : ''; unset($_SESSION['old_icon']); ?>">
                                        <?php if (isset($_SESSION['icon_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['icon_error']; ?>
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