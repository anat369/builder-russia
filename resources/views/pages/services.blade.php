@extends('layout')

@section('title', $organization->meta_title)
@section('meta_description', $organization->meta_description)
@section('meta_keywords', $organization->meta_keyword)
@section('image', $organization->getLogo())

@section('content')
    @include('pages.header')

    <section class="internal">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <h3>Наши услуги</h3>
                    <div class="internal__wrap-list">
                        <button class="button internal-btn-list">Посмотреть</button>
                        <ul>
                            @foreach($services as $service)
                            <li>
                                <div class="row internal__wrap-block">

                                    <div class="col-xs-11 col-xs-offset-1">
                                        <div class="internal__wrap-block-text">
                                            <a href="/service/{{$service->slug}}">{{$service->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- /.content-page__wrap-list -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="internal__wrap-content  wow fadeInRight">
                        <h2>Основная страница услуг</h2>
                        <p>Здесь будет общий продающий текст с описанием различных услуг, преимуществ заказа услуг у нашей компании</p>

                        <h3>Поделиться в социальных сетях:</h3>
                        <div class="social-likes" data-counters="no" data-url="{{\Illuminate\Support\Facades\URL::current()}}">
                            <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                            <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                            <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
                        </div>

                        <h2>Галерея изображений (фотографии сделанных работ)</h2>
                        <div class="row  wow fadeInUp">
                            <div class="col-md-6">
                                <div class="internal__wrap-content-img">
                                    <a class="fancybox" href="img/page/img-1.jpg"><img src="img/page/img-1.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="internal__wrap-content-img internal__wrap-content-img-2">
                                    <a class="fancybox"  href="img/page/img-2.jpg"><img src="img/page/img-2.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>

                        <!-- /.internal__wrap-content-bot-list -->
                    </div>
                    <!-- /.internal__wrap-content -->
                </div>
                <!-- /.col-md-8 -->
            </div>
        </div>
    </section>
    <!-- /.content-page -->

    @include('pages.order-form')

    <!-- /.servisec -->

@endsection