<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Kernel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::latest()->paginate(5);

        return view('all-customer',compact('customers'))->with('i',(request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add-customer');
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
        $request->validate([
            
            'customername'=>'required',
            'phone'=>'',
            'address'=>'required',
            'status'=>'required',

            'qty1'=>'required|numeric',
            'desc1'=>'required|string',
            'unit1'=>'required|numeric',
            'amount1'=>'nullable|numeric',

            'qty2'=>'nullable|numeric',
            'desc2'=>'nullable|string',
            'unit2'=>'nullable|numeric',
            'amount2'=>'nullable|numeric',
            
            'qty3'=>'nullable|numeric',
            'desc3'=>'nullable|string',
            'unit3'=>'nullable|numeric',
            'amount3'=>'nullable|numeric',

            'qty4'=>'nullable|numeric',
            'desc4'=>'nullable|string',
            'unit4'=>'nullable|numeric',
            'amount4'=>'nullable|numeric',

            'qty5'=>'nullable|numeric',
            'desc5'=>'nullable|string',
            'unit5'=>'nullable|numeric',
            'amount5'=>'nullable|numeric',

            'qty6'=>'nullable|numeric',
            'desc6'=>'nullable|string',
            'unit6'=>'nullable|numeric',
            'amount6'=>'nullable|numeric',
        
        ]);

        $input = $request->all();

        $amount1 = $input['qty1'] * $input['unit1'];
        $amount2 = $input['qty2'] * $input['unit2'];
        $amount3 = $input['qty3'] * $input['unit3'];
        $amount4 = $input['qty4'] * $input['unit4'];
        $amount5 = $input['qty5'] * $input['unit5'];
        $amount6 = $input['qty6'] * $input['unit6'];

        // dd($amount);

       $input['amount1'] = $amount1;
       $input['amount2'] = $amount2;
       $input['amount3'] = $amount3;
       $input['amount4'] = $amount4;
       $input['amount5'] = $amount5;
       $input['amount6'] = $amount6;

        Customer::create($input);

        return redirect()->route('all-customer')->with('success', ' Customer Created Successfully');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
        return view('edit-customer', compact('customer'));
    }


    public function allcompany()
    {
        
        $companies = Customer::latest()->where('status'=='Active');

        return view('view-invoice',compact('companies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        
        $request->validate([

            'customername'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'status'=>'required',

            'qty1'=>'required|numeric',
            'desc1'=>'required|string',
            'unit1'=>'required|numeric',
            'amount1'=>'nullable|numeric',

            'qty2'=>'nullable|numeric',
            'desc2'=>'nullable|string',
            'unit2'=>'nullable|numeric',
            'amount2'=>'nullable|numeric',
            
            'qty3'=>'nullable|numeric',
            'desc3'=>'nullable|string',
            'unit3'=>'nullable|numeric',
            'amount3'=>'nullable|numeric',

            'qty4'=>'nullable|numeric',
            'desc4'=>'nullable|string',
            'unit4'=>'nullable|numeric',
            'amount4'=>'nullable|numeric',

            'qty5'=>'nullable|numeric',
            'desc5'=>'nullable|string',
            'unit5'=>'nullable|numeric',
            'amount5'=>'nullable|numeric',

            'qty6'=>'nullable|numeric',
            'desc6'=>'nullable|string',
            'unit6'=>'nullable|numeric',
            'amount6'=>'nullable|numeric',

        ]);

        $input = $request->all();

        $amount1 = $input['qty1'] * $input['unit1'];
        $amount2 = $input['qty2'] * $input['unit2'];
        $amount3 = $input['qty3'] * $input['unit3'];
        $amount4 = $input['qty4'] * $input['unit4'];
        $amount5 = $input['qty5'] * $input['unit5'];
        $amount6 = $input['qty6'] * $input['unit6'];

        // dd($amount);

       $input['amount1'] = $amount1;
       $input['amount2'] = $amount2;
       $input['amount3'] = $amount3;
       $input['amount4'] = $amount4;
       $input['amount5'] = $amount5;
       $input['amount6'] = $amount6;

        $customer->update($input);

        return redirect()->route('all-customer')->with('update', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        
        $customer->delete();

        return redirect()->route('all-customer')->with('danger', 'Customer Deleted Successfully');
    }
}
