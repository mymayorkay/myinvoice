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
    {{-- <link rel="stylesheet" href="{{ URL::asset('myfile/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"> --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
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
                            <h4>All Company</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("myindex") }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Company</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row tab-content">
                            
                            @if ($message = Session::get('success'))
                                 
                                    
                                    <div class="alert w3-green">

                                        <p>{{ $message }}</p>

                                    </div>

                                @elseif ($message1 = Session::get('update'))

                                    <div class="alert w3-blue">

                                        <p>{{ $message1 }}</p>

                                                    
                                        </div>

                                @elseif ($message2 = Session::get('danger'))

                                    <div class="alert w3-red">

                                        <p>{{ $message2 }}</p>
                                    
                                    </div>
                                @endif
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">company </h4>
										<div>
											<a href="{{ route('add-company') }}" class="btn w3-mk-navyblue">+ Add new</a>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="" class="table table-hovered" style="width: 100%" border>
												<thead>
													<tr>
														<th>No</th>
														<th>logo</th>
														<th>Company Name</th>
														<th>Phone</th>
														<th>Address</th>
														<th>Company Description</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($Companies as $Company)
                                                        
                                                    <tr>
														<td>{{ ++$i }}</td>
														<td><img src="/companylogo/{{ $Company->companylogo}}" weight="50" height="50" alt="logo" /></td>
														<td>{{ $Company->companyname }}</td>
														<td>{{ $Company->phone}}</td>
														<td>{{ $Company->address}}</td>
														<td>{{ $Company->desc }}</td>

														<td>
                                                            @if ($Company->status == 'Active')
                                                                <span class="btn btn-sm w3-green p-2"><i class="fa fa-check-square-o p-1 w3-card rounded w3-white w3-text-green" aria-hidden="true"></i></span></td>

                                                                @else

                                                                <span class="btn btn-sm w3-red p-2"><i class="fa fa-check-square-o p-1 w3-card rounded w3-white w3-text-red" aria-hidden="true"></i></span></td>

                                                            @endif 
                                                        <td>
                                                            <div class="btn-group">
                                                                
															   <a href="{{ route('about-company', ['company'=>$Company->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye p-1 w3-card rounded w3-white text-primary"></i></a>
															   <a href="{{ route('edit-company', ['company'=>$Company->id]) }}" title="Edit" class="btn btn-sm w3-default"><i class="fa fa-edit p-1 w3-card rounded w3-white w3-text-default"></i></a>
															   <a href="{{ route('delete_company', ['company'=>$Company->id]) }}" class="btn btn-sm btn-danger" onclick="confirmDelete()"><i class="fa fa-trash p-1 w3-card rounded w3-white text-danger"></i></a>
                                                            </div>
														</td>												
													</tr>
                                                    @endforeach

												</tbody>
											</table> 
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

    <script type="text/javascript">
        function confirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
                if (x) {
                    return true;
                }
                else {
    
                    event.preventDefault();
                    return false;
                }
        }
    
    </script>
    
	
</body>
</html>
											

