@extends('admin.master')

@section('title')
    Manage-Designation
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mx-auto text-center text-secondary mt-3"><b>Manage Designation</b></h1>
                        <h2 class="text-center text-bg-success">{{Session('message')}}</h2>
                        <h2 class="text-center text-bg-danger">{{Session('message-delete')}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Designation Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($designations as $designation)
                                    <tr class="">
                                        <td class="p-4">{{$loop->iteration}}</td>
                                        <td class="p-4">{{$designation->name}}</td>
                                        <td class="p-4">{{$designation->description}}</td>
                                        <td>
                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <a href="{{route('edit-designation',['id'=>$designation->id])}}" class="btn btn-primary">Edit</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <form action="{{route('delete-designation')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$designation->id}}">
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
