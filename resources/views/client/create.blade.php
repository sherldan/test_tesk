@extends('layouts.main')
@section('content')
    <div>
        <h3>Регистрация нового клиента:</h3>
        <form action="{{route('client.store') }}" method="post" style="align-items: center;justify-content: center;>">
            @csrf

            <div class="form-row">
                <div class="col-7">
                    <label for="phone">Телефон клиента</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Введите телефон" value="{{ old('phone') }}">

                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                </div>
                <div class="col-7">
                    <label for="full_name">ФИО клиента</label>
                    <input name="full_name" type="text" minlength="3" class="form-control" id="full_name"
                           placeholder="Введите фамилию, имя и отчество" value="{{ old('full_name') }}">
                </div>

                @error('full_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="sex">Выберите пол</label>
                    <select class="form-control" id="sex" name="sex">
                        <option value="муж.">Мужчина</option>
                        <option value="жен.">Женщина</option>
                    </select>
                </div>

                @error('sex')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="address">Адрес клиента</label>
                    <input name="address" type="text" class="form-control" id="address" placeholder="Введите адрес" value="{{ old('address') }}">
                </div>

                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="brand">Бренд автомобиля</label>
                    <input name="brand" type="text" class="form-control" id="brand" placeholder="Введите адрес" value="{{ old('brand') }}">
                </div>

                @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="model">Модель автомобиля</label>
                    <input name="model" type="text" class="form-control" id="model" placeholder="Введите модель автомобиля" value="{{ old('model') }}">
                </div>

                @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="color">Цвет автомобиля</label>
                    <input name="color" type="text" class="form-control" id="color" placeholder="Введите цвет автомобиля" value="{{ old('color') }}">
                </div>

                @error('color')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="col-7">
                    <label for="registration_number">Регистрационный номер автомобиля</label>
                    <input name="registration_number" type="registration_number" class="form-control"
                           id="registration_number" placeholder="Введите регистрационный номер авто" value="{{ old('registration_number') }}">
                </div>

                @error('registration_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div id="client_helper" class="form-text mb-3">
                    Если у клиента зарегистрировано больше одного автомобиля, добавьте их на странице "Редактировать".
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </div>
        </form>
    </div>
@endsection
