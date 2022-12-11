<?php

namespace App\Http\Controllers;

use session;
use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class listingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'heading'=> 'latest listings',
            'listings' => listing::latest()->filter(request(['tag' , 'search']))->paginate(6)
            ]
        );
    }

    public function show(listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]
     );
}


    public function create(){
        return view('listings.create');
        }


    public function store(Request $request){
        //dd($request);
        $formFields = $request->validate([
            'title' => 'required' ,
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required' ,
            'website' => 'required' ,
            'email' => ['required', 'email'],
            'tags' => 'required' ,
            'description' => 'required',
        ]);

            if($request->hasFile('logo')){
                $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            }
            else{
                $formFields['logo']= '/images/no-image.png';
            }
            $formFields['user_id'] = auth()->id();
            listing::create($formFields);
            return redirect('/')->with('message', 'Listing created');
        }


        public function edit(listing $listing){
        return view('listings.edit', [
            'listing' => $listing
        ])
        ;}


        public function update(Request $request, listing $listing){
            //dd($request);
            $formFields = $request->validate([
                'title' => 'required' ,
                'company' => 'required',
                'location' => 'required' ,
                'website' => 'required' ,
                'email' => ['required', 'email'],
                'tags' => 'required' ,
                'description' => 'required'
            ]);
                if($request->hasFile('logo')){
                    $formFields['logo'] = $request->file('logo')->store('logos', 'public');
                }
                else{
                    $formFields['logo']= '/images/no-image.png';
                }
                $listing->update($formFields);
                return back()->with('message', 'Listing updated successfully');
            }




        public function destroy(listing $listing){
            $listing->delete();
            return redirect('/')->with('message', 'listing deleted succsefully');
            }

}



