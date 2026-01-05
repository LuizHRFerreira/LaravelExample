<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create() {
        $users = User::all()->toArray();
        return view('products.create', compact('users'));
    }

    public function store() {
        
        $product = new Product;
        $product->name = request()->name;
        $product->value = request()->value;
        $product->description = request()->description;
        $product->user_id = request()->user_id;
        $product->save();

        Session::flash('success', trans('message.success_on_update'));
        return redirect()->route('products.index');
    }
}
