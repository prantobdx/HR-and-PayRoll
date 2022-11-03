@extends('admin.master')

@section('title')
    Edit-CompanyInfo
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-3"><b>Edit Company Information</b></h2>

                    <div class="card-body">

                        <form action="{{route('update-compnayInfo')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <input type="hidden" class="form-control" name="id" value="{{$company->id}}">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="name" value="{{$company->name}}" id="name" placeholder="name">
                            </div>
                            <div class="col-md-6">
                                <label for="slogan" class="form-label">Company Slogan</label>
                                <input type="text" class="form-control" name="slogan" id="slogan" value="{{$company->slogan}}" placeholder="slogan">
                            </div>

                            <div class="input-group col-md-12">
                                <div class="col-md-12">
                                    <label for="slogan" class="form-label">Company Logo</label>
                                </div>
                                <span class="input-group-text">logo</span>
                                <input type="file"  class="form-control" name="logo_img" id="logo">
                            </div>
                            <div>
                                <img src="{{asset($company->logo_img)}}" alt="" style="width: 100px; height: 100px">
                            </div>

                            <div class="input-group col-md-12">
                                <div class="col-md-12">
                                    <label for="slogan" class="form-label">Fav Icon</label>
                                </div>
                                <span class="input-group-text">icon</span>
                                <input type="file"  class="form-control" name="fav_icon" id="favIcon">
                            </div>
                            <div>
                                <img src="{{asset($company->fav_icon)}}" alt="" style="width: 90px; height: 90px">
                            </div>

                            <div class="col-12">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Company Address</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Address</span>
                                    <textarea class="form-control" aria-label="address" name="address" rows="4" id="address">{{$company->address}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{$company->email}}" placeholder="email">
                            </div>
                            <div class="col-md-6">
                                <label for="support_email" class="form-label">Support Email</label>
                                <input type="email" class="form-control" name="support_email" id="support_email" value="{{$company->support_email}}" placeholder="support email">
                            </div>

                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" value="{{$company->mobile}}" placeholder="mobile">
                            </div>
                            <div class="col-md-6">
                                <label for="support_number" class="form-label">Support Number</label>
                                <input type="text" class="form-control" name="support_number" id="support_number" value="{{$company->support_number}}" placeholder="support number">
                            </div>

                            <div class="col-md-12">
                                <label for="inputZip" class="form-label">Social Address</label>
                                <input type="text" class="form-control" name="social_address" id="inputZip" value="{{$company->social_address}}" placeholder="social address">
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
