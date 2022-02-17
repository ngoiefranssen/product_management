<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationCategories = $request->validate(
            [
                'name_category' => 'required|max:50',
                'description_cat' => 'required|max:50',
            ],
            [
                'name_category' => 'please complete this field for the name registration !',
                'description_cat' => 'please complete this description field for registration!',
            ]);

            Category::create($validationCategories);
            return redirect()->route('categories.index')->with('success', 'your category has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_category = Category::find($id);

        return view('categories.show', compact('show_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);
       return view('categories.edit', compact('category'));
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
        $categoriesUpdate = $request->validate(
            [
                'name_category' => 'required|max:50',
                'description_cat' => 'required|max:100',
            ],
            [
                'name_category.required' => '',
                'description_cat.required' => '',
            ]);

        Category::find($id)->Update(
            [
                'name_category' => $request->name_category,
                'description_cat' => $request->description_cat,
                'created_at' => Carbon::now(),
            ]);

        return redirect()->route('categories.index')->with('message', 'congratulations the characteristics of your product have been successfully modified');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $categoryDelete = Category::find($id);
        //  $categoryDelete->delete();

        // return redirect()->route('categories.index')->with('success', 'Bravo ! categorie supprimer avec succes');
    }

    public function categoryDelete($id)
    {
        $categoryDelete = Category::find($id);
        $categoryDelete->delete();

        return back()->with('success', 'Bravo ! categorie supprimer avec succes');
    }
}
