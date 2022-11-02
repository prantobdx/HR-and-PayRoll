<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SalaryController extends Controller
{
    public function salaryList()
    {
        $salary=DB::table('employees')
            ->join('departments','employees.department_id','departments.id')
            ->join('designations','employees.designation_id','designations.id')
            ->select('employees.*','departments.dept_name','designations.name')
            ->where('status','1')
            ->get();
        return view('admin.salary.salary-list',[
            'salaries'=>$salary
        ]);
    }
}
