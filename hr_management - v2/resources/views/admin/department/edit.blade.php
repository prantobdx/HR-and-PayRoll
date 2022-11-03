@extends('admin.master')

@section('title')
    Edit Department
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-3"><u><b>Edit Department</b></u></h2>

                    <div class="card-body">

                        <form action="{{route('update-department')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <input type="hidden" class="form-control" name="id"  value="{{$department->id}}" >

                            <div class="col-md-12">
                                <label for="name" class="form-label">Department Name</label>
                                <input type="text" class="form-control" name="dept_name" id="name"  value="{{$department->dept_name}}" >
                            </div>
                            <div class="col-md-12">
                                <label for="dept_code" class="form-label">Department Code</label>
                                <input type="text" class="form-control" name="dept_code" id="dept_code" value="{{$department->dept_code}}">
                            </div>

                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Department Description</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" aria-label="address" name="description" rows="4" id="address">{{$department->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
