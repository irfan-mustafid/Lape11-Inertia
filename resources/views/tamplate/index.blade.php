<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('tamplate.header')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('tamplate.navbar')
            @include('tamplate.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">

                    </div>

                    <div class="section-body">
                        @yield('content')

                    </div>
                </section>
            </div>

            <!-- End Main Content -->

            @include('tamplate.footer')
        </div>
    </div>
    @include('tamplate.js')
</body>

</html>
