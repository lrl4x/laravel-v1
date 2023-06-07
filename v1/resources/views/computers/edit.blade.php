@extends('layout')
@section('title','create computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                  <h1>edit an old computer</h1>
                </div>

                <div class="flex justify-center pt-8 ">
                 <form action="{{route('computers.update',['computer' =>$computer->id])}}" class="form1" method="POST" >
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="computer-name" class="text-sm">computer-name</label>
                        <input type="text" name="computer-name" id="computer-name" value="{{$computer->name}}">
                         
                        @error('computer-name')
                        <div class="form-error">
                            {{$message}}
                        </div>

                        @enderror
                    </div>


                    <div>
                        <label for="computer-origin" class="text-sm">computer-origin</label>
                        <input type="text" name="computer-origin" id="computer-origin" value="{{$computer->origin}}">
                        @error('computer-origin')
                        <div class="form-error">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div>
                        <label for="computer-price" class="text-sm">computer-price</label>
                        <input type="text" name="computer-price" id="computer-price" value="{{$computer->price}}">
                        @error('computer-price')
                        <div class="form-error">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div>
                       <button type="submit">Submit</button>
                    </div>

                 </form>
                </div>
                </div>
              
@endsection