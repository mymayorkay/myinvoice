<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Invoice System </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('myfile/images/favicon.png')}}" >


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ URL::asset('myfile/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
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
	<div class="nav-header pt-1 pb-1 w3-white">
            <a href="{{ URL::route('myindex') }}" class="brand-logo">
                <img class="d-block d-sm-none logo-abbr" src="{{ asset('myfile/images/mayorkay.png') }}" style="width: 50px;" alt="_Invoice System_logo">
                <img class="d-none d-sm-block img-fluid" src="{{ asset('myfile/images/mayorkay.png') }}" alt="_Invoice System_logo">
            </a>

            

            <div class="nav-control" style="background-color:#153B64;">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('include.header')

        <!--**********************************
            Header end ti-comment-alt
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
                <div class="row">
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<span class="card-title w3-xlarge">Total Company</span>
										<span class="w3-xlarge float-right">{{ count($allcompany) }}</span>
										{{-- <div class="progress mb-2">
											<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
										</div> --}}
                                        <br>
										<small>Total Number of Registered Company</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<span class="card-title w3-xlarge">Total Customer</span>
										<span class="w3-xlarge float-right">{{ count($allcustomer) }}</span>
										{{-- <div class="progress mb-2">
											<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
										</div> --}}
                                        <br>
										<small>Total Number of Registered Customer</small>
									</div>
								</div>
							</div>
                            <div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Invoice</h4>
										<h3></h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-info" style="width: 100%"></div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Sales</h4>
										<h3>25160$</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
										</div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>					
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Total Inoice Generated</h3>
							</div>
							<div class="card-body">
								 <div id="morris_bar_2" class="morris_chart_height"></div>
							</div>
						</div>
					</div>
					{{-- <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Teacher List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student Photo</th>
                                                <th scope="col">Teacher FullName</th>
                                                <th>Designation</th>
                                                <th>Qualifiation</th>
                                                <th>Date of Joining</th>
                                              
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="70" src="/employeephoto/" alt="">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                            
                                                </td>
                                            </tr>
                                            


                                        </tbody>
                                    </table
                                    <!-- <div class="text-center pt-3">
                                    </div> -->
                                </div>
                            </div>
                        </div>
					
					<div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Student List</h4>
                            </div>
                            <div class="card-body">
							    <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student Photo</th>
                                                <th scope="col">Student Name</th>
												<th>Class</th>
												<th>Gender</th>
												<th>Admission Date</th>
                                              
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="70" src="/studentimage/" alt="">
                                                <td></td>
                                                <td></td>
												<td></td>
												<td></td>
                                                <td>
											
                                                </td>
                                            </tr>
                                            


                                        </tbody>
                                    </table
                                    <div class="text-center pt-3">
                                    </div>
                                </div>
							</div>
						</div>
					</div> --}}
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

    <!-- jquery vendor -->

    <!-- Required vendors -->
    <script src="{{ URL::asset('myfile/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::asset('myfile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/js/custom.min.js') }}"></script>
		
    <!-- Chart Morris plugin files -->
    <script src="{{ URL::asset('myfile/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/morris/morris.min.js') }}"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="{{ URL::asset('myfile/vendor/peity/jquery.peity.min.js') }}"></script>
	
	
    <!-- Svganimation scripts -->
    <script src="{{ URL::asset('myfile/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/svganimation/svg.animation.js') }}"></script>

    <!-- Demo scripts -->
    <script src="{{ URL::asset('myfile/js/dashboard/dashboard-2.js') }}"></script>
    

	
</body>
</html>