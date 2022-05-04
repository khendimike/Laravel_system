@extends('layout.admin')
@section('content')

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-6">
    <h4 class="pt-4 pb-2">Add new user</h4>
    <form method="post" action="{{ route('users.store')}}">
      @csrf
      <div class="form-group">
          {{-- <label for="fullname">Fullname</label> --}}
          <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname">
      </div>
  
      <div class="form-group">
        {{-- <label for="useremail">Em</label> --}}
        <input type="email" class="form-control"name="useremail" id="useremail" placeholder="Email address">
      </div>
  
      <div class="form-group">
        {{-- <label for="exampleInputPassword1">Password</label> --}}
        <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="password">
      </div>
  
  
      <button type="submit" name="save" class="btn btn-primary w-100">Add user</button>
    </form>
  </div>
</div>

@endsection