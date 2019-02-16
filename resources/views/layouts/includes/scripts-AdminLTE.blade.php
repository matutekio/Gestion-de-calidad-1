<!-- jQuery 3 -->
{!! Html::script('plugins/jquery/jquery-3.3.1.min.js') !!}
<!-- Bootstrap 3.3.7 -->
{!! Html::script('boostrap-3.3.7/js/bootstrap.min.js') !!}
<!-- DataTables -->
{!! Html::script('adminLTE-2.4.3/bower_components/datatables/js/jquery.dataTables.js') !!}
{!! Html::script('adminLTE-2.4.3/bower_components/datatables/js/dataTables.bootstrap.js') !!}
<!-- AdminLTE App -->
{!! Html::script('adminLTE-2.4.3/dist/js/adminlte.min.js') !!}
<!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. -->
<script>
    $(function () {
        $('.table').DataTable({
            "pagingType": "full_numbers",
            "paging": true,
            "aaSorting": [[ 1, 'Desc' ]],
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "autoWidth": false,
            "retrieve": true
        });
    });
</script>