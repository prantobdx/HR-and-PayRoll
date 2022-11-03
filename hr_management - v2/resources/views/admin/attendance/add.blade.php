@extends('admin.master')

@section('title')
    Add-Attendance
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <div class="card-title">
                    <h1 class="mx-auto text-center text-success mb-3"><b>Add Attendance</b></h1>
                        <h2 class="text-center text-bg-warning">{{Session('message')}}</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{route('save-attendance')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf

                            <input type="hidden" class="form-control" name="employee_id">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Employee Code</label>
                                    <div class="mb-3">
                                        <select name="employee_id" id="" class="form-control">
                                            <option value="disabled selected"><-----Select-Employee-Code-----></option>
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}">{{$employee->employee_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            <div class="col-md-12 mb-3">
                                <label for="attendance_date" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" name="attendance_date" id="attendance_date" placeholder="attendance date">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="in_time" class="form-label">In Time</label>
                                <input type="time" class="form-control" name="in_time" id="in_time" placeholder="in time">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="out_time" class="form-label">Out time</label>
                                <input type="time" class="form-control" name="out_time" id="out_time" placeholder="out time">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="late_time" class="form-label">Late Time</label>
                                <input type="number" class="form-control" name="late_time" id="late_time" value="minute" placeholder="late time in minute">
                            </div>

                            <div class="col-12 d-grid mt-3">
                                <button type="submit" class="btn btn-success">Save Attendance</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
