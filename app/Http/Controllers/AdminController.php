<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
         $adminRequests = User::where('is_admin' , NULL)->get();
         $revisorRquests = User::where('is_revisor' , NULL)->get();
         $writerRequest = User::where('is_where' , NULL)->get();

          return view('admin.dashboard' , compact('adminRequests' , 'revisorRequests' , 'writerRequests'));
    }
   
    public function setAdmin(User $user){
        $user->is_admin = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'hai correttamente reso amministratore l\'utentente scelto');
    }

    public function setRevisor(User $user){
        $user->is_revisor = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'hai correttamente reso revisore l\'utentente scelto');
    }

    public function setWriter(User $user){
        $user->is_writer = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'hai correttamente reso redattore l\'utentente scelto');
    }

}
