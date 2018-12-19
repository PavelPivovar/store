@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a  href="{{ url('home') }}">Главная</a> / БУ ноутбуки </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <body>

                            <!-- Navigation -->

                            <!-- Page Content -->
                            <div class="container">

                                <!-- Jumbotron Header -->
                            @foreach($laptop as $laptops)
                                <!-- Page Features -->
                                <div class="row text-center">

                                    <div class="col-lg-3 col-md-3 mb-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$laptops->brand_id }}</h4>
                                                <p class="card-text">
                                                    Бренд: {{$laptops->brand_id }}
                                                    Состояние: {{$laptops->status_id }}
                                                    Диагональ: {{ $laptops->diagonal_id }}
                                                    Разшерение Экрана: {{ $laptops->screen_resolution_id }}
                                                    Поколение Процессора: {{ $laptops->cpu_processor_id }}
                                                    Оперативная Память: {{$laptops->ram_id }}
                                                    Объем накопителя: {{$laptops->matrix_type_id }}
                                                    Тип матрицы: {{$laptops->matrix_type_id }}
                                                    Класс: {{$laptops->class_id }}
                                                    Вес: {{$laptops->weight_id }}
                                                <br>Цена: {{$laptops->price}}
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{ route('laptop') }}" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 mb-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$laptops->brand_id }}</h4>
                                                <p class="card-text">
                                                    Бренд: {{$laptops->brand_id }}
                                                    Состояние: {{$laptops->status_id }}
                                                    Диагональ: {{ $laptops->diagonal_id }}
                                                    Разшерение Экрана: {{ $laptops->screen_resolution_id }}
                                                    Поколение Процессора: {{ $laptops->cpu_processor_id }}
                                                    Оперативная Память: {{$laptops->ram_id }}
                                                    Объем накопителя: {{$laptops->matrix_type_id }}
                                                    Тип матрицы: {{$laptops->matrix_type_id }}
                                                    Класс: {{$laptops->class_id }}
                                                    Вес: {{$laptops->weight_id }}
                                                    <br>Цена: {{$laptops->price}}
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 mb-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$laptops->brand_id }}</h4>
                                                <p class="card-text">
                                                    Бренд: {{$laptops->brand_id }}
                                                    Состояние: {{$laptops->status_id }}
                                                    Диагональ: {{ $laptops->diagonal_id }}
                                                    Разшерение Экрана: {{ $laptops->screen_resolution_id }}
                                                    Поколение Процессора: {{ $laptops->cpu_processor_id }}
                                                    Оперативная Память: {{$laptops->ram_id }}
                                                    Объем накопителя: {{$laptops->matrix_type_id }}
                                                    Тип матрицы: {{$laptops->matrix_type_id }}
                                                    Класс: {{$laptops->class_id }}
                                                    Вес: {{$laptops->weight_id }}
                                                    <br>Цена: {{$laptops->price}}
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 mb-4">
                                        <div class="card">
                                            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                                            <div class="card-body">
                                                <h4 class="card-title">{{$laptops->brand_id }}</h4>
                                                <p class="card-text">
                                                    Бренд: {{$laptops->brand_id }}
                                                    Состояние: {{$laptops->status_id }}
                                                    Диагональ: {{ $laptops->diagonal_id }}
                                                    Разшерение Экрана: {{ $laptops->screen_resolution_id }}
                                                    Поколение Процессора: {{ $laptops->cpu_processor_id }}
                                                    Оперативная Память: {{$laptops->ram_id }}
                                                    Объем накопителя: {{$laptops->matrix_type_id }}
                                                    Тип матрицы: {{$laptops->matrix_type_id }}
                                                    Класс: {{$laptops->class_id }}
                                                    Вес: {{$laptops->weight_id }}
                                                    <br>Цена: {{$laptops->price}}
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach
                            </div>
                            <!-- /.container -->

                            <!-- Footer -->



                            </div>
                        </body>

                           {{-- @foreach($laptop as $laptops)
                                <hr>
                                Цена: {{$laptops->price}}
                                <br>Картинка: {{$laptops->image}}
                                <br>Бренд: {{$laptops->brand_id }}
                                <br>Состояние: {{$laptops->status_id }}
                                <br>Диагональ: {{ $laptops->diagonal_id }}
                                <br>Разшерение Экрана: {{ $laptops->screen_resolution_id }}
                                <br>Поколение Процессора: {{ $laptops->cpu_processor_id }}
                                <br>Оперативная Память: {{$laptops->ram_id }}
                                <br>Объем накопителя: {{$laptops->matrix_type_id }}
                                <br>Тип матрицы: {{$laptops->matrix_type_id }}
                                <br>Класс: {{$laptops->class_id }}
                                <br>Вес: {{$laptops->weight_id }}
                                --}}{{--<form action="{{ route('work.destroy',$works->id) }}" method="POST">
                                    <br><a class="btn btn-primary" href="{{ route('work.edit',$works->id) }}">Изменить</a>
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Вы уверенны ?')" type="submit" class="btn btn-danger">Удалить</button>
                                    <i class="fa fa-remove"></i>
                                </form>--}}{{--
                            @endforeach--}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
