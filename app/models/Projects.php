<?php

class Projects extends Eloquent  {
    protected $table = 'project';
	// $fillable = [array('status', 'projectType', 'projectDescription', 'rationale','scope', 'deadline', 'startDate', 'endDate', 'background', 'projectDescriptionLong', 'reportingManagement', 'notes', 'CI', 'ReleaseNo' );];
    protected $guarded = array('id');
}