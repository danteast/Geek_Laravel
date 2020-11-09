@extends('layouts.templataa')
@section('content')
<h2>Выберите интересующую Вас категорию новостей</h2>
    <div class="col-lg-4">
        @forelse($newsArr as $newsCat)
       
                <div class="trand-right-cap">                               
                       <h4><a href="/news/{{ $newsCat['cat_id'] }}">{{ $newsCat['cat_title'] }}</a></h4>
                </div>

    
        @empty
        <h4>Новостей нет</h4>       
     @endforelse
</div>
@endsection