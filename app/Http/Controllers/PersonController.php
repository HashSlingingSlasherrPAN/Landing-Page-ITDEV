<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('persons.index');
    }
    public function form(){
        return view('persons.form');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'description' => 'required',
        ]);

        $newPerson = Person::create($data);
        
        return redirect(route('person.index'));
    }

}
