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
            </div>
            <div class="form-group">
                <label for="phone">Телефон клиента</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Введите телефон"
                       value="{{$client->phone}}">
            </div>
            <select class="form-select" name="sex">
                <option selected>Выберите пол</option>
                <option value="муж.">муж.</option>
                <option value="жен.">жен.</option>
            </select>
            <div class="form-group">
                <label for="address">Адрес клиента</label>
                <input name="address" type="address" class="form-control" id="address" placeholder="Введите адрес"
                       value="{{$client->address}}">
            </div>


            <button type="submit" class="btn btn-primary">Применить изменения</button>
        </form>


    </div>
@endsection
