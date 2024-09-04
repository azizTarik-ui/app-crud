<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function product (){
        return view('addproduct');
    }

    public function addProduct (Request $request){
        $data = new ProductModel();
        $data->name = $request->name;
        $data->type = $request->type;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect('/');
    }

    public function edit ($id){
        $product = ProductModel::find($id);
        // return $data;
        return view('editproduct', compact('product'));
    }

    public function update (Request $request, $id){
        // return $request;
        $data = ProductModel::find($id);
        $data->name = $request->name;
        $data->type = $request->type;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect('/');
    }
    public function destroy ($id){
        $product = ProductModel::find($id)->delete();
        return redirect('/');
    }
}
