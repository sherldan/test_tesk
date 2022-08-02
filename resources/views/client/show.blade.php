@extends('layouts.main')
@section('content')
    <div>
        <h2>Клиент</h2>

        <div class="row">
            <div class="col-8">
                <div class="border mb-3" style="padding-left: 2ex">
                    <form>
                        <div class="form-group row">
                            <label for="staticName" class="col-sm-2 col-form-label">ФИО:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticName"
                                       value="{{$client->full_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticSex" class="col-sm-2 col-form-label">Пол:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticSex"
                                       value="{{$client->sex}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticPhone" class="col-sm-2 col-form-label">Телефон:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticPhone"
                                       value="{{$client->phone}}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="staticAddress" class="col-sm-2 col-form-label">Адрес:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticAddress"
                                       value="{{$client->address}}">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col">
                <a href="{{route('client.edit', $client->id)}}">Изменить данные о клиенте</a>

                <form action="{{route('client.delete', $client->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить клиента" name="type_del" class="btn btn-outline-danger btn-sm">
                </form>
            </div>
        </div>

    </div>

    <h2>Автомобили</h2>


    @foreach($cars as $car)
        @if($car->client_id == $client->id)
            <div class="border mb-3" style="padding-left: 2ex">
                <form>
                    <div class="form-group row">
                        <label for="staticBrand" class="col-sm-2 col-form-label">Марка автомобиля:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticBrand"
                                   value="{{$car->brand}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticModel" class="col-sm-2 col-form-label">Модель автомобиля:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticModel"
                                   value="{{$car->model}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticColor" class="col-sm-2 col-form-label">Цвет автомобиля:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticColor"
                                   value="{{$car->color}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="staticRegistrationNumber" class="col-sm-2 col-form-label">Регистрационный номер
                            автомобиля:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticRegistrationNumber"
                                   value="{{$car->registration_number}}">
                        </div>
                    </div>
                    <a href="{{route('client.edit', $car->id)}}" class="btn btn-outline-primary btn-sm mb-3">Изменить
                        данные</a>

                    <form action="{{route('client.delete', $car->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить автомобиль" name="type_del"
                               class="btn btn-outline-danger btn-sm mb-3">
                    </form>
                </form>
            </div>

        @endif

    @endforeach

    <h3>Добавить автомобиль</h3>
    <div class="row">
        <div class="col-6">
            <div class="border mb-3" style="padding-left: 2ex; padding-right: 2ex">
                <form action="{{route('car.addition') }}" method="post"
                      style="align-items: center;justify-content: center;>">
                    @csrf

                    <div class="form-row">
                        <div class="col-8">
                            <input type="hidden" name="client_id" value="{{$client->id}}">

                            <label for="brand">Бренд автомобиля</label>
                            <input name="brand" type="text" class="form-control mb-3" id="brand"
                                   placeholder="Введите адрес">
                        </div>
                        <div class="col-8">
                            <label for="model">Модель автомобиля</label>
                            <input name="model" type="text" class="form-control mb-3" id="model"
                                   placeholder="Введите model">
                        </div>
                        <div class="col-8">
                            <label for="color">Цвет автомобиля</label>
                            <input name="color" type="text" class="form-control mb-3" id="color"
                                   placeholder="Введите color">
                        </div>
                        <div class="col-8">
                            <label for="registration_number">Регистрационный номер автомобиля</label>
                            <input name="registration_number" type="registration_number" class="form-control mb-3"
                                   id="registration_number" placeholder="Введите registration_number">
                        </div>

                        <div class="col-8">
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-3">Добавить автомобиль
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div><a href="{{route('client.index')}}">
            <button type="button" class="btn btn-info mb-3">Назад</button>
        </a></div>

@endsection
