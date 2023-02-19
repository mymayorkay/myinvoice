
<div class="dlabnav" style="background-color: #333 ;">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li class="sidebar">
                <a class="ai-icon" href="{{ route('myindex') }}" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text ">Dashboard</span>
						</a>
            </li>

{{-- @role('admin') --}}

            <li class="sidebar"><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-university"></i>
							<span class="nav-text">Company</span>
						</a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-company') }}">All Company</a></li>
                    <li><a href="{{ route('add-company') }}">Add Company</a></li>

                </ul>
            </li>

            <li class="sidebar"> <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-industry"></i>
							<span class="nav-text">Customer</span>
						</a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-customer') }}">Customer</a></li>
                    <li><a href="{{ route('add-customer') }}">Add Customer</a></li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
					<i class="la la-sticky-note"></i>
					<span class="nav-text">Reports</span>
				</a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void()">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span class="nav-text">Customer</span>
                        </a>
                        <ul>
                             <li>
                            <a href="{{ route('search-customer') }}">Filter Customer By Name</a>
                            </li>
                            <li>
                                <a href="{{ route('report-customer') }}">Filter Customer By Date</a>
                            </li>
                              <li>
                            <a href="{{ route('custom-company') }}">Filter Customer/Company</a>

                            </li>

                                <li>
                            <a href="{{ route('custom-company-status') }}">Filter Customer/Company/Status</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="ai-icon" href="{{ url('/logout') }}" aria-expanded="false">
                    <i class="la la-sign-out"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
                 {{-- @endrole    --}}
        </ul>
    </div>
</div>


