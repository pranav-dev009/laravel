{{-- @extends('layouts.app')

@section('title', 'Posts Page')

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
@endsection --}}
@extends('layouts.app')

@section('title', $post['title'])

@section('content')
    {{ $post['content'] }}
@endsection