@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Messages from Customers</h2>
                
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                            
                        <div class="card-header">All messages </div>
                    
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Interest</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $meg)
                                <tr>
                                    <th scope="row">{{ $meg->id }}</th>
                                    <td>{{ Str::limit($meg->name, 10) }}</td>
                                    <td>{{ Str::limit($meg->email, 15) }}</td>
                                    <td>{{ $meg->phone ?? 'N/A' }}</td>
                                    <td>{{ $meg->interest ?? 'N/A' }}</td>
                                    <td>{{ Str::limit($meg->subject, 20) }}</td>
                                    <td>{{ Str::limit($meg->message, 80) }}</td>
                                    <td>{{ $meg->created_at->diffForHumans() }}</td>
                                    <td> 
                                        <a href="{{ route('message.view', [$meg->id]) }}" class="btn btn-info btn-sm">View</a>  
                                        <a href="{{ route('message.delete', [$meg->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>  
                                    </td>    
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
