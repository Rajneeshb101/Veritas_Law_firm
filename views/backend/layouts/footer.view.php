<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo asset('plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo asset('plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo asset('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?php echo asset('plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo asset('plugins/sparklines/sparkline.js')?>"></script>
<!-- JQVMap -->
<script src="<?php echo asset('plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?php echo asset('plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo asset('plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo asset('plugins/moment/moment.min.js')?>"></script>
<script src="<?php echo asset('plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<!-- Summernote -->
<script src="<?php echo asset('plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset('dist/js/adminlte.js')?>"></script>


<!-- DataTables  & Plugins -->
<script src="<?php echo asset('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo asset('plugins/jszip/jszip.min.js')?>"></script>
<script src="<?php echo asset('plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo asset('plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo asset('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>


<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>
</html>
