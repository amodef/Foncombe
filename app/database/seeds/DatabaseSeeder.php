<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PositionTableSeeder');
	}

}

class PositionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('positions')->delete();

        Position::create(array(
        	'name' => 'eva_rose',
        	'ally' => '_COSA_NOSTRA_',
					'xaxis' => 785,
					'yaxis' => 434,
					'power' => 4600000,
				));
    }

}