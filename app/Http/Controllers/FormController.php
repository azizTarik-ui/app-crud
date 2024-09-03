<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormModel;

class FormController extends Controller
{
    public function form (){
        return view('form');
    }
    public function store (Request $request){
        // return $request;

      $data = new FormModel();
      $data->name = $request->name;
      $data->save();
      return back();

    }
}
