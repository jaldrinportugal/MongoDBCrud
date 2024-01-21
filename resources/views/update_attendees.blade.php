@extends('layout.app')

@section('content')

<style>
    h1{
        font-family: Monospace;
        text-align:center;
        background-color: #E0E0E0;
    }
</style>    
    <h1>Update Inputs</h1>
<div id="aa"class="card my-4">
    <form action="{{route('saveUpdatedAttendees', $attendees->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Attendees</label>
                    <input type="text" class="form-control" name="update_event_attendee" value="{{$attendees->Attendees}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="Date" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="update_phone" value="{{$attendees->Phone}}">
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <input type="hidden" name="id" value="{{$attendees->id}}">
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection