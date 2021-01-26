<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignationController extends Controller
{
    public function index()
    {
        $designation = DB::table('designations')->get();
        return view('designation.index', compact('designation'));
    }

    public function newdesignation()
    {
        return view('designation.adddesignation');
    }

    public function adddesignation()
    {
        $dsg_name = request('dsg_name');

        DB::insert("insert into designations 
                    (dsg_name) values(?)",
                    [$dsg_name]
                );

        return redirect('/designation');
    }
}
