@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
      <h4 class="pt-4 pb-2">Add new Data</h4>
      <form method="post" action="{{ route('pollingstation.store')}}">
        @csrf
        <div class="form-group">
            {{-- <label for="fullname">Fullname</label> --}}
            <input type="text" class="form-control" name="stationname" id="stationname" placeholder="Polling stations name">
        </div>
    
        <div class="form-group">
          {{-- <label for="useremail">Em</label> --}}
          <input type="text" class="form-control" name="registeredvoters" id="registeredvoters" placeholder="Registered voters">
        </div>
    
    
    
        <button type="submit" name="save" class="btn btn-primary w-100">Add station data</button>
      </form>
    </div>
  </div>
@endsection