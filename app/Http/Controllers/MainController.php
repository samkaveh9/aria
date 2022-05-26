<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function home()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));
    }

    public function guide()
    {
        return view('guide');
    }

    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
        $categories = Category::all();

        $search = $request->input('search');

        $products = Product::where('title', 'LIKE', '%' . $search . '%' )->get();

        return view('search', compact('products', 'categories'));

    }


    public function category(Request $request, $id)
    {
        $categories = Category::all();

        $products = Product::where('category_id', '=', $id)->get();

        return view('category', compact('products', 'categories'));

    }

}
