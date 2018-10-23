</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/templates/admin/assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/admin/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/templates/admin/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/templates/admin/assets/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/templates/admin/assets/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="/templates/admin/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- TinyCME -->
    <script type="text/javascript" src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector:'textarea',
            menubar:true,
            plugins:[
                'code fullscreen table link image charmap print preview hr anchor pagebreak autosave'
            ],
            toolbar:[
                'fullscreen table image | link print | preview code | fontsizeselect bold italic alignleft aligncenter alignright'
            ],
        });
    </script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
