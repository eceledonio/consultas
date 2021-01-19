@props(['href' => '#', 'text' => __('Eliminar'), 'permission' => false])

<x-utils.form-button
    :action="$href"
    method="delete"
    name="delete-item"
    button-class="dropdown-item font-weight-lighter"
    permission="{{ $permission }}"
>
    {{ $text }}
</x-utils.form-button>
