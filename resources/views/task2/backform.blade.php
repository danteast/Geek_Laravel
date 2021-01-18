@extends('layouts.templataa')
@section('content')
<div class="col-8 offset-2">
    <h3>Заполните форму обратной связи</h3>
    <form method="post" action="#">
        <p>Ваше имя<input class="form-control" name="FIO" value="{{ old('name') }}"></p><br>
        <p>Ваш Email<input class="form-control" name="email" type="email" value="{{ old('email') }}"></p><br>
        <p>Ваш телефон<input class="form-control" name="telnumber" type="phone" value="{{ old('email') }}"></p><br>
        <input type='submit' value="Отправить"><br><br>

    </form>

</div>    
       
@endsection