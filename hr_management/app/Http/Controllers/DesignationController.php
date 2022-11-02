<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function addDesignation()
    {
        return view('admin.designation.add');
    }
    public function saveDesignation(Request $request)
    {
        $designation = new Designation();
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->save();
        return redirect('/manage-designation')->with( 'message', 'Designation Added Successfully ' );
    }

    public function manageDesignation()
    {
        return view('admin.designation.manage',[
            'designations'=>Designation::all()
        ]);
    }

    public function deleteDesignation(Request $request)
    {
        $designation = Designation::find($request->id);
        $designation->delete();
        return back()->with('message-delete','Designation Deleted Successfully');
    }

    public function editDesignation($id)
    {
        return view('admin.designation.edit',[
            'designation' => Designation::find($id)
        ]);
    }
    public function updateDesignation(Request $request)
    {
        $designation = Designation::find($request->id);
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->save();
        return redirect('/manage-designation')->with( 'message', 'Designation Updated Successfully ' );
    }
}
