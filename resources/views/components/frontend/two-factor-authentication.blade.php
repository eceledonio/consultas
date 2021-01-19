<div>
    @error('code')
        <x-utils.alert type="danger">
            {{ $message }}
        </x-utils.alert>
    @enderror

    <form wire:submit.prevent="validateCode" class="form-horizontal">
        <div class="form-group row">
            <label for="code" class="col-md-4 col-form-label text-md-right">
                {{ __('Código de Autorización') }}
            </label>

            <div class="col-md-6">
                <input
                    type="text"
                    id="code"
                    wire:model.lazy="code"
                    minlength="6"
                    class="form-control"
                    placeholder="{{ __('Código de Autorización') }}"
                    required
                    autofocus />
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button class="btn btn-primary" type="submit">
                    {{ __('Habilitar Autenticación de Dos Factores') }}
                </button>
            </div>
        </div>
    </form>
</div>
