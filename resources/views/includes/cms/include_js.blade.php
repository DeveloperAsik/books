<script src="{{ config('app.app_libraries_uri') }}/jquery/js/jquery-3.3.1.min.js"></script>
<script src="{{ config('app.app_libraries_uri') }}/jquery/js/jquery.lazy.min.js"></script>
<script src="{{ config('app.app_libraries_uri') }}/jquery/js/jquery.countdown.min.js"></script>
<script src="{{ config('app.app_libraries_uri') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ config('app.app_libraries_uri') }}/slick/slick.js"></script>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/jquery-mapael/maps/world_countries.min.js"></script>

@if(isset($page_name) && !empty($page_name))
    <!-- DataTables -->
    <script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{config('app.app_libraries_uri')}}/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="{{config('app.app_libraries_uri')}}/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{config('app.app_libraries_uri')}}/adminlte/dist/js/demo.js"></script>
    @if($page_name == 'books.view')
        <!-- page script -->
        <script>
        $(function () {
            $('#books_view').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
           
        });
    @elseif($page_name == 'creator.view')
        <script>
          $('#creator_view').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        </script> 
    @endif
@endif