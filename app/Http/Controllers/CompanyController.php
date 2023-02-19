<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Companies = Company::latest()->paginate(5);
        return view('all-company', compact('Companies'))->with('i', (request()->input('page', 1)  -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add-company');
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
            'companyname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'status'=>'required',
            'accname'=>'required',
            'accnumber'=>'required',
            'bankname'=>'required',
            'address'=>'required',
            'desc'=>'required',
            'companylogo'=>'required|image|mimes: jpg,jpeg,png,svg,gif|max: 1024',
    
        ]);

        $input = $request->all();

        if ($companylogo = $request->file('companylogo')) {

            $destinationPath = 'companylogo/';

            $logo = date('YmdHis') . "." . $companylogo->getClientOriginalExtension();

            $companylogo->move($destinationPath, $logo);

            $input['companylogo'] = "$logo";
        }

        Company::create($input);

        return redirect()->route('all-company')->with('success', 'Successfully Created A Company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        return view('about-company',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        return view('edit-company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        
        $request->validate([
            'companyname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'status'=>'required',
            'accname'=>'required',
            'accnumber'=>'required',
            'bankname'=>'required',
            'address'=>'required',
            'desc'=>'required',
            'companylogo'=>'image|mimes: jpg,jpeg,png,svg,gif|max: 1024',
    
        ]);

        $input = $request->all();

        if ($companylogo = $request->file('companylogo')) {

            $destinationPath = 'companylogo/';

            $logo = date('YmdHis') . "." . $companylogo->getClientOriginalExtension();

            $companylogo->move($destinationPath, $logo);

            $input['companylogo'] = "$logo";
        }else{

            unset($input['companylogo']);

        }

        $company->update($input);

        return redirect()->route('all-company')->with('update', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        
        $company->delete();

        return redirect()->route('all-company')->with('danger', 'Deleted Successfully');
    }
}
