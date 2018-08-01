@extends('layout')

@section('title', $organization->meta_title)
@section('meta_description', $organization->meta_description)
@section('meta_keywords', $organization->meta_keyword)
@section('image', $organization->getLogo())

@section('content')

    @include('pages.header')

    <div class="services" id="services">
        <div class="container services-container">
            <div class="services__main-wrap">
                <h2 class="title">Наши услуги</h2>
                <div class="row">

                    @foreach($services as $service)
                        <div class="col-md-4 col-sm-6 wow fadeInLeft">
                            <div class="services__wrap">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="services__wrap-img services__wrap-img-4"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <p>{{$service->title}}</p>
                                    </div>
                                </div>
                                <div class="services__wrap-hover">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class=" services__wrap-hover-img services__wrap-hover-img-4"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p>{{$service->title}}</p>
                                            <form action="/service/{{$service->slug}}">
                                                <button class="header__open-modal services-btn ">Подробнее</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.services__wrap-hover -->
                            </div>
                        </div>
                    @endforeach
                    <!-- конец -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.services -->

    <section class="company" id="company">
        <div class="row">
            <div class="col-md-6 wrap-company">
                <div class="company__wrap-img">
                    <img src="img/photo/im20.jpg" alt="О компании">
                </div>
            </div>

            <div class="col-md-6">
                <div class="company__wrap-text">
                    {!! $organization->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- /.company -->
    <!-- /.news -->
    <section class="works">
        <div class="works-slider">
            <div class="works-slider-box works-slider-box-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-lg-offset-3 col-md-11 col-md-offset-1 wow fadeInRight">
                            <h2>Заголовок <br> какой-то популярной услуги</h2>
                        </div>
                        <!-- /.col-md-8 col-md-offset-4 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-10 col-md-3 col-md-offset-9 col-sm-6 col-sm-offset-6">
                            <button class="button btn-works application-btn">Оставить заявку</button>
                        </div>
                        <!-- /.col-md-2 col-md-offset-10 -->
                    </div>
                </div>
            </div>
            <!-- 2й слайд -->
            <div class="works-slider-box works-slider-box-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-lg-offset-3 col-md-11 col-md-offset-1 wow fadeInRight">
                            <h2>Реклама<br> какой-то услуги</h2>
                        </div>
                        <!-- /.col-md-8 col-md-offset-4 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-10 col-md-3 col-md-offset-9 col-sm-6 col-sm-offset-6">
                            <button class="button btn-works application-btn">Оставить заявку</button>
                        </div>
                        <!-- /.col-md-2 col-md-offset-10 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.works -->

@endsection