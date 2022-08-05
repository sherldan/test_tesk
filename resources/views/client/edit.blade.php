@extends('layouts.main')
@section('content')
    <div>
        <h3>Редактировать данные клиента:</h3>
        <form action="{{route('client.update', $client->id) }}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="full_name">ФИО клиента</label>
                <input name="full_name" type="text" class="form-control" id="full_name"
                       placeholder="Введите фамилию, имя и отчество" value="{{$client->full_name}}">

                @error('full_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Телефон клиента</label>
                <input type="text" name="phone" class="form-control mb-3" id="phone" placeholder="Введите телефон"
                       value="{{$client->phone}}">

                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <div class="form-group">
                <label for="sex">Выберите пол</label>
                <select class="form-control" id="sex" name="sex">
                    <option value="муж.">Мужчина</option>
                    <option value="жен.">Женщина</option>
                </select>
            </div>

            @error('sex')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
                <label for="address">Адрес клиента</label>
                <input name="address" type="address" class="form-control" id="address" placeholder="Введите адрес"
                       value="{{$client->address}}">

                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>


            <button type="submit" class="btn btn-primary">Применить изменения</button>
        </form>


    </div>
@endsection
