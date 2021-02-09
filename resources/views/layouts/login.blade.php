<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{isset($title_for_layout) ? $title_for_layout : 'selamat datang di books.com websites'}}</title>
        @include('includes.login.include_css') 
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/cms"><b>Dashboard</b></a>
            </div>
            <!-- /.login-logo -->
            @include('contents.login.index')
        </div>
        <!-- /.login-box -->
        @include('includes.cms.include_js') 
    </body>
</html>