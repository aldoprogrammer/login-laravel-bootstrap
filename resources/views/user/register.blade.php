@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form action="">
                @csrf
                <div class="mb-3">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                </div>
                <div class="mb-3">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" value="{{ old('username')}}">
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label>Confirm Password<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="confirm_password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    <button class="btn btn-danger">Back</button>
                </div>



            </form>
        </div>
    </div>

@endsection
