<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->can('view users') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $users= User::latest()->get();

        $roles=Role::all();


        return view('users.index',compact('users','roles'));
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

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users,email",
            "password"=>"required|min:8",
            "roles"=>"required",
            "roles.*"=>"required|exists:roles,name"
        ]);

        $user=User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password)
        ]);

        $user->assignRole($request->roles);

        return redirect()->back()->with("success","User created successfully");
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

        if(auth()->user()->can('edit users') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }


        $user=User::findOrFail($id);
        $roles=Role::all();

        return view("users.edit",compact("user","roles"));
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

        if(auth()->user()->can('edit users') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users,email,".$id,
            "roles"=>"required",
            "roles.*"=>"required|exists:roles,name"
        ]);

        $user=User::findOrFail($id);

        if($request->password){
            $request->validate([
                "password"=>"required|min:8"
            ]);

            $user->update([
                "password"=>bcrypt($request->password)
            ]);
        }

        $user->update([
            "name"=>$request->name,
            "email"=>$request->email,
        ]);

        $user->syncRoles($request->roles);

        return redirect()->route("users.index")->with("success","User updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(auth()->user()->can('delete users') == false){
            return redirect()->back()->withToastError("You don't have permission to access this page");
        }

        $user=User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with("success","User deleted successfully");
    }
}
