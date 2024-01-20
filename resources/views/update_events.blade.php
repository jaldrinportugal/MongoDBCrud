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
    <form action="{{route('saveUpdatedEvents', $event->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Event Name</label>
                    <input type="text" class="form-control" name="update_event_name" value="{{$event->EventName}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="Date" class="form-label">Date</label>
                    <input type="text" class="form-control" name="update_date" value="{{$event->Date}}">
                </div>
                <div class="col mb-3">
                    <label for="Location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="update_location"  value="{{$event->Location}}">
                </div>
                <div class="col mb-3">
                    <label for="Attendees" class="form-label">Attendees</label>
                    <input type="text" class="form-control" name="update_attendees"  value="{{$event->Attendees}}">
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <input type="hidden" name="id" value="{{$event->id}}">
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection