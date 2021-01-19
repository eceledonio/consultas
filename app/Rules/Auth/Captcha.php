<?php

namespace App\Rules\Auth;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Validation\Rule;

/**
 * Class Captcha.
 */
class Captcha implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     *
     * @return bool
     * @throws GuzzleException
     */
    public function passes($attribute, $value)
    {
        if (empty($value)) {
            return false;
        }

        $response = json_decode((new Client([
            'timeout' => config('boilerplate.access.captcha.configs.options.timeout'),
        ]))->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('boilerplate.access.captcha.configs.secret_key'),
                'remoteip' => request()->getClientIp(),
                'response' => $value,
            ],
        ])->getBody(), true);

        return isset($response['success']) && $response['success'] === true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('El CAPTCHA es inválido.');
    }
}
