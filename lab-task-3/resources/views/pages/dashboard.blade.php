@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
       
        <th>ID</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Phone</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($keyy as $stt)
    <tr>
        <td>{{$stt['id']}}</td>        
        <td>{{$stt['Name']}}</td>
        <td>{{$stt['DOB']}}</td>
        <td>{{$stt['Email']}}</td>
        <td>{{$stt['Phone']}}</td>
        
        
        <td><a href="/Details/{{$stt->id}}" class="btn btn-outline-info" role="button" aria-pressed="true">Details</a></td>
        <td><a href="/Edit/{{$stt->id}}" class="btn btn-outline-success" role="button" aria-pressed="true">Edit</a></td>
        <td><a href="/Delete/{{$stt->id}}" class="btn btn-outline-danger" role="button" aria-pressed="true">Delete</a></td>
    </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center">
 {{   $keyy->links()   }}
 
</div>
@endsection
 