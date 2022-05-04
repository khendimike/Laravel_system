@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-9 offset-md-1 mt-3">
            <h5>Manage Station data</h5>
            <table class="table table-sm table-bordered table-hover bg-white">
                <thead>
                    <th>
                        <tr>
                            <td>#</td>
                            <td>Polling Station Name</td>
                            <td>No of Registered voters</td>
                            <td>Action</td>
                        </tr>
                    </th>
                </thead>
                <tbody>
                    @foreach($pollingstations as $station) 
                    <tr>
                        <td>{{$station->id}}</td>
                        <td>{{$station->polling_station}}</td>
                        <td>{{$station->registered_voters}}</td>
                        <td>
                             
                                <a action="{{ route('pollingstation.edit', $station->id)}}" type="submit"><i class="fas fa-edit" title="edit"></i></a>  
            
                
                                @method('DELETE')  
                                <a action="{{ route('pollingstation.destroy', $station->id)}}" type="submit"><i class="fas fa-circle-trash title="delete"></i></a>  
                         
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h5 class="pt-3">Export data to excel</h5>
            <a href="{{route('export')}}" class="btn btn-success">Export</a>
        </div>
    </div>
@endsection