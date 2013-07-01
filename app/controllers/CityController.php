<?php

class CityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cities = City::all(); //paginate(10);
		return View::make('cities.index', compact('cities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$playerList = City::setPlayerList();
		return View::make('cities.create', compact('playerList'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$city = new City();

		if ($city->validate())
		{
			$city->fill(Input::all());

			if ($city->save())
			{
				return Redirect::route('city.index');
			}
		}
		return Redirect::back()->withInput()->withErrors($city->errors);;
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
		$city = City::find($id);
		$playerList = City::setPlayerList();
		if (!$city) return Redirect::route('city.index');

		return View::make('cities.edit', compact('city'), compact('playerList'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$city = City::find($id);
		if (!$city) return Redirect::route('city.index');

		if ($city->validate())
		{
			$city->fill(Input::all());
			if ($city->save())
			{
				return Redirect::route('city.index');
			}
		}
		return Redirect::back()->withErrors($city->errors);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$city = City::find($id);
		if ($city->delete())
		{
			return Redirect::route('city.index');
		}
		return Redirect::back()->withErrors($city->errors);
	}

}