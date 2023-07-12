<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('users')->get();

        return view('auth.superadmin.dashboard', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.superadmin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:255',
            // Add validation rules for other role fields if necessary
        ]);

        Role::create([
            'name' => $request->name,
            // Assign other role fields if necessary
        ]);

        return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Role $role)
    {
        $role = Role::findOrFail($id);
        return view('auth.superadmin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
            // Add validation rules for other role fields if necessary
        ]);

        $role->update([
            'name' => $request->name,
            // Update other role fields if necessary
        ]);

        return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role, $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('auth.superadmin.roles.index')->with('success', 'Role deleted successfully.');

    }
}
