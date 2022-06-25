@extends('layouts.app')
@section('content')
<h2>Log-In</h2>
<form action="{{route('login')}}" class="form-group" method="post">
   
  {{@csrf_field()}}
  
  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="checkbox" name="remember"> Remember Me<br>
    <br>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection