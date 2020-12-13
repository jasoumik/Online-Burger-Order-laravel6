@extends('layouts.app')
@section('content')
<div class="wrapper burger-details">
<h1>Order for {{$burger->name}}</h1>
<p class="type">Type = {{$burger->type}}</p>
<p class="base">Base = {{$burger->base}}</p>
<p class="level">Level = {{$burger->level}}</p>
<p class="addons">Add-on(s):</p>
<ul>
@foreach($burger->addons as $addon)
<li>{{$addon}}</li>
@endforeach
</ul>
<form action="/burgers/{{$burger->id}}" method="post">
@csrf
@method('DELETE')
<button>Delete Order</button>
</form>
</div>
<a href="/burgers">Back to All Burgers</a>
 @endsection