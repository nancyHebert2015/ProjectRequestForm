<!doctype>
<html lang="en"  ng-app="projectRequestsApp"  >
<head>
    
<!-- Start of head information -->  
@include('includes.head')
<!-- End of head information -->  

</head>
<body >
    
<!-- Start of Navigation -->      
@include('includes.header')
<!-- End of Navigation -->    
  
  

<!-- Start of Content --> 
<div class="container" > 
      
      
<!-- main area -->

        
    <div class="hero-unit" >
        
        @yield('content')
        
       
        
    </div>
    
</div>


<!-- End of Content -->  


<!-- Start of Footer -->
<footer id="footer">
        
    @include('includes.footer')
        
</footer>
<!-- End of Footer -->
	

</body>

</html>