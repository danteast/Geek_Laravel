@extends('layouts.templataa')
@section('content')
<h2 style="width:100%; text-align:center;">Выберите интересующую Вас категорию новостей</h2>
    <div class="blog_details" style="display:flex; flex-flow: row nowrap; justify-content:space-around;">
        @forelse($categories as $category)
                <div class="trand-right-cap" >
                       <h4 style="width:100%; text-align:center"><a href="/categories/{{ $category->id }}">
                        {{ $category->title }}</a></h4>
                       <p style="width:100%; text-align:center">{{ $category->description }}</p>
                </div>
        @empty
        <h4>Новостей нет</h4>
     @endforelse
</div>
{{-- <div class="blog_details" style="display:flex; flex-flow: row nowrap; justify-content:space-around;">
    {{ $categories->links() }}</div> --}}

@endsection
