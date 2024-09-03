<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewUserModel;

class NewUserController extends Controller
{
    public function new (){
        return view('newuserform');
    }

    public function edit ($id){
        $user = NewUserModel::find($id);
        // return $data;
        return view('edituser', compact('user'));
    }

    public function create (Request $request){
        $data = new NewUserModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        return back();
    }
    
    public function update (Request $request, $id){
        // return $request;
        $data = NewUserModel::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        return redirect('/');
    }
 public function destroy ($id){
        $user = NewUserModel::find($id)->delete();
        return redirect('/');
    }
}
