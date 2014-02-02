<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap Stylesheet -->
        {{HTML::style('bootstrap/css/bootstrap.min.css')}}

        <!-- jquery-ui Stylesheets -->
        {{HTML::style('assets/jui/css/jquery-ui.css')}}
        {{HTML::style('assets/jui/jquery-ui.custom.css')}}

        <!-- Uniform Stylesheet -->
        {{HTML::style('plugins/uniform/css/uniform.default.css')}}

        <!-- Main Layout Stylesheet -->
        {{HTML::style('assets/css/fonts/icomoon/style.css')}}
        {{HTML::style('assets/css/main-style.css')}}
        <!-- Personel View Stylesheets -->
        @yield('css')
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <title>MoonCake :: Responsive Admin Template - Dashboard</title>
</head>
<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">
<div id="wrapper">
    @include('arkakapi.layout.header')
    <div id="content-wrap">
        <div id="content">
            <div id="content-outer">
                <div id="content-inner">
                    @include('arkakapi.layout.sidebar')

                    <div id="sidebar-separator"></div>

                    <section id="main" class="clearfix">
                        @include('arkakapi.layout.breadcrumbs')
                        <div id="main-content">
                            @yield('content')
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @include('arkakapi.layout.footer')
</div>

<!-- Core Scripts -->
{{HTML::script('assets/js/libs/jquery-1.8.3.min.js')}}
{{HTML::script('bootstrap/js/bootstrap.min.js')}}
{{HTML::script('assets/js/libs/jquery.placeholder.min.js')}}
{{HTML::script('assets/js/libs/jquery.mousewheel.min.js')}}

<!-- Template Script -->
{{HTML::script('assets/js/template.js')}}
{{HTML::script('assets/js/setup.js')}}
<!-- Uniform Script -->
{{HTML::script('plugins/uniform/jquery.uniform.min.js')}}

<!-- jquery-ui Scripts -->
{{HTML::script('assets/jui/js/jquery-ui-1.9.2.min.js')}}
{{HTML::script('assets/jui/jquery-ui.custom.min.js')}}
{{HTML::script('assets/jui/jquery.ui.touch-punch.min.js')}}

<!-- Plugin Scripts -->

<!-- DataTables -->
{{HTML::script('plugins/datatables/jquery.dataTables.min.js')}}
{{HTML::script('plugins/datatables/TableTools/js/TableTools.min.js')}}
{{HTML::script('plugins/datatables/dataTables.bootstrap.js')}}

<!-- Demo Scripts -->
{{HTML::script('assets/js/demo/dashboard.js')}}
<!-- Personal View Scripts -->
@yield('js')
</body>
</html>
