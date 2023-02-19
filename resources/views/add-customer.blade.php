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
                            <h4>Customer Add</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('myindex') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Customer</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Customer</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="row tab-content">
                            @if ($errors->any())
                                <div class="alert alert-danger ml-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Customer Add </h4>
									</div>
									<div class="card-body">
                                        <form action="{{ route('add-customer') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Customer Name</label>
                                                        <input type="text" name="customername" class="form-control">
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
                                                      <label for="address">Address</label>
                                                      <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                          <label for="status">Status</label>
                                                          <select class="form-control form-control-lg" name="status" id="status">
                                                            <option selected disabled>Select Status</option>
                                                            <option value="Paid">Paid</option>
                                                            <option value="Unpaid">Unpaid</option>
                                                          </select>
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
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty1" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc1" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit1" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button1" class="btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel1" class="d-none btn w3-ripple w3-red btn-sm">Delete Product</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount1">
                                                    {{-- Product one end--}}
                                                </div>
                                            </div>


                                            <div id="producttwo" class="d-none animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product two Start--}}
                                                <h4 class="ml-5 mt-3">Product 2</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty2" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc2" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit2" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button2" class="btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel2" class="d-none btn w3-ripple w3-red btn-sm">Delete Product</button>

                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount2">
                                                    {{-- Product two end--}}
                                                </div>
                                            </div>


                                            <div id="productthree" class="d-none animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product three Start--}}
                                                <h4 class="ml-5 mt-3">Product 3</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty3" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc3" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit3" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                           
                                                            <button type="button" id="button3" class="btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel3" class="d-none btn w3-ripple w3-red btn-sm">Delete Product</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount3">
                                                    {{-- Product three end--}}
                                                </div>
                                            </div>


                                            <div id="productfour" class="d-none animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product four Start--}}
                                                <h4 class="ml-5 mt-3">Product 4</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty4" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc4" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit4" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button4" class="btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel4" class="d-none btn w3-ripple w3-red btn-sm">Delete Product</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount4">
                                                    {{-- Product four end--}}
                                                </div>
                                            </div>


                                            <div id="productfive" class="d-none animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product five Start--}}
                                                <h4 class="ml-5 mt-3">Product 5</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty5" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc5" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit5" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="button5" class="btn w3-ripple w3-light-blue btn-sm"><i class="fa fa-plus-circle"></i> New Product</button>
                                                            <button type="button" id="cancel5" class="d-none btn w3-ripple w3-red btn-sm">Delete Product</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount5">
                                                    {{-- Product five end--}}
                                                </div>
                                            </div>


                                            <div id="productsix" class="d-none animate__animated">
                                                <div class="container my-2">
                                                    <hr>
                                                </div>
                                                    {{-- Product six Start--}}
                                                <h4 class="ml-5 mt-3">Product 6</h4>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Quantity</label>
                                                            <input type="text" name="qty6" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                        <label for="desc">Product Name</label>
                                                        <input class="form-control" name="desc6" id="desc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                        <label for="">Unit Price</label>
                                                            <input type="text" name="unit6" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="button" id="cancel6" class="btn w3-ripple w3-red btn-sm">Delete Product</button>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="amount6">
                                                    {{-- Product six end--}}
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success float-right"><i class="fa fa-plus-circle"></i> Create Customer</button>
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

    
<script>
    $(document).ready(function () {
        
        // $("#cancel1").hide();
        $("#button1").on("click", function () {
            $("#producttwo").removeClass("d-none animate__fadeOutUp").addClass("d-block animate__fadeInDown");
            $("#button1").removeClass('d-inline').addClass("d-none");
            $("#cancel1").removeClass("d-inline").addClass("d-none");
            $("#cancel2").removeClass("d-none").addClass("d-inline");
        });
        $("#button2").on("click", function () {
            $("#productthree").removeClass("d-none animate__fadeOutUp").addClass("d-block animate__fadeInDown");
            $("#button2").removeClass('d-inline').addClass("d-none");
            $("#cancel2").removeClass("d-inline").addClass("d-none");
            $("#cancel3").removeClass("d-none").addClass("d-inline");
        });
        
        $("#button3").on("click", function () {
            $("#productfour").removeClass("d-none animate__fadeOutUp").addClass("d-block animate__fadeInDown");
            $("#button3").removeClass('d-inline').addClass("d-none");
            $("#cancel3").removeClass("d-inline").addClass("d-none");
            $("#cancel4").removeClass("d-none").addClass("d-inline");
        });
        
        $("#button4").on("click", function () {
            $("#productfive").removeClass("d-none animate__fadeOutUp").addClass("d-block animate__fadeInDown");
            $("#button4").removeClass('d-inline').addClass("d-none");
            $("#cancel4").removeClass("d-inline").addClass("d-none");
            $("#cancel5").removeClass("d-none").addClass("d-inline");
        });
        
        $("#button5").on("click", function () {
            $("#productsix").removeClass("d-none animate__fadeOutUp").addClass("d-block animate__fadeInDown");
            $("#button5").removeClass('d-inline').addClass("d-none");
            $("#cancel5").removeClass("d-inline").addClass("d-none");
            $("#cancel6").removeClass("d-none").addClass("d-inline");
        });


        // Cancel button

        $('#cancel6').on("click", function () {
            $("#productsix").removeClass("d-block animate__fadeInDown").addClass("d-none animate__fadeOutUp");
            $("#button5").removeClass("d-none").addClass("d-inline");
            $("#cancel5").removeClass("d-none").addClass("d-inline");
        });

        $('#cancel5').on("click", function () {
            $("#productfive").removeClass("d-block animate__fadeInDown").addClass("d-none animate__fadeOutUp");
            $("#button4").removeClass("d-none").addClass("d-inline");
            $("#cancel4").removeClass("d-none").addClass("d-inline");
        });

        $('#cancel4').on("click", function () {
            $("#productfour").removeClass("d-block animate__fadeInDown").addClass("d-none animate__fadeOutUp");
            $("#button3").removeClass("d-none").addClass("d-inline");
            $("#cancel3").removeClass("d-none").addClass("d-inline");
        });

        $('#cancel3').on("click", function () {
            $("#productthree").removeClass("d-block animate__fadeInDown").addClass("d-none animate__fadeOutUp");
            $("#button2").removeClass("d-none").addClass("d-inline");
            $("#cancel2").removeClass("d-none").addClass("d-inline");
        });

        $('#cancel2').on("click", function () {
            $("#producttwo").removeClass("d-block animate__fadeInDown").addClass("d-none animate__fadeOutUp");
            $("#button1").removeClass("d-none").addClass("d-inline");
        });
    });
</script>
    
	
</body>
</html>
											