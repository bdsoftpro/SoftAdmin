<!DOCTYPE html>
<html>
<head>
    <title>{{Softadmin::setting('admin_title')}} - {{Softadmin::setting('admin_description')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?= csrf_token() ?>"/>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|Lato:300,400,700,900' rel='stylesheet'
          type='text/css'>

    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/lib/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/bootstrap-toggle.min.css"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/js/icheck/icheck.css"
          rel="stylesheet">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/themes/flat-blue.css">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::to(config('softadmin.assets_path')) }}/images/logo-icon.png" type="image/x-icon">

    <!-- CSS Fonts -->
    <link href="{{ URL::to(config('softadmin.assets_path')) }}/fonts/softadmin/styles.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/js/vue.min.js"></script>

    @yield('css')

    <!-- Softadmin CSS -->
    <link rel="stylesheet" href="{{ URL::to(config('softadmin.assets_path')) }}/css/softadmin.css">

    @yield('head')

</head>

<body class="flat-blue">

<div id="softadmin-loader">
    <img src="{{ URL::to(config('softadmin.assets_path')) }}/images/logo-icon.png" alt="Softadmin Loader">
</div>

<div class="app-container">
    <div class="row content-container">
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    @yield('page_header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="site-footer-right">
        Made with <i class="softadmin-heart"></i> by <a href="http://thecontrolgroup.com" target="_blank">The Control
            Group</a> - {{ Softadmin::getVersion() }}
    </div>
</footer>
<!-- Javascript Libs -->

<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/js/jquery.cookie.js"></script>
<!-- Javascript -->

<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/js/readmore.min.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/js/app.js"></script>
<script type="text/javascript" src="{{ URL::to(config('softadmin.assets_path')) }}/lib/js/toastr.min.js"></script>
@yield('javascript')
</body>
</html>
