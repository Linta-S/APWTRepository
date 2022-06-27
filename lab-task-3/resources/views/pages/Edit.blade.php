@extends('layouts.app')
@section('content')
<h2>Edit Student</h2>
<form action="{{route('Edit')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    
         
     
    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="id" value="{{$keyy->id}}" class="form-control">
         
        
    </div>

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="Name" value="{{$keyy->Name}}" class="form-control">
         
    </div>
     
    <div class="col-md-4 form-group">
        <span>DOB</span>
        <input type="text" name="DOB" value="{{$keyy->DOB}}"class="form-control">
         
           
        
    </div>

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="Email" value="{{$keyy->Email}}"class="form-control">
        
           
         
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="Phone" value="{{$keyy->Phone}}"class="form-control">
        
            
        
    </div>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection 