@extends('admin.master')

@section('title')
    Add Leave Setting
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-3"><b>Add Leave Setting</b></h2>

                    <div class="card-body">

                        <form action="{{route('save-leave')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <div class="col-md-12">
                                <label for="leave_type" class="form-label">Leave type</label>
                                <input type="text" class="form-control" name="leave_type" id="leave_type" placeholder="Leave type">
                            </div>
                            <div class="col-md-12">
                                <label for="total_day" class="form-label">Total day</label>
                                <input type="number" class="form-control" name="total_day" id="total_day" placeholder="leave day">
                            </div>

                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Description</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">description</span>
                                    <textarea class="form-control" aria-label="address" name="description" rows="4" id="address"></textarea>
                                </div>
                            </div>
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-info">Save Leave Setting</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
