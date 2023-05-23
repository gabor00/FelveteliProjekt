<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', ['companies' => Company::paginate(20)]);
    } 

    public function create()
    {
        $company = new Company();
        $title = 'Add Company';
        $action = route('companies.store');
        $method = '';
        return view('companies.form', compact('company', 'title', 'action', 'method'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tax_number' => 'required',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company added successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        $title = 'Edit Company';
        $action = route('companies.update', $company->id);
        $method = 'PUT';
        return view('companies.form', compact('company', 'title', 'action', 'method'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'tax_number' => 'required',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.show', $company->id)->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}

