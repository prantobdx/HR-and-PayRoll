<?php

namespace App\Http\Controllers;

use App\helper\CustomHelper;
use App\Models\Employee;
use App\Models\LeaveApply;
use App\Models\LeaveSetting;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //----------------Leave Stetting Start--------------------
    public function addLeave()
    {
        return view('admin.leave.leave-setting.add');
    }
    public function saveLeave(Request $request)
    {
        $leave = new LeaveSetting();
        $leave->leave_type = $request->leave_type;
        $leave->total_day = $request->total_day;
        $leave->description = $request->description;
        $leave->save();
        return redirect('/manage-leave')->with( 'message', 'Leave Setting Added Successfully');
    }
    public function manageLeave()
    {
        return view('admin.leave.leave-setting.manage',[
            'leaves'=>LeaveSetting::all()
        ]);
    }
    public function deleteLeave(Request $request)
    {
        $leave = LeaveSetting::find($request->id);
        $leave->delete();
        return back()->with('message-delete','Leave Setting Deleted Successfully');
    }

    public function editLeave($id)
    {
        return view('admin.leave.leave-setting.edit',[
            'leave' => LeaveSetting::find($id)
        ]);
    }

    public function updateLeave(Request $request)
    {
        $leave = LeaveSetting::find($request->id);
        $leave->leave_type = $request->leave_type;
        $leave->total_day = $request->total_day;
        $leave->description = $request->description;
        $leave->save();
        return redirect('/manage-leave')->with( 'message', 'Leave Setting Update Successfully');
    }
//----------------Leave Stetting Ends--------------------

//----------------Leave Apply Starts--------------------------------------------
    public function addLeaveApply()
    {
        return view('admin.leave.leave-apply.add',[
            'employees'=>Employee::get(),
            'leaves'=>LeaveSetting::get(),
        ]);
    }
    public function saveLeaveApply(Request $request)
    {
        $leaveApply = new LeaveApply();
        $leaveApply->employee_id = $request->employee_id;
        $leaveApply->leave_type_id = $request->leave_type_id;
        $leaveApply->total_leave_day = $request->total_leave_day;
        $leaveApply->leaver_starts_date = $request->leaver_starts_date;
        $leaveApply->leaver_ends_date = $request->leaver_ends_date;
        $leaveApply->approved_by = $request->approved_by;
        $leaveApply->description = $request->description;
        $leaveApply->attached_document = CustomHelper::imageUpload( $request->file( 'attached_document' ), 'leave-apply/documents/');;
        $leaveApply->save();
        return redirect('/manage-leaveApply')->with( 'message', 'Leave Apply Added Successfully ' );
    }
    public function manageLeaveApply()
    {
        return view('admin.leave.leave-apply.manage',[
            'leaveApplies'=>LeaveApply::all()
        ]);
    }
    public function deleteLeaveApply(Request $request)
    {
        $leaveApply = LeaveApply::find($request->id);
        if (file_exists($leaveApply->attached_document))
        {
            unlink($leaveApply->attached_document);
        }
        $leaveApply->delete();
        return back()->with('message-delete','Deleted Successfully');
    }
    public function editLeaveApply($id)
    {
        return view('admin.leave.leave-apply.edit',[
            'leaveApplies' => LeaveApply::find($id),
            'employees'=>Employee::get(),
            'leaves'=>LeaveSetting::get(),
        ]);
    }
    public function updateLeaveApply(Request $request)
    {
        $leaveApply = LeaveApply::find($request->id);
        $leaveApply->employee_id = $request->employee_id;
        $leaveApply->leave_type_id = $request->leave_type_id;
        $leaveApply->total_leave_day = $request->total_leave_day;
        $leaveApply->leaver_starts_date = $request->leaver_starts_date;
        $leaveApply->leaver_ends_date = $request->leaver_ends_date;
        $leaveApply->approved_by = $request->approved_by;
        $leaveApply->description = $request->description;
        $leaveApply->attached_document = CustomHelper::imageUpload( $request->file( 'attached_document' ), 'leave-apply/documents/',$leaveApply->attached_document);
        $leaveApply->save();
        return redirect('/manage-leaveApply')->with('message', 'Leave Apply Updated Successfully');
    }
    public function LeaveApplyStatus($id)
    {
        $leaveApply = LeaveApply::find($id);
        if ($leaveApply->leave_status == 1)
        {
            $leaveApply->leave_status = 0;
        }
        else
        {
            $leaveApply->leave_status = 1;
        }
        $leaveApply->save();
        return back();
    }

//----------------Leave Apply Ends--------------------
}
