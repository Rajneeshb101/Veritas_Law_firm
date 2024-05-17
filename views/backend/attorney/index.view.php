<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Attorney</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Attorney</li>
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
                                <h3 class="card-title">All Attorneys</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Linkedin</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($attorneys as $key=>$attorney): ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $attorney['name']; ?></td>
                                        <td><?php echo $attorney['title']; ?></td>
                                        <td><?php echo $attorney['facebook']; ?></td>
                                        <td><?php echo $attorney['twitter']; ?></td>
                                        <td><?php echo $attorney['linkedin']; ?></td>
                                        <td><?php echo $attorney['phone']; ?></td>
                                        <td><?php echo $attorney['email']; ?></td>
                                        <td><img src="/storage/<?php echo $attorney['image']; ?>" alt="<?php echo $attorney['title']; ?>" width="50" height="50"></td>
                                        <td>
                                            <a href="/attorney/edit?id=<?php echo $attorney['id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="/attorney/delete?id=<?php echo $attorney['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Linkedin</th>
                                        <th>Phone</th>
                                        <th>Email</th>
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