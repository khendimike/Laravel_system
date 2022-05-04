@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <h4>Add role</h4>
            <form action="">
                <div class="form-group">
                    <input type="text" name="role" id="role" placeholder="Add role">
                </div>
                <button name="addrole" class="btn btn-primary">Add role</button>
            </form>
        </div>
    </div>
@endsection