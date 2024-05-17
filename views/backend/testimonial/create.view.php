<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Testimonial</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/testimonial">Testimonial</a></li>
                            <li class="breadcrumb-item active">Add Testimonial</li>
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
                                <h3 class="card-title">Create Testimonial</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="../../../Core/admin/testimonial/create.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo isset($_SESSION['old_name']) ? $_SESSION['old_name'] : ''; unset($_SESSION['old_name']); ?>">
                                        <?php if (isset($_SESSION['name_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['name_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea name="review" id="review" cols="30" rows="10" class="form-control"><?php echo isset($_SESSION['old_review']) ? $_SESSION['old_review'] : ''; unset($_SESSION['old_review']); ?></textarea>
                                        <?php if (isset($_SESSION['review_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['review_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <?php if (isset($_SESSION['image_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['image_error']; ?>
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