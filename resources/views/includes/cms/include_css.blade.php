<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@if(isset($page_name) && !empty($page_name))
    @if($page_name == 'dashboard')
         <!-- Font Awesome -->
    <link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{config('app.app_libraries_uri')}}/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @endif
@endif