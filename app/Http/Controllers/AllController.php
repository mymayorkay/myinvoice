<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AllController extends Controller
{
    //

    public function index(){
        $allcompany = Company::all();
        // $allCustomer = Customer::all();
       // $allCustomer = DB::table('customers')->distinct('customername')->get();
       $allcustomer = DB::table('customers')->distinct('customername')->get();
        return view('myindex', compact('allcompany', 'allcustomer'));
    }



    public function allcompany()
    {
        
        $companies = Customer::latest()->where('status'=='Active');

        return view('view-invoice',compact('companies'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        return view('view-invoice',compact('customer'));
    }

    public function searchcustom(Request $request)
    {

        $data=null;


        if($request->has('q'))
        {
            
             $data = Customer::where('customername','like','%'.$request->q.'%')->get();
             
        }




        return view('search-customer')->with('data',$data);

    }

public function customcompany(Request $request)
    {

        return view('custom-company');

    }

public function customcompanystatus(Request $request)
    {

        return view('custom-company-status');

    }
}

