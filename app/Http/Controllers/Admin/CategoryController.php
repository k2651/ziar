<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('index', 'asc')->get();
        return view('admin.categories.CategoriesManagment', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $index = Category::getLastIndex() + 1;
        $category = Category::create([
            'name' => $request['category'],
            'index' => $index
        ]);
      
        $html = view('admin.categories.components.newCategoryLi', compact('category'))->render();
        return json_encode($html);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categories = Category::orderBy('index', 'asc')->get();
        return view('admin.categories.ShowCategory');
        // , compact('categories'));
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
    public function update(Request $request, Category $category)
    { 
        $pass = 'false';
        if ($request['data'] == 'up' && $request['index'] != Category::orderBy('index', 'asc')->first()->index) // daca este egal cu primul element din lista, nu faci nimic
        {
            $saveCategory = Category::orderBy('index', 'desc')->where('index', '<', $request['index'])->first(); // alage primul cel mai mic element dupa request['index']
            $category -> update([
                'index' => $saveCategory->index
            ]);

            $saveCategory -> update([
                'index' => $request['index']
            ]);

            $pass = 'true';

        } else if ($request['data'] == 'down' && $request['index'] != Category::orderBy('index', 'desc')->first()->index) // daca este egal cu ultimul element din lista, nu faci nimic
        {
            $saveCategory = Category::orderBy('index', 'asc')->where('index', '>' ,$request['index'])->first(); // alage primul cel mai mare element dupa request['index']
            $category->update([
                'index' => $request['index'] + 1
            ]);

            $saveCategory->update([
                'index' => $request['index']
            ]);

            $pass = 'true';
        }
        if ($pass == 'true') {
            $categories = Category::orderBy('index', 'asc')->get();
            $html = view('admin.categories.components.updatedIndex', compact('categories'))->render();
            return json_encode($html);
        } else
            return 0;
          
    }
    public function updateName(Request $request, Category $category)
    {
        $category->update([
            'name' => $request['name']
        ]);
        $html = view('admin.categories.components.updatedCategoryName', compact('category'))->render();
            return json_encode($html);
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $categories = Category::orderBy('index', 'asc')->get();
            $html = view('admin.categories.components.updatedIndex', compact('categories'))->render();
            return json_encode($html);
    }
}
