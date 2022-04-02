@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
@if($post['exists'] == 'true')
    <h1>{{ $post['id'] }}</h1>
    <p>{{ $post['name'] }}</p>
@else
    <h1>No data to display</h1>
@endif

@unless ($post['exists'])
    <h1>Kya dekhega kuch nahi hai</h1>
@endunless

@isset($post['life'])
    <div>Life dikha</div>
@endisset
@endsection