@extends('layouts.app')

@section('title', 'Persons Information')

@section('content')
    @for ($i = 0; $i < 10; $i++)
        <div>The current value is {{ $i }}</div>
    @endfor

    @forelse ($posts as $key => $post)
       @include('posts.partials.post')
        @empty
        No Posts Found
    @endforelse
@endsection