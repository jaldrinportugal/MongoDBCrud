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
    tr{
        font-family: Monospace;
    }
    #aa{        
        font-family: Monospace;
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
<h1 class="1">Attendee Registration</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Attendees</th>
        <th>Phone</th>
        <th>Action</th>

    </tr>   
</thead>
<tbody>
    @foreach ($attendees as $attendee)
    <tr>
        <td class='aa'>{{ $attendee->id; }}</td>
        <td class='aa'>{{ $attendee->Attendees; }}</td>
        <td class='aa'>{{ $attendee->Phone; }}</td>
        
        <td><a href="{{route('updateAttendees', $attendee->id)}}"><button type="button" class="btn btn-warning">update</button></a></td>
        <td> <a href="{{route('removeAttendees', $attendee->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>

    </tr> 
    @endforeach
</tbody>

<div id="aa" class="card my-4">
    <form action="{{ route('saveAttendees') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
               
                    <label for="Attendees" class="form-label">Attendees</label>
                    <input class="form-control" type="text" placeholder="Input here.." name="Attendees">
                </div>
                <div class="col-md-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input class="form-control" type="text" placeholder="Input here.." name="Phone">
                </div>
                <div class="col mb-6 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
    <br>
</div>  
<footer class="bb">
    <div id="portugal" class="table-dark">© John Aldrin Portugal</div>
</footer>   
@endsection

@section('title')
    Attendee Registration
@endsection