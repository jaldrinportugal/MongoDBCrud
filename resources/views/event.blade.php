@extends('layout.app')

@section('content')
<br>
<style>
    h1{
        font-family: Monospace;
        text-align:center;
        background-color: #E0E0E0;
    }
    tr, td{
        font-family: Monospace;
    }
    #aa{        
        font-family: Monospace;
    }
</style>
<h1 class="">Event Registration</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>eventaname</th>
        <th>date</th>
        <th>location</th>
        <th>Action</th>

    </tr>   
</thead>
<tbody>
    @foreach ($events as $event)
    <tr>
        <td class='aa'>{{ $event->id; }}</td>
        <td class='aa'>{{ $event->EventName; }}</td>
        <td class='aa'>{{ $event->Date; }}</td>
        <td class='aa'>{{ $event->Location; }}</td>
        
        <td><a href="{{route('updateEvents', $event->id)}}"><button type="button" class="btn btn-warning">update</button></a></td>
        <td> <a href="{{route('removeEvents', $event->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>

    </tr> 
    @endforeach
</tbody>

<div id="aa" class="card my-4">
    <form action="{{ route('saveEvents') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
               
                    <label for="EventName" class="form-label">Event Name</label>
                    <input class="form-control" type="text" placeholder="Input here.." name="EventName">
                </div>
                <div class="col-md-3">
                    <label for="Date" class="form-label">Date</label>
                    <input class="form-control" type="date" placeholder="Input here.." name="Date">
                </div>
                <div class="col mb-3">
                    <label for="Location" class="form-label">Location</label>
                    <input class="form-control" type="text" placeholder="Input here.." name="Location">
                </div>
                <div class="col mb-6 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
    <br>
</div>      
@endsection

@section('title')
    Event Registration
@endsection