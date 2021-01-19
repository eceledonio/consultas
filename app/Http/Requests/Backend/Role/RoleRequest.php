<?php

namespace App\Http\Requests\Backend\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

/**
 * Class RoleRequest.
 */
class RoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch (Route::currentRouteName()) {
            case 'admin.auth.role.index':
            case 'admin.auth.role.show': {
                return $this->user()->can('roles.read');
            }

            case 'admin.auth.role.create':
            case 'admin.auth.role.store': {
                return $this->user()->can('roles.create');
            }

            case 'admin.auth.role.edit':
            case 'admin.auth.role.update': {
                return $this->user()->can('roles.update');
            }

            case 'admin.auth.role.destroy': {
                return $this->user()->can('roles.delete');
            }

            default:
                return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch (Route::currentRouteName()) {
            case 'admin.auth.role.store': {
                return [
                    'name' => ['required', 'max:100', Rule::unique('roles')],
                    'description' => ['required'],
                    'permissions' => ['sometimes', 'array'],
                ];
            }

            case 'admin.auth.role.update': {
                return [
                    'name' => ['required', 'max:100', Rule::unique('roles')->ignore($this->role)],
                    'description' => ['sometimes', 'required', 'max:100'],
                    'permissions' => ['sometimes', 'array'],
                ];
            }

            default:return [];
        }
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => __('El campo Nombre del Perfil es obligatorio'),
            'description.required' => __('El campo Descripción del Perfil es obligatorio'),
            'name.unique' => __('El Perfil').' '.'('.$this->get('name').')'.' '.__('se encuentra en uso.'),
        ];
    }
}
