@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">

<div class="content">	
<div class="col-lg-12">   	

    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Messages</h2>
        </div>
        <div class="card-body">
       
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" value="{{ $messages->name }}" readonly>
                </div>
                     
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" class="form-control" value="{{ $messages->email }}" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone</label>
                    <input type="text" class="form-control" value="{{ $messages->phone }}" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Interest</label>
                    <input type="text" class="form-control" value="{{ $messages->interest }}" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Subject</label>
                    <input type="text" class="form-control" value="{{ $messages->subject }}" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Message</label>
                    <textarea class="form-control" rows="3" readonly>{{ $messages->message }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Send Date</label>
                    <input type="text" class="form-control" value="{{ $messages->created_at }}" readonly>
                </div>

                <a href="{{ route('message.delete',[$messages->id]) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('contact.message') }}" class="btn btn-info">Back</a>
            
        </div>
    </div>
    
</div>
</div>
</div>

@endsection
