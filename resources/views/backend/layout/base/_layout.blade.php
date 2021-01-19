@if(config('layout.self.layout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else
    @include('backend.layout.base._header-mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @if(config('layout.aside.self.display'))
                @include('backend.layout.base._aside')
            @endif

            <div class="d-flex flex-column flex-row-fluid wrapper">
                @include('backend.layout.base._header')
                @include('includes.partials.read-only')
                @include('includes.partials.logged-in-as')
                @include('includes.partials.announcements')
                @include('includes.partials.messages')

                <div class="content {{ Metronic::printClasses('content', false) }} d-flex flex-column flex-column-fluid" id="kt_content">
                    @if(config('layout.subheader.display'))
                        @if(array_key_exists(config('layout.subheader.layout'), config('layout.subheader.layouts')))
                            @include('backend.layout.partials.subheader._'.config('layout.subheader.layout'))
                        @else
                            @include('backend.layout.partials.subheader._'.array_key_first(config('layout.subheader.layouts')))
                        @endif
                    @endif

                    @include('backend.layout.base._content')
                </div>

                @include('backend.layout.base._footer')
            </div>
        </div>
    </div>
@endif

@if (config('layout.self.layout') != 'blank')
    @if (config('layout.extras.search.layout') == 'offcanvas')
        @include('backend.layout.partials.extras.offcanvas._quick-search')
    @endif

    @if (config('layout.extras.notifications.layout') == 'offcanvas')
        @include('backend.layout.partials.extras.offcanvas._quick-notifications')
    @endif

    @if (config('layout.extras.quick-actions.layout') == 'offcanvas')
        @include('backend.layout.partials.extras.offcanvas._quick-actions')
    @endif

    @if (config('layout.extras.user.layout') == 'offcanvas')
        @include('backend.layout.partials.extras.offcanvas._quick-user')
    @endif

    @if (config('layout.extras.quick-panel.display'))
        @include('backend.layout.partials.extras.offcanvas._quick-panel')
    @endif

    @if (config('layout.extras.toolbar.display'))
        @include('backend.layout.partials.extras._toolbar')
    @endif

    @if (config('layout.extras.chat.display'))
        @include('backend.layout.partials.extras._chat')
    @endif

    @include('backend.layout.partials.extras._scrolltop')
@endif
