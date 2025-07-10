<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function FourZeroFourIndex()
    {
        return view('backend.authentication.auth-404');
    }

    public function FourZeroThreeIndex()
    {
        return view('backend.authentication.auth-403');
    }

    public function FiveHundredIndex()
    {
        return view('backend.authentication.auth-500');
    }

    public function SigninIndex()
    {
        return view('backend.authentication.auth-signin');
    }

    public function SignupIndex()
    {
        return view('backend.authentication.auth-signup');
    }

    public function PasswordResetIndex()
    {
        return view('backend.authentication.auth-password-reset');
    }

    public function TwoStepIndex()
    {
        return view('backend.authentication.auth-two-step');
    }

    public function LockscreenIndex()
    {
        return view('backend.authentication.auth-lockscreen');
    }

    public function MaintenanceIndex()
    {
        return view('backend.authentication.auth-maintenance');
    }

    public function Signin2()
    {
        return view('backend.authentication.auth-signin2');
    }

    public function Signin3()
    {
        return view('backend.authentication.auth-signin3');
    }
}
