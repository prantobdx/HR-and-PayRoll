@extends('admin.master')

@section('title')
   Manage-CompanyInfo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mx-auto text-center text-primary mb-3"><b>Manage Compnay Information</b></h2>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Company Name</th>
                                <th>Slogan</th>
                                <th>Logo Image</th>
                                <th>Fav Icon</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Support Email</th>
                                <th>Mobile</th>
                                <th>Support Number</th>
                                <th>Social Address</th>
                                <th style="width:160px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td class="p-4">{{$loop->iteration}}</td>
                                <td class="p-4">{{$company->name}}</td>
                                <td class="p-4">{{$company->slogan}}</td>
                                <td class="p-4">
                                    <img src="{{asset($company->logo_img)}}" alt="" style="width:110px;height:110px">
                                </td>
                                <td class="p-4">
                                    <img src="{{asset($company->fav_icon)}}" alt="" style="width:90px;height:90px">
                                </td>
                                <td class="p-4">{{$company->address}}</td>
                                <td class="p-4">{{$company->email}}</td>
                                <td class="p-4">{{$company->support_email}}</td>
                                <td class="p-4">{{$company->mobile}}</td>
                                <td class="p-4">{{$company->support_number}}</td>
                                <td class="p-4">{{$company->social_address}}</td>
                                <td style="width:160px">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <a href="{{route('edit-companyInfo',['id'=>$company->id])}}" class="btn btn-info">Edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{route('delete-companyInfo')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$company->id}}">
                                                <input type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure?')" value="Delete">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
