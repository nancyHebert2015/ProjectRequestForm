<?php

class ProjectsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 
	 
	 curl --user admin:admin localhost/project/api/v1/pages
	 */
	public function index()
	{
		//
		
	//	 
	$projects = Projects::all();
	 
	return Response::json(array(
	       'error' => false,
	       'project' => $projects->toArray()),
	       200
	);
	


	 
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	
	
	 $projects = Projects::where('id', $id)
                ->take(1)
                ->get();
 
	        return Response::json(array(
	            'error' => false,
	            'project' => $projects->toArray()),
	            200
	        );	
			
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	    
	}
	
	public function update($id)
	{
		//
	$projects = Projects::find($id);
 
	        if(Request::get('status'))
	        {
	            $projects->status = Request::get('status');
	        }
	 
	        $projects->save();
	 
	        return Response::json(array(
	            'error' => false,
	            'message' => 'user updated'),
	            200
	        );
	        
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Projects::destroy($id);
    
	   	return Response::json(array('success' => true));
	}

}