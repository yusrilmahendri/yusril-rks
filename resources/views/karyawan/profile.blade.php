@extends('layouts.master')

@section('content')

  <div class="main">

    <!-- MAIN CONTENT -->
     <div class="main-content">
       <div class="container-fluid">
           <div class="panel panel-profile">
               <div class="clearfix">
							
	<!-- LEFT COLUMN -->
       <div class="profile-left">
								
	 <!-- PROFILE HEADER -->
	  <div class="profile-header">
	    <div class="overlay"></div>
	        <div class="profile-main">
	           <img src="{{asset('images/default.jpg')}}" class="img-circle" alt="Avatar">
	              <h3 class="name">yusril mahendri</h3>
	                <span class="online-status status-available">Available</span>
	        </div>
	
	<div class="profile-stat">
	   <div class="row">
	     <div class="col-md-4 stat-item"><span></span>
	</div>
	
      <div class="col-md-4 stat-item"><span></span>
    </div>
	
       <div class="col-md-4 stat-item"><span></span>
       
           	</div>
	    </div>
    </div>
</div>
		

<!-- END PROFILE HEADER -->
<!-- PROFILE DETAIL -->
<div class="profile-detail">
  <div class="profile-info">
    </div>
  </div>
  <!-- END PROFILE DETAIL -->
</div>


<!-- END LEFT COLUMN -->
<!-- RIGHT COLUMN -->
   <div class="profile-right">

<!-- TABBED CONTENT -->
<div class="custom-tabs-line tabs-line-bottom left-aligned">
   <ul class="nav" role="tablist">
     <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">DATA DIRI</a></li>
      </ul>
</div>

<div class="tab-content">
      <div class="tab-pane fade in active" id="tab-bottom-left1" >
        <ul class="list-unstyled activity-timeline">
           <li>
             <i class="fas fa-key activity-icon"></i>
                <p><span>12345</span></p>
           </li>
         
          <li>
            <i class="fas fa-envelope activity-icon"></i>
               <p><span>yusrilmahendri83@gmail.com</span></p>
          </li>

         <li>
            <i class="fas fa-phone activity-icon"></i>
               <p><span>089120131</span></p>
         </li>
 
         <li>
           <i class="fas fa-venus-mars activity-icon"></i>
               <p><span>laki laki</span></p>
         </li>
     </ul>

<div class="margin-top-30 text-center"><a href="/karyawan/edit" class="btn btn-warning">Edit Profile</a></div>
    </div>
    
     	<!-- END TABBED CONTENT -->
	            </div>
     	<!-- END RIGHT COLUMN -->
        	 </div>
	     </div>
	   </div>
    </div>
	<!-- END MAIN CONTENT -->
  </div>
@stop