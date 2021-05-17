@extends('layout')



@section('content')

<h1>users list page</h1>

<div>
    <ul>
        @foreach($user as $u)
        <li>
            <span class="listlass">{{$u->id}}</span>
            <span class="listlass">{{$u->name}}</span>
            <span class="listlass">{{$u->email}}</span>
        </li>
        @endforeach

    </ul>


</div>


@endsection