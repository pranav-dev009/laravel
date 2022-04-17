@extends('layouts.app')
@section('title', 'Form One')
@section('content')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.partials.form')
    <input type="submit" value="Create">
</form>
@endsection