@extends('layout')
@section('title','show computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                  <h1>computers</h1>
                </div>

                <div class="mt-8">
                  <h3>{{$computer['name']}} is from <strong>{{$computer['origin']}} - <strong>{{$computer['price']}}</strong></h3>
                    
                  <a href="{{route('computers.edit',$computer->id)}}" class="edit-btn">edit</a>

                  <form action="{{route('computers.destroy', $computer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                  
                    <input type="submit" value="delete" class="delete-btn">
                  </form>

                </div>
              
@endsection