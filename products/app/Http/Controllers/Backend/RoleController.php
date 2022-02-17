<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Requests\RoleRegisterRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::get();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valideted_role = $request->validate(
            [
                'name_role' => 'required|max:50',
            ],
            [
                'name_role.required' => 'please complete the fields in front of you for registration',
            ]);

        // dd($valideted_role);

        Role::create($valideted_role);
        return redirect()->route('roles.index')->with('succes', 'the role was created successfully');
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
        $role = Role::find($id);
        return view('roles.edit', compact('role'));
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
        $role_update = $request->validate(
            [
                'name_role' => 'required|max:50',
            ],
            [
                'name_role.required' => 'modify or view the same information',
            ]);

        Role::find($id)->update(
            [
                'name_role' => $request->name_role,
                'created_at' => Carbon::now(),
            ]);

        return redirect()->route('roles.index')->with('message', 'the role has been changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
    //     $delete_role = Role::find($id);
    //     $delete_role->delete();

    //     // dd($delete_role);

    //     return redirect()->route('roles.index')->with('succes', 'your role has been successfully deleted');
    }

    public function delete($id)
    {
        $delete_role = Role::find($id);
        $delete_role->delete();

        // dd($delete_role);

        return redirect()->route('roles.index')->with('succes', 'your role has been successfully deleted');
    }
}
