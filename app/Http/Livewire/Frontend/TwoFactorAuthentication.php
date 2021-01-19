<?php

namespace App\Http\Livewire\Frontend;

use Illuminate\Http\Request;
use Livewire\Component;

/**
 * Class TwoFactorAuthentication.
 */
class TwoFactorAuthentication extends Component
{
    /**
     * @var
     */
    public $code;

    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    public function validateCode(Request $request)
    {
        $this->validate([
            'code' => 'required|min:6',
        ]);

        if ($request->user()->confirmTwoFactorAuth($this->code)) {
            $this->resetErrorBag();

            session()->flash('flash_success', __('Autenticación de dos factores habilitada con éxito'));

            return redirect()->route('frontend.auth.account.2fa.show');
        }

        $this->addError('code', __('Su código de autorización no es válido. Inténtalo de nuevo.'));

        return false;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('components.frontend.two-factor-authentication');
    }
}
