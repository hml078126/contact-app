<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('companies.index');
    }
    
    public function create(){
        return view('companies.create');
    }

    public function show($id){
        $company = Company::find($id);
        return view('companies.show', compact('company')); // ['company'=> $company]
    }
}
