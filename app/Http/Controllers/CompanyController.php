<?php

namespace App\Http\Controllers;

use App\Company;
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
        $companies = Company::all(); // SELECT pasirenka visus irasus is lenteles Authors
        return view("company.index", ["companies"=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("company.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;

        //DB stulpelio pavadinimas(name) = input laukelio vardas(author_name)
        $company->name = $request->company_name;
        $company->type = $request->company_type;
        $company->description = $request->company_description;

        $company->save(); // insert komada i duomenu baze

        return redirect()->route("company.index"); // redirect tas pats kas header:location
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view("company.show", ["company"=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view("company.edit", ["company"=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //DB stulpelio pavadinimas(name) = input laukelio vardas(author_name)
        $company->name = $request->company_name;
        $company->type = $request->company_type;
        $company->description = $request->company_description;

        $company->save(); // atlieka update komanda

        return redirect()->route("company.index"); // redirect tas pats kas header:location
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route("company.index");
    }
}
