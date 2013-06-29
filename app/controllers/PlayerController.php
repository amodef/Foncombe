<?php

class PlayerController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$player = Player::find($id);
		return View::make('players.show', compact('player'));
	}

	public function create()
	{
		$allyList = Player::setAllyList();
		return View::make('players.create', compact('allyList'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$player = new Player();

		if ($player->validate())
		{
			$player->fill(Input::all());

			if ($player->save())
			{
				return Redirect::route('city.create');
			}
		}
		return Redirect::back()->withInput()->withErrors($player->errors);;
	}

}