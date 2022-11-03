@extends('admin.master')

@section('title')
    Add-CompanyInfo
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h1 class="mx-auto text-center text-primary mb-3"><b><u>Add Compnay Information</u></b></h1>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('create-compnayInfo')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                            </div>
                            <div class="col-md-6">
                                <label for="slogan" class="form-label">Company Slogan</label>
                                <input type="text" class="form-control" name="slogan" id="slogan" placeholder="slogan">
                            </div>

                            <div class="input-group col-md-12">
                                <div class="col-md-12">
                                    <label for="slogan" class="form-label">Company Logo</label>
                                </div>
                                <span class="input-group-text">logo</span>
                                <input type="file" aria-label="First name" class="form-control" name="logo_img" id="logo">
                            </div>

                            <div class="input-group col-md-12">
                                <div class="col-md-12">
                                    <label for="slogan" class="form-label">Fav Icon</label>
                                </div>
                                <span class="input-group-text">icon</span>
                                <input type="file" aria-label="First name" class="form-control" name="fav_icon" id="favIcon">
                            </div>

                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Company Address</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Address</span>
                                    <textarea class="form-control" aria-label="address" name="address" rows="4" id="address"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email">
                            </div>
                            <div class="col-md-6">
                                <label for="support_email" class="form-label">Support Email</label>
                                <input type="email" class="form-control" name="support_email" id="support_email" placeholder="support email">
                            </div>

                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                            </div>
                            <div class="col-md-6">
                                <label for="support_number" class="form-label">Support Number</label>
                                <input type="text" class="form-control" name="support_number" id="support_number" placeholder="support number">
                            </div>

                            <div class="col-md-12">
                                <label for="inputZip" class="form-label">Social Address</label>
                                <input type="text" class="form-control" name="social_address" id="inputZip" placeholder="social address">
                            </div>

                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Save Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
