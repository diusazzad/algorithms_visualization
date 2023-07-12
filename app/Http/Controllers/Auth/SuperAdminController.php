<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        // Logic for Super Admin Dashboard
        return view('auth.superadmin.dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('auth.superadmin.roles.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|unique:roles',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // Role::create([
        //     'name' => $request->input('name'),
        // ]);

        // return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('auth.superadmin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role, string $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|unique:roles,name,' . $role->id,
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // $role->update([
        //     'name' => $request->input('name'),
        // ]);

        // return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Role $role)
    {
        // $role->delete();
        // return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role deleted successfully.');

    }
}
