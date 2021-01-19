<x-forms.patch :action="route('admin.user.profile.update')" enctype="multipart/form-data">
    <x-backend.card>
        <x-slot name="header">
            {{ __('Editar Información') }}
        </x-slot>

        <x-slot name="body">
            <div class="row mt-4">
                <div class="col">
                    {{ html()->label(__('Avatar'))->class('font-weight-bold')->for('avatar') }}
                    <br>

                    <div class="image-input image-input-outline" id="avatar">
                        <div class="image-input-wrapper" style="background-image: url({{ $logged_in_user->picture }})"></div>

                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="{{ __('Cambiar Avatar') }}">
                            <i class="fa fa-pen icon-sm text-muted"></i>

                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="profile_avatar_remove">
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="{{ __('Cancelar Avatar') }}">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    <span class="form-text text-muted">
                        {{ __('Extensiones permitidas') }}: png, jpg, jpeg.
                    </span>
                </div>
            </div>

            <br>

            <div class="row mt-4">
                <div class="col">
                    {{ html()->label(__('Nombre'))->class('font-weight-bold')->for('first_name') }}

                    {{ html()->text('first_name')
                        ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                        ->addClass($errors->has('first_name') ? 'is-invalid' : '')
                        ->attribute('maxlength', 100)
                        ->attribute('autocomplete', 'off')
                        ->placeholder(__('Escriba su nombre'))
                        ->value(old('first_name') ?? $logged_in_user->first_name)
                    }}
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    {{ html()->label(__('Apellido'))->class('font-weight-bold')->for('last_name') }}

                    {{ html()->text('last_name')
                        ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                        ->addClass($errors->has('last_name') ? 'is-invalid' : '')
                        ->attribute('maxlength', 100)
                        ->attribute('autocomplete', 'off')
                        ->placeholder(__('Apellido'))
                        ->value(old('last_name') ?? $logged_in_user->last_name)
                    }}
                </div>
            </div>

            @if ($logged_in_user->canChangeEmail())
                <div class="row mt-4">
                    <div class="col">
                        {{ html()->label(__('Dirección de correo'))->class('font-weight-bold')->for('email') }}

                        <x-utils.alert type="info" class="mb-3" :dismissable="false">
                            <i class="fas fa-info-circle red-700"></i> &nbsp;
                            {{ __('Si cambia su correo electrónico, se cerrará la sesión hasta que confirme su nueva dirección de correo electrónico.') }}
                        </x-utils.alert>

                        {{ html()->email('email')
                            ->class('form-control form-control-solid h-auto py-6 px-6 rounded-lg')
                            ->addClass($errors->has('email') ? 'is-invalid' : '')
                            ->attribute('maxlength', 100)
                            ->attribute('autocomplete', 'off')
                            ->placeholder(__('Dirección de correo'))
                            ->value(old('email') ?? $logged_in_user->email)
                        }}
                    </div>
                </div>
            @endif
        </x-slot>

        <x-slot name="footer">
            <button class="btn btn-light-primary font-weight-light mr-2" type="submit">
                {{ __('Actualizar Información') }}
            </button>
        </x-slot>
    </x-backend.card>
</x-forms.patch>

@push('after-scripts')
    <script>
        let ImageInput = {
            init: function() {
                ! function() {
                    new KTImageInput('avatar');
                }()
            }
        };

        KTUtil.ready((function() {
            ImageInput.init()
        }));
    </script>
@endpush
