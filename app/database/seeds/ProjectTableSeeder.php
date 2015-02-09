<?php

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        
        $projects = [
            ['status' => 'new', 'projectType' => '1', 'projectDescription' => 'blah blah blah', 'projectType' => 'web app', 'rationale' => 'this is the rationale', 'scope' => 'this is the scope', 'projectDescriptionLong' => 'this is the long description', 'reportingManagement' => 'Jim Cassidy', 'CI' => 'this is the CI', 'ReleaseNo' => '1234'],
            ['status' => 'pending', 'projectType' => '2', 'projectDescription' => 'blah blah blah', 'projectType' => 'web app', 'rationale' => 'this is the rationale', 'scope' => 'this is the scope', 'projectDescriptionLong' => 'this is the long description', 'reportingManagement' => 'JR', 'CI' => 'this is the CI', 'ReleaseNo' => '1234'],
            
        ];
 
        DB::table('project')->insert($projects);
    }
        
}