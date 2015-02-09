<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    
    User::create(array(
        'name'     => 'Nancy Hebert',
        'username' => 'nhebert',
        'email'    => 'nhebert@uottawa.ca',
        'password' => Hash::make('dftba'),

    ));
    
      User::create(array(
        'name'     => 'Jim Cassidy',
        'username' => 'jcassid2',
        'email'    => 'jcassid2@uottawa.ca',
        'password' => Hash::make('electricMousetrap'),
    ));
    
}

}