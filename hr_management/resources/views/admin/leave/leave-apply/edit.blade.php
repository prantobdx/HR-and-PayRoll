@extends('admin.master')

@section('title')
    Edit Apply Leave
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card box-shadow pt-4">
                    <h2 class="mx-auto text-center text-secondary mb-5"><b>Edit Leave Apply </b></h2>

                    <div class="card-body">
                        <form action="{{route('update-leaveApply')}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            <input type="hidden" class="form-control" name="id" id="" value="{{$leaveApplies->id}}">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Employee Code</label>
                                    <div class="mb-3">
                                        <select name="employee_id" id="" class="form-control">
                                            <option value="disabled selected"><-----Select-Employee-Code-----></option>
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}"{{$employee->id == $leaveApplies->employee_id ? 'selected' : ''}}>{{$employee->employee_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Leave Type</label>
                                    <div class="mb-3">
                                        <select name="leave_type_id" id="" class="form-control">
                                            <option value="disabled selected"><-----Select-leave_type-----></option>
                                            @foreach($leaves as $leave)
                                                <option value="{{$leave->id}}"{{$leave->id == $leaveApplies->leave_type_id ? 'selected' : ''}}>{{$leave->leave_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="leave_day" class="form-label">Total leave day</label>
                                    <input type="text" class="form-control" name="total_leave_day" id="leave_day" value="{{$leaveApplies->total_leave_day}}" placeholder="total leave day in number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="leaver_starts_date" class="form-label">Leaver starts date</label>
                                    <input type="date" class="form-control" name="leaver_starts_date" id="leaver_starts_date" value="{{$leaveApplies->leaver_starts_date}}" placeholder="starts date">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Leaver ends date</label>
                                    <input type="date" class="form-control" name="leaver_ends_date" id="email" value="{{$leaveApplies->leaver_ends_date}}" placeholder="ends date">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="approved_by" class="form-label">Approved by</label>
                                    <input type="text" class="form-control" name="approved_by" id="approved_by" value="{{$leaveApplies->approved_by}}" placeholder="approved by">
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">description</span>
                                        <textarea class="form-control"  name="description" rows="4" id="description">{{$leaveApplies->description}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="attached_document" class="form-label">Attached Document</label>
                                    <input type="file" class="form-control" name="attached_document" id="attached_document" placeholder="attached document">
                                    <div class="mt-2">
                                        <img src="{{asset($leaveApplies->attached_document)}}" alt="" style="width: 100px; height: 100px">
                                    </div>
                                </div>

                                <div class="col-12 d-grid">
                                    <button type="submit" class="btn btn-primary">Update Apply Leave</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
