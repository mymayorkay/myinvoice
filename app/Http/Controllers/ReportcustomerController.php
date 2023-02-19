<?php

namespace App\Http\Controllers;

use App\Models\reportcustomer;
use Illuminate\Http\Request;

use App\Models\Customer;

class ReportcustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $data =null;
        
        if($request->has('startdate'))
        {


            $startdate=date('Y-m-d',strtotime($request->startdate));
            $enddate=date('Y-m-d',strtotime($request->enddate));
            

            $data = Customer::whereDate('created_at','>=',$startdate)
                    ->whereDate('created_at','<=',$enddate)
                    ->where('customername','like','%'.$request->name.'%')
                    ->get();


          
        }


        return view("report-customer")->with('data',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reportcustomer  $reportcustomer
     * @return \Illuminate\Http\Response
     */
    public function show(reportcustomer $reportcustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reportcustomer  $reportcustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(reportcustomer $reportcustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reportcustomer  $reportcustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reportcustomer $reportcustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reportcustomer  $reportcustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(reportcustomer $reportcustomer)
    {
        //
    }


     public function customername()
    {
        //
        $reportcustomers = reportcustomer::latest()->paginate(10);
        return view("search-customer", compact('reportcustomers'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }
}
