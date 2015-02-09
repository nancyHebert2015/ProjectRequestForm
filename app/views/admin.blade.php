@extends('layouts.signIn')

@section('signInContent')
    
    
<!-- Start of Content -->  
<!--<div class="wrapper">-->
<!--<div class="container" id="view" >-->
 <div class="form" > 
    
<!--    <div ng-controller="MainCtrl" class="container containerModal">

 Start of Login Modal    
<modal title="Sign In" visible="showModal"> -->
    
 <!--if there are login errors -->
 
 <% Form::open(array('url' => 'admin')) %>



 <h3 role="heading" aria-level="3">Project Request Login</h3>
 

 <p>
   <% $errors->first('email') %>
   <% $errors->first('password') %>
 </p>
 

 
    <fieldset>
        
     <dl>
       <dt><% Form::label('email', 'Email Address') %></dt>
       <dd><% Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) %></dd>
      </dl>
    
      
     </fieldset>
      
     <fieldset>
         
      <dl>
	
         <dt><% Form::label('password', 'Password') %></dt>
         <dd><% Form::password('password') %></dd>
     
     	</dl>
    </fieldset>
    
       <div class="form-group">
       
       <% Form::submit('Submit') %>
      </div>
      
 <% Form::close() %>
 </div><!-- end of form section -->
<!-- </div><!-- end of wrapper section -->
<!--</div><!-- end of container section -->
 
@stop