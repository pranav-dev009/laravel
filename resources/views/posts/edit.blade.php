@extends('layouts.app')
@section('title', 'Update the Post')
@section('content')
<form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('PUT')
    @include('posts.partials.form')
    <input type="submit" value="Update">
</form>
@endsection