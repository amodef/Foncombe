<?php

class PositionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('positions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pos = new Position();

		$pos->fill(Input::all());

		if ($pos->save())
		{
			return Redirect::route('home');
		}
		return Redirect::back()->withInput();

		/*if ($user->validate())
		{
			$user->fill(Input::except('password', 'password_confirmation'));
			$user->password  	= Hash::make(Input::get('password'));

			if ($user->save())
			{
				return Redirect::route('users.index');
			}
		}
		return Redirect::back()->withInput(Input::except('password', 'password_confirmation'))->withErrors($user->errors);
	*/
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