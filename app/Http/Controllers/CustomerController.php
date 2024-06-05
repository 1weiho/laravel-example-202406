<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('dashboard', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'identity' => 'required',
            'gender' => 'required|in:M,F',
            'birthday' => 'required|date',
        ]);

        Customer::create($request->all());

        return redirect()->route('dashboard');
    }
}
