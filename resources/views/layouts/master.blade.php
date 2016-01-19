<html lang="cn">
    @include('shared.header')
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">

        @include('shared.topMenu')
        
        <div class="page-container">
            @include('shared.sideBar')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    
                    @yield('content')

                </div>
            </div>
            
        </div>

        @include('shared.footer')
    </body>
</html>