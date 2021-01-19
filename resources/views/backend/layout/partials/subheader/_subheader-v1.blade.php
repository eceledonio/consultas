{{-- Subheader V1 modified --}}
<div class="subheader py-2 d-none d-sm-block {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <div class="{{ Metronic::printClasses('subheader-container', false) }} d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap ">
        <div class="float-right d-none d-sm-block">
            <h5 class="text-dark font-weight-500">
                @if (isset($page_title))
                    {{ $page_title }}
                @endif

                @if (isset($page_description) && config('layout.subheader.displayDesc'))
                    <small class="ml-3">
                        {{ $page_description }}
                    </small>
                @endif
            </h5>
        </div>

        <div class="d-flex align-items-center flex-wrap mr-1 d-none d-sm-block">
            @if (Breadcrumbs::has())
                <ol class="breadcrumb breadcrumb-fill style4 d-none d-sm-block" style="margin-top: .16rem !important;">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>

                    @foreach (Breadcrumbs::current() as $crumb)
                        @if ($crumb->url() && !$loop->last)
                            <li>
                                <x-utils.link :href="$crumb->url()" :text="$crumb->title()" />
                            </li>
                        @else
                            <li>
                                <a href="#">
                                    {{ $crumb->title() }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            @endif
        </div>
    </div>
</div>
