<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    @else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @endlangrtl
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title', app_name())</title>  
            <link rel="icon" type="image/png" sizes="32x32" href="{!!URL::asset('img/frontend/favicon.ico')!!}">

            @yield('meta')

            {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
            @stack('before-styles')

            <!-- Check if the language is set to RTL, so apply the RTL layouts -->
            <!-- Otherwise apply the normal LTR layouts -->
            {{ style(mix('css/frontend.css')) }}
            {{ style(mix('css/animate.css')) }}
            {{ style(mix('css/icomoon.css')) }}
            {{ style(mix('css/ionicons.min.css')) }}
            {{ style(mix('css/magnific-popup.css')) }}
            {{ style(mix('css/flexslider.css')) }}
            {{ style(mix('css/owl.carousel.min.css')) }}
            {{ style(mix('css/owl.theme.default.min.css')) }}
            {{ style(mix('css/bootstrap-datepicker.css')) }}
            {{ style(mix('css/owl.carousel.min.css')) }}
            {{ style(mix('fonts/flaticon/font/flatico.css')) }}
            {{ style(mix('css/style.css')) }}


            @stack('after-styles')
        </head>
        <body>
            @include('includes.partials.read-only')

            <div id="app">
                @include('includes.partials.logged-in-as')
                @include('frontend.includes.nav')

                <div class="container">
                    @include('includes.partials.messages')
                    @yield('content')
                </div><!-- container -->
            </div><!-- #app -->

            <!-- Scripts -->
            @stack('before-scripts')
            {!! script(mix('js/manifest.js')) !!}
            {!! script(mix('js/vendor.js')) !!}
            {!! script(mix('js/frontend.js')) !!}
            {!! script(mix('js/jquery.min.js')) !!}
            {!! script(mix('js/popper.min.js')) !!}
            {!! script(mix('js/bootstrap.min.js')) !!}
            {!! script(mix('js/jquery.easing.1.3.js')) !!}
            {!! script(mix('js/query.waypoints.min.js')) !!}
            {!! script(mix('js/jquery.flexslider-min.js')) !!}
            {!! script(mix('js/owl.carousel.min.js')) !!}
            {!! script(mix('js/jquery.magnific-popup.min.js')) !!}
            {!! script(mix('js/magnific-popup-options.js')) !!}
            {!! script(mix('js/bootstrap-datepicker.js')) !!}
            {!! script(mix('js/jquery.stellar.min.js')) !!}
            {!! script(mix('js/main.js')) !!}
          
            @stack('after-scripts')

            @include('includes.partials.ga')
        </body>
    </html>
