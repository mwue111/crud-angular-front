<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CategoryPostRequest;

class CategoryRestController extends Controller
{
    //index
    public function index(){
        $categories = Category::all();
        return response()->json($categories, Response::HTTP_OK);
    }

    //store
    public function store(CategoryPostRequest $request){
        $category = Category::create($request->all());
        return response()->json([
            'message'=> 'Registro creado',
            'category' => $category
        ], Response::HTTP_CREATED);
    }

    //update
    public function update(CategoryPostRequest $request, $category){
        $category = Category::find($category);
        $category->update($request->only('name', 'slug'));
        return response()->json([
            'message'=> 'Registro actualizado',
            'category' => $category
        ], Response::HTTP_CREATED);
    }

    //destroy
    public function destroy($category){
        $category = Category::find($category);
        $category->delete();
        return response()->json([
            'message'=> 'Registro eliminado'
        ], Response::HTTP_OK);
    }

}
