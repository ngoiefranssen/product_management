<?php

namespace App\Http\Controllers\Backend;

use App\Models\Role;
use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::get();
        return view('peoples.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('peoples.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validetedPeople = $request->validate(
            [
                'role_id' => 'required',
                'name_people' => 'required|max:30',
                'first_name' => 'required|max:25',
                'kind' => 'required|max:30',
                'age' => 'required',
                'common' => 'required|max:35',
                'piece' => 'required|max:50',
                'avenue' => 'required',
                'number' => 'required',
            ],
            [
                'role_id.required' => 'Please choose the corresponding role !',
                'name_people.required' => 'Be sure to complete the name field !',
                'first_name.required' => 'Be sure to complete the name field !',
                'kind.required' => 'Please choose the corresponding gender Svp !',
                'age.required' => 'Be sure to complete the age field !',
                'common.required' =>'Be sure to complete the common field !',
                'piece.required' => 'Please enter the corresponding piece !',
                'avenue.required' => 'Please enter the corresponding avenue !',
                'number.required' => 'Please enter the corresponding numerb !',

            ]);

        // $p = People::insert([

        //     'role_id' => $request->role_id,
        //     'name_people' => $request->name_people,
        //     'first_name' => $request->first_name,
        //     'kind' => $request->kind,
        //     'age' => $request->age,
        //     'common' =>$request->common,
        //     'piece' => $request->piece,
        //     'avenue' => $request->avenue,
        //     'number' => $request->number,
        //     'created_at' => Carbon::now(),
        // ]);

        // $p->save();

        People::create($validetedPeople);

        return redirect()->route('peoples.index')->with('message => well done ! the person has been successfully registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $people = People::find($id);
        $role = Role::find($id);
        return view('peoples.show', compact('people', 'role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::find($id);
        $roles = Role::get();

        return view('peoples.edit', compact('people', 'roles'));
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
        $validatePeople = $request->validate(
            [
                'role_id' => 'required',
                'name_people' => 'required|max:30',
                'first_name' => 'required|max:25',
                'kind' => 'required|max:30',
                'age' => 'required',
                'common' => 'required|max:35',
                'piece' => 'required|max:50',
                'avenue' => 'required|max:30',
                'number' => 'required',
            ],
            // [
            //     'role_id.required' => '',
            //     'name_people.required' => '',
            //     'first_name.required' => '',
            //     'kind.required' => '',
            //     'age.requred' => '',
            //     'common.required' => '',
            //     'piece.required' => '',
            //     'avenue.required' => '',
            //     'number.required' => '',
            // ]
        );

        People::find($id)->update([

            'role_id' => $request->role_id,
            'name_people' => $request->name_people,
            'first_name' => $request->first_name,
            'kind' => $request->first_name,
            'age' => $request->age,
            'common' => $request->common,
            'piece' => $request->piece,
            'avenue' => $request->avenue,
            'number' => $request->number,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('peoples.index')->with('message', 'Congratulations ! the person has been successfully modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function peopleDelete($id)
    {
        $peopleDelete = People::find($id);
        $peopleDelete->delete();

        return back()->with('success => ');
    }
}
