<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function SettingsIndex()
    {
        return view('backend.account.account-settings');
    }

    public function InvoicesIndex()
    {
        return view('backend.account.account-invoices');
    }

    public function CreateInvoicesIndex()
    {
        return view('backend.account.account-create-invoices');
    }

    public function BillingIndex()
    {
        return view('backend.account.account-billing');
    }
}
