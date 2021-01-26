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

    public function insertCompany(Request $request)
    {
        $file = $request->file('clogo');
        $cplogo = "company_logo".rand(0000,9999).".".$file->getClientOriginalExtension();

        $cpname = request('cname');
        $cpdetails = request('cdetails');

        $file->move(public_path('/uploads'), $cplogo);

        DB::insert(
                    "insert into companies(cpname, cplogo, cpdetails) 
                    values(?,?,?)", 
                    [$cpname, $cplogo, $cpdetails]
                );

        return redirect('/company');
    }
}
