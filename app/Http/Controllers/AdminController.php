<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
         $adminRequests = User::where('is_admin' , NULL)->get();
         $revisorRequests = User::where('is_revisor' , NULL)->get();
         $writerRequests = User::where('is_writer' , NULL)->get();

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
    
    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags'
        ]);

        $tag->update([
            'name' => strtolower($request->name),
        ]);

        return redirect()->back()->with('message' , 'tag aggiornato correttamente');
    }

    public function deleteTag(Tag $tag){
        foreach ($tag->articles as $articles) {
            $article->tags()->detach($tag);
        }

        $tag->delete();
        return redirect()->back()->with('message' , 'tag eliminato correttamente ');
    }

}
