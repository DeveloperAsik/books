<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{isset($title_for_layout) ? $title_for_layout : 'selamat datang di books.com websites'}}</title>
        <!-- Bootstrap core CSS -->
        @include('includes.global.include_css') 
    </head>
    <body>
        @include('includes.global.nav') 
        <main class="container">
            @include('includes.global.content_header')
            @include('contents.global.index')
            <!--@include('includes.global.footer')-->
        </main>
        @include('includes.global.include_js')
    </body>
</html>