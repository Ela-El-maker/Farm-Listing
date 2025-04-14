<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //
        $countries = Country::paginate(20);

        return view('admin.location.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        //
        return view('admin.location.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //
        $this->validate($request, [
            'name' => ['required', 'max:255', 'unique:countries,name'],
        ]);
        // dd($request->all());
        $country = new Country();
        $country->name = $request->name;
        $country->save();
        return redirect()->route('admin.countries.index')->with('success','Country Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $country = Country::find($id);
        return view('admin.location.country.edit', compact('country'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //
        $this->validate($request, [
            'name' => ['required', 'max:255', 'unique:countries,name'],
            ]);
            $country = Country::find($id);
            $country->name = $request->name;
            $country->save();
            return redirect()->route('admin.countries.index')->with('success','Country Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
