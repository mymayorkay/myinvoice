<!DOCTYPE html>
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

     
	<!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('myfile/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('myfile/vendor/pickadate/themes/default.date.css') }}">

    <style>
        td, th {
            text-align: center;
        }
    </style>

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
                            <h4>Company Add</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('myindex') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Account</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Company</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Company Add </h4>
									</div>
									<div class="card-body">
                                        <form action="{{ route('add-company') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Company Name</label>
                                                        <input type="text" name="companyname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="">Email</label>
                                                        <input type="email" name="email" class="form-control"">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="">Phone</label>
                                                        <input type="text" name="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="">Status</label>
                                                      <select name="status" id="" class="form-control">
                                                          <option selected disabled aria-disabled>Select Status</option>
                                                          <option value="Active">Active</option>
                                                          <option value="Inactive">Inactive</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="desc">Company Description</label>
                                                      <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="address">Company Address</label>
                                                      <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                      <label for="">Account Name</label>
                                                        <input type="text" name="accname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                      <label for="">Account Number</label>
                                                      <input 
                                                        type="text"
                                                        class="form-control" 
                                                        name="accnumber" 
                                                        placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                      <label for="">Bank Name</label>
                                                      <input type="text"
                                                        class="form-control" 
                                                        name="bankname" 
                                                        id="" 
                                                        placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="companylogo">Company Logo</label>
                                                        <input type="file" name="companylogo"  class="form-control" accept="image/png,image/jpg,image/jpeg">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus-circle"></i> Create Company</button>
                                                    </div>
                                                </div>
                                            </div>                                           
                                        </form>
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
    <script src="{{ url::asset('myfile/vendor/global/global.min.js') }}"></script>
	<script src="{{ url::asset('myfile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url::asset('myfile/js/custom.min.js') }}"></script>
 
    <!-- Chart piety plugin files -->
    <script src="{{ url::asset('myfile/vendor/peity/jquery.peity.min.js') }}"></script>
	
	<!-- Datatable -->
    <script src="{{ url::asset('myfile/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url::asset('myfile/js/plugins-init/datatables.init.js') }}"></script>
	
    <!-- Svganimation scripts -->
    <script src="{{ url::asset('myfile/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ url::asset('myfile/vendor/svganimation/svg.animation.js') }}"></script>

    <!-- pickdate -->
    <script src="{{ url::asset('myfile/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ url::asset('myfile/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ url::asset('myfile/vendor/pickadate/picker.date.js') }}"></script>
	
	<!-- Pickdate -->
    <script src="{{ url::asset('myfile/js/plugins-init/pickadate-init.js') }}"></script>

	<!-- Demo scripts -->
    <script src="{{ url::asset('myfile/js/dashboard/dashboard-2.js') }}"></script>

    

    
	
</body>
</html>
											