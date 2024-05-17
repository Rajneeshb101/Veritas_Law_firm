<?php require 'views/backend/layouts/head.view.php'; ?>

<?php require 'views/backend/layouts/sidebar.view.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Service</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Service</li>
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
                                <h3 class="card-title">All Services</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Icon</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($services as $key=>$service): ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $service['title']; ?></td>
                                        <td><?php echo $service['description']; ?></td>
                                        <td><?php echo $service['icon']; ?></td>

                                        <td>
                                            <a href="/service/edit?id=<?php echo $service['id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="/service/delete?id=<?php echo $service['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Icon</th>
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