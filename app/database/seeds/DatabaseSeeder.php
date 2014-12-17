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

		// $this->call('UserTableSeeder');
		
		$this->call('AddProjectsToProjectRequestTable');

        $this->command->info('Projects table seeded!');
		
        
	}

}


class AddProjectsToProjectRequestTable extends Seeder {

    public function run()
    {
        DB::table('projects')->delete();

        projects::create(array(	'name' => 'This is my first test projects'));
    }

}

