<!DOCTYPE html>
<html>
    <head>
        @include('layouts.includes.head-AdminLTE')
        @yield('styles')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            @include('layouts.includes.mainHeader')
            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.includes.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('content-header')
                </section>

                <!-- Main content -->
                <section class="content container-fluid">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Version 1.0
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; - {{date('Y')}} - <a href="#">CALD Company</a></strong> | All rights reserved.
            </footer>
        </div>
        <!-- REQUIRED JS SCRIPTS -->
        @include('layouts.includes.scripts-AdminLTE')
        @yield('scripts')
    </body>
</html>