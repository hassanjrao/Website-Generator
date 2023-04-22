<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->can('view roles') == false){
            return abort(403, "You don't have permission to access this page");
        }


        $roles = Role::all();

        return view("roles.index", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->can('create roles') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "name" => "required|unique:roles,name"
        ]);

        $role = Role::create([
            "name" => $request->name
        ]);

        return redirect()->route("roles.index")->withToastSuccess("Role created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(auth()->user()->can('edit roles') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $role = Role::findorFail($id);

        $permissions = Permission::all();

        // 

        // get last string from permission name and group them by it

        $permissions = $permissions->groupBy(function ($permission) use ($role) {
            $permissionName = explode(" ", $permission->name);
            $permission->hasPermission = $role->hasPermissionTo($permission->name);
            return $permissionName[count($permissionName) - 1];
        });


        return view("roles.edit", compact("role", "permissions"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|unique:roles,name," . $id
        ]);

        $role = Role::findorFail($id);

        $role->update([
            "name" => $request->name
        ]);

        return redirect()->route("roles.index")->withToastSuccess("Role updated successfully");
    }


    public function updateRolePermissions(Request $request)
    {
        if(auth()->user()->can('edit roles') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "role_id" => "required|exists:roles,id",
        ]);



        $role = Role::findorFail($request->role_id);


        
        


        $request_keys = array_keys($request->all());
        // remove underscore from all request keys
        $request_keys = array_map(function ($key) {
            return str_replace("_", " ", $key);
        }, $request_keys);


        unset($request_keys[0]);
        unset($request_keys[1]);


        $role->syncPermissions($request_keys);

        return redirect()->back()->withToastSuccess("Role updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete roles') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $role = Role::findorFail($id);

        // delete role permissions

        $role->syncPermissions([]);

        $role->delete();

        return redirect()->back()->withToastSuccess("Role deleted successfully");
    }
}
