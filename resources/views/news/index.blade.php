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
            @forelse($news as $new)
                    <div class="trand-right-cap">
                        <h4><a href="/news/{{ $new->id }}">{{ $new->title }}</a></h4>
                        <p>{{ $new->description}}</p>
                        <p><strong>Автор:&nbsp;{{ $new->author}} &nbsp;&nbsp;&nbsp;</strong>
                            <i>Обновлено:&nbsp;{{ $new->updated_at->format('d-m-Y H:i')}}</i></p>
                    </div>
                    <hr>
            @empty
            <h4>Новостей нет</h4>
            @endforelse
            {{ $news->links() }}
        </div>
@endsection
