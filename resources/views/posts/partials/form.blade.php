<input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}">
@error('title')
    <div>{{ $message }}</div>
@enderror
<textarea name="content" value="{{ old('content', optional($post ?? null)->content) }}"></textarea>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif