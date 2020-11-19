@extends('layouts.templataa')
@section('content')
<div class="trand-right-cap">
    <h4> {{ $checkedNew->title }} </h4>
    <p>{{ $checkedNew->description}}</p>
    <p><strong>Автор:{{ $checkedNew->author}}</strong> <i>Обновлено: {{ $checkedNew->updated_at}}</i></p>
</div>
@endsection
