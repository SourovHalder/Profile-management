<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function add(Request $request)
    {
        $user = new Profile;
        $user->name=$request->name;
        $user->fathersname=$request->fathersname;
        $user->save();
        return redirect('add');
  
    }

    public function show()
    {
        $users = Profile::all();

        return view('pList', compact('users'));
    }
    public function edit($id)
    {
        $users = Profile::find($id);
        return view('edit',compact('users'));

    
    }
    public function update(Request $request,$id)
    {
        $user = Profile::find($id);
        $user->name =$request->input('name');
        $user->fathersname =$request->input('fathersname');
        $user->update();
        return redirect('/pList')->with('status',"data updated");
    }

    public function delete($id){
        $users = Profile::find($id);
        $users->delete();
        return redirect('/pList');
    }
}
