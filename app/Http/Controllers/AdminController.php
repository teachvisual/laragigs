<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard') ;
    }
    public function users() {
        $users = User::where("is_admin", false)->get();
        return view('admin.users' ,['users' => $users]) ;
    }

    public function listings() {
        $listings  = Listing::all() ;
        
        return view('admin.listings', ['listings' => $listings]) ;
    }

    public function edit(User $user) {

        session(['previous_url' => url()->previous()]);
        
        

        return view('admin.edit', [
            'user' => $user
        ]);
    
    }
    
    public function updateEmail(Request $request )  {       
             
        if (Gate::denies('admin')) {
            return redirect('/')->with('message', 'Unauthorized Action');
        }
        $validatedData = $request->validate([            
            'email' => 'required|email',
            
            
        ]);
       
        $user = User::find($request->user) ; 
       
        $user->update($validatedData);
       

        $previousUrl = session('previous_url');
        
        return redirect($previousUrl)->with('message', 'User Updated');

        
        
    }
    
    public function updatePassword(Request $request )  {       
             
        if (Gate::denies('admin')) {
            return redirect('/')->with('message', 'Unauthorized Action');
        }
        $validatedData = $request->validate([           
            
            'password' => 'nullable|string|min:8|confirmed'
            
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);
       
        $user = User::find($request->user) ; 
       
        $user->update($validatedData);
       

        $previousUrl = session('previous_url');
        
        return redirect($previousUrl)->with('message', 'User Updated');

        
        
    }

    
    
    
    
}
