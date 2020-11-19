@extends('layouts.templataa')
@section('content')
<div class="col-8 offset-2">
    <h1>Добавить новость</h1><br>
    <form method="post" action="{{ route('admin/news/store/') }}" enctype="multipart/form-data">
        @csrf
        <div><p>Название новости<input class="form-control" name="title" value="{{ old('title') }}"></p>
            @error('title')
            <div class="alert alert-danger">
            @foreach($errors->get('title') as $error)
            <p>{{ $error }} </p>
            @endforeach
            </div>
            @enderror
        </div>
        <div><p>Содержание новости<input class="form-control" name="newContent" type="textarea" value="{{ old('newContent') }}"></p>
            @error('newContent')
            <div class="alert alert-danger">
            @foreach($errors->get('newContent') as $error)
            <p>{{ $error }} </p>
            @endforeach
            </div>
            @enderror
        </div>
        <div><p>Автор<input class="form-control" name="author" type="text" value="{{ old('name') }}"></p>
            @error('author')
            <div class="alert alert-danger">
            @foreach($errors->get('author') as $error)
            <p>{{ $error }} </p>
            @endforeach
            </div>
            @enderror
        </div>
        <input type='submit' value="Опубликовать"><br><br>
    </form>

</div>

@endsection
