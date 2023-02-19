{{-- <!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Invoice System </title>
    <!-- Favicon icon -->
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('myfile/images/favicon.png')}}" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ URL::asset('myfile/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
	<!-- Datatable -->
    <link href="{{ URL::asset('myfile/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('myfile/css/color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('myfile/css/style.css') }}" >

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
		@include('include.header')


<!--**********************************
    Sidebar start
***********************************-->
@include('include.sidebar') 
<!--**********************************
    Sidebar end
***********************************--> 

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <button class="btn w3-blue" onclick="window.history.back()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>
                            <span class="w3-large ml-2 font-weight-bold text-primary">View Company</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('myindex') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Company</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">View Company</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="tab-content">
							<div class="row">
                               <div class="col-xl-3 col-xxl-4 col-lg-4">
                                   <div class="row">
                                       <div class="col-lg-12">
                                           <div class="text-center p-3 overlay-box" style="background-image: {{ url('images/big/img1.jpg') }}">
                                               <div class="profile-photo">
                                                   <img src="/companylogo/{{ $company->companylogo }}" width="150" height="150" class="rounded-circle" alt="">
                                               </div>
                                               <h3 class="mt-3 mb-1 text-white">{{ $company->companyname }}</h3>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-xl-9 col-xxl-8 col-lg-8">
                                   <div class="card">
                                       <div class="card-body">
                                           <div class="profile-tab">
                                               <div class="custom-tab-1">
                                                   <ul class="nav nav-tabs">

                                                       <li class="nav-item"><h4 class="text-primary">About Company</h4></li>
                                                   </ul>

                                                   <div class="tab-content">
                                                       <div id="about-me" class="tab-pane fade active show">
                                                           <div class="profile-personal-info pt-4">
                                                               <h4 class="text-primary mb-4">Personal Information</h4>
                                                                    
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                                       </h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->email }}</span>
                                                                   </div>
                                                               </div>
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Phone Number <span class="pull-right">:</span>
                                                                       </h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->phone}}</span>
                                                                   </div>
                                                               </div>
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Address <span class="pull-right">:</span></h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->address }}</span>
                                                                   </div>
                                                               </div>

                                                               <div class="container my-4">
                                                                   <hr>
                                                               </div>

                                                               
                                                               <h4 class="text-primary mb-4">Bank Account Information</h4>
                                                                    
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Account Name <span class="pull-right">:</span>
                                                                       </h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->accname }}</span>
                                                                   </div>
                                                               </div>
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Account Number <span class="pull-right">:</span>
                                                                       </h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->accnumber}}</span>
                                                                   </div>
                                                               </div>
                                                               <div class="row mb-4">
                                                                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                                       <h5 class="f-w-500">Account Bank <span class="pull-right">:</span></h5>
                                                                   </div>
                                                                   <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{ $company->bankname }}</span>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            </div>
						</div>
					</div>
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('include.text-footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ URL::asset('myfile/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::asset('myfile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/js/custom.min.js') }}"></script>
 	
	<!-- Datatable -->
    <script src="{{ URL::asset('myfile/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/js/plugins-init/datatables.init.js') }}"></script>
	
    <!-- Svganimation scripts -->
    <script src="{{ URL::asset('myfile/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/svganimation/svg.animation.js') }}"></script>

	<!-- Demo scripts -->
    <script src="{{ URL::asset('myfile/js/dashboard/dashboard-2.js') }}"></script>

        
    <script>
        function printInvoice(areaID){
            var printContent = document.getElementById(areaID);
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write(printContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
        }
    </script>
    
	
</body>
</html>
											
 --}}
