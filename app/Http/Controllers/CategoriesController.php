<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
// use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCategoriesRequest $request)
    {

        // try{
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255|unique:categories,name',
        //     'slug' => 'nullable|string|max:255|unique:categories,slug',
        //     'description' => 'nullable|string|max:1000',
        //     'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

            $validatedData = $request->validated();



        Log::info('Validated Data', $validatedData);


            $category = Categories::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully',
            'category' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
