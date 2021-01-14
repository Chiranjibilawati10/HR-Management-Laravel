<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
    	$company_list = DB::select("select * from companies");
    	return view('company.index', compact('company_list'));
    }
}
