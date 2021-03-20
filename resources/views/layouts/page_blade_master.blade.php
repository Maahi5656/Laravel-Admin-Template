@include('inc.frontend.header')
  <!-- header-area end -->
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>@yield('breadcrumb')</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>@yield('breadcrumb')</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

@include('inc.frontend.footer')