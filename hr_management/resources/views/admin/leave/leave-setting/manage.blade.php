@extends('admin.master')

@section('title')
    Manage Leave Setting
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mx-auto text-center text-black mb-3"><b>Manage Leave Setting</b></h2>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>leave_type</th>
                                <th>total_day</th>
                                <th>Description</th>
                                <th style="width: 100px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leaves as $leave)
                                <tr>
                                    <td class="p-4">{{$loop->iteration}}</td>
                                    <td class="p-4">{{$leave->leave_type}}</td>
                                    <td class="p-4">{{$leave->total_day}}</td>
                                    <td class="p-4">{{$leave->description}}</td>
                                    <td style="width: 100px">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="{{route('edit-leave',['id'=>$leave->id])}}" class="btn btn-info">Edit</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('delete-leave')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$leave->id}}">
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
