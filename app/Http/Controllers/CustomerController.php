<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest('create_date')->paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'pass_pin' => 'nullable|min:4',
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'inviter' => 'nullable|string',
            'vn_account_name' => 'nullable|string',
            'vn_id_bank' => 'nullable|string',
            'type' => 'required|in:user,admin',
            'status' => 'required|in:active,inactive'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if ($request->filled('pass_pin')) {
            $data['pass_pin'] = Hash::make($request->pass_pin);
        }
        
        // Generate unique invite code
        $data['invite_code'] = substr(md5(uniqid()), 0, 8);

        Customer::create($data);

        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'username' => 'required|unique:users,username,' . $customer->id,
            'password' => 'nullable|min:6',
            'pass_pin' => 'nullable|min:4',
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'inviter' => 'nullable|string',
            'vn_account_name' => 'nullable|string',
            'vn_id_bank' => 'nullable|string',
            'type' => 'required|in:user,admin',
            'status' => 'required|in:active,inactive',
            'total' => 'nullable|numeric',
            'money' => 'nullable|numeric',
            'min' => 'nullable|numeric',
            'commission' => 'nullable|numeric',
            'more_back' => 'nullable|numeric',
            'vip' => 'boolean'
        ]);

        $data = $request->except(['password', 'pass_pin']);
        
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
        
        if ($request->filled('pass_pin')) {
            $data['pass_pin'] = Hash::make($request->pass_pin);
        }

        $customer->update($data);

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}