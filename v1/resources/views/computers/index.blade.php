@extends('layout')
@section('title','computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center ">
                  <h1>computers</h1>
                </div>

                <div>
                    @if(count($computers )>0)
                    <ul>
                    @foreach($computers as $computer)
                    <a href="{{route('computers.show' , ['computer' => $computer['id']])}}">
                    <li>{{$computer['name']}} is from <strong>{{$computer['origin']}}</strong> - <strong>{{$computer['price']}}$</strong></li>
                    @endforeach
                    </ul>
                    </a>
                    @else 
                    <p>there are no computers to display</p>
                    @endif
                </div>
              
@endsection