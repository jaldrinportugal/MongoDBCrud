@extends('layout.app')

@section('content')
<br>
<br>
<br>
<br>
<style>
    h1{
        font-family: Monospace;
        text-align:center;
        background-color: #E0E0E0;
    }
    .bb{        
        font-family: Monospace;
        color: yellow;
    }
    footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
</style>    
    <h1>Update Input Attendee</h1>
<br>
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
<footer class="bb">
    <div id="portugal" class="table-dark">© John Aldrin Portugal</div>
</footer>
@endsection