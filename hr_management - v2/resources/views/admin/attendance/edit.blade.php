@extends('admin.master')

@section('title')
    Edit-Attendance
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-3"><b>Edit Attendance</b></h2>
                    <h2 class="text-center text-warning">{{Session('message')}}</h2>

                    <div class="card-body">
                        <form action="{{route('update-attendance')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf

                            <input type="hidden" class="form-control" name="id" value="{{$attendance->id}}">

                            <div class="col-md-12">
                                <label for="name" class="form-label">Employee Code</label>
                                <div class="mb-3">
                                    <select name="employee_id" id="" class="form-control">
                                        <option value="disabled selected"><-----Select-Employee-Code-----></option>
                                        @foreach($employees as $employee)
                                            <option value="{{$employee->id}}"{{$employee->id == $leaveApplies->employee_id ? 'selected' : ''}}>{{$employee->employee_code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="attendance_date" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" name="attendance_date" id="attendance_date" value="{{$attendance->attendance_date}}" placeholder="attendance date">
                            </div>
                            <div class="col-md-6">
                                <label for="in_time" class="form-label">In Time</label>
                                <input type="time" class="form-control" name="in_time" id="in_time" value="{{$attendance->in_time}}" placeholder="in time">
                            </div>

                            <div class="col-md-6">
                                <label for="out_time" class="form-label">Out time</label>
                                <input type="time" class="form-control" name="out_time" id="out_time" value="{{$attendance->out_time}}" placeholder="out time">
                            </div>

                            <div class="col-md-12">
                                <label for="late_time" class="form-label">Late Time</label>
                                <input type="number" class="form-control" name="late_time" id="late_time" value="{{$attendance->late_time}}" placeholder="late time in minute">
                            </div>

                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary ">Update Attendance</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
