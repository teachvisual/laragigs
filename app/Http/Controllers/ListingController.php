<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\URL;

class ListingController extends Controller
{

    public function index()
    {
        // dd(request('tag'));
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tags', 'search']))->simplePaginate(4)
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' =>  $listing
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData["logo"] = $request->file('logo')->store('logos', 'public');
        }

        $validatedData['user_id'] = auth()->id();


        Listing::create($validatedData);

        return redirect("/")->with('message', 'Gig Created');
    }

    public function edit(Listing $listing)
    {
        session(['previous_url' => url()->previous()]);
        

        if (Gate::denies('edit', $listing)) {
            return redirect('/')->with('message', 'Unauthorized Action');
        }
        
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    public function update(Request $request, Listing $listing)
    {
        
        if (Gate::denies('edit', $listing)) {
            return redirect('/')->with('message', 'Unauthorized Action');
        }

        $description = htmlspecialchars($request->input('description'), ENT_QUOTES, 'UTF-8');
        $listing->description = $description;

        $validatedData = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData["logo"] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($validatedData);
        $previousUrl = session('previous_url');
        
        return redirect($previousUrl)->with('message', 'Gig Updated');
    }

    public function destroy(Listing $listing)
    {
        if (Gate::denies('edit', $listing)) {
            return redirect('/')->with('message', 'Unauthorized Action');
        }
        $listing->delete();
        
        
        return back()->with('message', 'Gig Deleted');
    }
    
    public function manage()
    {
        $user = auth()->user();
        
        $listings = Listing::where('user_id', $user->id)->get();

        return view('listings.manage', ['listings' => $listings]);
    }
}
