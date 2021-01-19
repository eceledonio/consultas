@props(['href' => '#', 'permission' => false])

<x-utils.link :href="$href" class="dropdown-item font-weight-lighter" :text="__('Modificar')" permission="{{ $permission }}" />
