<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();

        return view('admin.companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.companies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $rules = [
                'name' => 'required|string|min:10|max:1000',
                'phone_no' => 'required|string|min:2|max:1000',
                'company_info' => 'required|string|min:2|max:10000000',
            ];
    
            $company = new Company;
            $company->name = $request->name;
            $company->phone_no = $request->phone_no;
            $company->company_info = $request->company_info;
        
            $company->save();
    
            return redirect()
                ->route('admin.companies.index')
                ->with('status', 'Created a new company!');
        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);

        return view('admin.companies.show')->with('company', $company);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation rules
        $rules = [

            'name' => 'required|string|min:10|max:1000',
            'phone_no' => 'required|string|min:2|max:1000',
            'company_info' => 'required|string|min:2|max:10000000',

        ];

        $company = Company::findOrFail($id);

        $company->name = $request->name;
        $company->phone_no = $request->phone_no;
        $company->company_info = $request->company_info;     

        $company->save();

        return redirect()->route('admin.companies.index')->with('status', 'Updated company!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);

        $company->delete();

        return redirect()->route('admin.companies.index')->with('status', 'Selected Company Deleted Successfully');
    }
}
