@include('customer.header')

@include('customer.sidebar')

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@include('customer.footer')                
                