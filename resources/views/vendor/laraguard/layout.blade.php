@extends('frontend.layout.default')

@section('content')
<div class="container mt-4">
    <div id="box-container" class="row justify-content-center align-items-center">
        <div id="form-container" class="col-lg-6 col-md-8 col-sm-10 col-12">
            <div id="box" class="card border-0 cool-shadow">
                <section class="card-body">
                    <h2 class="card-title h5 text-center">{{ trans('laraguard::messages.required') }}</h2>
                    <hr>
                    @yield('card-body')
                </section>
            </div>
            <div class="text-black-50 small text-center">
                <a href="javascript:history.back()" class="btn btn-sm text-secondary btn-link">
                    &laquo; {{ trans('laraguard::messages.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
