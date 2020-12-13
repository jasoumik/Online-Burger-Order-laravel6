@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            

            <div class="content">
            
                <div class="title m-b-md">
                <img src="/img/burg.png" alt="burger plaza logo">
                    Burger's Order List
                </div>
                <div>
                
                <p>{{$name}}</p>
               @foreach($burgers as $burger)
               <div>
               <a href="/burgers/{{$burger->id}}">
               {{$burger->name}} - {{$burger->type}} - {{$burger->base}}
               </a>
               </div>
                @endforeach
                </div>
            </div>
        </div>
        <br><br><br>
@endsection
