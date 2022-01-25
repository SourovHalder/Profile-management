<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
public function add(Request $request)
    {
        $user=new Profile;
        $user->name=$request->name;
        $user->fathersname=$request->fathersname;
        $user->save();
        return redirect('add');
  
  
    }
}
