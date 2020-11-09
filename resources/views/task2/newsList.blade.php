@extends('layouts.templataa')
@section('content')

    {{-- <h2>Выберите интересующую Вас новость в категории {{ $checkedCat['cat_title'] }}</h2>
        <div class="col-lg-4">
            @forelse($checkedCat['cat_news'] as $new)
                    <div class="trand-right-cap">
                        <h4><a href="/news/{{ $checkedCat['cat_id'] }}/{{ $new['new_id'] }}">{{ $new['new_title'] }}</a></h4>
                    </div>
            @empty
            <h4>Новостей нет</h4>
            @endforelse
        </div> --}}

        <div class="blog_details">
            @forelse($checkedCat as $new)
                    <div class="trand-right-cap">
                        <h4><a href="/news/{{ $new->id }}">{{ $new->title }}</a></h4>
                        <p>{{ $new->description}}</p>
                        <p><strong>Автор:{{ $new->author}}</strong> <i>Обновлено: {{ $new->updated_at}}</i></p>
                    </div>
                    <hr>
            @empty
            <h4>Новостей нет</h4>
            @endforelse
        </div> --}}
@endsection
