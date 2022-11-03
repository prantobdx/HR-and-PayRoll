<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
Use DB;

class AttendanceController extends Controller
{
    public function addAttendance()
    {
        return view('admin.attendance.add',[
            'employees'=>Employee::get()
        ]);
    }

    public function saveAttendance(Request $request)
    {
        $attendance = new Attendance();
        $attendance->employee_id = $request->employee_id;
        $attendance->attendance_date = $request->attendance_date;
        $attendance->in_time = $request->in_time;
        $attendance->out_time = $request->out_time;
        $attendance->late_time = $request->late_time;
        $attendance->save();
        return redirect()->back()->with( 'message', 'Attendance Saved Successfully ' );
    }

    public function manageAttendance()
    {
        $attendance=DB::table('attendances')
            ->join('employees','attendances.employee_id','employees.id')
            ->join('departments','employees.department_id','departments.id')
            ->select('attendances.*','departments.dept_name','employees.employee_name')
            ->get();

        return view('admin.attendance.manage',[
            'attendances'=>$attendance
        ]);
    }
    public function deleteAttendance(Request $request)
    {
        $attendance = Attendance::find($request->id);
        $attendance->delete();
        return back()->with('message-delete','Attendance Deleted Successfully');
    }
    public function editAttendance($id)
    {
        return view('admin.attendance.edit',[
            'attendance' => Attendance::find($id)
        ]);
    }
    public function updateAttendance(Request $request)
    {
        $attendance = Attendance::find($request->id);
        $attendance->employee_id = $request->employee_id;
        $attendance->attendance_date = $request->attendance_date;
        $attendance->in_time = $request->in_time;
        $attendance->out_time = $request->out_time;
        $attendance->late_time = $request->late_time;
        $attendance->save();
        return redirect('/manage-attendance')->with( 'message', 'Update Successfully');
    }
    public function LeaveStatus($id)
    {
        $attendance = Attendance::find($id);
        if ($attendance->leave_status == 1)
        {
            $attendance->leave_status = 0;
        }
        else
        {
            $attendance->leave_status = 1;
        }
        $attendance->save();
        return back()->with( 'message2', 'Status Changed Successfully');
    }

}
