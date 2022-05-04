@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-9 offset-md-1 mt-3">
            <h5>Manage User</h5>
            <table class="table table-sm table-bordered table-hover bg-white">
                <thead>
                    <th>
                        <tr>
                            <td>#</td>
                            <td>Fullname</td>
                            <td>Email</td>
                            {{-- <td>Permissions</td> --}}
                            <td>Action</td>
                        </tr>
                    </th>
                </thead>
                <tbody>
                    @foreach($Users as $user) 
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->email}}</td>
                        {{-- <td>{{$user->Permissions}}</td> --}}
                        <td>
                          
                                 
                                <a action="{{ route('users.edit', $user->id)}}" type="submit"><i class="fas fa-edit" title="edit"></i></a>  
            
                
                                @method('DELETE')  
                                <a action="{{ route('users.destroy', $user->id)}}" type="submit"><i class="fas fa-circle-trash title="delete"></i></a>  
                         
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection