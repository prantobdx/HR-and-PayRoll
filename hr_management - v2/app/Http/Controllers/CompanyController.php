<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\helper\CustomHelper;

class CompanyController extends Controller
{
    public function addCompanyInfo()
    {
        return view('admin.company.add-companyInfo');
    }
    public function createCompnayInfo(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|',
            'slogan'=>'required|',
            'logo_img'=>'required|',
            'fav_icon'=>'required|',
            'address'=>'required|',
            'email'=>'required|',
            'support_email'=>'required|',
            'mobile'=>'required|',
            'support_number'=>'required|',
            'social_address'=>'required|',
        ]);
       $company = new Company();
       $company->name = $request->name;
       $company->slogan = $request->slogan;
       $company->logo_img = CustomHelper::imageUpload( $request->file( 'logo_img' ), 'company/logo/image/');
       $company->fav_icon = CustomHelper::imageUpload( $request->file( 'fav_icon' ), 'company/fav_icon/image/');
       $company->address = $request->address;
       $company->email = $request->email;
       $company->support_email = $request->support_email;
       $company->mobile = $request->mobile;
       $company->support_number = $request->support_number;
       $company->social_address = $request->social_address;
       $company->save();
       return redirect('/manage-companyInfo')->with( 'message', 'CompanyInfo Added Successfully ' );
    }

    public function manageCompanyInfo()
    {
        return view('admin.company.manage-companyInfo',[
            'companies'=>Company::all()
        ]);
    }

    public function deleteCompanyInfo(Request $request)
    {
        $company = Company::find($request->id);
        if (file_exists($company->logo_img))
        {
            if (file_exists($company->fav_icon))
            {
                unlink($company->fav_icon);
            }
            unlink($company->logo_img);
        }
        $company->delete();
        return back()->with('message-delete','CompanyInfo Deleted Successfully');
    }

    public function editCompanyInfo($id)
    {
        return view('admin.company.edit-companyInfo',[
            'company' => Company::find($id)
        ]);
    }

    public function updateCompanyInfo(Request $request)
    {
        $company = Company::find($request->id);
        $company->name = $request->name;
        $company->slogan = $request->slogan;
        $company->logo_img = CustomHelper::imageUpload( $request->file( 'logo_img' ), 'company/logo/image/', $company->logo_img);
        $company->fav_icon = CustomHelper::imageUpload( $request->file( 'fav_icon' ), 'company/fav_icon/image/', $company->fav_icon);
        $company->address = $request->address;
        $company->email = $request->email;
        $company->support_email = $request->support_email;
        $company->mobile = $request->mobile;
        $company->support_number = $request->support_number;
        $company->social_address = $request->social_address;
        $company->save();
        return redirect('/manage-companyInfo')->with( 'message', 'CompanyInfo Updated Successfully ' );
    }

}
