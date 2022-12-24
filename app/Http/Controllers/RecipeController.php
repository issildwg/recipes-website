<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Session;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Think of this like a homepage
        $recipes = Recipe::get();
        return view('recipes.index', ['recipes' => $recipes]);      //second arg = array of data being sent to view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()        //doesnt actually create, just gives user the form to create something
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    //
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'ingredients' => 'required|min:2',
            'recipe' => 'required|min:1'
            //'Author' => 'required|user'
        ]);
        
        dd($validatedData);

        //save before returning!!!
        /*
        $r = new Recipe;
        $r title = $validatedData['title'];
        $r ingredients = $validatedData['ingredients'];
        $r recipe = $validatedData['title'];
        $r->save();
        session()->flash('message', 'post was created');
        return redirect()->route('recipes.index);
        */
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', ['recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
