@extends('admin.master')

@section('title')
    Edit Designation
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-3"><b>Edit Designation</b></h2>

                    <div class="card-body">

                        <form action="{{route('update-designation')}}" method="post"  class="row g-3">
                            @csrf
                            <input type="hidden" class="form-control" name="id" value="{{$designation->id}}">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Designation Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$designation->name}}">
                            </div>
                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Description</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" aria-label="address" name="description" rows="4" id="address">{{$designation->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
