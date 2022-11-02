@extends('admin.master')

@section('title')
    Manage-Employee
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mx-auto text-center text-secondary mb-3"><b>Manage Employees</b></h2>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Employee Name</th>
                                <th>Employee Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Nid</th>
                                <th>Image</th>
                                <th>Blood Group</th>
                                <th>Date Of Birth</th>
                                <th>Joining State</th>
                                <th>Employee Type</th>
                                <th>Basic Salary</th>
                                <th>Employee Status</th>
                                <th style="width:200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr class="">
                                    <td class="p-4">{{$loop->iteration}}</td>
                                    <td class="p-4">{{$employee->dept_name}}</td>
                                    <td class="p-4">{{$employee->name}}</td>
                                    <td class="p-4">{{$employee->employee_name}}</td>
                                    <td class="p-4">{{$employee->employee_code}}</td>
                                    <td class="p-4">{{$employee->email}}</td>
                                    <td class="p-4">{{$employee->mobile}}</td>
                                    <td class="p-4">{{$employee->address}}</td>
                                    <td class="p-4">{{$employee->nid}}</td>
                                    <td class="p-4">
                                        <img src="{{asset($employee->image)}}" alt="" style="width:110px;height:110px">
                                    </td>
                                    <td class="p-4">{{$employee->blood_group}}</td>
                                    <td class="p-4">{{$employee->date_of_birth}}</td>
                                    <td class="p-4">{{$employee->joining_state}}</td>
                                    <td class="p-4">{{$employee->employee_type}}</td>
                                    <td class="p-4">{{$employee->basic_salary}}</td>
                                    <td class="p-4">{{$employee->status==1 ? 'active' : 'not active'}}</td>
                                    <td style="width:200px">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="{{route('edit-employee',['id'=>$employee->id])}}" class="btn btn-info">Edit</a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('delete-employee')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure?')" value="Delete">
                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                @if($employee->status == 1)
                                                    <a href="{{route('employee-status',['id'=>$employee->id])}}" class="btn btn-warning">UnActive</a>
                                                @else
                                                    <a href="{{route('employee-status',['id'=>$employee->id])}}" class="btn btn-success">Active</a>
                                                @endif
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
