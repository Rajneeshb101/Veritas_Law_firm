<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Service</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/service">Service</a></li>
                            <li class="breadcrumb-item active">Edit Service</li>
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
                                <h3 class="card-title">Edit service</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="../../../Core/admin/service/edit.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $service['id']?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="<?php echo $service['title']; ?>">
                                        <?php if (isset($_SESSION['title_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['title_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $service['description']; ?></textarea>
                                        <?php if (isset($_SESSION['description_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['description_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Icon</label>
                                        <input type="text" class="form-control" id="icon" placeholder="Enter icon" name="icon" value="<?php echo $service['icon']; ?>">
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