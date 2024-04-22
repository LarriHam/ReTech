<?php

namespace App\Http\Controllers\Ordinary_user;

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

        return view('ordinary_user.companies.index', [
            'companies' => $companies
        ]);
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);

        return view('ordinary_user.companies.show')->with('company', $company);
    }
    

   
}
