@extends('admin.master')

@section('title')
    Add-Department
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h1 class="mx-auto text-center text-dark mb-1"><b>Add Department</b></h1>

                    <div class="card-body">

                        <form action="{{route('save-department')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <div class="col-md-12">
                                <label for="name" class="form-label">Department Name</label>
                                <input type="text" class="form-control" name="dept_name" id="name" placeholder="name">
                            </div>
                            <div class="col-md-12">
                                <label for="dept_code" class="form-label">Department Code</label>
                                <input type="text" class="form-control" name="dept_code" id="dept_code" placeholder="code">
                            </div>

                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Department Description</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" aria-label="address" name="description" rows="4" id="address"></textarea>
                                </div>
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
