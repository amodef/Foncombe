<?php

class AllyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$allies = Ally::all(); //paginate(10);
		return View::make('allies.index', compact('allies'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ally = Ally::find($id);
		if ($ally->setPower())
		{
			return View::make('allies.show', compact('ally'));			
		}
	}

	public function create()
	{
		return View::make('allies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$ally = new Ally();

		if ($ally->validate())
		{
			$ally->fill(Input::all());

			if ($ally->save())
			{
				return Redirect::route('player.create');
			}
		}
		return Redirect::back()->withInput()->withErrors($ally->errors);;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ally = Ally::find($id);
		if (!$ally) return Redirect::route('ally.index');

		return View::make('allies.edit', compact('ally'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ally = Ally::find($id);
		if (!$ally) return Redirect::route('ally.index');

		if ($ally->validate())
		{
			$ally->fill(Input::all());
			if ($ally->save())
			{
				return Redirect::route('ally.index');
			}
		}
		return Redirect::back()->withErrors($ally->errors);
	}

}