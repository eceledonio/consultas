<x-forms.patch :action="route('frontend.auth.password.change')">
    <x-backend.card>
        <x-slot name="header">
            {{ __('Cambiar Contraseña') }}
        </x-slot>

        <x-slot name="body">
            <div class="row mt-4">
                {{ html()->label(__('Contraseña Actual'))->class('col-md-3 col-form-label font-weight-bold text-md-right mt-4')->for('current_password') }}

                <div class="col-md-9">
                    {{ html()->password('current_password')
                        ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                        ->addClass($errors->has('current_password') ? 'is-invalid' : '')
                        ->attribute('maxlength', 100)
                        ->attribute('autocomplete', 'off')
                        ->placeholder(__('Contraseña Actual'))
                    }}
                </div>
            </div>

            <div class="row mt-4">
                {{ html()->label(__('Nueva Contraseña'))->class('col-md-3 col-form-label font-weight-bold text-md-right mt-4')->for('password') }}

                <div class="col-md-9">
                    {{ html()->password('password')
                        ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                        ->addClass($errors->has('password') ? 'is-invalid' : '')
                        ->attribute('maxlength', 100)
                        ->attribute('autocomplete', 'off')
                        ->placeholder(__('Nueva Contraseña'))
                    }}
                </div>
            </div>

            <div class="row mt-4">
                {{ html()->label(__('Confirmar Nueva Contraseña'))->class('col-md-3 col-form-label font-weight-bold text-md-right mt-4')->for('password_confirmation') }}

                <div class="col-md-9">
                    {{ html()->password('password_confirmation')
                        ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                        ->addClass($errors->has('password_confirmation') ? 'is-invalid' : '')
                        ->attribute('maxlength', 100)
                        ->attribute('autocomplete', 'off')
                        ->placeholder(__('Confirmar Nueva Contraseña'))
                    }}
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button class="btn btn-light-primary float-right font-weight-light mr-2" type="submit">
                {{ __('Cambiar Contraseña') }}
            </button>
        </x-slot>
    </x-backend.card>
</x-forms.patch>
