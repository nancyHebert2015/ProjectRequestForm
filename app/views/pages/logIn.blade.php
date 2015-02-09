@extends('layouts.signIn')

@section('signInContent')
    
    <div ng-controller="MainCtrl" class="container containerModal">

<!-- Start of Login Modal -->    
<modal title="Sign In" visible="showModal">
    
   <!-- <form role="form" ng-submit="submit()">-->
      
      <?php echo Form::open(array('url' => '/login', 'class' => 'box login')); ?>
      
    <fieldset class="boxBody">
        
      <div class="form-group">
        <label for="username">Email address</label>
        <input type="email" class="form-control" name="username" ng-Model="email" id="email" required  placeholder="Enter email" />
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" ng-model="password" required id="password" placeholder="Password" />
      </div>
      
    </fieldset>
    
       <div class="form-group">
       <label ><input type="checkbox" name="persist" tabindex="3">Remember me</label>
      <input type="submit" class="btnLogin" value="Login" tabindex="4">
      </div>
      
    <!--</form>-->
    
  </modal>
  
</div>
<!-- End of Login Modal -->  



@stop