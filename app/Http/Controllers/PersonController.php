<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
  

    public function show(Person $person):PersonResource{
    	return new PersonResource($person);

    }

    public function index():PersonResourceCollection{
    	return new PersonResourceCollection(Person::Paginate());

    }

    public function store(Request $request):PersonResource{

    	$validatedinfo=$request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
   	]);

    	$person=Person::create($validatedinfo);
    	return new PersonResource($person);
    }

    public function update(Request $request, Person $person):PersonResource{

    	/**$validatedinfo=$request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'require',
            'phone' => 'required',
            'city' => 'required',
   	]);**/

    	
    	$person->update($request->all());
    	return new PersonResource($person);

    }
}
