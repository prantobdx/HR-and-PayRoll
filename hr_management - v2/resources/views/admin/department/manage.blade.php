@extends('admin.master')

@section('title')
    Manage-Department
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mx-auto text-center text-success mt-2"><b>Manage Department</b></h1>
                        <h2 class="text-center text-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Department Name</th>
                                    <th>Department Code</th>
                                    <th>Description</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $department)
                                    <tr>
                                        <td class="p-4">{{$loop->iteration}}</td>
                                        <td class="p-4">{{$department->dept_name}}</td>
                                        <td class="p-4">{{$department->dept_code}}</td>
                                        <td class="p-4">{{$department->description}}</td>
                                        <td style="width: 100px">
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <a href="{{route('edit-department',['id'=>$department->id])}}" class="btn btn-info">Edit</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="{{route('delete-department')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$department->id}}">
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
    </div>
@endsection
