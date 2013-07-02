<?php

class PlayerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$players = Player::all(); //paginate(10);
		return View::make('players.index', compact('players'));
	}

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
		return Redirect::back()->withInput()->withErrors($player->errors);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$player = Player::find($id);
		$allyList = Player::setAllyList();
		if (!$player) return Redirect::route('player.index');

		return View::make('players.edit', compact('player'), compact('allyList'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$player = Player::find($id);
		if (!$player) return Redirect::route('player.index');

		if ($player->validate())
		{
			$player->fill(Input::all());
			if ($player->save())
			{
				return Redirect::route('player.index');
			}
		}
		return Redirect::back()->withErrors($player->errors);
	}

}