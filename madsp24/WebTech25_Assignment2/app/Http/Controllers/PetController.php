<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

// IMPORTANT! REMEMBER TO REFACTOR NAMES FOR THE TESTS TO PASS

class PetController extends Controller
{
    // Function for showing all items
    public function index()
    {
        $pets = Pet::all();

        return view('Listpage', compact('pets'));
    }

    public function remove($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('/Listpage');
    }


    public function create()
    {
        return view('Formpage');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           'fullName' => 'required|string|max:255',
           'email' => 'required|string|email|max:255',
           'address' => 'required|string|max:255',
           'city' => 'required|string|max:255',
           'postcode' => 'required|string|max:255',
           'petName' => 'required|string|max:255',
           'petAge' => 'required|integer|max:200',
           'type' => 'required|string|max:255',
            'training' => 'required|string',
            'petDescription' => 'required|string|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ] , [
                'fullName.required' => 'Full Name is required',
                'fullName.max' => 'Full Name is too long',
                'email.required' => 'Email is required',
                'email.email' => 'Email format is invalid',
                'address.required' => 'Address is required',
                'address.max' => 'Address is too long',
                'city.required' => 'City is required',
                'city.max' => 'City is too long',
                'postcode.required' => 'Postcode is required',
                'postcode.max' => 'Postcode is too long',
                'petName.required' => 'Pet Name is required',
                'petName.max' => 'Pet Name is too long',
                'petAge.required' => 'Pet Age is required',
                'petAge.max' => 'Pet Age is too long',
                'type.required' => 'Type is required',
                'training.required' => 'Training is required',
                'petDescription.required' => 'Pet Description is required',
                'petDescription.max' => 'Pet Description is too long',
                'image.required' => 'Image is required',

            ]
        );

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }


        try {
            \App\Models\Pet::create($validated);
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
            return back()->withErrors(['error' => 'Something went wrong while saving your pet.'])->withInput();
        }

        return redirect('/Listpage')->with('success', 'Pet created!');
    }
}
