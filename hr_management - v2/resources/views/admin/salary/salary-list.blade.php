@extends('admin.master')

@section('title')
   Salary Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mx-auto text-center text-primary mt-3"><b>Salary Details</b></h1>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Department</th>
                                    <th>Designation</th>
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Mobile</th>
                                    <th>Employee Type</th>
                                    <th>Basic Salary</th>
                                    <th>Employee Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($salaries as $employee)
                                    <tr class="">
                                        <td class="p-4">{{$loop->iteration}}</td>
                                        <td class="p-4">{{$employee->dept_name}}</td>
                                        <td class="p-4">{{$employee->name}}</td>
                                        <td class="p-4">{{$employee->employee_name}}</td>
                                        <td class="p-4">{{$employee->employee_code}}</td>
                                        <td class="p-4">{{$employee->mobile}}</td>
                                        <td class="p-4">{{$employee->employee_type}}</td>
                                        <td class="p-4">{{$employee->basic_salary}}</td>
                                        <td class="p-4">{{$employee->status==1 ? 'active' : 'not active'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
