<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    public function submit(PersonRequest $req){
        $person = new Person();
        $person->name = $req->input('name');
        $person->email = $req->input('email');
        $person->comment = $req->input('comment');

        $person->save();

        return redirect()->route('personal-information')->with('success', 'Data was added to db.');
    }

    public function allData(){
        $person = new Person();
        return view('personalInformation', ['data' => $person->inRandomOrder()->get()]);
    }
}
