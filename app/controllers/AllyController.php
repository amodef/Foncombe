<?php

class AllyController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ally = Ally::find($id);
		$players = $ally->players;
		if ($ally->setPower())
		{
			return View::make('allies.show', compact('ally'), compact('players'));			
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

}