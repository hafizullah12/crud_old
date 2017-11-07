<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Crud;

class CrudController extends Controller
{
    public function index()
    {
		 
		  $crud = new crud;
		 $cruds = Crud::all();
		 return view('crud.index',['cruds'=>$cruds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        
         $rules = array(
            'first_name'       => 'required',
            'email'      => 'required|email',
            'blood_group' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('cruds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $crud = new crud;
            $crud->first_name       = Input::get('first_name');
            $crud->last_name        = Input::get('last_name');
            $crud->email            = Input::get('email');
            $crud->blood_group		= Input::get('blood_group');
            $crud->phone_number     = Input::get('phone_number');
            $crud->address          = Input::get('address');
            $crud->email            = Input::get('email');
            
            $crud->save();

            // redirect
            Session::flash('message', 'Successfully created data');
            return Redirect::to('cruds');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         $crud = crud::find($id);

        // show the view and pass the nerd to it
        return View('crud.show',['crud'=>$crud]);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
         $crud = crud::find($id);

        // show the edit form and pass the nerd
        return View('crud.edit',['crud'=>$crud]);
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
         $rules = array(
            'first_name'       => 'required',
            'email'      => 'required|email',
            'blood_group' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('cruds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $crud = new crud;
            $crud = Crud::find($id);
            $crud->first_name       = Input::get('first_name');
            $crud->last_name        = Input::get('last_name');
            $crud->email            = Input::get('email');
            $crud->blood_group		= Input::get('blood_group');
            $crud->phone_number     = Input::get('phone_number');
            $crud->address          = Input::get('address');
            $crud->email            = Input::get('email');
           
            $crud->save();
         

            // redirect
            Session::flash('message', 'Successfully updated data!');
            return Redirect::to('cruds');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
          $crud = Crud::find($id);
        $crud->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the data!');
        return Redirect::to('cruds');
    }
}
