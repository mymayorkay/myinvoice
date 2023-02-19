<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Invoice System </title>
    <!-- Favicon icon -->
    <style>
        .sidebar:hover{
            background-color: yellowgreen;
        }
    </style>
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
{{-- @include('include.sidebar')  --}}
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
                            <h4>View Invoice</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Account</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">View Invoice</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">View Invoice </h4>
									</div>
									<div class="card-body pb-4" id="printArea">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="float-left">
                                                          <?php

                                                                $company = \App\Models\company::where('status','active')->get();
                                                            ?>
                                                                @foreach($company as $ourcompany)
                                                      
                                                            
                                                        <span style="font-size:x-large"><strong> {{ $ourcompany->companyname }}</strong></span>
                                                        <br>
                                                        <span class="w3-medium"><strong>Address: </strong>{{ $ourcompany->address }}</span>
                                                        <br>
                                                        <span class="w3-medium"><strong>Phone: </strong>{{ $ourcompany->phone }}</span>
                                                        <br>
                                                        <span class="w3-medium"><strong>Email: </strong>{{  $ourcompany->email }}</span>
                                                        <br>
                                                        <br>
                                                         @endforeach 

                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="d-block text-center ml-n2 ml-sm-0 float-right ">
                                                        <img src="/companylogo/{{ $ourcompany->companylogo }}" weight="70" height="70" alt="logo" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-4 my-1">
                                                <span class="text-info" style="font-size:  40px;">
                                                    Invoice
                                                </span>
                                            </div>
                                            <div class="my-1">
                                                 <div class="row">
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="float-left text-left ml-1">
                                                            <span style="font-size:large"><strong> {{ $customer->customername }}</strong></span>
                                                            <br>
                                                            <span><strong>Address: </strong>{{ $customer->address }}</span>
                                                            <br>
                                                            <span><strong>Phone: </strong>{{ $customer->phone }}</span>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                     <div class="col-sm-6 col-md-6 col-lg-6">
                                                         <div class="d-block float-right text-right">
                                                            <span class=""><strong>Invoice ID:</strong> {{ "# ".decbin($customer->id) }}</span>
                                                            <br>
                                                            <span><strong>Invoice Date:</strong> {{ date('l - d - m - Y', strtotime($customer->created_at)) }}</span>
                                                        </div>
                                                     </div>
                                                 </div>
                                                <hr class="my-4" >
                                                <div class="row pb-4" style="border-bottom: 1px dotted grey">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table tabled-striped">
                                                                <thead class="" style="background-color:#017398;">
                                                                    <tr>
                                                                        <th>DATE</th>
                                                                        <th style="width:30%">PRODUCT NAME</th>
                                                                        <th>QUATITY</th>
                                                                        <th>UNIT PRICE</th>
                                                                        <th>AMOUNT</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                        <td>{{ $customer->desc1 }}</td>
                                                                        <td>{{ $customer->qty1 }}</td>
                                                                        <td>{{ $customer->unit1 }}</td>
                                                                        <td>{{ $customer->amount1 }}</td>
                                                                    </tr>
                                                                    @if ($customer->amount2 == 0)

                                                                    @else
                                                                        <tr>
                                                                            <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                            <td>{{ $customer->desc2 }}</td>
                                                                            <td>{{ $customer->qty2 }}</td>
                                                                            <td>{{ $customer->unit2 }}</td>
                                                                            <td>{{ $customer->amount2 }}</td>
                                                                        </tr>
                                                                    @endif
                                                                    @if ($customer->amount3 == 0)

                                                                    @else
                                                                    <tr>
                                                                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                        <td>{{ $customer->desc3 }}</td>
                                                                        <td>{{ $customer->qty3 }}</td>
                                                                        <td>{{ $customer->unit3 }}</td>
                                                                        <td>{{ $customer->amount3 }}</td>
                                                                    </tr>
                                                                    @endif
                                                                    @if ($customer->amount4 == 0)

                                                                    @else
                                                                    <tr>
                                                                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                        <td>{{ $customer->desc4 }}</td>
                                                                        <td>{{ $customer->qty4 }}</td>
                                                                        <td>{{ $customer->unit4 }}</td>
                                                                        <td>{{ $customer->amount4 }}</td>
                                                                    </tr>
                                                                    @endif
                                                                    @if ($customer->amount5 == 0)

                                                                    @else
                                                                    <tr>
                                                                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                        <td>{{ $customer->desc5 }}</td>
                                                                        <td>{{ $customer->qty5 }}</td>
                                                                        <td>{{ $customer->unit5 }}</td>
                                                                        <td>{{ $customer->amount5 }}</td>
                                                                    </tr>
                                                                    @endif
                                                                    @if ($customer->amount6 == 0)

                                                                    @else
                                                                    <tr>
                                                                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                                                                        <td>{{ $customer->desc6 }}</td>
                                                                        <td>{{ $customer->qty6 }}</td>
                                                                        <td>{{ $customer->unit6 }}</td>
                                                                        <td>{{ $customer->amount6 }}</td>
                                                                    </tr>
                                                                    @endif
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <?php

                                                        $company = \App\Models\company::where('status','active')->get();
                                                    ?>
                                                @foreach($company as $ourcompany)
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-4 pt-5">
                                                        <h4>Account Detail</h4>
                                                        <div class="border rounded-lg bg-light w3-padding">
                                                            <span class="ml-2 d-block"><strong>Bank Name: </strong></span>
                                                            <span class="ml-5">{{ $ourcompany->bankname }} </span>
                                                            <br>
                                                            <span class="ml-2 d-block"><strong>Account Name: </strong></span>
                                                            <span class="ml-5">{{ $ourcompany->accname}}</span>
                                                            <br>
                                                               <span class="ml-2 d-block"><strong>Account Number: </strong></span>
                                                            <span class="ml-5">{{ $ourcompany->accnumber}}</span>
                                                        </div>
                                                          @endforeach 
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 pt-5">
                                                        <div class="d-block text-center">

                                                            @if ($customer->status == "Paid")
                                                                    <img src="{{ asset("myfile/images/paid.png") }}" weight="100" height="100" alt="">

                                                                @else

                                                                    <img src="{{ asset("myfile/images/unpaid.jpg") }}" weight="100" height="100" alt="">

                                                            @endif
                                                        </div>

                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 pt-5">
                                                        <table class="table w3-striped table-bordered">
                                                            <tr>
                                                                <th>TOTAL</th>
                                                                <td>{{ $customer->amount1 + $customer->amount2 + $customer->amount3 + $customer->amount4 + $customer->amount5 + $customer->amount6 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
									    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="w3-padding float-right">
                                            <button class="btn w3-blue" onclick='printInvoice("printArea")'> <i class="fa fa-print" aria-hidden="true"></i> Print </button>
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
            var printContent = document.getElementById(areaID).innerHTML;
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write("<html><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'><style>th,td{text-align:center;border:1px solid grey;}div > table{display:inline-flexbox}table{display:;width:25%;}</style><body class='border p-5'>");
            WinPrint.document.write(printContent);
            WinPrint.document.write("</body></html>");
            WinPrint.document.close();
            WinPrint.print();
        }
    </script>
    
	
    
</body>
</html>
											


{{-- <div class="card mt-3">
    <div class="card-header">
        <strong>Ship date: {{ $d->created_at  }}</strong>
        <span class="float-right">
                <strong>Destination: {{ $d->rcountry }}</strong>
            </span>
        </div>
        <div class="card-header">
            <span class="float-left"><strong>Delivery date: {{ $d->ddate  }}</strong></span>
            <span class="float-right">Tracking Id: <strong>{{ $d->trackid }}</strong></span>
        </div>
    <div class="card-body">
        <div class="row mb-5">
            <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <h6>Shipper Details</h6>
                <div> <strong>{{ $d->sfullname }}</strong> </div>
                <div>{{ $d->saddress}}</div>
                <div>{{ $d->semail }}</div>
                <div>{{ $d->sphone }}</div>
            </div>
            <div class="mt-4 col-xl-6 text-right col-lg-6 col-md-6 col-sm-12">
                <h6>Receiver Details</h6>

                <div><strong>{{ $d->rfullname }}</strong></div>
                <div>{{ $d->raddress}}</div>
                <div>{{ $d->remail }}</div>
                <div>{{ $d->rphone }}</div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="mt-4 col-12">
                <h6>Shipment Content / Description</h6>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Quantity</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $d->qty1 }}</td>
                                <td>{{  $d->desc1 }}</td>
                            </tr>
                            @if ($d->desc2 != "")
                            <tr>
                                <td>{{ $d->qty2 }}</td>
                                <td>{{  $d->desc2 }}</td>
                            </tr>
                            @endif

                            @if ($d->desc3 != "")
                            <tr>
                                <td>{{ $d->qty3 }}</td>
                                <td>{{  $d->desc3 }}</td>
                            </tr>

                            @endif
                        </tbody>
                    </table>
                    <div class="float-right">
                        <h4 class="mr-5">Total Weight : <strong>{{  $d->tweight }}</strong></h4>
                    </div>

                </div>
            </div>

        </div>



        <div class="table-responsive-sm">
            <table class="table table-striped">
                <thead>
                           <tr>

                        <th>Date/Time</th>
                        <th>Activity</th>
                        <th class="right">Location</th>
                        <th class="center"> Details</th>

                    </tr>
                </thead>
                <tbody>

                       @foreach($d->track as $tr)

                    <tr>

                        <td class="left strong">{{ $tr->created_at}}</td>
                        <td class="left">{{ $tr->activity}}</td>
                        <td class="right">{{ $tr->location}}</td>
                        <td class="center">{{ $tr->detail}}</td>

                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-12 text-right">

                <button onclick="javascript:window.print();" class="btn btn-light" type="button"> <i class="fa fa-print"></i> Print </button>
            </div>
        </div>
    </div>
</div> --}}