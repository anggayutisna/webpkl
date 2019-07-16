@extends('layouts.backend')
@section('content')
<center><h1> Hai {{ Auth::user()->name }} </h1></center>
@endsection
