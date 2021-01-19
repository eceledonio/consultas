@if(isset($errors) && $errors->any())
    <x-utils.alert type="danger" class="mb-0 rounded-0">
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </x-utils.alert>
@endif

@if(session()->get('flash_success'))
    <x-utils.alert type="success" class="mb-0 rounded-0">
        {{ session()->get('flash_success') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_warning'))
    <x-utils.alert type="warning" class="mb-0 rounded-0">
        {{ session()->get('flash_warning') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_info') || session()->get('flash_message'))
    <x-utils.alert type="info" class="mb-0 rounded-0">
        {{ session()->get('flash_info') }}
    </x-utils.alert>
@endif

@if(session()->get('flash_danger'))
    <x-utils.alert type="danger" class="mb-0 rounded-0">
        {{ session()->get('flash_danger') }}
    </x-utils.alert>
@endif

@if(session()->get('status'))
    <x-utils.alert type="success" class="mb-0 rounded-0">
        {{ session()->get('status') }}
    </x-utils.alert>
@endif

@if(session()->get('resent'))
    <x-utils.alert type="success" class="mb-0 rounded-0">
        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
    </x-utils.alert>
@endif

@if(session()->get('verified'))
    <x-utils.alert type="success" class="mb-0 rounded-0">
        {{ __('Gracias por verificar su dirección de correo electrónico.') }}
    </x-utils.alert>
@endif
