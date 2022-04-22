<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategories() {
        $categories = [];
        return view('categories', compact('categories'));
    }

    function showCategory() {
        $category = '';
        return view('category', compact('category'));
    }

    // CRUD
    function createCategory(){
        return view('createCategory');
    }

    function saveCategory(Request $request){
        $newCategory = $request->all();
        $categories = session('categories');
        array_push($categories, $newCategory);
        session(['categories' => $categories]);
        return redirect('/retrive-categories');
    }

    function retrieveCategories(){
        $categories = session('categories');
        return view('retrieveCategories', compact('categories'));
    }

    function retrieveCategory($categoryId){
        $categories = session('categories');
        $category = $categories[$categoryId];
        return view('retrieveCategory', compact('category'));
    }

    function editCategory($categoryId){
        $categories = session('categories');
        $category = $categories[$categoryId];
        return view('editCategory', compact('category', 'categoryId'));
    }

    function updateCategory(Request $request, $categoryId){
        $categories = session('categories');
        $updatedCategory = $request->all();
        $categories[$categoryId] = $updatedCategory;
        session(['categories' => $categories]);
        return redirect('/retrive-categories');
    }

    function deleteCategory($categoryId){
        $categories = session('categories');
        unset($categories[$categoryId]);
        $remainingCategories = [];
        foreach ($categories as $category) {
            array_push($remainingCategories, $category);
        }
        session(['categories' => $remainingCategories]);
        return redirect('/retrive-categories');
    }
}
