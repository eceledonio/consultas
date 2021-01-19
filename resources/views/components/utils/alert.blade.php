@props(['type' => 'success', 'ariaLabel' => __('Cerrar')])

<div {{ $attributes->merge(['class' => 'alert alert-custom alert-light-'. $type .' fade show pt-5 pb-5'] ) }} role="alert">
    <div class="alert-text">{{ $slot }}</div>

        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="{{ $ariaLabel }}">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>

</div>
