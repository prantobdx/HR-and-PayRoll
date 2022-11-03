<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment()
    {
        return view('admin.department.add');
    }
    public function saveDepartment(Request $request)
    {
        $department = new Department();
        $department->dept_name = $request->dept_name;
        $department->dept_code = $request->dept_code;
        $department->description = $request->description;
        $department->save();
        return redirect('/manage-department')->with( 'message', 'Department Added Successfully ' );
    }

    public function manageDepartment()
    {
        return view('admin.department.manage',[
            'departments'=>Department::all()
        ]);
    }

    public function deleteDepartment(Request $request)
    {
        $department = Department::find($request->id);
        $department->delete();
        return back()->with('message-delete','Department Deleted Successfully');
    }

    public function editDepartment($id)
    {
        return view('admin.department.edit',[
            'department' => Department::find($id)
        ]);
    }
    public function updateDepartment(Request $request)
    {
        $department = Department::find($request->id);
        $department->dept_name = $request->dept_name;
        $department->dept_code = $request->dept_code;
        $department->description = $request->description;
        $department->save();
        return redirect('/manage-department')->with( 'message', 'Department Updated Successfully ' );
    }


}
