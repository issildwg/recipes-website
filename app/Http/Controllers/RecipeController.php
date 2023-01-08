<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        return view('recipes.index', [
            'recipes' => DB::table('recipes')->paginate(10)
        ]);      //second arg = array of data being sent to view
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
        //the above sends data 'users' to the view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'ingredients' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'recipe' => 'required|min:1'
        ]);
               
        $user = Auth::user();
        $userID = Auth::id();

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $r = new Recipe;
        $r->title = $validatedData['title'];
        $r->ingredients = $validatedData['ingredients'];
        $r->recipe = $validatedData['recipe'];
        $r->image = $validatedData['image'];
        $r->user_id = $userID;
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
        $comments = Comment::where('recipe_id',($id))->get(); // prints recipes but gives its a super weird format  
        $users = User::get();


        return view('recipes.show', ['recipe' => $recipe, 'comments' => $comments, 'user' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.edit', ['recipe' => $recipe] );
        
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
            'title' => 'required',
            'ingredients' => 'required',
            'recipe' => 'required'
        ]);

        $recipe = Recipe::find($id);
        $recipe->title = $request->get('title');
        $recipe->ingredients = $request->get('ingredients');
        $recipe->recipe = $request->get('recipe');
        $recipe->save();

        return redirect()->route('recipes.index')
                ->with('success', 'updated successfully');
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

        return redirect()->route('recipes')->with('message', 'Recipe has been deleted');
    }
}
