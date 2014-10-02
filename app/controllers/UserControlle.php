<?php

class UserControlle extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */public function index()
	{
		$users = User::all();
		return View::make('users.index',['users'=> $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$playload = Input::all();
		 $validation = Validator::make($playload,User::$rules);

		 if($validation->fails())
		 {
            return Redirect::to('register')
            ->withErrors($validation)->withInput(Input::except('password'));
		 }  
		 else
		 {
		 	$user = new User;
		 	$user->username = Input::get('username');
		 	$user->password = Hash::make(Input::get('password'));
		 	$user->save();

		    return Redirect::to('login');
		 }
	}

	public function login()
	{
		return View::make('users.login');
		
	}
	public function signin()
	{
		// Capture form input
     	$username = Input::get('username');
     	$password = Input::get('password');

     	$rules = 
     	[
     		'username' => 'required|exists:users,username',
     		'password' => 'required'
     	];

     	$validation = Validator::make(Input::only(['username','password']), $rules);

     	if($validation->passes())
     	{
			if (Auth::attempt(array('username' => $email, 'password' => $password)))
			{
				return Redirect::to('users/create');
			}

			return Redirect::back()->with('message', 'Check email and password');
     	}

     	return Redirect::back()->withErrors($validation)->withInput();
	}

    public function register()
    {
    	return View::make('users.register');
    	return Redirect::route('users.login');
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
