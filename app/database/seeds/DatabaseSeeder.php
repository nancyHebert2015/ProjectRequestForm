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
		
		$this->call('ProjectTableSeeder');
		$this->call('UserTableSeeder');

    $this->command->info('table seeded!');
        
        
	}

}


class CreateProjectTables extends Seeder {

    public function run()
    {
        
    //   DB::table('project')->delete();
       
    //   Project::create(array(	
    //      'status' => 'pending',
    //      'projectType' => 'webapp',
    //      'projectDescription' => 'This is my new web app',
    //      'rationale' => 'This is the rationale content',
    //      'scope' => 'this is the scope for the project'
    //      ));
         
         
      DB::table('project')->insert(
          array('status' => 'pending', 'projectType' => 'webapp', 'projectDescription' => 'This is my new web app', 'scope' => 'this is the scope for the project'));
      
        DB::table('users')->insert(
          array(
            'username' => 'nhebert@uottawa.ca', 
            'password' =>  Hash::make('nancy')),
          array(
            'username' => 'jcassid2@uottawa.ca', 
            'password' => Hash::make('electricMousetrap') )
          
          );
          
          
      
              
          
    }

}

