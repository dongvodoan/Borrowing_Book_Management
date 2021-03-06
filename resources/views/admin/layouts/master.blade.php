<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.partials._header')
</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layouts.partials._navbar')
        @include('admin.layouts.partials._model_confirm')
        <div id="page-wrapper">
            <div class="container-fluid">
                @include('admin.layouts.partials._message')
                @yield('content')                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- COMBINE BOOTSTRAP AND JQUERY JS -->
    @include('admin.layouts.partials._javascript')
</body>
</html>
