<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

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
            'name' => 'required|min:3|unique:companies',
            'tax_number' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/', 'size:11|unique:companies',
            'phone' => 'required|regex:/^[0-9.+\-()]+$/|unique:companies',
            'email' => 'required|email|unique:companies'
        ],[
            'phone.regex' => 'Only numbers, (), +, dots . and dashes - ',
            'tax_number.regex' => 'Pattern ###-###-###'
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
            'name' => 'required|min:3|unique:companies,name, ' . $company->id ,
            'tax_number' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/', 'size:11|unique:companies,name, ' . $company->id,
            'phone' => 'required|regex:/^[0-9.+\-()]+$/|unique:companies,name, ' . $company->id,
            'email' => 'required|email|unique:companies,name, ' . $company->id
        ],[
            'phone.regex' => 'Only numbers, (), +, dots . and dashes - ',
            'tax_number.regex' => 'Pattern ###-###-###'
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

