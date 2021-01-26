<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function index()
    {
        //vbranch sql query
        // create view vbranch
        // as SELECT a.*, b.cpname FROM `branches` as a join companies as b
        // on 
        // a.cp_id = b.id
        $branch_list = DB::table('vbranch')->get();
        return view('branch.index', compact('branch_list'));
    }

    public function newbranch()
    {
        $company_list = DB::table('companies')->get();
        return view('branch.addbranch', compact('company_list'));
    }

    public function addbranch()
    {
        $br_name = request('br_name');
        $cp_id = request('brname_cid');
        $br_details = request('br_details');

        DB::insert("insert into branches 
                    (br_name,cp_id,br_details) values(?,?,?)",
                    [$br_name,$cp_id,$br_details]
                );

        return redirect('/branch');
    }
}
