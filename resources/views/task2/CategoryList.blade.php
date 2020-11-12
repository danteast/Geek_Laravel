@extends('layouts.templataa')
@section('content')
<h2>Выберите интересующую Вас категорию новостей</h2>
    <div class="blog_details">
        @forelse($categoryList as $category)
                <div class="trand-right-cap">
                       <h4><a href="/news/{{ $category->id }}"> {{ $category->title }}</a></h4>
                       <p>{{ $category->description }}</p>
                </div>
        @empty
        <h4>Новостей нет</h4>
     @endforelse
</div>
@endsection
