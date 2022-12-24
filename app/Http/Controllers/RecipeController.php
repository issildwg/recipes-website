<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\User;
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

        $users = User::orderBy('name', 'asc')->get();
        return view('recipes.create', ['users' => $users]);
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
            'recipe' => 'required|min:1',
            'user_id' => 'required|min:1'
        ]);
               
        $r = new Recipe;
        $r->title = $validatedData['title'];
        $r->ingredients = $validatedData['ingredients'];
        $r->recipe = $validatedData['title'];
        $r->user_id = $validatedData['user_id'];
        $r->save();

        session()->flash('message', 'post was created');
        return redirect()->route('recipes.index');
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
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect()->route('recipes.index')->with('message', 'Recipe has been deleted');
    }
}
