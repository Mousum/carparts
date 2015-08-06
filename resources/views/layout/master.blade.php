<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-discover"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-discover"> <![endif]-->
<!--[if !IE]><!--><html class="sidebar sidebar-discover"><!-- <![endif]-->
    <head>
        <title>ABSHR Admin</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


        <!-- 
        **********************************************************
        In development, use the LESS files and the less.js compiler
        instead of the minified CSS loaded by default.
        **********************************************************
        <link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.less" />
        -->

        <!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
        <link rel="stylesheet" href="{{URL::to('resources/assets/css/admin/module.admin.stylesheet-complete.min.css')}}" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="{{URL::to('resources/assets/components/common/tables/datatables/assets/custom/css/dataTable.css')}}" />
        <script src="{{URL::to('resources/assets/components/library/jquery/jquery.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/library/modernizr/modernizr.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/less-js/less.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.2&sv=v0.0.1')}}"></script>	<script>if (/*@cc_on!@*/false && document.documentMode === 10) {
                document.documentElement.className += ' ie ie10';
            }</script>
          <input type="hidden" value="{{URL::to('/')}}" id='base_url' />
    </head>
    <body class="">

        <!-- Main Container Fluid -->
        <div class="container-fluid menu-hidden">

            <!-- Sidebar Menu -->
            @include('layout.leftsidebar')
            <!-- // Sidebar Menu END -->

            <!-- Content -->
            <div id="content">
                @include('layout.navigation')
                <!-- // END navbar -->



                <div class="innerLR">
                    @yield('content')

                </div>



















            </div>
            <!-- // Content END -->

            <div class="clearfix"></div>
            <!-- // Sidebar menu & content wrapper END -->

            <div id="footer" class="hidden-print">

                <!--  Copyright Line -->
                <div class="copy">&copy; All Rights Reserved By D-gap services . Developed by Team TechLogicians</div>
                <!--  End Copyright Line -->

            </div>

            <!-- // Footer END -->

        </div>
        <!-- // Main Container Fluid END -->


        <!-- Global -->
        <script data-id="App.Config">
            var App = {};
            var basePath = '',
                    commonPath = '../assets/',
                    rootPath = '../',
                    DEV = false,
                    componentsPath = '../assets/components/';

            var primaryColor = '#3695d5',
                    dangerColor = '#b55151',
                    successColor = '#609450',
                    infoColor = '#4a8bc2',
                    warningColor = '#ab7a4b',
                    inverseColor = '#45484d';

            var themerPrimaryColor = primaryColor;

        </script>

        <script src="{{URL::to('resources/assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/preload/pace/pace.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/core/js/animations.init.js?v=v1.0.2')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.resize.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/lib/plugins/jquery.flot.tooltip.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/custom/js/flotcharts.common.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-line-2.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-mixed-1.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-bars-horizontal.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/easy-pie/assets/lib/js/jquery.easy-pie-chart.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/easy-pie/assets/custom/easy-pie.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/sparkline/jquery.sparkline.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/charts/sparkline/sparkline.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/maps/vector/assets/lib/jquery-jvectormap-1.2.2.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/maps/vector/assets/lib/maps/jquery-jvectormap-world-mill-en.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/modules/admin/maps/vector/assets/custom/maps-vector.world-map-markers.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
        <script src="{{URL::to('resources/assets/components/core/js/sidebar.main.init.js?v=v1.0.2')}}"></script>
        <script src="{{URL::to('resources/assets/components/core/js/sidebar.discover.init.js?v=v1.0.2')}}"></script>
        <script src="{{URL::to('resources/assets/components/core/js/core.init.js?v=v1.0.2')}}"></script>	
    </body>
</html>