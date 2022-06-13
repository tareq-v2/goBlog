@include('frontend.frontend_css')

<body>
    <div class="container-fluid pt-md-4">
        <div class="row">
            <div class="col-md-2">
                @include('frontend.navbar')
            </div>

            <div class="col-md-10">
                
                @yield('content')

                @include('frontend.frontend_footer')
            </div>
        </div>
    </div>

@include('frontend.frontend_js')

