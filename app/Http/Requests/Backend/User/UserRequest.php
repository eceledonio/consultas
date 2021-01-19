<?php

namespace App\Http\Requests\Backend\User;

use App\Rules\Auth\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class UserRequest.
 */
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch (Route::currentRouteName()) {
            case 'admin.auth.user.index':
            case 'admin.auth.user.get':
            case 'admin.auth.user.show': {
                return $this->user()->can('users.read');
            }

            case 'admin.auth.user.create':
            case 'admin.auth.user.store': {
                return $this->user()->can('users.create');
            }

            case 'admin.auth.user.edit':
            case 'admin.auth.user.update':
            case 'admin.auth.user.change-password':
            case 'admin.auth.user.change-password.update': {
                return $this->user()->can('users.update');
            }

            case 'admin.auth.user.deleted': {
                return $this->user()->can('users.deleted');
            }

            case 'admin.auth.user.restore': {
                return $this->user()->can('users.restore');
            }

            case 'admin.auth.user.mark':
            case 'admin.auth.user.deactivated': {
                return $this->user()->can('users.deactivate');
            }

            case 'admin.auth.user.clear-session':
            case 'admin.auth.user.destroy': {
                return $this->user()->can('users.delete');
            }

            case 'admin.auth.user.permanently-delete': {
                return $this->user()->can('users.permanently-delete');
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
            case 'admin.auth.user.store': {
                return [
                    'first_name' => ['required', 'max:100'],
                    'last_name' => ['required', 'max:100'],
                    'email' => ['required', 'max:100', 'email', Rule::unique('users')],
                    'password' => array_merge(['max:100'], PasswordRules::register($this->email)),
                    'active' => ['sometimes', 'in:1'],
                    'email_verified' => ['sometimes', 'in:1'],
                    'send_confirmation_email' => ['sometimes', 'in:1'],
                    'roles' => ['sometimes', 'array'],
                    'permissions' => ['sometimes', 'array'],
                ];
            }

            case 'admin.auth.user.update': {
                return [
                    'first_name' => ['required', 'max:100'],
                    'last_name' => ['required', 'max:100'],
                    'email' => ['required', 'max:255', 'email', Rule::unique('users')->ignore($this->user->id)],
                    'roles' => ['sometimes', 'array', ],
                    'permissions' => ['sometimes', 'array'],
                ];
            }

            case 'admin.auth.user.change-password.update': {
                return [
                    'password' => array_merge(
                        [
                            'max:100',
                            new UnusedPassword((int) $this->segment(4)),
                        ],
                        PasswordRules::changePassword($this->email)
                    ),
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
            'first_name.required' => __('El campo Nombre es obligatorio.'),
            'last_name.required' => __('El campo Apellidos es obligatorio.'),
            'email.unique' => __('El correo') .' '. $this->get('email') .' '. __('se encuentra en uso.'),
            'email.required' => __('El campo Dirección de correo es obligatorio.'),
            'password.required' => __('El campo Contraseña es obligatorio.'),
            'password.confirmed' => __('La confirmación de la contraseña no coincide.'),
            'password.min' => __('La contraseña debe tener, al menos, :min caracteres.'),
        ];
    }
}
