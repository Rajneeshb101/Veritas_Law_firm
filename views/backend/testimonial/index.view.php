<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Testimonial</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title">All Testimonial</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($testimonials as $key=>$testimonial): ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $testimonial['name']; ?></td>
                                        <td><?php echo $testimonial['review']; ?></td>
                                        <td><img src="/storage/<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" width="50" height="50"></td>
                                        <td>
                                            <a href="/testimonial/edit?id=<?php echo $testimonial['id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="/testimonial/delete?id=<?php echo $testimonial['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php require 'views/backend/layouts/footer.view.php'; ?>