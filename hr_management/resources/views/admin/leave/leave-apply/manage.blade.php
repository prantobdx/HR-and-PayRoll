@extends('admin.master')

@section('title')
    Manage Leave Apply
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mx-auto text-center text-black mb-3"><b>Manage Leave Apply</b></h2>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Total day</th>
                                <th>starts_date</th>
                                <th>ends_date</th>
                                <th>approved_by</th>
                                <th>description</th>
                                <th>attached_document</th>
                                <th>leave_status</th>
                                <th style="width:200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaveApplies as $leaveApply)
                                <tr>
                                    <td class="p-4">{{$loop->iteration}}</td>
                                    <td class="p-4">{{$leaveApply->total_leave_day}}</td>
                                    <td class="p-4">{{$leaveApply->leaver_starts_date}}</td>
                                    <td class="p-4">{{$leaveApply->leaver_ends_date}}</td>
                                    <td class="p-4">{{$leaveApply->approved_by}}</td>
                                    <td class="p-4">{{$leaveApply->description}}</td>
                                    <td class="p-4">
                                        <img src="{{$leaveApply->attached_document}}" alt="" style="width:100px; height:100px ">
                                    </td>
                                    <td class="p-4">{{$leaveApply->leave_status == 1 ? 'Active': 'UnActive'}}</td>

                                    <td style="width:200px">
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <a href="{{route('edit-leaveApply',['id'=>$leaveApply->id])}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('delete-leaveApply')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$leaveApply->id}}">
                                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure?')" value="Delete">
                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                @if($leaveApply->leave_status == 1)
                                                    <a href="{{route('leaveApply-status',['id'=>$leaveApply->id])}}" class="btn btn-warning">UnActive</a>
                                                @else
                                                    <a href="{{route('leaveApply-status',['id'=>$leaveApply->id])}}" class="btn btn-success">Active</a>
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
