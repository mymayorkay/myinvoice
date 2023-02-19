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
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">
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
                            <h4>Customer Edit</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Customer</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Customer</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Customer Edit </h4>
									</div>
									<div class="card-body">
                                        <form action="{{ route('edit-customer', ['customer'=>$customer->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Customer Name</label>
                                                        <input type="text" name="customername" value="{{ $customer->customername }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="">Phone</label>
                                                        <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                      <label for="address">Address</label>
                                                      <textarea class="form-control" name="address" id="address" rows="3">{{ $customer->address }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                          <label for="status">Status</label>
                                                          <select class="form-control form-control-lg" name="status" id="status">
                                                            <option value="{{ $customer->status }}" selected> {{ $customer->status }}</option>
                                                            <option value="Paid">Paid</option>
                                                            <option value="Unpaid">Unpaid</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="" class="d-block animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product one Start--}}
                                                <h4 class="ml-5 mt-3">Product 1</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty1" value="{{ $customer->qty1 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc1" id="desc" rows="3">{{ $customer->desc1 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit1" value="{{ $customer->unit1 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button1" class="btn d-none w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel1" class="d-none btn w3-ripple w3-red btn-sm">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount1">
                                                    {{-- Product one end--}}
                                                </div>
                                            </div>


                                            <div id="producttwo" class="@if ($customer->amount2 == 0) d-none @else d-block @endif animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product two Start--}}
                                                <h4 class="ml-5 mt-3">Product 2</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty2" value="{{ $customer->qty2 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc2" id="desc" rows="3">{{ $customer->desc2 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit2" value="{{ $customer->unit2 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button2" class="@if ($customer->amount2 == 0) d-block @else d-none @endif btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel2" class="d-none btn w3-ripple w3-red btn-sm">Cancel</button>

                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount2">
                                                    {{-- Product two end--}}
                                                </div>
                                            </div>


                                            <div id="productthree" class="@if ($customer->amount3 == 0) d-none @else d-block @endif  animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product three Start--}}
                                                <h4 class="ml-5 mt-3">Product 3</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty3" value="{{ $customer->qty3 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc3" id="desc" rows="3">{{ $customer->desc3 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit3" value="{{ $customer->unit3 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                           
                                                            <button type="button" id="button3" class="@if ($customer->amount3 == 0) d-block @else d-none @endif btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel3" class="d-none btn w3-ripple w3-red btn-sm">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount3">
                                                    {{-- Product three end--}}
                                                </div>
                                            </div>


                                            <div id="productfour" class="@if ($customer->amount4 == 0) d-none @else d-block @endif  animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product four Start--}}
                                                <h4 class="ml-5 mt-3">Product 4</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty4" value="{{ $customer->qty4 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc4" id="desc" rows="3">{{ $customer->desc4 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit4" value="{{ $customer->unit4 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button4" class="@if ($customer->amount4 == 0) d-block @else d-none @endif btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel4" class="d-none btn w3-ripple w3-red btn-sm">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount4">
                                                    {{-- Product four end--}}
                                                </div>
                                            </div>


                                            <div id="productfive" class="@if ($customer->amount5 == 0) d-none @else d-block @endif  animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product five Start--}}
                                                <h4 class="ml-5 mt-3">Product 5</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty5" value="{{ $customer->qty5 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc5" id="desc" rows="3">{{ $customer->desc5 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit5" value="{{ $customer->unit5 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button5" class="@if ($customer->amount5 == 0) d-block @else d-none @endif btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel5" class="d-none btn w3-ripple w3-red btn-sm">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount5">
                                                    {{-- Product five end--}}
                                                </div>
                                            </div>


                                            <div id="productsix" class="@if ($customer->amount6 == 0) d-none @else d-block @endif  animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product six Start--}}
                                                <h4 class="ml-5 mt-3">Product 6</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quality</label>
                                                            <input type="text" name="qty6" value="{{ $customer->qty6 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <textarea class="form-control" name="desc6" id="desc" rows="3">{{ $customer->desc6 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit6" value="{{ $customer->unit6 }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="cancel6" class="@if ($customer->amount6 == 0) d-block @else d-none @endif btn w3-ripple w3-red btn-sm">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount6">
                                                    {{-- Product six end--}}
                                                </div>
                                            </div>

                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success float-right">Update</button>
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
    <script src="{{ URL::asset('myfile/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::asset('myfile/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/js/custom.min.js') }}"></script>
 
    <!-- Chart piety plugin files -->
    <script src="{{ URL::asset('myfile/vendor/peity/jquery.peity.min.js') }}"></script>
	
	<!-- Datatable -->
    <script src="{{ URL::asset('myfile/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/js/plugins-init/datatables.init.js') }}"></script>
	
    <!-- Svganimation scripts -->
    <script src="{{ URL::asset('myfile/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/svganimation/svg.animation.js') }}"></script>

    
    <!-- pickdate -->
    <script src="{{ URL::asset('myfile/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ URL::asset('myfile/vendor/pickadate/picker.date.js') }}"></script>
	
	<!-- Pickdate -->
    <script src="{{ URL::asset('myfile/js/plugins-init/pickadate-init.js') }}"></script>

	<!-- Demo scripts -->
    <script src="{{ URL::asset('myfile/js/dashboard/dashboard-2.js') }}"></script>

    

    
	
</body>
</html>
											