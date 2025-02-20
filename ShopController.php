<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
     $products = ProductModel::all();

        return view("shop", compact ("products"));
    }

    public function AddProducts(Request $request)
    {
       return view ("/admin/add-product");
    }

    public function CreateProducts(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
            "description" => "required|string|min:5",
            "amount" => "required|string",
            "price" => "required|string",
            "image" => "required|string"
        ]);


        ProductModel::create([
            "name" => $request->get("name"),
            "description" => $request->get("description"),
            "amount" => $request->get("amount"),
            "price" => $request->get("price"),
            "image" => $request->get("image"),
        ]);

        return redirect("../shop");
    }

    public function ShowAllProducts()
    {
        $products = ProductModel::all();

        return view("/admin/products", compact("products"));
    }

}















