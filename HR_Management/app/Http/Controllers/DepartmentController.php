<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        //vbranch sql query
        // create view vdepartment
        // as select a.*, b.br_name FROM `departments` as a join branches 
        // as b on b.id= a.br_id

        $department_list = DB::table('vdepartment')->get();
        return view('department.index', compact('department_list'));
    }

    public function newdepartment()
    {
        $branch_list = DB::table('branches')->get();
        return view('department.adddepartment', compact('branch_list'));
    }

    public function adddepartment()
    {
        $dp_name = request('dp_name');
        $br_id = request('dpname_cid');
        $dp_details = request('dp_details');

        DB::insert("insert into departments 
                    (dp_name,br_id,dp_details) values(?,?,?)",
                    [$dp_name,$br_id,$dp_details]
                );

        return redirect('/department');
    }
}
