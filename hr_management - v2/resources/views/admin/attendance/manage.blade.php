@extends('admin.master')

@section('title')
    Manage-Attendance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mx-auto text-center text-dark mt-3"><b>Manage Attendance</b></h1>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                        <h2 class="text-center text-bg-warning">{{Session('message2')}}</h2>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Employee Name</th>
                                <th>Employee Department</th>
                                <th>attendance date</th>
                                <th>in_time</th>
                                <th>out_time</th>
                                <th>late_time</th>
                                <th>Leave Status</th>
                                <th style="width:190px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attendances as $attendance)
                                <tr>
                                    <td class="p-4">{{$loop->iteration}}</td>
                                    <td class="p-4">{{$attendance->employee_name}}</td>
                                    <td class="p-4">{{$attendance->dept_name}}</td>
                                    <td class="p-4">{{$attendance->attendance_date}}</td>
                                    <td class="p-4">{{$attendance->in_time}}</td>
                                    <td class="p-4">{{$attendance->out_time}}</td>
                                    <td class="p-4">{{$attendance->late_time}}</td>
                                    <td class="p-4">{{$attendance->leave_status == 1 ? 'Present' : 'Absent'}}</td>
                                    <td style="width:190px">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="{{route('edit-attendance',['id'=>$attendance->id])}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('delete-attendance')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$attendance->id}}">
                                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure?')" value="Delete">
                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                @if($attendance->leave_status == 1)
                                                    <a href="{{route('leave-status',['id'=>$attendance->id])}}" class="btn btn-warning">Absent</a>
                                                @else
                                                    <a href="{{route('leave-status',['id'=>$attendance->id])}}" class="btn btn-success">Present</a>
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
