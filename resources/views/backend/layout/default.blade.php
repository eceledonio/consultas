<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        <!-- =======================
        TITLE
        ======================== -->
        <title>{{ appName() }} | @yield('title', $page_title ?? '')</title>

        <!-- =======================
        META DATA
        ======================== -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- =======================
        FAVICON
        ======================== -->
        <link rel="shortcut icon" type="ico" href="{{ asset('media/logos/favicon.ico') }}" />
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('media/logos/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('media/logos/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('media/logos/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/favicon-16x16.png') }}">

        <!-- =======================
        APPLE / iOS WEB APPS / iPHONES
        ======================== -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('media/logos/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('media/logos/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('media/logos/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('media/logos/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('media/logos/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('media/logos/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('media/logos/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('media/logos/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/logos/apple-icon-180x180.png') }}">

        <!-- =======================
        FONTS
        ======================== -->
        {{ Metronic::getGoogleFontsInclude() }}

        <!-- =======================
        SEE https://laravel.com/docs/8.x/blade#stacks FOR USAGE
        ======================== -->
        @stack('before-styles')

        <!-- =======================
        GLOBAL THEME STYLES
        ======================== -->
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        <!-- =======================
        LAYOUT THEMES
        ======================== -->
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        <livewire:styles />

        <!-- =======================
        INCLUDABLE CSS
        ======================== -->
        @stack('after-styles')
    </head>

    <body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>
        @if (config('layout.page-loader.type') != '')
            @include('backend.layout.partials._page-loader')
        @endif

        @include('backend.layout.base._layout')

        <script>
            var HOST_URL = "{{ route('frontend.quick-search') }}";
        </script>

        <!-- =======================
        GLOBAL CONFIG
        ======================== -->
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        @stack('before-scripts')
        <!-- =======================
        GLOBAL THEME JS BUNDLE
        ======================== -->
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        <!-- =======================
        INCLUDABLE JS
        ======================== -->
        <livewire:scripts />

        @stack('after-scripts')
        <script src="{{ asset('js/custom.js') }}"></script>

        <script>
            // Scroll to Top on session flash success
            @if(session()->get('flash_success'))
            $(window).on('load', function(){
                setTimeout(function() {
                    $('#kt_scrolltop').trigger('click');
                }, 500);
            });
            @endif
        </script>
    </body>
</html>

