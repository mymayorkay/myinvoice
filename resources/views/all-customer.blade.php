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

    <style>
        table,td,th{
            text-align: center;
            border: 1px solid grey;
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
                            <h4>All Customer</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route("myindex") }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Customer</a></li>
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
										<h4 class="card-title">customer </h4>
										<div>
											<a href="{{ route('add-customer') }}" class="btn w3-mk-navyblue">+ Add new</a>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="" class="table table-hovered" style="width: 100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Customer Fullname</th>
														<th>Phone</th>
														<th>Address</th>
														<th>Total Amount</th>
                                                        <th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($customers as $Customer)
                                                        
                                                    <tr>
														<td>{{ ++$i }}</td>
														<td>{{ $Customer->customername }}</td>
														<td>{{ $Customer->phone }}</td>
														<td>{{ $Customer->address }}</td>
														<td>{{ $Customer->amount1 + $Customer->amount2 + $Customer->amount3 + $Customer->amount4 + $Customer->amount5 + $Customer->amount6 }}</td>    
                                                        <td>{{ $Customer->status }}</td>                                                        
                                                        <td>
															<a href="{{ route('view-invoice', ['customer'=>$Customer->id]) }}" class="btn btn-sm w3-default">Generate Invoice</a>
															<a href="{{ route('edit-customer', ['customer'=>$Customer->id]) }}" title="Edit" class="btn btn-sm btn-primary"><i class="fa fa-edit p-1 m-2 w3-card rounded w3-white w3-text-default"></i></a>
															<a href="{{ route('delete_customer', ['customer'=>$Customer->id]) }}" class="btn btn-sm btn-danger" onclick="confirmDelete()"><i class="fa fa-trash p-1 w3-card rounded w3-white m-2 text-danger"></i></a>
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
											

