@if ($loop->odd)
<div>{{ $key }}.{{ $post['name'] }}</div>
@else
<div style="background-color: blue">{{ $key }}.{{ $post['name'] }}</div>
@endif