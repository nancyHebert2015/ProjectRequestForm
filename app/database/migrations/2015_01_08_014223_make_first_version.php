<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeFirstVersion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
	
		
		Schema::create('meeting', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unique();
			$table->dateTime('datetime')->unique();
			$table->text('location');
			$table->integer('type');
			$table->timestamps();
		});
			
		
		Schema::create('glossary', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->string('term');
			$table->string('definition');
			$table->timestamps();
		});
			
			
		Schema::create('checklist', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->enum('status', array('assigned', 'unassigned', 'started', 'completed'))->default('unassigned');
			$table->timestamps();
		});
		
		
		Schema::create('project', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->enum('status', array('new', 'pending', 'approved', 'rejected'))->default('pending');
			$table->enum('projectType', array('1', '2', '3'))->default('1');
			$table->string('projectDescription');
			$table->text('rationale');
			$table->text('scope');
			$table->date('deadline');
			$table->date('startDate');
			$table->date('endDate');
			$table->date('background');
			$table->text('projectDescriptionLong');
			$table->text('reportingManagement');
			$table->text('notes');
			$table->string('CI');
			$table->string('ReleaseNo');
			$table->timestamps();
		
		});
		
		
		Schema::create('department', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unique();
			$table->integer('project_id')->unsigned()->unique();
			$table->foreign('project_id')->references('id')->on('project');
			$table->string('name');
			$table->timestamps();
		
		});
		
		Schema::create('stakeholder', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('project_id')->unsigned()->unique();
			$table->foreign('project_id')->references('id')->on('project');
			$table->string('name');
			$table->string('title');
			$table->integer('role');
			$table->text('responsibilities');
			$table->integer('order');
			$table->boolean('distributeTo');
			$table->timestamps();
		});
		
		Schema::create('deliverable', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('project_id')->unsigned()->unique();
			$table->foreign('project_id')->references('id')->on('project');
			$table->string('name');
			$table->date('startDate');
			$table->date('endDate');
			$table->text('objective');
			$table->timestamps();
		});
		
		Schema::create('meeting_project', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('meeting_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->foreign('meeting_id')->references('id')->on('meeting');
			$table->foreign('project_id')->references('id')->on('project');
			$table->timestamps();
		
		});
		
		
		Schema::create('project_glossary', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('glossary_id')->unsigned();
			$table->foreign('glossary_id')->references('id')->on('glossary');
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('project');
			$table->timestamps();
		});
		

		Schema::create('project_checklist', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('checklist_id')->unsigned();
			$table->foreign('checklist_id')->references('id')->on('checklist');
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('project');
			$table->timestamps();
		});
		
		
		
		Schema::create('role', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('stakeholder_id')->unsigned()->unique();
			$table->foreign('stakeholder_id')->references('id')->on('stakeholder');
			$table->string('name');
			$table->timestamps();
		});
		
		
		Schema::create('document', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('deliverable_id')->unsigned();
			$table->foreign('deliverable_id')->references('id')->on('deliverable');
			$table->string('path');
			$table->enum('docType', array('.doc', '.html', '.php'))->default('.doc');
			$table->timestamps();
		});
		
		
		Schema::create('raci', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('document_id')->unsigned()->unique();
			$table->foreign('document_id')->references('id')->on('document');
			$table->enum('responsibility', array('1', '2', '3', '4'))->default('1');
			$table->integer('role_id')->unsigned()->unique();
			$table->foreign('role_id')->references('id')->on('role');
			$table->timestamps();
		});
		
		
		Schema::create('revision', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id')->unique();
			$table->integer('document_id')->unsigned()->unique();
			$table->foreign('document_id')->references('id')->on('document');
			$table->date('date');
			$table->string('summary');
			$table->string('author');
			$table->string('reviewerApprover');
			$table->string('version');
			$table->timestamps();
		});
		
		
			
		
		
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	
		Schema::drop('revision');
		Schema::drop('raci');
		Schema::drop('role');
		Schema::drop('stakeholder');
		Schema::drop('project_glossary');
		Schema::drop('project_checklist');
		Schema::drop('meeting_project');
		Schema::drop('meeting');
		Schema::drop('glossary');
		Schema::drop('document');
		Schema::drop('department');
		Schema::drop('deliverable');
		Schema::drop('checklist');
		Schema::drop('project');
	}

}
