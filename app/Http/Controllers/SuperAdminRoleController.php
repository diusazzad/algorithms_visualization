<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SuperAdminRoleController extends Controller
{
    // Dashboard: http://localhost:8000/superadmin/dashboard
    // Roles Index: http://localhost:8000/superadmin/roles
    // Create Role: http://localhost:8000/superadmin/roles/create
    // Show Role: http://localhost:8000/superadmin/roles/{role} (replace {role} with the role ID)
    // Edit Role: http://localhost:8000/superadmin/roles/{role}/edit (replace {role} with the role ID)
    public function index()
    {
        // Test 1
        // $datas = ['Data 1', 'Data 2', 'Data 3'];
        // test 2
        // Retrieve a role
        $users = User::paginate(3);
        $data = 'This is some additional data to pass to the view';

        return view('auth.superadmin.roles.index', compact('users', 'data'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all users
        $users = User::all();

        return view('auth.superadmin.roles.create', compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        // return Redirect::route('auth.superadmin.roles.index')->with('success', 'User created successfully.');
        return redirect()->route('roles.index')->with('success', 'User created successfully.');

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
