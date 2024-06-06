<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
            'identity' => 'required|unique:customers,identity',
            'gender' => 'required|in:M,F',
            'birthday' => 'required|date',
        ]);

        Customer::create($request->all());

        return redirect()->route('dashboard');
    }

    public function edit(int $id): View
    {
        $customer = Customer::findOrFail($id);

        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'identity' => 'required|unique:customers,identity,'.$id.',id',
            'gender' => 'required|in:M,F',
            'birthday' => 'required|date',
        ]);

        $customer = Customer::findOrFail($id);

        $customer->update($request->all());

        return redirect()->route('dashboard');
    }

    public function delete(int $id): View
    {
        $customer = Customer::findOrFail($id);

        return view('customer.delete', compact('customer'));
    }

    public function destroy(int $id): RedirectResponse
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('dashboard');
    }
}
