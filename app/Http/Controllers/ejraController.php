<?php

namespace App\Http\Controllers;

use session;
use App\Models\Ejra;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ejraController extends Controller
{
    public function index(){
        return view('ejras.index',[
            'heading'=> 'latest listings',
            'ejra' => ejra::latest()->filter(request(['tag' , 'search']))->paginate(6),
            ]
        );
    }

    public function show(ejra $ejra){
        return view('ejras.show',[
            'ejra' => $ejra
        ]
     );
}


    public function create(){
        return view('ejras.create');
        }


    public function store(Request $request){
        //dd($request);
        $formFields = $request->validate([
            'e_name' => 'required' ,
            'docs' => 'required',
            'details' => 'required' ,
            'location' => 'required' ,
            'tags' => 'required',
        ]);

            // if($request->hasFile('logo')){
            //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            // }
            // else{
            //     $formFields['logo']= '/images/no-image.png';
            // }
            ejra::create($formFields);
            return redirect('/')->with('message', 'Listing created');
        }


        public function edit(ejra $ejra){
        return view('ejra.edit', [
            'ejra' => $ejra
        ])
        ;}


        public function update(Request $request, ejra $ejra){
            //dd($request);
            $formFields = $request->validate([
                'name' => 'required' ,
                'docs' => 'required',
                'details' => 'required' ,
                'location' => 'required' ,
                'tags' => 'required',
            ]);
                $ejra->update($formFields);
                return back()->with('message', 'ejra updated successfully');
            }




        public function destroy(ejra $ejra){
            $ejra->delete();
            return redirect('/')->with('message', 'listing deleted succsefully');
            }

}



