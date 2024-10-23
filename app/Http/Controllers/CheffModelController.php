<?php

namespace App\Http\Controllers;

use App\Models\CheffModel;
use Illuminate\Http\Request;

class CheffModelController extends Controller
{
    public function index()
    {
        return view('Dashboard\Cheffs\add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $cheffdata = $request->validate(
        [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cheffs'],
            'experience' => ['required'],
            'nationality' => ['required'],
            'speciality' => ['required','string','max:255'],
            'image' =>  ['required','image','mimes:jpg,png,gif,jpeg|max:4048']
        ]);

        $image = rand(52000,600000000)."ACI".time().".".$request->image->extension();
        $request->image->move(public_path('uploads/cheffimages'), $image);
        $image_path = 'uploads/cheffimages/'. $image;


      $cheffdata = new CheffModel();
      
      $cheffdata->name = $request->name;
      $cheffdata->email = $request->email;
      $cheffdata->experience = $request->experience;
      $cheffdata->nationality = $request->nationality;
      $cheffdata->speciality = $request->speciality;
      $cheffdata->image = $image_path;
    $cheffdata->save();
        return redirect()->route('cheff.show')->with('success', 'Cheff added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cheffs = CheffModel::all();
        return view('Dashboard\Cheffs\show', compact('cheffs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

}
