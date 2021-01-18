@extends('layouts.templataa')
@section('content')
        <div class="blog_details">
            @forelse($newsList as $new)
                    <div class="trand-right-cap">
                        <h4><a href="/news/{{ $cat_id }}/{{ $new->id }}">{{ $new->title }}</a></h4>
                        <p>{{ $new->description}}</p>
                        <p><strong>Автор:&nbsp;{{ $new->author}} &nbsp;&nbsp;&nbsp;</strong>
                            <i>Обновлено:&nbsp;{{ $new->updated_at->format('d-m-Y H:i')}}</i></p>
                    </div>
                    <hr>
            @empty
            <h4>Новостей нет</h4>
            @endforelse
            {{ $newsList->links() }}
        </div>
@endsection
