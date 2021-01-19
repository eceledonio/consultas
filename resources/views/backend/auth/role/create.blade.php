@inject('model', '\App\Models\Auth\User')

@extends('backend.layout.default')

@section('title', __('Nuevo Perfil'))

@section('content')
    <x-forms.post :action="route('admin.auth.role.store')">
        <x-backend.card>
            <x-slot name="header">
                {{ __('Nuevo Perfil') }}
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="la la-arrow-left"
                    class="btn btn-light-danger font-weight-lighter mr-2"
                    :href="route('admin.auth.role.index')"
                    :text="__('Regresar')" />
            </x-slot>

            <x-slot name="body">
                <div class="row mt-4">
                    <label style="font-size: 20px !important;" for="name">{{ __('Nombre del Perfil') }}</label>

                    {{ html()->text('name')
                        ->class('form-control form-control-lg')
                        ->addClass($errors->has('name') ? 'is-invalid' : '')
                        ->placeholder(__('Escriba un nombre para el Perfil'))
                        ->attribute('maxlength', 191)
                        ->autofocus() }}
                </div>

                <div class="row mt-4">
                    <label style="font-size: 20px !important;" for="description">{{ __('Descripción del Perfil') }}</label>

                    {{ html()->text('description')
                        ->class('form-control form-control-lg')
                        ->addClass($errors->has('description') ? 'is-invalid' : '')
                        ->placeholder(__('Escriba una descripción para el Perfil'))
                        ->attribute('maxlength', 191) }}
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <h4 class="mt-2">
                            {{ __('Permisos Asociados') }}
                        </h4>

                        <div class="mt-5" style="border-bottom: 2px solid #0d47a1;"></div>
                    </div>
                </div>

                @if($permissions->count())
                    <div class="row">
                        @foreach ($permissions as $key => $module)
                            <div class="col-xl-2 col-lg-2 col-sm-1">
                                <table class="table table-borderless p-0">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h4>{{ $key }}</h4>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($module as $permission)
                                        <tr>
                                            <td>
                                                <div class="checkbox-inline">
                                                    {{ html()->label(
                                                        html()->checkbox('permissions[]', (old('permissions') && in_array($permission->name, old('permissions'), true)), $permission->name)
                                                              ->id('permission-'.$permission->id)
                                                              . '<span></span>' . $permission->display_name)
                                                              ->for('permission-'.$permission->id)->class('checkbox') }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                @endif
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-light-success font-weight-lighter mr-2 float-right" type="submit">
                    {{ __('Crear Perfil') }}
                </button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection
