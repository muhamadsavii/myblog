<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{ asset("/assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    </head>
    <body class="skin-blue">
    <div class="wrapper">
        @include('layout.backend.partial.header')        
        @include('layout.backend.partial.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Page Header
                    <small>Optional description</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>
            <section class="content">
                @yield('content')
            </section>
            </section>
        </div>
        @include('layout.backend.partial.footer')
    </div>
    <script src="{{ asset ("/assets/plugins/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset ("/assets/backend/scripts/bootstrap.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/bower_components/admin-lte/dist/js/adminlte.min.js") }}" type="text/javascript"></script>
    </body>
</html>
