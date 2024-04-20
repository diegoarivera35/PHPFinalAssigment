<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTechnologyRequest;
use App\Http\Requests\UpdateTechnologyRequest;
use App\Models\Project;
use App\Models\Technology;

class TechnologyController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('technologies.index', ['technologies' => Technology::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technologies.create', ['technologies' => Technology::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTechnologyRequest $request)
    {
        $technology = Technology::create($request->validated());
        $technology->technologies()->attach($request->technology);
        return redirect() -> route('technologies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view('technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Technology $technology)
    {
        return view('technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnologyRequest $request, Technology $technology)
    {
        $technology->update($request->validated());
        return view('technologies', compact('technology'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Technology::destroy($id);
        return redirect()->route('technologies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('technologies.index')->with('success', 'Technology deleted successfully');
    }

}
