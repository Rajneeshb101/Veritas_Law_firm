<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Attorney</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/attorney">Attorney</a></li>
                            <li class="breadcrumb-item active">Add Attorney</li>
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
                                <h3 class="card-title">Create Attorney</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="../../../Core/admin/attorney/create.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo isset($_SESSION['old_name']) ? $_SESSION['old_name'] : ''; unset($_SESSION['old_name']); ?>">
                                        <?php if (isset($_SESSION['name_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['name_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

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
                                        <label for="facebook">Facebook</label>
                                        <input type="url" class="form-control" id="facebook" placeholder="Enter facebook" name="facebook" value="<?php echo isset($_SESSION['old_facebook']) ? $_SESSION['old_facebook'] : ''; unset($_SESSION['old_facebook']); ?>">
                                        <?php if (isset($_SESSION['facebook_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['facebook_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="url" class="form-control" id="twitter" placeholder="Enter twitter" name="twitter" value="<?php echo isset($_SESSION['old_twitter']) ? $_SESSION['old_twitter'] : ''; unset($_SESSION['old_twitter']); ?>">
                                        <?php if (isset($_SESSION['twitter_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['twitter_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="url" class="form-control" id="linkedin" placeholder="Enter linkedin" name="linkedin" value="<?php echo isset($_SESSION['old_linkedin']) ? $_SESSION['old_linkedin'] : ''; unset($_SESSION['old_linkedin']); ?>">
                                        <?php if (isset($_SESSION['linkedin_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['linkedin_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo isset($_SESSION['old_phone']) ? $_SESSION['old_phone'] : ''; unset($_SESSION['old_phone']); ?>">
                                        <?php if (isset($_SESSION['phone_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['phone_error']; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo isset($_SESSION['old_email']) ? $_SESSION['old_email'] : ''; unset($_SESSION['old_email']); ?>">
                                        <?php if (isset($_SESSION['email_error'])): ?>
                                            <div class="text-danger">
                                                <?php echo $_SESSION['email_error']; ?>
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