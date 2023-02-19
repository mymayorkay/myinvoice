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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('myfile/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
	<!-- Datatable -->
    <link href="{{ URL::asset('myfile/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('myfile/css/color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('myfile/css/style.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('myfile/css/tooltip.css') }}" >

     
	<!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('myfile/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('myfile/vendor/pickadate/themes/default.date.css') }}">

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
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Report</a></li>
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
                                    <div class="card-body">
                                        <div class="m-3">
                                             <form action="{{ route('report-customer') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                      <label for="name">Company Name</label>
                                                             <select class="form-control form-control-lg" name="name" id="name">
                                                            
                                                               {{

                                                                $ccompanies = \App\Models\Company::all();

                                                                 }}

                                                                @foreach($ccompanies as $ccompany)



                                                                        <option value="{{ $ccompany->companyname }}"> {{ $ccompany->companyname}} </option>

                                                                @endforeach 
                                                             </select>
                                                                    </div>
                                                                </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                  
                                                           <div class="form-group">
                                                             <label for="name">Customer Name</label>
                                                             <select class="form-control form-control-lg" name="name" id="name">
                                                            
                                                               {{

                                                                $cname = \App\Models\Customer::all();

                                                                 }}

                                                                @foreach($cname as $cusname)



                                                                        <option value="{{ $cusname->customername }}"> {{ $cusname->customername}} </option>

                                                                @endforeach 
                                                             </select>
                                                           </div>
                                                       </div>
                                                       <div class="row">
                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                           <div class="form-group">
                                                                <button type="submit" class="btn btn-primary ml-2">Search</button>
                                                            </div>
                                                    
                                                    </div>
                                                </div>                                            
                                            </form>
                                        </div>
                                    </div>
									<div class="card-header">
										<h4 class="card-title">customer </h4>
										<div>

                                            <div class="d-inline float-right">
                                                <span class="w3-tooltip"> <span class="w3-text w3-tag w3-green w3-round tooltip-position">Excel</span> <i class="btn btn-sm w3-light-grey w3-text-green fa fa-file-excel-o" aria-hidden="true"></i></span>
                                                <span class="w3-tooltip"> <span class="w3-text w3-tag w3-blue w3-round tooltip-position">Microsoft</span> <i class="btn btn-sm w3-light-grey w3-text-blue fa fa-file-word-o" aria-hidden="true"></i></span>
                                                <span class="w3-tooltip"> <span class="w3-text w3-tag w3-red w3-round tooltip-position">PDF</span> <i class="btn btn-sm w3-light-grey w3-text-red fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                                <span class="w3-tooltip"> <span class="w3-text w3-tag w3-round tooltip-position">CSV</span> <i class="btn btn-sm w3-light-grey w3-text-black fa fa-file-o" aria-hidden="true"></i></span>
                                                <span class="w3-tooltip"> <span class="w3-text w3-tag w3-default w3-round tooltip-position">Print</span> <i onclick="printTab('printTable');" class="btn btn-sm w3-light-grey w3-text-indigo fa fa-print" aria-hidden="true"></i></span>
                                            </div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive" id="printTable">
											<table id="" class="table table-bordered" style="width: 100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Customer Fullname</th>
														<th>Phone</th>
														<th>Address</th>
														<th>Total Amount</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
                                                 
                                                    <tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>                                                            
                                                        <td>
                                                        
															<a href="javascript:void()" class="btn btn-sm w3-green"></a>
                                                       
															<a href="javascript:void()" class="btn btn-sm w3-red"></a>
                                                           
														</td>												
													</tr>
                                                  

												</tbody>
											</table> 
                                            <table class="table table-striped table-inverse w-100">
                                                <tr> 
                                                    <th width='20%'>Total</th>
                                                    <td><strong class="w3-right"> </strong></td>
                                                </tr>
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
    <script src="{{ url::asset('myfile/vendor/global/global.min.js') }}"></script>
	<script src="{{ url::asset('myfile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url::asset('myfile/js/custom.min.js') }}"></script>
 	
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
    

    <script>
        function printTab(table) {
            var printContent = document.getElementById(table).innerHTML;
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write("<html><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css'><body>");
            WinPrint.document.write("<h1><center> Customer Report </center></h1>");
            WinPrint.document.write("<p><center> OFFICE 11, Mayhem Road, NewYork, USA </center></p>");
            WinPrint.document.write(printContent);
            WinPrint.document.write("</body></html>");
            WinPrint.document.close();
            WinPrint.print();
        }
    </script>
    
	
</body>
</html>
	
											

