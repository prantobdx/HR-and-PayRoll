@extends('admin.master')

@section('title')
    Add-Employee
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h1 class="mx-auto text-center text-info mb-4"><b>Add Employee</b></h1>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('save-employee')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Employee Department</label>
                                    <div class="mb-3">
                                        <select name="department_id" id="" class="form-control">
                                            <option value="disabled selected"><-----Select Department-----></option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Employee Designation</label>
                                    <div class="mb-3">
                                        <select name="designation_id" id="" class="form-control">
                                            <option value="disabled selected"><-----Select-Designation-----></option>
                                            @foreach($designations  as $designation)
                                                <option value="{{$designation->id}}">{{$designation->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label">Employee Name</label>
                                <input type="text" class="form-control" name="employee_name" id="name" placeholder="name">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="employee_code" class="form-label">Employee Code</label>
                                <input type="text" class="form-control" name="employee_code" id="employee_code" placeholder="code">
                            </div>

                                <div class="col-md-12 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                               </div>

                                <div class="col-md-12 mb-3">
                                    <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                                </div>

                            <div class="col-12 mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Address</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Address</span>
                                    <textarea class="form-control"  name="address" rows="4" id="address"></textarea>
                                </div>
                            </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nid" class="form-label">Nid Number</label>
                                    <input type="text" class="form-control" name="nid" id="mobile" placeholder="nid">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Employe Image</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="image">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="blood_group" class="form-label">Blood Group</label>
                                    <input type="text" class="form-control" name="blood_group" id="blood_group" placeholder="blood group">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Date of birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="image" placeholder="D-O-B">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="joining_state" class="form-label">Joining State</label>
                                    <input type="text" class="form-control" name="joining_state" id="joining_state" placeholder="state">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="employee_type" class="form-label">Employee type</label>
                                    <input type="text" class="form-control" name="employee_type" id="employee_type" placeholder="type">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="salary" class="form-label">Basic salary</label>
                                    <input type="text" class="form-control" name="basic_salary" id="salary" placeholder="salary">
                                </div>

                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-success">Save Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
