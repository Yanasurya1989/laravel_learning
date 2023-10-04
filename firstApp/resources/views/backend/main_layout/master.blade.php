@include('backend.main_layout.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('backend.main_layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('backend.main_layout.navbar')
    
                @yield('content')
    
            </div>
            <!-- End of Main Content -->
@include('backend.main_layout.footer')