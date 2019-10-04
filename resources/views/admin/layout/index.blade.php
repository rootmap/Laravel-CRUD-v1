<!DOCTYPE html>
<!--[if IE 9]>         
    <html class="no-js lt-ie10" lang="en"> 
<![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js" lang="en"> 
<!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>@yield('title','Admin Panel')</title>

        @include('admin.extra.core-metatag')

        @include('admin.extra.core-header')
        @yield('header')
    </head>
    <body>
        <div id="page-wrapper">
            @include('admin.extra.loader')
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                       
                    @include('admin.extra.sidebar')

                <div id="main-container">

                    @include('admin.extra.navigation.header-nav')

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Blank Header -->
                        {{-- @include('admin.extra.breadcrumb.content-header') --}}
                        <ul class="breadcrumb breadcrumb-top">
                            <li>@yield('Module')</li><li><a href="javascript:void(0);">@yield('Module-Action')</a></li>
                        </ul>
                        <!-- END Blank Header -->

                        <!-- Example Block -->
                        <div class="block">
                            <!-- Example Title -->
                            <div class="block-title">
                                <h2>
                                    @yield('page-name','Block Title')
                                </h2>
                            </div>
                            <!-- END Example Title -->

                            <!-- Example Content -->
                            @yield('content','Your Content')
                            {{-- <p></p> --}}
                            <!-- END Example Content -->
                        </div>
                        <!-- END Example Block -->
                    </div>
                    <!-- END Page Content -->
                    @include('admin.extra.navigation.footer')
                    
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        @include('admin.extra.modal.modal-user-settings')

        @include('admin.extra.core-footer')

        @yield('footer')
        @yield('js')
    </body>
</html>