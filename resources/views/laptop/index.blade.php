@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a  href="{{ url('home') }}">Главная</a> / БУ ноутбуки </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("h3").hover(function(){
                                $(this).css("background-color", "yellow");
                            }, function(){
                                $(this).css("background-color", "white");
                            });
                        });
                    </script>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        <!-- Navigation -->

                        <!-- Page Content -->
                        <div class="container">




                            <!-- Jumbotron Header -->
                        @foreach($laptop as $laptops)
                            <!-- Page Features -->
                                <div class="row text-left">

                                    <img class="card-img-top-left" src="http://placehold.it/500x325" alt="">
                                    <br>
                                    <div class="card-body">

                                        <h4 class="card-title">Ноутбук {{$laptops->status_id }}
                                            {{$laptops->brand_id }}
                                            {{$laptops->matrix_type_id }}
                                            {{ $laptops->cpu_processor_id }}
                                            {{ $laptops->diagonal_id }}
                                            <br>
                                            {{ $laptops->cpu_processor_id }} /
                                            {{$laptops->ram_id }} /
                                            {{$laptops->matrix_type_id }}
                                            <br> <h3>Цена: {{$laptops->price}} грн</h3>
                                            <br>


                                            <button type="submit" class="btn btn-secondary btn-lg">В РАССРОЧКУ</button>
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                                КУПИТЬ В ОДИН КЛИК
                                            </button>

                                            <!-- Модальное окно -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>--}}
                                                            <h4 class="modal-title" id="myModalLabel">Купить в один клик</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="col-md-12">
                                                                <div class="form">

                                                                    <label  for="exampleInputEmail1">Имя</label>
                                                                    <input type="name" class="form-control"  placeholder="Имя">
                                                                    <small class="form-text text-muted"></small>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1"> Телефон</label>
                                                                    <input type="phone" class="form-control"  value="+380">
                                                                </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                                            <button type="button" class="btn btn-primary">Отправить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </h4>

                                    </div>
                                </div>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-outline-success">Описание</a>
                                        <a href="#" class="btn btn-outline-warning">Конфигуратор</a>
                                        <a href="#" class="btn btn-outline-info">Отзывы</a>
                                                <h4 class="card-title"></h4>
                                                <p class="text-left">
                                                        Бренд:    {{$laptops->brand_id }}
                                                    <br> Цена: {{$laptops->price}}
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
                                                </p>
                                    @endforeach
                                </div>
                        </div>
                        <br>




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
