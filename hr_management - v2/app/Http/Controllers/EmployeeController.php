<?php

namespace App\Http\Controllers;

use App\helper\CustomHelper;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        return view('admin.employee.add',[
            'departments'=>Department::orderby('id','desc')->get(),
            'designations'=>Designation::orderby('id','desc')->get(),
        ]);
    }

    public function saveEmployee(Request $request)
    {
        $this->validate($request,[
            'employee_name'=>'required|',
            'employee_code'=>'required|',
            'email'=>'required|',
            'mobile'=>'required|',
            'address'=>'required|',
            'nid'=>'required|',
            'image'=>'required|',
            'blood_group'=>'required|',
            'date_of_birth'=>'required|',
            'joining_state'=>'required|',
            'employee_type'=>'required|',
            'basic_salary'=>'required|',
        ]);

        $employee = new Employee();
        $employee->department_id = $request->department_id;
        $employee->designation_id = $request->designation_id;
        $employee->employee_name = $request->employee_name;
        $employee->employee_code = $request->employee_code;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->address = $request->address;
        $employee->nid = $request->nid;
        $employee->image = CustomHelper::imageUpload( $request->file( 'image' ), 'Employee/images/');
        $employee->blood_group = $request->blood_group;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->joining_state = $request->joining_state;
        $employee->employee_type = $request->employee_type;
        $employee->basic_salary = $request->basic_salary;
        $employee->save();
        return redirect('/manage-employee')->with( 'message', 'Employee Added Successfully ' );
    }

    public function manageEmployee()
    {
        $emplyee=DB::table('employees')
            ->join('departments','employees.department_id','departments.id')
            ->join('designations','employees.designation_id','designations.id')
            ->select('employees.*','departments.dept_name','designations.name')
            ->get();

        return view('admin.employee.manage',[
            'employees'=>$emplyee,
        ]);
    }

    public function deleteEmployee(Request $request)
    {
        $employee = Employee::find($request->id);
        if (file_exists($employee->image))
        {
            unlink($employee->image);
        }
        $employee->delete();
        return back()->with('message-delete','Employee Deleted Successfully');
    }

    public function editEmployee($id)
    {
        return view('admin.employee.edit',[
            'employee' => Employee::find($id),
            'departments'=>Department::orderby('id','desc')->get(),
            'designations'=>Designation::orderby('id','desc')->get(),
        ]);
    }

    public function updateEmployee(Request $request)
    {
        $employee = Employee::find($request->id);

        $employee->department_id = $request->department_id;
        $employee->designation_id = $request->designation_id;
        $employee->employee_name = $request->employee_name;
        $employee->employee_code = $request->employee_code;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->address = $request->address;
        $employee->nid = $request->nid;
        $employee->image = CustomHelper::imageUpload( $request->file( 'image' ), 'Employee/images/',$employee->image);
        $employee->blood_group = $request->blood_group;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->joining_state = $request->joining_state;
        $employee->employee_type = $request->employee_type;
        $employee->basic_salary = $request->basic_salary;
        $employee->save();

        return redirect('/manage-employee')->with( 'message', 'Employee Info Updated Successfully ' );
    }
    public function employeeStatus($id)
    {
        $employee = Employee::find($id);
        if ($employee->status == 1)
        {
            $employee->status = 0;
        }
        else
        {
            $employee->status = 1;
        }
        $employee->save();
        return back();
    }
}
